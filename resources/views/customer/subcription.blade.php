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
            <h2 class="content-header-title float-left mb-0">Subcription Packages</h2>

          </div>
        </div>
      </div>

      <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">

      </div>
    </div>

    <div class="content-body">
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card h-100 subcard_shadow">
            <div class="card-body">
              <h5 class="card-title text_primary fw-bolder text-uppercase text-center">Basic </h5>
              <h6 class="card-price text-center">$0<span class="period">/month</span></h6>
              <hr>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span>1 user </li>
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span>1 department /Service
                  (Manage multiple teams
                  or departments)</li>
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span>10 Licenses
                </li>
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span>Basic reporting
                </li>
                <li><span class="fa-li"><i class="fa fa-close text-danger"></i></span>NA : Direct reports
                  sharing
                </li>
                <li><span class="fa-li"><i class="fa fa-close text-danger"></i></span>NA : Monthly Status
                  Report
                </li>
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span>Email Support

                </li>
                <li><span class="fa-li"><i class="fa fa-close text-danger "></i></span>NA: On-site training and
                  consultation

                </li>

              </ul>

            </div>

            <div class="card-body text-center">
              <button class="btn btn-outline-primary btn-lg bg_primary sub_btn text-white" style="border-radius:30px">Select</button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card h-100 subcard_shadow">
            <div class="card-body">
              <h5 class="card-title text_primary fw-bolder text-uppercase text-center">Pro</h5>
              <h6 class="card-price text-center">$9<span class="period">/month</span></h6>
              <hr>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span><strong>1 user </strong>
                </li>
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span>50GB Storage</li>
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span>10 department /Service
                  (Manage multiple teams
                  or departments)

                </li>
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span>50 Licenses </li>
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span>Advanced reporting </li>
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span>Direct reports sharing
                </li>
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span>Monthly Status Report</li>
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span>Email and phone Support
                </li>

                <li><span class="fa-li"><i class="fa fa-close text-danger"></i></span>NA: On-site training and
                  consultation
                </li>

              </ul>

            </div>
            <div class="card-body text-center">
              <button class="btn btn-outline-primary btn-lg bg_primary sub_btn text-white" style="border-radius:30px">Select</button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card h-100 subcard_shadow">
            <div class="card-body">
              <h5 class="card-title text_primary fw-bolder text-uppercase text-center">Enterprise </h5>
              <h6 class="card-price text-center">$49<span class="period">/month</span></h6>
              <hr>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span><strong>1 user
                  </strong>
                </li>
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span>100 department /Service
                  (Manage multiple teams
                  or departments)</li>
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span>1000 Licenses
                </li>
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span>Advanced reporting</li>
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span>Direct reports sharing
                  Projects</li>
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span>Monthly Status Report
                </li>
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span><strong>Email
                    Support</strong>
                  Free
                  Subdomains</li>
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span>On-site training and
                  consultation
                </li>
              </ul>

            </div>
            <div class="card-body text-center">
              <button class="btn btn-outline-primary btn-lg bg_primary sub_btn text-white" style="border-radius:30px">Select</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

@endsection
{{--
  <div class="breadcrumb-wrapper col-12">
    <ol class="breadcrumb float-right m-0">
        <li class="breadcrumb-item"><a href="{{route('customer-add-license') }}"
class="btn btn-primary fa fa-plus"> Add License</a></li>
</ol>
</div> --}}