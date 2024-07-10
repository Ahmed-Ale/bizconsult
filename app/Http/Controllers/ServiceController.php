<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::paginate(config('pagination.per_page'));
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        Service::create($request->validated());
        return to_route('admin.services.index')->with('success', __('keywords.service_created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $validated = $request->validated();
        $service->update($validated);
        return to_route('admin.services.index')->with('success', __('keywords.service_updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return to_route('admin.services.index')->with('success', __('keywords.service_deleted'));
    }
}
