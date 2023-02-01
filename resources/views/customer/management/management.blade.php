@extends('customer.layouts.master')
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Management</h2>

                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
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
                                        <a href="{{ route('customer-add-management') }}" class="btn btn-primary mb-2" style="float: right;"><i class="feather icon-plus"></i>&nbsp; Add Management</a>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Address</th>
                                                        <th>Phone</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($owners as $owner)
                                                    <tr>
                                                        <td>{{$owner->name}}</td>
                                                        <td>{{$owner->email}}</td>
                                                        <td>{{$owner->address}}</td>
                                                        <td>{{$owner->phone}}</td>
                                                        <td>
                                                            <span class="d-flex">
                                                                <a href="{{route('customer-edit-management',$owner->id)}}"><i class="fa fa-edit text-warning"></i></a>
                                                                <form action="{{route('customer-delete-management',$owner->id)}}" method="POST">
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
