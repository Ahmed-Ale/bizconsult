@extends('admin.master')

@section('title', __('keywords.edit_member'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.add_new_member') }}</h2>
                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.members.update', $member) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name">{{ __('keywords.name') }}</label>
                                    <input id="name" type="text" name="name" class="form-control"
                                        placeholder="{{ __('keywords.name') }}" value="{{ $member->name }}">
                                    <x-validation-error field="name"></x-validation-error>
                                </div>
                                <div class="col-md-6">
                                    <label for="position">{{ __('keywords.position') }}</label>
                                    <input id="position" type="text" name="position" class="form-control"
                                        placeholder="{{ __('keywords.position') }}" value="{{ $member->position }}">
                                    <x-validation-error field="position"></x-validation-error>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="facebook">{{ __('keywords.facebook') }}</label>
                                    <input id="facebook" type="text" name="facebook" class="form-control"
                                        placeholder="{{ __('keywords.facebook') }}" value="{{ $member->facebook }}">
                                    <x-validation-error field="facebook"></x-validation-error>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="twitter">{{ __('keywords.twitter') }}</label>
                                    <input id="twitter" type="text" name="twitter" class="form-control"
                                        placeholder="{{ __('keywords.twitter') }}" value="{{ $member->twitter }}">
                                    <x-validation-error field="twitter"></x-validation-error>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="linkedin">{{ __('keywords.linkedin') }}</label>
                                    <input id="linkedin" type="text" name="linkedin" class="form-control"
                                        placeholder="{{ __('keywords.linkedin') }}" value="{{ $member->linkedin }}">
                                    <x-validation-error field="linkedin"></x-validation-error>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="image">{{ __('keywords.image') }}</label>
                                    <input id="image" type="file" name="image" class="form-control-file"
                                        value="{{ $member->image }}">
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
