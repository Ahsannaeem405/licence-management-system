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
                            <h2 class="content-header-title float-left mb-0">Multi Language</h2>

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
                                    <ol class="breadcrumb float-right m-0">
                                        <li class="breadcrumb-item btn btn-primary fa fa-plus" data-toggle="modal"
                                            data-target="#inlineForm"> Add Language </li>
                                    </ol>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">

                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>

                                                        <th>Country Name</th>
                                                        <th>Language</th>
                                                        {{-- <th>Flag</th> --}}
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td>USA</td>
                                                        <td>English</td>
                                                        {{-- <td>$320,800</td> --}}
                                                        <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>

                                                        <td>France</td>
                                                        <td>French</td>
                                                        {{-- <td>$170,750</td> --}}
                                                        <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>

                                                        <td>China</td>
                                                        <td>chinese</td>
                                                        {{-- <td>San Francisco</td> --}}

                                                        <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>

                                                        <td>South Koria</td>
                                                        <td>Korian</td>

                                                        {{-- <td>$433,060</td> --}}
                                                        <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td>
                                                    </tr>
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
                <!-- Modal -->
                <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel33" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel33"> </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="#">
                                <div class="modal-body">
                                    <label>Country Name </label>
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Country Name" class="form-control">
                                    </div>

                                    <label>Language</label>
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Key" class="form-control">
                                    </div>
                                    {{-- 
                                    <label>Flag Upload</label>
                                    <div class="form-group">
                                        <input type="file" name="file" class="form-control">
                                    </div> --}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
            </div>
        </div>
    </div>
@endsection
