@extends('layouts.app')
<style>
    .verify-block{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
</style>
@section('content')
<div class="container verify-block">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="padding:20px;">
                <div class="card-header"><h2>{{ __('Customer Profile') }}</h2></div>
                <div class="card-body">
                    <form class="d-inline" method="POST" action="{{route('store-customer-profile')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Name*</label>
                                    <input class="form-control" name="name" value="{{Auth::user()->name}}" required readonly>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Role*</label>
                                    <input class="form-control" name="role" value="{{Auth::user()->role}}"  disabled>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Profile Image</label>
                                    <input class="form-control" type="file" name="image">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Company Logo *</label>
                                    <input class="form-control" required type="file" name="company_logo">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Company Name *</label>
                                    <input class="form-control" type="text" name="company_name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Address*</label>
                                    <input class="form-control" placeholder="Please enter your address" id="client-address" value="" name="address" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <div class="form-check mb-1" style="margin-top:-30px;">
                                    <input class="form-check-input" type="checkbox" id="billing" checked>
                                    <label class="form-check-label" for="flexCheckDefault"> Billing Address same as address</label>
                                </div>
                                <div class="form-group d-none" id="my-billing-address">
                                    <input class="form-control" id="common-address" value="" placeholder="Please enter your billing address" name="billing_address">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 d-none" id="billing_name">
                                <div class="form-group">
                                    <label>Billing Name*</label>
                                    <input class="form-control" id="bill-name" value="" name="billing_name" placeholder="Please enter your billing name" >
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8 col-md-12 ">
                                <button type="submit" class="btn btn-primary" style="width: 100%; font-weight:bold;">Pay ${{Auth::user()->package->price}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script>
$(document).ready(function(){
    myaddress();
    function myaddress()
    {
        var address = $('#client-address').val();
        if($('#billing').prop('checked'))
        {
            $('#common-address').attr('value',address);

            $('#my-billing-address').addClass('d-none');
            $("#billing_name").addClass('d-none');
            $('#bill-name').prop('required',false);
        }
        else
        {
            $('#my-billing-address').removeClass('d-none');
            $("#billing_name").removeClass('d-none');
            $('#bill-name').prop('required',true);
        }
    }
    $("#billing").click(function(){
        myaddress();
    });

    $(document).on('keyup','#client-address',function(){
        myaddress();
    });
});

</script>
@endsection
