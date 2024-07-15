@extends('admin.master')

@section('title', __('keywords.edit_testimonial'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.add_new_testimonial') }}</h2>
                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name">{{ __('keywords.name') }}</label>
                                    <input id="name" type="text" name="name" class="form-control"
                                        placeholder="{{ __('keywords.name') }}" value="{{ $testimonial->name }}">
                                    <x-validation-error field="name"></x-validation-error>
                                </div>
                                <div class="col-md-6">
                                    <label for="position">{{ __('keywords.position') }}</label>
                                    <input id="position" type="text" name="position" class="form-control"
                                        placeholder="{{ __('keywords.position') }}" value="{{ $testimonial->position }}">
                                    <x-validation-error field="position"></x-validation-error>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="image">{{ __('keywords.image') }}</label>
                                    <input id="image" type="file" name="image" class="form-control-file"
                                        value="{{ $testimonial->image }}">
                                    <x-validation-error field="image"></x-validation-error>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="description">{{ __('keywords.description') }}</label>
                                    <textarea id="description" name="description" class="form-control" placeholder="{{ __('keywords.description') }}">{{ $testimonial->description }}</textarea>
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
