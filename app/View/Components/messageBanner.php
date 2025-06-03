<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class messageBanner extends Component
{
    public $msg;
    public $class;
    /**
     * Create a new component instance.
     */
    public function __construct($msg,$class)
    {
        //
        $this->msg = $msg;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.message-banner');
    }
}
