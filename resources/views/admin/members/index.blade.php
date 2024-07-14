@extends('admin.master')

@section('title', __('keywords.members'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.members') }}</h2>

                    <div>
                        <a href="{{ route('admin.members.create') }}" class="btn btn-sm btn-primary m-2">
                            {{ __('keywords.add_new_member') }}
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
                                @if (count($members) > 0)
                                    @foreach ($members as $member)
                                        <tr>
                                            <td>{{ $members->firstItem() + $loop->index }}</td>
                                            <td>{{ $member->name }}</td>
                                            <td>{{ $member->position }}</td>
                                            <td>
                                                <img src="{{ asset("storage/members/$member->image") }}" alt="#"
                                                    width="75px">
                                            </td>
                                            <td>
                                                <x-action-button
                                                    href="{{ route('admin.members.show', ['member' => $member]) }}"
                                                    type="primary" icon="fe-eye"></x-action-button>

                                                <x-action-button
                                                    href="{{ route('admin.members.edit', ['member' => $member]) }}"
                                                    type="warning" icon="fe-edit"></x-action-button>

                                                <x-delete-button
                                                    href="{{ route('admin.members.destroy', ['member' => $member]) }}"></x-delete-button>
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
                        {{ $members->render('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- simple table -->
            </div>
        </div>
    </div>
    </div>
@endsection
