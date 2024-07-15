@extends('admin.master')

@section('title', __('keywords.settings'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.settings') }}</h2>
                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">
                        @session('success')
                            <x-alert type="success" message="{{ session('success') }}"></x-alert>
                        @endsession
                        <form action="{{ route('admin.settings.update', $setting) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="address">{{ __('keywords.address') }}</label>
                                    <input id="address" type="text" name="address" class="form-control"
                                        value="{{ $setting->address }}">
                                    <x-validation-error field="address"></x-validation-error>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone">{{ __('keywords.phone') }}</label>
                                    <input id="phone" type="text" name="phone" class="form-control"
                                        value="{{ $setting->phone }}">
                                    <x-validation-error field="phone"></x-validation-error>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="email">{{ __('keywords.email') }}</label>
                                    <input id="email" type="text" name="email" class="form-control"
                                        value="{{ $setting->email }}">
                                    <x-validation-error field="email"></x-validation-error>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="facebook">{{ __('keywords.facebook') }}</label>
                                    <input id="facebook" type="url" name="facebook" class="form-control"
                                        value="{{ $setting->facebook }}">
                                    <x-validation-error field="facebook"></x-validation-error>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="linkedin">{{ __('keywords.linkedin') }}</label>
                                    <input id="linkedin" type="url" name="linkedin" class="form-control"
                                        value="{{ $setting->linkedin }}">
                                    <x-validation-error field="linkedin"></x-validation-error>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="twitter">{{ __('keywords.twitter') }}</label>
                                    <input id="twitter" type="url" name="twitter" class="form-control"
                                        value="{{ $setting->twitter }}">
                                    <x-validation-error field="twitter"></x-validation-error>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="instagram">{{ __('keywords.instagram') }}</label>
                                    <input id="instagram" type="url" name="instagram" class="form-control"
                                        value="{{ $setting->instagram }}">
                                    <x-validation-error field="instagram"></x-validation-error>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="youtube">{{ __('keywords.youtube') }}</label>
                                    <input id="youtube" type="url" name="youtube" class="form-control"
                                        value="{{ $setting->youtube }}">
                                    <x-validation-error field="youtube"></x-validation-error>
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
