@extends('admin.master')

@section('title', __('keywords.show_member'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.show_member') }}</h2>
                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <label for="name">{{ __('keywords.name') }}</label>
                                <input id="name" type="text" name="name" class="form-control" readonly
                                    value="{{ $member->name }}">
                            </div>
                            <div class="col-md-5">
                                <label for="position">{{ __('keywords.position') }}</label>
                                <input id="position" type="text" name="position" class="form-control" readonly
                                    value="{{ $member->position }}">
                            </div>
                            <div class="col-md-1 mt-3">
                                <label for="image">{{ __('keywords.image') }}</label>
                                <div>
                                    <img src="{{ asset("storage/members/$member->image") }}" alt="#" width="100px">
                                </div>
                            </div>
                            <div class="col-md-5 mt-5">
                                <label for="facebook">{{ __('keywords.facebook') }}</label>
                                <input id="facebook" type="text" name="facebook" class="form-control" readonly
                                    value="{{ $member->facebook }}">
                            </div>
                            <div class="col-md-5 mt-5">
                                <label for="twitter">{{ __('keywords.twitter') }}</label>
                                <input id="twitter" type="text" name="twitter" class="form-control" readonly
                                    value="{{ $member->twitter }}">
                            </div>
                            <div class="col-md-5 mt-5">
                                <label for="linkedin">{{ __('keywords.linkedin') }}</label>
                                <input id="linkedin" type="text" name="linkedin" class="form-control" readonly
                                    value="{{ $member->linkedin }}">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- simple table -->
            </div>
        </div>
    </div>
@endsection
