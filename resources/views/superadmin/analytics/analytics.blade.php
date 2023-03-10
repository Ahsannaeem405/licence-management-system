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
                            <h2 class="content-header-title float-left mb-0">Analytics</h2>

                        </div>
                    </div>
                </div>

                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">

                </div>
            </div>

            <div class="content-body">
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                {{-- <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb float-right m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('superadmin-add-customers') }}"
                                                class="btn btn-primary fa fa-plus"> Add Customer</a></li>
                                    </ol>
                                </div> --}}

                                <div class="card-content">
                                    <div class="card-body card-dashboard pt-0">

                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>Budget Report</th>
                                                        <th>Department Report</th>
                                                        <th>Address</th>
                                                        <th>Total Spent</th>
                                                        {{-- <th>Action</th> --}}
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tiger Nixon</td>
                                                        <td>ranatalha5093@gmail.com</td>
                                                        <td>Edinburgh</td>

                                                        <td>20798456</td>


                                                    </tr>
                                                    <tr>
                                                        <td>Garrett Winters</td>
                                                        <td> garrat66@gmail.com</td>
                                                        <td>Tokyo</td>

                                                        <td>307984563</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Ashton Cox</td>
                                                        <td>arhton0@gmail.com</td>
                                                        <td>San Francisco</td>
                                                        <td>10798456</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Cedric Kelly</td>
                                                        <td>cedric@gmail.com</td>
                                                        <td>Edinburgh</td>

                                                        <td>34079845</td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Airi Satou</td>
                                                        <td>airi8@gmail.com</td>
                                                        <td>Tokyo</td>

                                                        <td>4079845</td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Brielle Williamson</td>
                                                        <td>brille3@gmail.com</td>
                                                        <td>New York</td>

                                                        <td>330798</td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Herrod Chandler</td>
                                                        <td>herrod8@gmail.com</td>
                                                        <td>San Francisco</td>

                                                        <td>20798</td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Rhona Davidson</td>
                                                        <td>rhona88@gmail.com</td>
                                                        <td>Tokyo</td>

                                                        <td>207984</td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Colleen Hurst</td>
                                                        <td>sonya88@gmail.com</td>
                                                        <td>San Francisco</td>

                                                        <td>310798</td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Sonya Frost</td>
                                                        <td>jena88@gmail.com</td>
                                                        <td>Edinburgh</td>

                                                        <td>34079</td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Jena Gaines</td>
                                                        <td>flynn77@gmail.com</td>
                                                        <td>London</td>

                                                        <td>33054</td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Quinn Flynn</td>
                                                        <td>edinburugh55@gmail.com</td>
                                                        <td>Edinburgh</td>

                                                        <td>03207984 </td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Charde Marshall</td>
                                                        <td>haley66@gmail.com</td>
                                                        <td>San Francisco</td>

                                                        <td>0310798 </td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Haley Kennedy</td>
                                                        <td>tatyana44@gmail.com</td>
                                                        <td>London</td>

                                                        <td>0310798 </td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Tatyana Fitzpatrick</td>
                                                        <td>silva1@gmail.com</td>
                                                        <td>London</td>

                                                        <td>031079 </td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Michael Silva</td>
                                                        <td>byrud33@gmail.com</td>
                                                        <td>London</td>

                                                        <td>0312798 </td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Paul Byrd</td>
                                                        <td>little44@gmail.com</td>
                                                        <td>New York</td>

                                                        <td>03187984 </td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Gloria Little</td>
                                                        <td>greer33@gmail.com</td>
                                                        <td>New York</td>

                                                        <td>031479 </td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Bradley Greer</td>
                                                        <td>caldwel7@gmail.com</td>
                                                        <td>London</td>

                                                        <td>0317798 </td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Dai Rios</td>
                                                        <td>berry33@gmail.com</td>
                                                        <td>Edinburgh</td>

                                                        <td>0317798 </td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Jenette Caldwell</td>
                                                        <td>steven1@gmail.com</td>
                                                        <td>New York</td>

                                                        <td>0319798 </td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Yuri Berry</td>
                                                        <td>butler2@gmail.com</td>
                                                        <td>New York</td>

                                                        <td>0313798 </td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Cara Stevens</td>
                                                        <td>ahmed@gmail.com</td>
                                                        <td>New York</td>

                                                        <td>0310998 </td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Hermione Butler</td>
                                                        <td>rahul3@gmail.com</td>
                                                        <td>London</td>

                                                        <td>0311798 </td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>

                                                    <tr>
                                                        <td>Lael Greer</td>
                                                        <td>angel5093@gmail.com</td>
                                                        <td>London</td>

                                                        <td>031079 </td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Jonas Alexander</td>
                                                        <td>ahmed3@gmail.com</td>
                                                        <td>San Francisco</td>

                                                        <td>0314798 </td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Shad Decker</td>
                                                        <td>taha93@gmail.com</td>
                                                        <td>Edinburgh</td>

                                                        <td>0313798 </td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Michael Bruce</td>
                                                        <td>shiekh@gmail.com</td>
                                                        <td>Singapore</td>

                                                        <td>03127 </td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
                                                    <tr>
                                                        <td>Donna Snider</td>
                                                        <td>talha93@gmail.com</td>
                                                        <td>New York</td>

                                                        <td>031179 </td>
                                                        {{-- <td>
                                                            <a href="#"><i class="fa fa-edit text-warning"></i></a>
                                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                                        </td> --}}
                                                    </tr>
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
