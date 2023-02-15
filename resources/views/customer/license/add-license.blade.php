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
                            <h2 class="content-header-title float-left mb-0">{{__('messages.license')}}</h2>

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
                                        <form class="form-horizontal" novalidate method="POST" action="{{route('customer-store-license')}}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>{{__('messages.title')}}</label>
                                                        <div class="controls">
                                                            <input type="text" name="title" class="form-control" placeholder="Enter Title" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>{{__('messages.date i')}}</label>
                                                        <div class="controls">
                                                            <input type="date" name="issue" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>{{__('messages.department')}}</label>
                                                        <select class="form-control" name="department" required>
                                                            <option selected disabled>Please Select Department</option>
                                                            @foreach($departments as $department)
                                                            <option value="{{$department->id}}">{{$department->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>{{__('messages.service')}}</label>
                                                        <select class="form-control" name="service" required>
                                                            <option selected disabled>Please Select Service</option>
                                                            @foreach($services as $service)
                                                            <option value="{{$service->id}}">{{$service->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>{{__('messages.date e')}}</label>
                                                        <div class="controls">
                                                            <input type="date" name="expiry" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>{{__('messages.key')}}</label>
                                                        <textarea type="text" class="form-control" name="key" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 ">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1" style="float: right">{{__('messages.submit')}}</button>
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
