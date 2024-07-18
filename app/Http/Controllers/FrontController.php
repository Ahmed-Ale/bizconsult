<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        return view('front.index');
    }

    public function about()
    {
        return view('front.about');
    }

    public function service()
    {
        return view('front.service');
    }

    public function contact()
    {
        return view('front.contact');
    }
}
