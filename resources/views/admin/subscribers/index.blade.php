@extends('admin.master')

@section('title', __('keywords.subscribers'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.subscribers') }}</h2>

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
                                    <th>#</th>
                                    <th>{{ __('keywords.email') }}</th>
                                    <th width='15%'>{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($subscribers) > 0)
                                    @foreach ($subscribers as $subscriber)
                                        <tr>
                                            <td>{{ $subscribers->firstItem() + $loop->index }}</td>
                                            <td>{{ $subscriber->email }}</td>
                                            <td>
                                                <x-delete-button
                                                    href="{{ route('admin.subscribers.destroy', ['subscriber' => $subscriber]) }}"></x-delete-button>
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
                        {{ $subscribers->render('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- simple table -->
            </div>
        </div>
    </div>
    </div>
@endsection
