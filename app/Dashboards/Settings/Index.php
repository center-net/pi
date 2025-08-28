<?php

namespace App\Dashboards\Settings;

use Livewire\Component;
use App\Models\Setting;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{
    use WithFileUploads;
    public $settings, $logo1, $icon1;

    public function mount()
    {
        $this->settings = Setting::getSettings();
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
            'logo1' => 'nullable|image|max:1024',
            'icon1' => 'nullable|image|max:1024',
        ];
    }

    public function submit()
    {
        if (auth()->user()->hasPermission('edit_settings')) {
            $data = $this->validate();

            if ($this->logo1) {
                if ($this->settings->logo) {
                    Storage::disk('public')->delete('admin/settings/' . $this->settings->logo);
                }
                $imageName = 'logo' . '.' . $this->logo1->getClientOriginalExtension();
                $this->logo1->storeAs('admin/settings', $imageName, 'public');
                $data['settings']['logo'] =  $imageName;
            }

            if ($this->icon1) {
                if ($this->settings->icon) {
                    Storage::disk('public')->delete('admin/settings/' . $this->settings->icon);
                }
                $imageName = 'icon' . '.' . $this->icon1->getClientOriginalExtension();
                $this->icon1->storeAs('admin/settings', $imageName, 'public');
                $data['settings']['icon'] =  $imageName;
            }

            $this->settings->update($data['settings']);
            session()->flash('message', 'Settings Updated Successfully');
        }
    }

    public function render()
    {
        return view('dashboards.settings.index');
    }
}
