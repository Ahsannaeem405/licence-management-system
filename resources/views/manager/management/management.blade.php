@extends('manager.layouts.master')
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
                            <h2 class="content-header-title float-left mb-0">Management</h2>

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
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <a href="{{ route('manager-add-management') }}" class="btn btn-primary mb-2" style="float: right;"><i class="feather icon-plus"></i>&nbsp; Add Management</a>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Role</th>
                                                        <th>Department</th>
                                                        <th>Added By</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                @php
                                                    $x=1;
                                                @endphp
                                                <tbody>
                                                    @foreach($users as $user)
                                                    <tr>
                                                        <td>{{$x++}}</td>
                                                        <td>{{$user->name}}</td>
                                                        <td>{{$user->email}}</td>
                                                        @if($user->role == 'manager')
                                                        <td class="product-category">
                                                            <div class="chip chip-primary">
                                                                <div class="chip-body" style="max-width: 100px; width:65px; padding:5px;">
                                                                    <div class="chip-text"><strong>{{$user->role}}</strong></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        @elseif($user->role == 'owner')
                                                        <td class="product-category">
                                                            <div class="chip chip-info">
                                                                <div class="chip-body" style="max-width: 100px; width:65px; padding:5px;">
                                                                    <div class="chip-text"><strong>{{$user->role}}</strong></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        @endif
                                                        <td>{{$user->department->name}}</td>
                                                        @foreach ($user->addby as $addedby )
                                                        <td class="product-category">
                                                            <div class="chip chip-dark">
                                                                <div class="chip-body" style="max-width: 100px; width:65px; padding:5px;">
                                                                    <div class="chip-text"><strong>{{$addedby->name}}</strong></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        @endforeach
                                                        <td>
                                                            <span class="d-flex">
                                                                <a href="{{route('manager-edit-management',$user->id)}}"><i class="fa fa-edit text-warning"></i></a>
                                                                <form action="{{route('manager-delete-management',$user->id)}}" method="POST">
                                                                    <input type="hidden" value="GET" name="_method">
                                                                    <button type="submit" class="show_confirm text-danger" style="border: none; background:transparent;"><i class="fa fa-trash"></i></button>
                                                                </form>
                                                            </span> 
                                                        </td>
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
