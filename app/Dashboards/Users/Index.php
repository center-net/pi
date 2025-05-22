<?php

namespace App\Dashboards\Users;

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

    public function render()
    {
        return view('dashboards.users.index',['users' => User::where('name', 'like', '%' . $this->search . '%')->paginate(10)]);
    }
}
