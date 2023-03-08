@extends('customer.layouts.master')
@section('css')
    <style>
        .recent-license {
            background-color: #183153;
            color: white;
            padding: 4px;
        }

        .recent-license-date {
            background-color: #f7af32;
            color: white;
            padding: 2px;
            border-radius: 5px;
            float: right;
        }
    </style>
@endsection
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="card bg-analytics text-white">
                                <div class="card-content">
                                    <div class="card-body text-center" style="height: 240px;">
                                        <img src="{{ asset('assets/app-assets/images/elements/decore-left.png') }}"
                                            class="img-left" alt=" card-img-left">
                                        <img src="{{ asset('assets/app-assets/images/elements/decore-right.png') }}"
                                            class="img-right" alt="card-img-right">
                                        <div class="avatar avatar-xl bg-primary shadow mt-0">
                                            <div class="avatar-content">
                                                <i class="feather icon-award white font-large-1"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">

                                            <p class="mb-2 text-white bg-white text-dark"><i
                                                    class="fa-solid fa-building"></i> <b>Total Departments</b>:
                                                {{ $total_department }}</p>
                                            <p class="mb-2 text-white bg-white text-dark"><i class="fa-solid fa-people-group"></i> <b>Total Managers</b>: {{ $total_managers }}
                                            </p>
                                            {{-- <p class="m-auto w-75">You have done <strong>57.6%</strong> more sales today. Check your new badge in your profile.</p> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <a href="{{ route('customer-management') }}">
                                <div class="card">
                                    <div class="card-header d-flex flex-column align-items-start pb-0">
                                        <div class="avatar bg-rgba-danger p-50 m-0">
                                            <div class="avatar-content">
                                                <i class="feather icon-credit-card text-danger font-medium-5"></i>
                                            </div>
                                        </div>
                                        <p class="mt-1 text-white bg-white text-dark"><i
                                                class=""></i><b>Active Licenses</b>:
                                            {{ $active_license }}</p>
                                        <p class="mt-0 text-white bg-white text-dark"><i
                                                class=""></i><b>Inactive Licenses</b>:
                                            {{ $deactive_license }}</p>
                                        {{-- <h2 class="text-bold-700 mt-1">{{ $total_managers }}</h2>
                                        <p class="mb-0">Total Managers</p> --}}
                                    </div>
                                    <div class="card-content">
                                        <div id="line-area-chart-3"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <a href="{{ route('customer-department') }}">
                                <div class="card">
                                    <div class="card-header d-flex flex-column align-items-start pb-0">
                                        <div class="avatar bg-rgba-warning p-50 m-0">
                                            <div class="avatar-content">
                                                <i class="feather icon-alert-triangle text-warning font-medium-5"></i>
                                            </div>
                                        </div>
                                        <p class="mt-1 text-white bg-white text-dark"><i
                                                class=""></i><b>Renew Alerts</b>: {{ $renew_alerts }}
                                        </p>
                                        <p class="mt-0 text-white bg-white text-dark"><i
                                                class=""></i><b>Expiry Alerts</b>: {{ $expiry_alerts }}
                                        </p>
                                        {{-- <p class="mb-0">{{ __('messages.total departments') }}</p> --}}
                                    </div>

                                    <div class="card-content">
                                        <div id="line-area-chart-4"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <a href="{{ route('customer-license') }}">
                                <div class="card">
                                    <div class="card-header d-flex flex-column align-items-start pb-0">
                                        <div class="avatar bg-rgba-success p-50 m-0">
                                            <div class="avatar-content">
                                                <i class="feather icon-credit-card text-success font-medium-5"></i>
                                            </div>
                                        </div>
                                        <p class="mt-1 text-white bg-white text-dark"><i
                                                class=""></i><b>All Licenses</b>: {{ $active_license }}
                                        </p>
                                        <p class="mt-0 text-white bg-white text-dark"><i
                                                class=""></i><b>Active Expenses</b>:
                                            </p>
                                    </div>
                                    <div class="card-content">
                                        <div id="line-area-chart-2"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card" id="bar-chart"></div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="card" id="chart"></div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="card p-1">
                                <h6>Recently Added Licences</h6>
                                <div class="row">
                                    <div class="col-12">

                                        @foreach ($top_license as $license)
                                            <div class="wrapper border-bottom p-1">
                                                <small class="recent-license">{{ $license->title }}</small>
                                                <small class="recent-license-date">
                                                    {{ \Carbon\Carbon::parse($license->created_at)->format('Y-m-d') }}</small>
                                            </div>
                                        @endforeach
                                        {{-- <div class="wrapper border-bottom p-1">
                                          <small class="recent-license">License</small>
                                          <small>Customer</small>
                                          <small class="recent-license-date">21-Feb-2023</small>
                                        </div>
                                        <div class="wrapper border-bottom p-1">
                                            <small class="recent-license">License</small>
                                            <small>Customer</small>
                                            <small class="recent-license-date">21-Feb-2023</small>
                                        </div>
                                        <div class="wrapper border-bottom p-1">
                                            <small class="recent-license">License</small>
                                            <small>Customer</small>
                                            <small class="recent-license-date">22-Feb-2023</small>
                                        </div>
                                        <div class="wrapper border-bottom p-1">
                                            <small class="recent-license">License</small>
                                            <small>Customer</small>
                                            <small class="recent-license-date">23-Feb-2023</small>
                                        </div>
                                        <div class="wrapper border-bottom p-1">
                                            <small class="recent-license">License</small>
                                            <small>Customer</small>
                                            <small class="recent-license-date">24-Feb-2023</small>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
@section('js')
    {{-- -------------------------------------- License Distribution Chart ------------------------------- --}}
    <script>
        var options = {
            series: [{
                name: 'Information Technology',
                data: [1, 2, 3, 4, 5]
            }, {
                name: 'Computer Science',
                data: [6, 7, 8, 9, 10]
            }, {
                name: 'Software Science',
                data: [11, 12, 13, 14, 15]
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
                text: 'License Distribution',
                align: 'center'
            },
        };

        var chart = new ApexCharts(document.querySelector("#bar-chart"), options);
        chart.render();
    </script>
    {{-- -------------------------------------- License Distribution Chart ------------------------------- --}}

    {{-- -------------------------------------- Budegt Distribution Chart ------------------------------- --}}
    <script>
        var options = {
            series: [{
                    name: "Information Technology",
                    data: [1, 2, 3, 4, 5]
                },
                {
                    name: "Computer Science",
                    data: [6, 7, 8, 9, 10]
                },
                {
                    name: 'Software Science',
                    data: [11, 12, 13, 14, 15]
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
                text: 'Budget Distribution',
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
                            formatter: function(val) {
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
    {{-- -------------------------------------- Budegt Distribution Chart ------------------------------- --}}
@endsection
