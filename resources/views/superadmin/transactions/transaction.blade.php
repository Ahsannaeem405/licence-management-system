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
                        <h2 class="content-header-title float-left mb-0">Transaction </h2>
                        
                    </div>
                </div>
             </div>
             <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                     
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
                                                    <td>User Name</td>
                                                    <td>package</td>
                                                    <td>price</td>
                                                    <td>created_at</td>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @php
                                                    $x=1;
                                                @endphp
                                                @foreach ($transactions as $transaction)
                                                <tr>
                                                    <th>{{$x++}}</th>
                                                    <th>{{$transaction->user->name}}</th>
                                                    <th>{{$transaction->package->package}}</th>
                                                    <th>{{$transaction->package->price}}</th>
                                                    <th>{{$transaction->package->created_at}}</th>
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