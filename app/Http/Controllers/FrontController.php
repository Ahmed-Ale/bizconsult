<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        $companies = Company::all();
        return view('front.index', compact('companies'));
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
