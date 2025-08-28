<?php

namespace App\Dashboards\Users;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use Livewire\Attributes\On;

class Index extends Component
{
    use WithPagination;

    public $search, $country;
    public $selectedUser;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function edit(User $user)
    {
        $this->selectedUser = $user;
        $this->dispatch('open-modal', 'editUserModal');
    }

    public function delete(User $user)
    {
        $user->translations()->delete();
        $user->delete();
        session()->flash('message', 'User deleted successfully.');
    }

    #[On('user-saved')]
    public function refreshUsers()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('dashboards.users.index',
        ['users' => User::whereHas('translations', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->orWhere('username', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->orWhere('mobile', 'like', '%' . $this->search . '%')
            ->orWhereHas('country.translations', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->orWhereHas('role.translations', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->when($this->country, function ($query) {
                return $query->whereHas('country', function ($q) {
                    $q->where('id', $this->country);
                });
            })
        ->paginate(10)]);
    }
}