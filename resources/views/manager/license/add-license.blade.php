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
                    </div>
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
                                    <form class="form-horizontal" novalidate method="POST" action="{{route('manager-store-license')}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Title <font class="text-danger">*</font></label>
                                                    <div class="controls">
                                                        <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="Enter Title" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea type="text" class="form-control" name="description">{{old('description')}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <div class="controls">
                                                        <input type="text" name="price" placeholder="Price" value="{{old('price')}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Purchase Date <font class="text-danger">*</font></label>
                                                    <div class="controls">
                                                        <input type="date" name="purchase_date" value="{{old('purchase_date')}}" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label> Issue of Date</label>
                                                    <div class="controls">
                                                        <input type="date" name="issue" value="{{old('issue')}}" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Additional Information</label>
                                                    <textarea type="text" class="form-control" name="additional_info">{{old('additional_info')}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Departments</label>
                                                    <select class="form-control" name="department" readonly>
                                                        <option selected value="{{$department->id}}">{{$department->name}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Manager List <font class="text-danger">*</font></label>
                                                    <select class="form-control" name="reffer" required>
                                                        <option disabled>Please Select Manger</option>
                                                        <option value="{{Auth::user()->id}}" selected>{{Auth::user()->name}}</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>License Owner</label>
                                                    <textarea type="text" class="form-control" name="license_owner">{{old('license_owner')}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Attachment</label>
                                                    <div class="controls">
                                                        <input type="file" name="attachment" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Renew Date</label>
                                                    <div class="controls">
                                                        <input type="date" name="renew_date" value="{{old('renew_date')}}" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Expiry of Date</label>
                                                    <div class="controls">
                                                        <input type="date" name="expiry" value="{{old('expiry')}}" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Key <font class="text-danger">*</font></label>
                                                    <textarea type="text" class="form-control" name="key" required>{{old('key')}}</textarea>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="controls p-2">
                                                        <input type="checkbox" name="renew_alert" value="1" @if(old('renew_alert')){{'checked'}}@endif>&nbsp;<label>Renew ALert</label>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <input type="checkbox" name="expiry_alert" value="1" @if(old('expiry_alert')){{'checked'}}@endif>&nbsp;<label>Expiry Alert</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 ">
                                            <button type="submit" class="btn btn-primary mr-1 mb-1" style="float: right">Submit</button>
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
