<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Saar extends Component
{
    /**
     * Create a new component instance.
     */
 public $hming =" "; 
    public function __construct($componentName)

    {
        $this->hming=$componentName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.saar');
    }
}
