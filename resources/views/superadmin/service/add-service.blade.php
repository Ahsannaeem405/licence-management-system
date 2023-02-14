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
                            <h2 class="content-header-title float-left mb-0">{{__('messages.add services')}}</h2>

                        </div>-
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">

                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Input Validation start -->
                <section class="input-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    {{-- <h4 class="card-title">Customer Form</h4> --}}
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form-horizontal" novalidate method="POST" action="{{route('superadmin-store-service')}}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>{{__('messages.service name')}}</label>
                                                        <div class="controls">
                                                            <input type="text" name="name" class="form-control" placeholder="Enter Service Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 ">
                                                    <button type="submit" class="btn btn-primary mr-1 mb-1" style="float: right">{{__('messages.service name')}}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input Validation end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
