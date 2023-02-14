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
                                                        <th>{{__('messages.th package')}}</th>
                                                        <th>{{__('messages.th entity')}}</th>
                                                        <th>{{__('messages.th price')}}</th>
                                                        <th>{{__('messages.th description')}}</th>
                                                         
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($subcription as $item)
                                                    <tr>
                                                        <td>{{$item->package->package}}</td>
                                                        <td>{{$item->package->entity}}</td>
                                                        <td>{{$item->package->price}}</td>
                                                        <td>{{$item->package->description}}</td>
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