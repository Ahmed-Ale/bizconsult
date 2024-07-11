@extends('admin.master')

@section('title', __('keywords.edit_feature'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.add_new_feature') }}</h2>
                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.features.update', $feature) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title">{{ __('keywords.title') }}</label>
                                    <input id="title" type="text" name="title" class="form-control"
                                        value="{{ $feature->title }}">
                                    <x-validation-error field="title"></x-validation-error>
                                </div>

                                <div class="col-md-5">
                                    <label for="icon">{{ __('keywords.icon') }}</label>
                                    <input id="icon" type="text" name="icon" class="form-control"
                                        value="{{ $feature->icon }}">
                                    <x-validation-error field="icon"></x-validation-error>
                                </div>
                                <div class="col-md-1 mt-4">
                                    <i class="{{ $feature->icon }} fa-2x"></i>
                                </div>

                                <div class="col-md-12 mt-3">
                                    <label for="description">{{ __('keywords.description') }}</label>
                                    <textarea id="description" name="description" class="form-control">{{ $feature->description }}</textarea>
                                    <x-validation-error field="description"></x-validation-error>
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
