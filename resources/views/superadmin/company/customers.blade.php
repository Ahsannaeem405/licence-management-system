@extends('superadmin.layouts.master')
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
                            <h2 class="content-header-title float-left mb-0">Customers</h2>

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

                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb float-right m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('superadmin-add-customers') }}"
                                                class="btn btn-primary fa fa-plus"> Add Customer</a></li>
                                    </ol>
                                </div>

                                <div class="card-content">
                                    <div class="card-body card-dashboard pt-0">

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
                                                    @foreach ($admin as $item)
                                                        <tr>

                                                           
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->email }}</td>
                                                            <td>{{ $item->address }}</td>
                                                            <td>{{ $item->phone }}</td>
                                                            <td>
                                                                <a href="edit/{{ $item->id }}"><i class="fa fa-edit text-warning"></i></a>
                                                                <a href="delete/{{ $item->id }}"><i class="fa fa-trash text-danger btndelete"></i></a>
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
