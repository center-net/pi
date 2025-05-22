<?php

namespace App\Dashboards\Permissions;

use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;

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
        return view('dashboards.permissions.index', ['roles' => Role::where('name', 'like', '%' . $this->search . '%')->paginate(10)]);
    }
}
