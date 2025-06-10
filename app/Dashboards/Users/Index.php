<?php

namespace App\Dashboards\Users;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class Index extends Component
{
    use WithPagination;

    public $search, $country;
    // public $u;

    // public function mount()
    // {
    //     $username = request('u'); // جلب قيمة u من الرابط
    //     $this->u = User::where('username', $username)->first();
    // }


    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('dashboards.users.index',
        ['users' => User::Where('email', 'like', '%' . $this->search . '%')
            ->orWhere('mobile', 'like', '%' . $this->search . '%')
            ->when($this->country, function ($query) {
                return $query->whereHas('country', function ($q) {
                    $q->where('id', $this->country);
                });
            })
        ->paginate(10)]);
    }
}
