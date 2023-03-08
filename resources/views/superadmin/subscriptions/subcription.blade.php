@extends('superadmin.layouts.master')
@section('css')
<style>
    table.dataTable thead tr {
        background-color: #183153;
        color: white;
    }
    table.dataTable tbody td {
        border: 0.01px solid rgb(224, 224, 224);
    }
</style>
@endsection
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
                            <h2 class="content-header-title float-left mb-0">{{__('messages.subscription')}}</h2>
                            
                        </div>
                    </div>
                 </div>
                 <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        {{-- <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div> --}}
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
                                         
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>{{__('messages.th-user-name')}}</th>
                                                        <th>{{__('messages.th-package-name')}}</th>
                                                        <th>{{__('messages.th-price')}}</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($subcriptions as $subcription)
                                                    <tr>
                                                        <td>{{$subcription->user->name}}</td>
                                                        <td>{{$subcription->package->name}}</td>
                                                        <td>{{$subcription->amount}}</td>
                                                        <td>{{\Carbon\carbon::createFromFormat('Y-m-d H:i:s',$subcription->created_at)->format('d-F-Y') }}</td>
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