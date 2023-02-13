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
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-end">
                                    <h4>Package Subscription</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pt-0">
                                        <div id="session-chart" class="mb-1"></div>
                                        <div class="chart-info d-flex justify-content-between mb-1">
                                            <div class="series-info d-flex align-items-center">
                                                <i class="fa fa-circle font-small-3 text-primary"></i>
                                                <span class="text-bold-600 mx-50">Free</span>
                                            </div>
                                            <div class="series-result">
                                                <span>{{$free_package}}</span>
                                                <i class="feather icon-arrow-up text-success"></i>
                                            </div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between mb-1">
                                            <div class="series-info d-flex align-items-center">
                                                <i class="fa fa-circle font-small-3 text-warning"></i>
                                                <span class="text-bold-600 mx-50">Plus</span>
                                            </div>
                                            <div class="series-result">
                                                <span>{{$plus_package}}</span>
                                                <i class="feather icon-arrow-up text-success"></i>
                                            </div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between mb-50">
                                            <div class="series-info d-flex align-items-center">
                                                <i class="fa fa-circle font-small-3 text-danger"></i>
                                                <span class="text-bold-600 mx-50">Pro</span>
                                            </div>
                                            <div class="series-result">
                                                <span>{{$pro_package}}</span>
                                                <i class="feather icon-arrow-down text-danger"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4 class="card-title">Customers</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body py-0">
                                        <div id="customer-chart"></div>
                                    </div>
                                    <ul class="list-group list-group-flush customer-info">
                                        <li class="list-group-item d-flex justify-content-between ">
                                            <div class="series-info">
                                                <i class="fa fa-circle font-small-3 text-primary"></i>
                                                <span class="text-bold-600">New Customers</span>
                                            </div>
                                            <div class="product-result">
                                                <span>{{$new_customers}}</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between ">
                                            <div class="series-info">
                                                <i class="fa fa-circle font-small-3 text-warning"></i>
                                                <span class="text-bold-600">Since 6 Months</span>
                                            </div>
                                            <div class="product-result">
                                                <span>{{$six_month_customers}}</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between ">
                                            <div class="series-info">
                                                <i class="fa fa-circle font-small-3 text-danger"></i>
                                                <span class="text-bold-600">Since 1 Year</span>
                                            </div>
                                            <div class="product-result">
                                                <span>{{$one_year_customers}}</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-end">
                                    <h4 class="card-title">Transactions</h4>
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
                    </div>
                 </section>
                 <!-- Dashboard Ecommerce ends -->
             </div>
         </div>
     </div>
     <!-- END: Content-->
 @endsection
@section('js')
<script>
    var $primary = '#7367F0';
    var $danger = '#EA5455';
    var $warning = '#FF9F43';
    var $info = '#00cfe8';
    var $success = '#00db89';
    var $primary_light = '#9c8cfc';
    var $warning_light = '#FFC085';
    var $danger_light = '#f29292';
    var $info_light = '#1edec5';
    var $strok_color = '#b9c3cd';
    var $label_color = '#e7eef7';
    var $purple = '#df87f2';
    var $white = '#fff';
    var sessionChartoptions = {
    chart: {
      type: 'donut',
      height: 325,
      toolbar: {
        show: false
      }
    },
    dataLabels: {
      enabled: false
    },
    // series: [58, 34, 10],
    series: [<?php echo $free_package;?>,<?php echo $plus_package;?>,<?php echo $pro_package;?>],
    legend: { show: false },
    comparedResult: [2, -3, 8],
    labels: ['Free', 'Plus', 'Pro'],
    stroke: { width: 0 },
    colors: [$primary, $warning, $danger],
    fill: {
      type: 'gradient',
      gradient: {
        gradientToColors: [$primary_light, $warning_light, $danger_light]
      }
    }
  }

  var sessionChart = new ApexCharts(
    document.querySelector("#session-chart"),
    sessionChartoptions
  );

  sessionChart.render();

  //------------------------ Customer Chart -------------------//
  var customerChartoptions = {
    chart: {
      type: 'pie',
      height: 330,
      dropShadow: {
        enabled: false,
        blur: 5,
        left: 1,
        top: 1,
        opacity: 0.2
      },
      toolbar: {
        show: false
      }
    },
    labels: ['New', 'Six Months', 'One Year'],
    // series: [690, 258, 149],
    series: [<?php echo $new_customers;?>,<?php echo $six_month_customers;?>,<?php echo $one_year_customers;?>],
    dataLabels: {
      enabled: false
    },
    legend: { show: false },
    stroke: {
      width: 5
    },
    colors: [$primary, $warning, $danger],
    fill: {
      type: 'gradient',
      gradient: {
        gradientToColors: [$primary_light, $warning_light, $danger_light]
      }
    }
  }

  var customerChart = new ApexCharts(
    document.querySelector("#customer-chart"),
    customerChartoptions
  );

  customerChart.render();
</script>

@endsection