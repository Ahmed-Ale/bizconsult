@extends('admin.master')

@section('title', __('keywords.testimonials'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.testimonials') }}</h2>

                    <div>
                        <a href="{{ route('admin.testimonials.create') }}" class="btn btn-sm btn-primary m-2">
                            {{ __('keywords.add_new_testimonial') }}
                        </a>
                    </div>
                </div>
                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">
                        @session('success')
                            <x-alert type="success" message="{{ session('success') }}"></x-alert>
                        @endsession
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width='5%'>#</th>
                                    <th width='30%'>{{ __('keywords.name') }}</th>
                                    <th width='30%'>{{ __('keywords.position') }}</th>
                                    <th width='20%'>{{ __('keywords.image') }}</th>
                                    <th width='15%'>{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($testimonials) > 0)
                                    @foreach ($testimonials as $testimonial)
                                        <tr>
                                            <td>{{ $testimonials->firstItem() + $loop->index }}</td>
                                            <td>{{ $testimonial->name }}</td>
                                            <td>{{ $testimonial->position }}</td>
                                            <td>
                                                <img src="{{ asset("storage/testimonials/$testimonial->image") }}"
                                                    alt="#" width="75px">
                                            </td>
                                            <td>
                                                <x-action-button
                                                    href="{{ route('admin.testimonials.show', ['testimonial' => $testimonial]) }}"
                                                    type="primary" icon="fe-eye"></x-action-button>

                                                <x-action-button
                                                    href="{{ route('admin.testimonials.edit', ['testimonial' => $testimonial]) }}"
                                                    type="warning" icon="fe-edit"></x-action-button>

                                                <x-delete-button
                                                    href="{{ route('admin.testimonials.destroy', ['testimonial' => $testimonial]) }}"></x-delete-button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">
                                            <x-alert type="danger"
                                                message="{{ __('keywords.no_records_found') }}"></x-alert>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        {{ $testimonials->render('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- simple table -->
            </div>
        </div>
    </div>
    </div>
@endsection
