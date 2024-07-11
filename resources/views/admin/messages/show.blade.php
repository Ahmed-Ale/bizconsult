@extends('admin.master')

@section('title', __('keywords.show_feature'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.show_message') }}</h2>
                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">{{ __('keywords.name') }}</label>
                                <input id="name" type="text" name="name" class="form-control" readonly
                                    value="{{ $message->name }}">
                            </div>
                            <div class="col-md-6">
                                <label for="email">{{ __('keywords.email') }}</label>
                                <input id="email" type="text" name="email" class="form-control" readonly
                                    value="{{ $message->email }}">
                            </div>
                            <div class="col-md-12 mt-4">
                                <label for="subject">{{ __('keywords.subject') }}</label>
                                <input id="subject" type="text" name="subject" class="form-control" readonly
                                    value="{{ $message->subject }}">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="message">{{ __('keywords.message') }}</label>
                                <textarea id="message" name="message" class="form-control" readonly>{{ $message->message }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- simple table -->
            </div>
        </div>
    </div>
@endsection
