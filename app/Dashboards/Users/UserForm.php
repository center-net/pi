<?php

namespace App\Dashboards\Users;

use Livewire\Component;
use App\Models\User;
use App\Models\Role;
use App\Models\Country;
use App\Models\City;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\On;

class UserForm extends Component
{
    public $user;
    public $name;
    public $email;
    public $mobile;
    public $password;
    public $username;
    public $role_id;
    public $country_id;
    public $city_id;
    public $address;

    public $countries = [];
    public $cities = [];
    public $roles = [];

    protected function rules()
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|string|max:255|unique:users,mobile',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'nullable|string|min:8',
            'role_id' => 'required|exists:roles,id',
            'country_id' => 'nullable|exists:countries,id',
            'city_id' => 'nullable|exists:cities,id',
            'address' => 'nullable|string|max:255',
        ];

        if ($this->user && $this->user->exists) {
            $rules['email'] = 'required|email|unique:users,email,' . $this->user->id;
            $rules['mobile'] = 'required|string|max:255|unique:users,mobile,' . $this->user->id;
            $rules['username'] = 'required|string|max:255|unique:users,username,' . $this->user->id;
        }

        return $rules;
    }

    public function mount(User $user = null)
    {
        $this->user = $user;

        if ($this->user && $this->user->exists) { // Check if user exists and is not null
            $this->name = $this->user->name;
            $this->email = $this->user->email;
            $this->mobile = $this->user->mobile;
            $this->username = $this->user->username;
            $this->role_id = $this->user->role_id;
            $this->country_id = $this->user->country_id;
            $this->city_id = $this->user->city_id;
            $this->address = $this->user->address;
        }

        $this->countries = Country::all();
        $this->roles = Role::all();

        if ($this->country_id) {
            $this->cities = City::where('country_id', $this->country_id)->get();
        }
    }

    public function updatedCountryId($value)
    {
        $this->cities = City::where('country_id', $value)->get();
        $this->city_id = null; // Reset city when country changes
    }

    public function save()
    {
        $this->validate();

        $data = [
            'email' => $this->email,
            'mobile' => $this->mobile,
            'username' => $this->username,
            'role_id' => $this->role_id,
            'country_id' => $this->country_id,
            'city_id' => $this->city_id,
            'name' => $this->name,
            'address' => $this->address,
        ];

        if ($this->password) {
            $data['password'] = Hash::make($this->password);
        }

        if ($this->user && $this->user->exists) { // Check if user exists and is not null
            $this->user->update($data);
            session()->flash('message', 'User updated successfully.');
        } else {
            $data['referrer_id'] = auth()->user()->id;
            User::create($data);
            session()->flash('message', 'User created successfully.');
        }

        $this->dispatch('user-saved');
        $this->dispatch('close-modal'); // Assuming you have a close-modal event
    }

    #[On('reset-form')]
    public function resetForm()
    {
        $this->reset();
    }

    public function render()
    {
        return view('dashboards.users.user-form');
    }
}
