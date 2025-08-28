<?php

namespace App\Dashboards\Permissions;

use Livewire\Component;
use App\Models\Permission;
use Illuminate\Support\Str;
use Livewire\Attributes\On;

class PermissionForm extends Component
{
    public $permission;
    public $name;
    public $key;

    protected function rules()
    {
        $rules = [
            'name' => 'required|string|max:255',
            'key' => 'required|string|max:255|unique:permissions,key',
        ];

        if ($this->permission && $this->permission->exists) {
            $rules['key'] = 'required|string|max:255|unique:permissions,key,' . $this->permission->id;
        }

        return $rules;
    }

    public function mount(Permission $permission = null)
    {
        $this->permission = $permission;

        if ($this->permission && $this->permission->exists) {
            $this->name = $this->permission->name;
            $this->key = $this->permission->key;
        }
    }

    public function save()
    {
        $this->validate();

        $data = [
            'key' => Str::slug($this->key),
            'name' => $this->name,
        ];

        if ($this->permission && $this->permission->exists) {
            $this->permission->update($data);
            session()->flash('message', 'Permission updated successfully.');
        } else {
            Permission::create($data);
            session()->flash('message', 'Permission created successfully.');
        }

        $this->dispatch('permission-saved');
        $this->dispatch('close-modal');
    }

    #[On('reset-form')]
    public function resetForm()
    {
        $this->reset();
    }

    public function render()
    {
        return view('dashboards.permissions.permission-form');
    }
}
