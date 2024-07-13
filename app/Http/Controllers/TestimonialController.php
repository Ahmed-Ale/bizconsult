<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdaTetestimonialRequest;
use App\Helpers\ImageHelper;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(config('pagination.per_page'));
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimonialRequest $request)
    {
        $data = $request->validated();

        $image = $request->image;
        $imageName = ImageHelper::storeImage($image, 'testimonials');
        $data['image'] = $imageName;
        testimonial::create($data);


        return to_route('admin.testimonials.index')->with('success', __('keywords.testimonial_created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, testimonial $testimonial)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            Storage::delete("public/testimonials/$testimonial->image");
            $image = $request->image;
            $imageName = ImageHelper::storeImage($image, 'testimonials');
            $data['image'] = $imageName;
        }

        $testimonial->update($data);
        return to_route('admin.testimonials.index')->with('success', __('keywords.testimonial_updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        Storage::delete("public/testimonials/$testimonial->image");
        $testimonial->delete();
        return to_route('admin.testimonials.index')->with('success', __('keywords.testimonial_deleted'));
    }
}
