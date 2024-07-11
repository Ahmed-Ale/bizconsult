@extends('admin.master')

@section('title', __('keywords.features'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.features') }}</h2>

                    <div>
                        <a href="{{ route('admin.features.create') }}" class="btn btn-sm btn-primary m-2">
                            {{ __('keywords.add_new_feature') }}
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
                                @if (count($features) > 0)
                                    @foreach ($features as $feature)
                                        <tr>
                                            <td>{{ $features->firstItem() + $loop->index }}</td>
                                            <td>{{ $feature->title }}</td>
                                            <td><i class="{{ $feature->icon }} fa-2x"></i></td>
                                            <td>
                                                <x-action-button
                                                    href="{{ route('admin.features.show', ['feature' => $feature]) }}"
                                                    type="primary" icon="fe-eye"></x-action-button>

                                                <x-action-button
                                                    href="{{ route('admin.features.edit', ['feature' => $feature]) }}"
                                                    type="warning" icon="fe-edit"></x-action-button>

                                                <x-delete-button
                                                    href="{{ route('admin.features.destroy', ['feature' => $feature]) }}"></x-delete-button>
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
                        {{ $features->render('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- simple table -->
            </div>
        </div>
    </div>
    </div>
@endsection
