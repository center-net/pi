<?php

namespace App\Dashboards\MainCategories;

use Livewire\Component;
use App\Models\MainCategory;
use Illuminate\Support\Str;
use Livewire\Attributes\On;

class MainCategoryForm extends Component
{
    public $mainCategory;
    public $name;

    protected function rules()
    {
        $rules = [
            'name' => 'required|string|max:255',
        ];

        return $rules;
    }

    public function mount(MainCategory $mainCategory = null)
    {
        $this->mainCategory = $mainCategory;

        if ($this->mainCategory && $this->mainCategory->exists) {
            $this->name = $this->mainCategory->name;
        }
    }

    public function save()
    {
        $this->validate();

        $data = [
            'name' => $this->name,
        ];

        if ($this->mainCategory && $this->mainCategory->exists) {
            $this->mainCategory->update($data);
            session()->flash('message', 'Main Category updated successfully.');
        } else {
            MainCategory::create($data);
            session()->flash('message', 'Main Category created successfully.');
        }

        $this->dispatch('main-category-saved');
        $this->dispatch('close-modal');
    }

    #[On('reset-form')]
    public function resetForm()
    {
        $this->reset();
    }

    public function render()
    {
        return view('dashboards.main-categories.main-category-form');
    }
}