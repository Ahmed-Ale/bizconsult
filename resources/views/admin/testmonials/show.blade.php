@extends('admin.master')

@section('title', __('keywords.show_testimonial'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.show_testimonial') }}</h2>
                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <label for="name">{{ __('keywords.name') }}</label>
                                <input id="name" type="text" name="name" class="form-control" readonly
                                    value="{{ $testimonial->name }}">
                            </div>
                            <div class="col-md-5">
                                <label for="position">{{ __('keywords.position') }}</label>
                                <input id="position" type="text" name="position" class="form-control" readonly
                                    value="{{ $testimonial->position }}">
                            </div>
                            <div class="col-md-1">
                                <label for="image">{{ __('keywords.image') }}</label>
                                <div>
                                    <img src="{{ asset("storage/testimonials/$testimonial->image") }}" alt="#"
                                        width="100px">
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="description">{{ __('keywords.description') }}</label>
                                <textarea id="description" name="description" class="form-control" readonly>{{ $testimonial->description }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- simple table -->
            </div>
        </div>
    </div>
@endsection
