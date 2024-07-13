@extends('admin.master')

@section('title', __('keywords.edit_company'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.add_new_company') }}</h2>
                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.companies.update', $company) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <label for="image">{{ __('keywords.image') }}</label>
                                    <input id="image" type="file" name="image" class="form-control-file"
                                        value="{{ $company->image }}">
                                    <x-validation-error field="image"></x-validation-error>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">{{ __('keywords.update') }}</button>
                        </form>
                    </div>
                </div>
                <!-- simple table -->
            </div>
        </div>
    </div>
@endsection
