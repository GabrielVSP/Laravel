<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class test extends Component
{
    /**
     * Create a new component instance.
     */
    private $a;
    public function __construct($a)
    {
        $this->a = $a;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.test');
    }
}
