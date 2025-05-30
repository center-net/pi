<?php

namespace App\Dashboards\Settings;

use Livewire\Component;
use App\Models\Setting;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;
    public $settings, $logo1, $icon1;

    public function mount()
    {
        $this->settings = Setting::find(1);
    }

    public function rules()
    {
        return [
            'settings.name' => 'required|string',
            'settings.email' => 'required|email',
            'settings.phone' => 'required',
            'settings.address' => 'required',
            'settings.facebook' => 'nullable|url',
            'settings.twitter' => 'nullable|url',
            'settings.linkedin' => 'nullable|url',
            'settings.instagram' => 'nullable|url',
        ];
    }

    public function submit()
    {
        $data = $this->validate(); 
        if ($this->logo1) {
            unlink('uplods/admin/settings/' .$this->settings->logo);
            $imageName = 'logo' . '.' . $this->logo1->getClientOriginalExtension();
            $this->logo1->storeAs('admin/settings/', $imageName, 'public');
            $data['logo'] =  $imageName;
        } else {
            unset($data['logo']);
        }
        if ($this->icon1) {
            unlink('uplods/admin/settings/' .$this->settings->icon);
            $imageName = 'icon' . '.' . $this->icon1->getClientOriginalExtension();
            $this->icon1->storeAs('admin/settings/', $imageName, 'public');
            $data['icon'] =  $imageName;
        } else {
            unset($data['icon']);
        }
        // dd($data['settings.icon']);
        $this->settings->update($data);
        session()->flash('message', 'Settings Updated Successfully');
    }

    public function render()
    {
        return view('dashboards.settings.index');
    }
}
