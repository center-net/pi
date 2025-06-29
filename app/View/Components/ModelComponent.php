<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModelComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $model,
        public string $title,
        public string $submitName,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.model-component');
    }
}
