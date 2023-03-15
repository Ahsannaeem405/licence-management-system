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
                            <h2 class="content-header-title float-left mb-0">{{ __('messages.frm customer') }}</h2>

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
                                        <form class="form-horizontal" action="{{ route('superadmin-store') }}"
                                            method="POST" novalidate enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>{{ __('messages.frm name') }} *</label>
                                                        <div class="controls">
                                                            <input type="text" name="name" class="form-control "
                                                                data-validation-required-message="This field is required"
                                                                placeholder="Enter Name">

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label> {{ __('messages.frm phone') }}*</label>
                                                        <div class="controls">
                                                            <input type="text" name="phone" class="form-control  "
                                                                required data-validation-containsnumber-regex="(\d)+"
                                                                data-validation-containsnumber-message="The numeric field may only contain numeric characters."
                                                                placeholder="Enter Numbers only">

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>{{ __('messages.frm password') }}*</label>
                                                        <div class="controls">
                                                            <input type="password" name="password" class="form-control "
                                                                name="password"
                                                                data-validation-required-message="This field is required"
                                                                placeholder="Password">

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>{{ __('messages.Package') }}*</label>
                                                        <div class="controls">

                                                            <select class="form-control" name="package_id" id="" data-validation-required-message="This field is required" required>
                                                                <option value="" selected>Please select a package</option>
                                                                @foreach ($package as $row)
                                                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Company Logo*</label>
                                                        <div class="controls">
                                                            <input type="file" name="company_logo"
                                                                class="form-control"
                                                                placeholder="" required>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> {{ __('messages.frm email') }}*</label>
                                                        <div class="controls">
                                                            <input type="email" name="email" class="form-control"
                                                                data-validation-containsnumber-regex="^([0-9]+)$"
                                                                data-validation-containsnumber-message="The regex field format is invalid."
                                                                placeholder="@gmail.com" required>

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>{{ __('messages.frm address') }}*</label>
                                                        <div class="controls">
                                                            <input type="text" name="address" class="form-control "
                                                                required data-validation-containsnumber-regex="^[a-zA-Z]+$"
                                                                data-validation-containsnumber-message="The alpha field may only contain alphabetic characters."
                                                                placeholder="Enter Address">

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>{{ __('messages.frm cnfrm password') }}*</label>
                                                        <div class="controls">
                                                            <input type="password" name="password_confirmation"
                                                                class="form-control"
                                                                data-validation-containsnumber-regex="^([0-9]+)$"
                                                                data-validation-containsnumber-message="The regex field format is invalid."
                                                                placeholder="" required>

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Company Name*</label>
                                                        <div class="controls">
                                                            <input type="text" name="company_name"
                                                                class="form-control"
                                                                data-validation-containsnumber-regex="^([0-9]+)$"
                                                                data-validation-containsnumber-message="The regex field format is invalid."
                                                                placeholder="" required>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-md-12 ">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1"
                                                    style="float: right">{{ __('messages.frm submit') }}</button>

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
