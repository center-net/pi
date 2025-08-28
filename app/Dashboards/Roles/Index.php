<?php

namespace App\Dashboards\Roles;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Role;
use Livewire\Attributes\On;

class Index extends Component
{
    use WithPagination;

    public $search;
    public $selectedRole;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function edit(Role $role)
    {
        $this->selectedRole = $role;
        $this->dispatch('open-modal', 'editRoleModal');
    }

    public function delete(Role $role)
    {
        $role->translations()->delete();
        $role->delete();
        session()->flash('message', 'Role deleted successfully.');
    }

    #[On('role-saved')]
    public function refreshRoles()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('dashboards.roles.index',
        ['roles' => Role::whereHas('translations', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->orWhere('key', 'like', '%' . $this->search . '%')
        ->paginate(10)]);
    }
}
