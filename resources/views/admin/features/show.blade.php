@extends('admin.master')

@section('title', __('keywords.show_feature'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.show_feature') }}</h2>
                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="title">{{ __('keywords.title') }}</label>
                                <input id="title" type="text" name="title" class="form-control" readonly
                                    value="{{ $feature->title }}">
                            </div>
                            <div class="col-md-5">
                                <label for="icon">{{ __('keywords.icon') }}</label>
                                <input id="icon" type="text" name="icon" class="form-control" readonly
                                    value="{{ $feature->icon }}">
                            </div>
                            <div class="col-md-1 mt-4">
                                <i class="{{ $feature->icon }} fa-2x"></i>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="description">{{ __('keywords.description') }}</label>
                                <textarea id="description" name="description" class="form-control" readonly>{{ $feature->description }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- simple table -->
            </div>
        </div>
    </div>
@endsection
