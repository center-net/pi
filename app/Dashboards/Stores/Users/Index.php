<?php

namespace App\Dashboards\Stores\Users;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class Index extends Component
{
    use WithPagination;

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function showUser(User $user)
    {
        dd($user->name);
    }

    public function render()
    {
        return view('dashboards.stores.users.index', ['users' => User::where('name', 'like', '%' . $this->search . '%')->paginate(10)]);
    }
}
