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
                            <h2 class="content-header-title float-left mb-0">License</h2>

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
                                        <form class="form-horizontal" novalidate>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Title</label>
                                                        <div class="controls">
                                                            <input type="text" name="text" class="form-control"
                                                                data-validation-required-message="This field is required"
                                                                placeholder="Enter Title">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label> Issue of Date</label>
                                                        <div class="controls">
                                                            <input type="date" name="date" class="form-control"
                                                                required data-validation-containsnumber-regex="(\d)+"
                                                                data-validation-containsnumber-message="The numeric field may only contain numeric characters."
                                                                placeholder="Enter Issue of Date">
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="form-group">
                                                        <label>Departments</label>
                                                        <select class="form-control">
                                                            <option name="">IT</option>
                                                            <option name="">Electrical Engeneering</option>
                                                            <option name="">Data Sceince</option>
                                                            <option name="">Mass Comunication</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Services</label>
                                                        <select class="form-control">
                                                            <option name="">Auto Cat</option>
                                                            <option name="">Mass Communication</option>
                                                            <option name="">Data Sceince</option>
                                                            <option name="">Data</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label> Expiry of Date</label>
                                                        <div class="controls">
                                                            <input type="date" name="expiry" class="form-control"
                                                                data-validation-containsnumber-regex="^([0-9]+)$"
                                                                data-validation-containsnumber-message="The regex field format is invalid."
                                                                placeholder="Enter Expiry of Date " required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Key</label>
                                                        <textarea type="text" class="form-control" name="Price"></textarea>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-md-12 ">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1"
                                                    style="float: right">Submit</button>

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
