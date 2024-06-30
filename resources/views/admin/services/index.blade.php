@extends('admin.master')

@section('title', __('keywords.services'))

@section('content')
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                            <h2 class="h5 page-title">{{ __('keywords.services') }}</h2>

                            <div>
                                <a href="#" class="btn btn-sm btn-primary m-2">
                                    {{ __('keywords.add_new') }}
                                </a>
                            </div>
                        </div>
                            <!-- simple table -->
                                <div class="card shadow">
                                    <div class="card-body">
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
                                                    @foreach($services as $service)
                                                        <tr>
                                                            <td>{{ $services->firstItem() + $loop->index }}</td>
                                                            <td>{{ $service->title }}</td>
                                                            <td><i class="{{ $service->icon }} fa-2x"></i></td>
                                                            <td>
                                                                <a href="#" class="btn btn-sm btn-primary m-2">
                                                                    <i class="fe fe-eye fa-2x"></i>
                                                                </a>
                                                                <a href="#" class="btn btn-sm btn-warning m-2">
                                                                    <i class="fe fe-edit fa-2x"></i>
                                                                </a>
                                                                <a href="#" class="btn btn-sm btn-danger m-2">
                                                                    <i class="fe fe-trash-2 fa-2x"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="alert alert-danger">{{ __('keywords.no_records_found') }}</div>
                                                    </td>
                                                </tr>
                                                @endif

                                            {{-- <tr>
                                                <td>3218</td>
                                                <td>Graham Price</td>
                                                <td>Nunc Lectus Incorporated</td>
                                                <td>Nunc Lectus Incorporated</td>
                                            </tr>
                                            <tr>
                                                <td>2651</td>
                                                <td>Reuben Orr</td>
                                                <td>Nisi Aenean Eget Limited</td>
                                                <td>Nisi Aenean Eget Limited</td>
                                            </tr>
                                            <tr>
                                                <td>2636</td>
                                                <td>Akeem Holder</td>
                                                <td>Pellentesque Associates</td>
                                                <td>Pellentesque Associates</td>
                                            </tr>
                                            <tr>
                                                <td>2757</td>
                                                <td>Beau Barrera</td>
                                                <td>Augue Incorporated</td>
                                            </tr> --}}
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