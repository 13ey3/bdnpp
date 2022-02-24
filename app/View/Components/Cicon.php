<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Cicon extends Component
{
    public $iconType;
    public $icons;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($iconType, $icons)
    {
        $this->icons = $icons;
        $this->iconType = $iconType;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cicon');
    }
}
