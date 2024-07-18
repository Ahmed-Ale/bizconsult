<?php

namespace App\View\Components;

use App\Models\testimonial;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Testimonials extends Component
{
    public $testimonials;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->testimonials = testimonial::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.testimonials');
    }
}
