@extends('superadmin.layouts.master')
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">List of Departments</h2>

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
                                <div class="breadcrumb-wrapper col-12">
                                    {{-- <ol class="breadcrumb float-right m-0">
                                        <li class="breadcrumb-item"><a href="{{ url('/add-Package') }}"
                                                class="btn btn-primary fa fa-plus"> Add Package</a></li>
                                    </ol> --}}
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">

                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>

                                                        <th>Logo</th>
                                                        <th>Department</th>
                                                        <th>Description</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($department as $item)
                                                        <tr>
                                                            <td><img src="{{ $item->logo }}" width="40"
                                                                    height="40"></td>
                                                            <td>{{ $item->department_name }}</td>
                                                            <td>{{ $item->description }}</td>
                                                            <td>
                                                                <a href="{{ route('superadmin-view-license',$item->id) }}"
                                                                    class="btn btn-primary"> View </a>
                                                                    
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
 