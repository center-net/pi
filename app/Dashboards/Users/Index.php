<?php

namespace App\Dashboards\Users;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class Index extends Component
{
    use WithPagination;

    public $search, $country;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('dashboards.users.index',
        ['users' => User::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->orWhere('mobile', 'like', '%' . $this->search . '%')
            ->orWhereHas('country', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->orWhereHas('role', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->orWhereHas('province', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->when($this->country, function ($query) {
                return $query->whereHas('country', function ($q) {
                    $q->where('id', $this->country);
                });
            })
        ->paginate(10)]);
    }
}
