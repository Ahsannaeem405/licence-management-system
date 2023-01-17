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
                            <h2 class="content-header-title float-left mb-0">Customer Form</h2>
                            
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
                                                        <label>First Name</label>
                                                        <div class="controls">
                                                            <input type="text" name="text" class="form-control"
                                                                data-validation-required-message="This field is required"
                                                                placeholder="First Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label> Phone#</label>
                                                        <div class="controls">
                                                            <input type="text" name="numeric" class="form-control"
                                                                required data-validation-containsnumber-regex="(\d)+"
                                                                data-validation-containsnumber-message="The numeric field may only contain numeric characters."
                                                                placeholder="Enter Numbers only">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <div class="controls">
                                                            <input type="text" name="alpha" class="form-control"
                                                                required data-validation-containsnumber-regex="^[a-zA-Z]+$"
                                                                data-validation-containsnumber-message="The alpha field may only contain alphabetic characters."
                                                                placeholder="Enter Address">
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Last Name</label>
                                                        <div class="controls">
                                                            <input type="text" class="form-control"
                                                                data-validation-regex-regex="([^a-z]*[A-Z]*)*"
                                                                data-validation-containsnumber-regex="([^0-9]*[0-9]+)+"
                                                                data-validation-containsnumber-message="Enter Last Name"
                                                                min="10" max="20" required
                                                                placeholder="Enter Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label> Email</label>
                                                        <div class="controls">
                                                            <input type="email" name="email" class="form-control"
                                                                data-validation-containsnumber-regex="^([0-9]+)$"
                                                                data-validation-containsnumber-message="The regex field format is invalid."
                                                                placeholder="@gmail.com" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <div class="controls">
                                                            <input type="password" name="password" class="form-control"
                                                                data-validation-required-message="This field is required"
                                                                placeholder="Password">
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
