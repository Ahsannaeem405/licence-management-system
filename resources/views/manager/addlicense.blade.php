@extends('manager.layouts.master')
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
                                                        <label> Name</label>
                                                        <div class="controls">
                                                            <input type="text" name="text" class="form-control"
                                                                data-validation-required-message="This field is required"
                                                                placeholder="Enter Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label> Issue of Date</label>
                                                        <div class="controls">
                                                            <input type="text" name="numeric" class="form-control"
                                                                required data-validation-containsnumber-regex="(\d)+"
                                                                data-validation-containsnumber-message="The numeric field may only contain numeric characters."
                                                                placeholder="Enter Issue of Date">
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-12"> --}}
                                                        <div class="col-12">
                                                            <div class="form-group row">
                                                                <div class="col-md-12">
                                                                 <label for="">Key</label>
                                                                 <textarea type="text"   class="form-control" name="Price"  ></textarea>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>


                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <div class="controls">
                                                            <input type="text" class="form-control"
                                                                data-validation-regex-regex="([^a-z]*[A-Z]*)*"
                                                                data-validation-containsnumber-regex="([^0-9]*[0-9]+)+"
                                                                data-validation-containsnumber-message="Enter Last Name"
                                                                min="10" max="20" required
                                                                placeholder="Enter Description">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label> Expiry of Date</label>
                                                        <div class="controls">
                                                            <input type="email" name="email" class="form-control"
                                                                data-validation-containsnumber-regex="^([0-9]+)$"
                                                                data-validation-containsnumber-message="The regex field format is invalid."
                                                                placeholder="Enter Expiry of Date " required>
                                                        </div>
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
