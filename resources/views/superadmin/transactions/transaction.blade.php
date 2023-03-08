@extends('superadmin.layouts.master')
@section('css')
<style>
    table.dataTable thead tr {
        background-color: #183153;
        color: white;

    }
    table.dataTable tbody td {
        border: 0.01px solid rgb(224, 224, 224);
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
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Transactions</h2>
                            
                        </div>
                    </div>
                 </div>
                 <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        {{-- <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div> --}}
                    </div>
                </div> 
            </div>
            <div class="content-body">
                 <!-- Zero configuration table -->
                 <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>User Name</th>
                                                        <th>package</th>
                                                        <th>price</th>
                                                        <th>created_at</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                
                                                    @php
                                                        $x = 1;
                                                    @endphp
                
                                                    @foreach ($transactions as $transaction)
                                                        <tr>
                                                            <td>{{ $x++ }}</td>
                                                            <td>{{ $transaction->user->name }}</td>
                                                            <td>{{ $transaction->package->name }}</td>
                                                            <td>{{ $transaction->package->price }}</td>
                                                            <td>{{\Carbon\carbon::createFromFormat('Y-m-d H:i:s',$transaction->package->created_at)->format('d-F-Y') }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->
            </div>
        </div>
    </div>
     @endsection
@section('js')
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#dataTable').DataTable({
                dom: "Blfrtip",
                buttons: [{
                        extend: 'pdfHtml5',
                        text: '<button  class="btn  btn-primary w-100 px-3 "><i class="fa fa-file-pdf-o mr-1 "></i> PDF</button>',

                        title: 'Customer Profiles',
                        exportOptions: {
                            columns: ':visible:not(.not-export)'
                        }

                    },
                    {
                        text: '<button  class="btn  btn-primary w-100 px-3 "><i class="fa fa-copy mr-1"></i> Copy</button>',
                        extend: 'copyHtml5',
                        title: 'Customer Profiles',
                        exportOptions: {
                            columns: ':visible:not(.not-export)'
                        }
                    },
                    {
                        text: '<button  class="btn  btn-primary w-100 px-3 "><i class="fa fa-file-excel-o mr-1"></i> Excel</button>',
                        extend: 'excelHtml5',
                        title: 'Customer Profiles',
                        exportOptions: {
                            columns: ':visible:not(.not-export)'
                        }
                    },
                    {
                        extend: 'print',
                        text: '<button  class="btn  btn-primary w-100 px-3 "><i class="fa fa-print mr-1"></i> Print</button>',

                        pageSize: 'A4',
                        title: 'Customer Profiles',
                        exportOptions: {
                            columns: ':visible:not(.not-export)'
                        }
                    },
                ]
            });
        });
    </script>
@endsection