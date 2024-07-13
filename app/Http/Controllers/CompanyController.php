<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Helpers\ImageHelper;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::paginate(config('pagination.per_page'));
        return view('admin.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        $data = $request->validated();

        $image = $request->image;
        $imageName = ImageHelper::storeImage($image, 'companies');
        $data['image'] = $imageName;
        Company::create($data);
        return to_route('admin.companies.index')->with('success', __('keywords.company_created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view('admin.companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('admin.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $data = $request->validated();

        Storage::delete("public/companies/$company->image");
        $image = $request->image;
        $imageName = ImageHelper::storeImage($image, 'companies');
        $data['image'] = $imageName;

        $company->update($data);
        return to_route('admin.companies.index')->with('success', __('keywords.company_updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        Storage::delete("public/companies/$company->image");
        $company->delete();
        return to_route('admin.companies.index')->with('success', __('keywords.company_deleted'));
    }
}
