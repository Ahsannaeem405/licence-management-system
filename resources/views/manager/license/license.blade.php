@extends('manager.layouts.master')
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">License</h2>

                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                       
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <a href="{{ route('manager-add-license')}}" class="btn btn-primary mb-2" style="float: right;"><i class="feather icon-plus"></i>&nbsp; Add License</a>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Title</th>
                                                        <th>Service</th>
                                                        <th>Department</th>
                                                        <th>Key</th>
                                                        <th>Date of Issue</th>
                                                        <th>Date of Expiry</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $x=1;
                                                    @endphp
                                                    @foreach ($licenses as $license)
                                                        <tr>
                                                            <td>{{$x++}}</td>
                                                            <td>{{ $license->title }}</td>
                                                            <td>{{$license->service->name}}</td>
                                                            <td>{{ $license->department->name }}</td>
                                                            <td>{{ $license->key }}</td>
                                                            <td>{{ \Carbon\carbon::createFromFormat('Y-m-d', $license->date_of_issue)->format('d-F-Y') }}
                                                            </td>
                                                            <td>{{ \Carbon\carbon::createFromFormat('Y-m-d', $license->date_of_expiry)->format('d-F-Y') }}
                                                            </td>
                                                            <td>
                                                                <span class="d-flex">
                                                                    <a href="{{route('manager-edit-license',$license->id)}}"><i class="fa fa-edit text-warning"></i></a>
                                                                    <form action="{{route('customer-delete-license',$license->id)}}" method="POST">
                                                                        <input type="hidden" value="GET" name="_method">
                                                                        <button type="submit" class="show_confirm text-danger" style="border: none; background:transparent;"><i class="fa fa-trash"></i></button>
                                                                    </form>
                                                                </span> 
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->

            </div>
        </div>
    </div>
@endsection
