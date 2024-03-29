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
                            <h2 class="content-header-title float-left mb-0">Account Settings</h2>

                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <!-- account setting page start -->
                <section id="page-account-settings">
                    <div class="row">
                        <!-- left menu section -->
                        <div class="col-md-3 mb-2 mb-md-0">
                            <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill"
                                        href="#account-vertical-general" aria-expanded="true">
                                        <i class="feather icon-globe mr-50 font-medium-3"></i>
                                        General
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill"
                                        href="#account-vertical-password" aria-expanded="false">
                                        <i class="feather icon-lock mr-50 font-medium-3"></i>
                                        Change Password
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!-- right content section -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                                                aria-labelledby="account-pill-general" aria-expanded="true">
                                                <div class="media">
                                                    <a href="javascript: void(0);">
                                                        @if($user->image)
                                                        <img src="{{ asset('profiles-images')}}/{{$user->image}}" class="rounded mr-75" alt="profile image" height="64" width="64">
                                                        @else
                                                        <img src="{{ asset('assets/app-assets/images/portrait/small/avatar-s-12.jpg')}}" class="rounded mr-75" alt="profile image" height="64" width="64">
                                                        @endif
                                                    </a>
                                                    <form novalidate
                                                        action="{{ route('customer-update-profile',$user->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="media-body mt-75">
                                                            <div
                                                                class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                                <label
                                                                    class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
                                                                    for="account-upload">Upload new photo</label>
                                                                <input type="file" id="account-upload" name="image"
                                                                    hidden>
                                                                   
                                                                {{-- <button class="btn btn-sm btn-outline-warning ml-50">Reset</button> --}}
                                                            </div>
                                                            {{-- <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or PNG. Max
                                                            size of
                                                            800kB</small></p> --}}
                                                        </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-name">Name</label>
                                                                <input type="text" class="form-control" id="account-name" name="name" placeholder="Name" required value="{{ $user->name }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-e-mail">Email</label>
                                                                <input type="email" class="form-control" id="account-e-mail" placeholder="Email" name="email" value="{{ $user->email }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-name">Currency</label>
                                                                <select class="form-control" name="currency">
                                                                    <option selected disabled>Please Select Currency</option>
                                                                    <option value="$" {{Auth::user()->currency == "$" ? 'selected' : ''}}>Dollar - $</option>
                                                                    <option value="€" {{Auth::user()->currency == "€" ? 'selected' : ''}}>Euro - €</option>
                                                                    <option value="¥" {{Auth::user()->currency == "¥" ? 'selected' : ''}}>Yen - ¥</option>
                                                                    <option value="₣" {{Auth::user()->currency == "₣" ? 'selected' : ''}}>Franc - ₣</option>
                                                                    <option value="₹" {{Auth::user()->currency == "₹" ? 'selected' : ''}}>Rupee - ₹</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save changes</button>
                                                        {{-- <button type="reset" class="btn btn-outline-warning">Cancel</button> --}}
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="account-vertical-password" role="tabpanel"
                                                aria-labelledby="account-pill-password" aria-expanded="false">
                                                <form  action="{{ route('customer-update-password', $user->id) }}" method="POST" novalidate>
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-old-password">Old Password</label>
                                                                    <input type="password" class="form-control"
                                                                        id="account-old-password" required
                                                                        placeholder="Old Password" name="old_password"
                                                                        data-validation-required-message="This old password field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-new-password">New Password</label>
                                                                    <input type="password"  
                                                                        id="account-new-password" class="form-control"
                                                                        placeholder="New Password" name="new_password" required
                                                                        data-validation-required-message="The password field is required"
                                                                        minlength="6">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-retype-new-password">Confirm New
                                                                        Password</label>
                                                                    <input type="password" name="new_password_confirmation"
                                                                        class="form-control" required
                                                                        id="account-retype-new-password"
                                                                        data-validation-match-match="password"
                                                                        placeholder="New Password"
                                                                        data-validation-required-message="The Confirm password field is required"
                                                                        minlength="6">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                            <button type="submit"
                                                                class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                                changes</button>
                                                            {{-- <button type="reset" class="btn btn-outline-warning">Cancel</button> --}}
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- account setting page end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection