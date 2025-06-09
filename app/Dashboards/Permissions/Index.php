<?php

namespace App\Dashboards\Permissions;

use App\Models\Permission;
use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $roles;
    public $selectedRoleId = null;
    public $rolePermissions = [];
    public $allPermissions;

    public $newPermissionId = null; // لإضافة صلاحية جديدة للدور

    public function mount()
    {
        $this->roles = Role::all();
        $this->allPermissions = Permission::all();
    }

    public function updatedSelectedRoleId($roleId)
    {
        $this->loadRolePermissions($roleId);
    }

    public function loadRolePermissions($roleId)
    {
        $role = Role::find($roleId);
        if ($role) {
            $this->rolePermissions = $role->permission->pluck('id')->toArray();
        } else {
            $this->rolePermissions = [];
        }
    }

    public function togglePermission($permissionId)
    {
        $role = Role::find($this->selectedRoleId);
        if (!$role) return;

        if (in_array($permissionId, $this->rolePermissions)) {
            // إزالة صلاحية
            $role->permissions()->detach($permissionId);
            $this->rolePermissions = array_diff($this->rolePermissions, [$permissionId]);
        } else {
            // إضافة صلاحية
            $role->permissions()->attach($permissionId);
            $this->rolePermissions[] = $permissionId;
        }
    }

    public function deletePermissionFromRole($permissionId)
    {
        $role = Role::find($this->selectedRoleId);
        dd($role);
        if (!$role) return;

        $role->permissions()->detach($permissionId);
        $this->rolePermissions = array_diff($this->rolePermissions, [$permissionId]);
    }

    public function render()
    {
        return view('dashboards.permissions.index', [
            'roles' => $this->roles,
            'permissions' => $this->allPermissions,
        ]);
    }
}
