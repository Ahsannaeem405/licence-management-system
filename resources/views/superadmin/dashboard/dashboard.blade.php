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
                        <div class="col-lg-4 col-md-4 col-sm-12">
                          <div class="card" id="bar-chart"></div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12">
                          <div class="card" id="chart"></div>
                        </div>
                        
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="row">
                                <div class="col-12">
                                    <a href="{{route('superadmin-customers')}}">
                                        <div class="card">
                                            <div class="card-header flex-column align-items-start">
                                                <div class="d-flex">
                                                    <div class="avatar bg-rgba-primary p-50 avatar-content" style="margin-top:-5px;">
                                                        <i class="feather icon-users text-primary font-medium-5"></i>
                                                    </div>
                                                    <p class="mb-0">Customers</p>&nbsp;&nbsp;
                                                    <h4 class="text-bold-700">{{$total_customers}}</h4>
                                                </div>
                                                
                                            </div>
                                            {{-- <div class="card-content">
                                                <div id="line-area-chart-1"></div>
                                            </div> --}}
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{route('superadmin-package')}}">
                                        <div class="card">
                                            <div class="card-header flex-column align-items-start pb-0">
                                                <div class="d-flex">
                                                    <div class="avatar bg-rgba-success p-50 avatar-content" style="margin-top:-5px;">
                                                        <i class="feather icon-credit-card text-success font-medium-5"></i>
                                                    </div>
                                                    <p class="mb-0">Packages</p>&nbsp;&nbsp;
                                                    <h4 class="text-bold-700">{{$total_packages}}</h4>
                                                </div>
                                            </div>
                                            {{-- <div class="card-content">
                                                <div id="line-area-chart-2"></div>
                                            </div> --}}
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{route('superadmin-license')}}">
                                        <div class="card">
                                            <div class="card-header flex-column align-items-start pb-0">
                                                <div class="d-flex">
                                                    <div class="avatar bg-rgba-danger p-50 avatar-content" style="margin-top:-5px;">
                                                        <i class="fa fa-drivers-license-o text-danger font-medium-5"></i>
                                                    </div>
                                                    <p class="mb-0">Licenses</p>&nbsp;&nbsp;
                                                    <h4 class="text-bold-700">{{$total_license}}</h4>
                                                </div>
                                            </div>
                                            {{-- <div class="card-content">
                                                <div id="line-area-chart-3"></div>
                                            </div> --}}
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header flex-column align-items-start pb-0">
                                            <div class="d-flex">
                                                <div class="avatar bg-rgba-warning p-50 avatar-content" style="margin-top:-5px;">
                                                    <i class="feather icon-package text-warning font-medium-5"></i>
                                                </div>
                                                <p class="mb-0">Departments</p>&nbsp;&nbsp;
                                                <h4 class="text-bold-700">{{$total_departments}}</h4>
                                            </div>
                                            
                                        </div>
                                        {{-- <div class="card-content">
                                            <div id="line-area-chart-4"></div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
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
                                                    <span class="text-success">{{$current_month}}</span>
                                                </h2>
                                            </div>
                                            <div>
                                                <p class="mb-50 text-bold-600">Last Month</p>
                                                <h2 class="text-bold-400">
                                                    <sup class="font-medium-1">$</sup>
                                                    <span>{{$last_month}}</span>
                                                </h2>
                                            </div>

                                        </div>
                                        <div id="revenue-chart"></div>
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
                        {{-- <div class="col-lg-6 col-md-6 col-12">
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
                        </div> --}}
                    </div>
                 </section>
                 <!-- Dashboard Ecommerce ends -->
             </div>
         </div>
     </div>
     <!-- END: Content-->
 @endsection
@section('js')
<script src="https://fastly.jsdelivr.net/npm/echarts@5.4.1/dist/echarts.min.js"></script>
<script>
    var options = {
          series: [{
            name: "Free",
            data: [45, 52, 38, 24, 33, 26, 21, 20, 6, 8, 15, 10]
          },
          {
            name: "Plus",
            data: [35, 41, 62, 42, 13, 18, 29, 37, 36, 51, 32, 35]
          },
          {
            name: 'Pro',
            data: [87, 57, 74, 99, 75, 38, 62, 47, 82, 56, 45, 47]
          }
        ],
          chart: {
          height: 300,
          type: 'line',
          zoom: {
            enabled: false
          },
        },
        dataLabels: {
          enabled: false
        },
        // stroke: {
        //   width: [5, 7, 5],
        //   curve: 'straight',
        //   dashArray: [0, 8, 5]
        // },
        title: {
          text: 'Revenue Distribution',
          align: 'center'
        },
        legend: {
          tooltipHoverFormatter: function(val, opts) {
            return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
          }
        },
        markers: {
          size: 0,
          hover: {
            sizeOffset: 6
          }
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'july', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        },
        tooltip: {
          y: [
            // {
            //   title: {
            //     formatter: function (val) {
            //       return val + " (mins)"
            //     }
            //   }
            // },
            // {
            //   title: {
            //     formatter: function (val) {
            //       return val + " per session"
            //     }
            //   }
            // },
            {
              title: {
                formatter: function (val) {
                  return val;
                }
              }
            }
          ]
        },
        grid: {
          borderColor: '#f1f1f1',
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
</script>
{{--------------------------- Subcription Distribution  ---------------------------------}}
<script>
     var options = {
          series: [{
          name: 'Free',

          data: [44, 55, 41, 67, 22, 43, 21, 49, 90, 76, 89, 33]
        }, {
          name: 'Plus',
          data: [13, 23, 20, 8, 13, 27, 33, 12, 90, 76, 89, 33]
        }, {
          name: 'Pro',
          data: [11, 17, 15, 15, 21, 14, 15, 13, 90, 76, 89, 33]
        }],
          chart: {
          type: 'bar',
          height: 300,
          stacked: true,
          stackType: '100%'
        },
        responsive: [{
          breakpoint: 480,
          options: {
            legend: {
              position: 'bottom',
              offsetX: -10,
              offsetY: 0
            }
          }
        }],
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'july', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        },
        fill: {
          opacity: 1
        },
        legend: {
          position: 'bottom',
          offsetX: 0,
          offsetY: 0
        },
        title: {
          text: 'Subscription Distribution',
          align: 'center'
        },
        };

        var chart = new ApexCharts(document.querySelector("#bar-chart"), options);
        chart.render();
</script>
{{--------------------------- Subcription Distribution  ---------------------------------}}

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
    var sessionChartoptions = 
    {
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
    var customerChartoptions = 
    {
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

    //------------------------ Revenue Chart -------------------//
    var revenueChartoptions = 
    {
      chart: {
        height: 270,
        toolbar: { show: false },
        type: 'line',
      },
      stroke: {
        curve: 'smooth',
        dashArray: [0, 8],
        width: [4, 2],
      },
      grid: {
        borderColor: $label_color,
      },
      legend: {
        show: false,
      },
      colors: [$danger_light, $strok_color],
  
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          inverseColors: false,
          gradientToColors: [$primary, $strok_color],
          shadeIntensity: 1,
          type: 'horizontal',
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100, 100, 100]
        },
      },
      markers: {
        size: 0,
        hover: {
          size: 5
        }
      },
      xaxis: {
        labels: {
          style: {
            colors: $strok_color,
          }
        },
        axisTicks: {
          show: false,
        },
         //categories: ['01', '05', '09', '13', '17', '21', '26', '31'],
        categories: [<?php if(isset($current_date)){for($i=0; $i<count($current_date); $i++){echo "\"".\Carbon\carbon::parse($current_date[$i])->format('d')."\"".',';}} ?>],
        axisBorder: {
          show: false,
        },
        tickPlacement: 'on',
      },
      yaxis: {
        tickAmount: 5,
        labels: {
          style: {
            color: $strok_color,
          },
          formatter: function (val) {
            return val > 999 ? (val / 1000).toFixed(1) + 'k' : val;
          }
        }
      },
      tooltip: {
        x: { show: false }
      },
      series: [{
        name: "This Month",
        //  data: [45000, 47000, 44800, 47500, 45500, 48000, 46500, 48600]
        data: [<?php if(isset($current_amount)){for($i=0; $i<count($current_amount); $i++){echo "\"".($current_amount[$i])."\"".',';}} ?>]

      },
      {
        name: "Last Month",
        //  data: [46000, 48000, 45500, 46600, 44500, 46500, 45000, 47000]
        data: [<?php if(isset($last_amount)){for($i=0; $i<count($last_amount); $i++){echo "\"".($last_amount[$i])."\"".',';}} ?>]

      }
      ],
  
    }
  
    var revenueChart = new ApexCharts(
      document.querySelector("#revenue-chart"),
      revenueChartoptions
    );
  
    revenueChart.render();
</script>
@endsection


