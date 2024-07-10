@extends('admin.master')

@section('title', __('keywords.add_new_service'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.add_new_service') }}</h2>
                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title">{{ __('keywords.title') }}</label>
                                    <input id="title" type="text" name="title" class="form-control"
                                        placeholder="{{ __('keywords.title') }}">
                                    <x-validation-error field="title"></x-validation-error>
                                </div>
                                <div class="col-md-6">
                                    <label for="icon">{{ __('keywords.icon') }}</label>
                                    <input id="icon" type="text" name="icon" class="form-control"
                                        placeholder="{{ __('keywords.icon') }}">
                                    <x-validation-error field="icon"></x-validation-error>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="description">{{ __('keywords.description') }}</label>
                                    <textarea id="description" name="description" class="form-control" placeholder="{{ __('keywords.description') }}"></textarea>
                                    <x-validation-error field="description"></x-validation-error>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">{{ __('keywords.submit') }}</button>
                        </form>
                    </div>
                </div>
                <!-- simple table -->
            </div>
        </div>
    </div>
@endsection
