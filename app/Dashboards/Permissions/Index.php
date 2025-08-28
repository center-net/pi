<?php

namespace App\Dashboards\Permissions;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Permission;
use Livewire\Attributes\On;

class Index extends Component
{
    use WithPagination;

    public $search;
    public $selectedPermission;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function edit(Permission $permission)
    {
        $this->selectedPermission = $permission;
        $this->dispatch('open-modal', 'editPermissionModal');
    }

    public function delete(Permission $permission)
    {
        $permission->translations()->delete();
        $permission->delete();
        session()->flash('message', 'Permission deleted successfully.');
    }

    #[On('permission-saved')]
    public function refreshPermissions()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('dashboards.permissions.index',
        ['permissions' => Permission::whereHas('translations', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->orWhere('key', 'like', '%' . $this->search . '%')
        ->paginate(10)]);
    }
}
