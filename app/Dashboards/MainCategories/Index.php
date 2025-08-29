<?php

namespace App\Dashboards\MainCategories;

use App\Models\MainCategory;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class Index extends Component
{
    use WithPagination;

    public $search;
    public $selectedMainCategory;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function edit(MainCategory $mainCategory)
    {
        $this->selectedMainCategory = $mainCategory;
        $this->dispatch('open-modal', 'editMainCategoryModal');
    }

    public function delete(MainCategory $mainCategory)
    {
        $mainCategory->translations()->delete();
        $mainCategory->delete();
        session()->flash('message', 'Main Category deleted successfully.');
    }

    #[On('main-category-saved')]
    public function refreshMainCategories()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('dashboards.main-categories.index',
        ['mainCategories' => MainCategory::whereHas('translations', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
        ->paginate(10)]);
    }
}
