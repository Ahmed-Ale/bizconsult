@extends('admin.master')

@section('title', __('keywords.companies'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.companies') }}</h2>

                    <div>
                        <a href="{{ route('admin.companies.create') }}" class="btn btn-sm btn-primary m-2">
                            {{ __('keywords.add_new_company') }}
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
                                    <th width='10%'>#</th>
                                    <th width='75%'>{{ __('keywords.image') }}</th>
                                    <th width='15%'>{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($companies) > 0)
                                    @foreach ($companies as $company)
                                        <tr>
                                            <td>{{ $companies->firstItem() + $loop->index }}</td>
                                            <td>
                                                <img src="{{ asset("storage/companies/$company->image") }}"
                                                    alt="company image" width="75px">
                                            </td>
                                            <td>
                                                <x-action-button
                                                    href="{{ route('admin.companies.show', ['company' => $company]) }}"
                                                    type="primary" icon="fe-eye"></x-action-button>

                                                <x-action-button
                                                    href="{{ route('admin.companies.edit', ['company' => $company]) }}"
                                                    type="warning" icon="fe-edit"></x-action-button>

                                                <x-delete-button
                                                    href="{{ route('admin.companies.destroy', ['company' => $company]) }}"></x-delete-button>
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
                        {{ $companies->render('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- simple table -->
            </div>
        </div>
    </div>
    </div>
@endsection
