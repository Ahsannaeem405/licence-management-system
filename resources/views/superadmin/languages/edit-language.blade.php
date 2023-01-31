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
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <form action="{{route('superadmin-update-language',$language->id)}}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <label>Country</label>
                                <div class="form-group">
                                    <input type="text" name="country" placeholder="Enter Country Name" value="{{$language->country}}" class="form-control">
                                </div>
                                <label>Language</label>
                                <div class="form-group">
                                    <input type="text" name="language" placeholder="Enter Language" value="{{$language->language}}" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
