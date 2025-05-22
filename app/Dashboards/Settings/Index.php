<?php

namespace App\Dashboards\Settings;

use Livewire\Component;
use App\Models\Setting;

class Index extends Component
{
    public $settings;

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
            'settings.logo' => 'nullable|url',
            'settings.icon' => 'nullable|url',
        ];
    }

    public function submit()
    {
        $this->validate();
        $this->settings->save();
        session()->flash('message', 'Settings Updated Successfully');
    }

    public function render()
    {
        return view('dashboards.settings.index');
    }
}
