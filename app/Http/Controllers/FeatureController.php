<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Http\Requests\StoreFeatureRequest;
use App\Http\Requests\UpdateFeatureRequest;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = Feature::paginate(config('pagination.per_page'));
        return view('admin.features.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.features.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeatureRequest $request)
    {
        Feature::create($request->validated());
        return to_route('admin.features.index')->with('success', __('keywords.feature_created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Feature $feature)
    {
        return view('admin.features.show', compact('feature'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feature $feature)
    {
        return view('admin.features.edit', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeatureRequest $request, Feature $feature)
    {
        $validated = $request->validated();
        $feature->update($validated);
        return to_route('admin.features.index')->with('success', __('keywords.feature_updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feature $feature)
    {
        $feature->delete();
        return to_route('admin.features.index')->with('success', __('keywords.feature_deleted'));
    }
}
