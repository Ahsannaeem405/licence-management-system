 @extends('superadmin.layouts.master')
 @section('content')
     <!-- BEGIN: Content-->
     <div class="app-content content">
         <div class="content-overlay"></div>
         <div class="header-navbar-shadow"></div>
         <div class="content-wrapper">
             <div class="content-header row">
             </div>
             <div class="content-body">
                 <!-- Dashboard Ecommerce Starts -->
                 <section id="dashboard-ecommerce">

                     <div class="row">
                         <div class="col-lg-3 col-sm-6 col-12">
                             <div class="card">
                                 <div class="card-header d-flex flex-column align-items-start pb-0">
                                     <div class="avatar bg-rgba-primary p-50 m-0">
                                         <div class="avatar-content">
                                             <i class="feather icon-users text-primary font-medium-5"></i>
                                         </div>
                                     </div>
                                     <h2 class="text-bold-700 mt-1">{{$total_customers}}</h2>
                                     <p class="mb-0">Total Customers</p>
                                 </div>
                                 <div class="card-content">
                                     <div id="line-area-chart-1"></div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 col-sm-6 col-12">
                             <div class="card">
                                 <div class="card-header d-flex flex-column align-items-start pb-0">
                                     <div class="avatar bg-rgba-success p-50 m-0">
                                         <div class="avatar-content">
                                             <i class="feather icon-credit-card text-success font-medium-5"></i>
                                         </div>
                                     </div>
                                     <h2 class="text-bold-700 mt-1">{{$total_packages}}</h2>
                                     <p class="mb-0">Total Packages</p>
                                 </div>
                                 <div class="card-content">
                                     <div id="line-area-chart-2"></div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 col-sm-6 col-12">
                             <div class="card">
                                 <div class="card-header d-flex flex-column align-items-start pb-0">
                                     <div class="avatar bg-rgba-danger p-50 m-0">
                                         <div class="avatar-content">
                                             <i class="fa fa-drivers-license-o text-danger font-medium-5"></i>
                                         </div>
                                     </div>
                                     <h2 class="text-bold-700 mt-1">{{$total_license}}</h2>
                                     <p class="mb-0"> Total Licenses</p>
                                 </div>
                                 <div class="card-content">
                                     <div id="line-area-chart-3"></div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 col-sm-6 col-12">
                             <div class="card">
                                 <div class="card-header d-flex flex-column align-items-start pb-0">
                                     <div class="avatar bg-rgba-warning p-50 m-0">
                                         <div class="avatar-content">
                                             <i class="feather icon-package text-warning font-medium-5"></i>
                                         </div>
                                     </div>
                                     <h2 class="text-bold-700 mt-1">{{$total_departments}}</h2>
                                     <p class="mb-0">Total Departments</p>
                                 </div>

                                 <div class="card-content">
                                     <div id="line-area-chart-4"></div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 
                       <div class="row">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-end">
                                    <h4 class="card-title">Transactions</h4>
                                    <p class="font-medium-5 mb-0"><i class="feather icon-settings text-muted cursor-pointer"></i></p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pb-0">
                                        <div class="d-flex justify-content-start">
                                            <div class="mr-2">
                                                <p class="mb-50 text-bold-600">This Month</p>
                                                <h2 class="text-bold-400">
                                                    <sup class="font-medium-1">$</sup>
                                                    <span class="text-success">0</span>
                                                </h2>
                                            </div>
                                            <div>
                                                <p class="mb-50 text-bold-600">Last Month</p>
                                                <h2 class="text-bold-400">
                                                    <sup class="font-medium-1">$</sup>
                                                    <span>0</span>
                                                </h2>
                                            </div>

                                        </div>
                                        <div id="revenue-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-4 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-end">
                                    <h4 class="mb-0">Goal Overview</h4>
                                    <p class="font-medium-5 mb-0"><i class="feather icon-help-circle text-muted cursor-pointer"></i></p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body px-0 pb-0">
                                        <div id="goal-overview-chart" class="mt-75"></div>
                                        <div class="row text-center mx-0">
                                            <div class="col-6 border-top border-right d-flex align-items-between flex-column py-1">
                                                <p class="mb-50">Completed</p>
                                                <p class="font-large-1 text-bold-700">786,617</p>
                                            </div>
                                            <div class="col-6 border-top d-flex align-items-between flex-column py-1">
                                                <p class="mb-50">In Progress</p>
                                                <p class="font-large-1 text-bold-700">13,561</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>


                 </section>
                 <!-- Dashboard Ecommerce ends -->

             </div>
         </div>
     </div>
     <!-- END: Content-->
 @endsection
