<?php

namespace App\Dashboards\Roles;

use Livewire\Component;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Str;
use Livewire\Attributes\On;

class RoleForm extends Component
{
    public $role;
    public $name;
    public $key;
    public $color;
    public $selectedPermissions = [];
    public $allPermissions = [];

    protected function rules()
    {
        $rules = [
            'name' => 'required|string|max:255',
            'key' => 'required|string|max:255|unique:roles,key',
            'color' => 'nullable|string|max:255',
            'selectedPermissions' => 'array',
            'selectedPermissions.*' => 'exists:permissions,id',
        ];

        if ($this->role && $this->role->exists) {
            $rules['key'] = 'required|string|max:255|unique:roles,key,' . $this->role->id;
        }

        return $rules;
    }

    public function mount(Role $role = null)
    {
        $this->role = $role;
        $this->allPermissions = Permission::all();

        if ($this->role && $this->role->exists) {
            $this->name = $this->role->name;
            $this->key = $this->role->key;
            $this->color = $this->role->color;
            $this->selectedPermissions = $this->role->permission->pluck('id')->toArray();
        }
    }

    public function save()
    {
        $this->validate();

        $data = [
            'key' => Str::slug($this->key),
            'color' => $this->color,
            'name' => $this->name,
        ];

        if ($this->role && $this->role->exists) {
            $this->role->update($data);
            $this->role->permission()->sync($this->selectedPermissions);
            session()->flash('message', 'Role updated successfully.');
        } else {
            $role = Role::create($data);
            $role->permission()->sync($this->selectedPermissions);
            session()->flash('message', 'Role created successfully.');
        }

        $this->dispatch('role-saved');
        $this->dispatch('close-modal');
    }

    #[On('reset-form')]
    public function resetForm()
    {
        $this->reset();
    }

    public function render()
    {
        return view('dashboards.roles.role-form');
    }
}
