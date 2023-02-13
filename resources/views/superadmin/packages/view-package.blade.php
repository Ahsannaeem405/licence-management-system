@extends('superadmin.layouts.master')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <section id="basic-horizontal-layouts">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 ">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text_primary fw-bolder text-uppercase text-center">{{$package->name}}</h5>
                            <h6 class="card-price text-center">${{$package->price}}<span class="period">/month</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                @foreach($package->package_details as $details)
                                <li  style="padding:10px; ">
                                    <span class="fa-li">
                                        @if($details->status == 1)
                                        <i class="fa fa-check text-success"></i>
                                        @elseif ($details->status == 0)
                                        <i class="fa fa-close text-danger"></i>
                                        @endif
                                    </span>{{$details->point_name}} 
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
</div>
</section>
@endsection
