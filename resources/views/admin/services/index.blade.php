@extends('admin.master')

@section('title', __('keywords.services'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.services') }}</h2>

                    <div>
                        <a href="{{ route('admin.services.create') }}" class="btn btn-sm btn-primary m-2">
                            {{ __('keywords.add_new_service') }}
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
                                    <th>{{ __('keywords.title') }}</th>
                                    <th width='10%'>{{ __('keywords.icon') }}</th>
                                    <th width='15%'>{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($services) > 0)
                                    @foreach ($services as $service)
                                        <tr>
                                            <td>{{ $services->firstItem() + $loop->index }}</td>
                                            <td>{{ $service->title }}</td>
                                            <td><i class="{{ $service->icon }} fa-2x"></i></td>
                                            <td>
                                                <x-action-button
                                                    href="{{ route('admin.services.show', ['service' => $service]) }}"
                                                    type="primary" icon="fe-eye"></x-action-button>

                                                <x-action-button
                                                    href="{{ route('admin.services.edit', ['service' => $service]) }}"
                                                    type="warning" icon="fe-edit"></x-action-button>

                                                <x-delete-button
                                                    href="{{ route('admin.services.destroy', ['service' => $service]) }}"></x-delete-button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4">
                                            <x-alert type="danger"
                                                message="{{ __('keywords.no_records_found') }}"></x-alert>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        {{ $services->render('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- simple table -->
            </div>
        </div>
    </div>
    </div>
@endsection
