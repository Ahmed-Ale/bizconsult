<?php

namespace App\View\Components;

use App\Models\Service;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Services extends Component
{
    public $services;
    public $delays;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->services = Service::all();
        $this->delays = [0.1, 0.3, 0.6];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.services');
    }
}
