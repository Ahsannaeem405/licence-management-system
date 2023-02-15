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
                            <h2 class="content-header-title float-left mb-0">{{__('messages.depart license')}}</h2>

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
                                        <a href="{{ route('customer-add-license')}}" class="btn btn-primary mb-2" style="float: right;"><i class="feather icon-plus"></i>&nbsp;{{__('messages.add license')}}</a>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>{{__('messages.title')}}</th>
                                                        <th>{{__('messages.service')}}</th>
                                                        <th>{{__('messages.department')}}</th>
                                                        <th>{{__('messages.key')}}</th>
                                                        <th>{{__('messages.date i')}}</th>
                                                        <th>{{__('messages.date e')}}</th>
                                                        <th>{{__('messages.th action')}}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $x=1;
                                                    @endphp
                                                    @foreach ($licenses as $license)
                                                        <tr>
                                                            <td>{{$x++}}</td>
                                                            <td>{{ $license->title }}</td>
                                                            <td>{{$license->service->name}}</td>
                                                            <td>{{ $license->department->name }}</td>
                                                            <td>{{ $license->key }}</td>
                                                            <td>{{ \Carbon\carbon::createFromFormat('Y-m-d', $license->date_of_issue)->format('d-F-Y') }}
                                                            </td>
                                                            <td>{{ \Carbon\carbon::createFromFormat('Y-m-d', $license->date_of_expiry)->format('d-F-Y') }}
                                                            </td>
                                                            <td>
                                                                <span class="d-flex">
                                                                    <a href="{{route('customer-edit-license',$license->id)}}"><i class="fa fa-edit text-warning"></i></a>
                                                                    <form action="{{route('customer-delete-license',$license->id)}}" method="POST">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
@endsection

@section('js')
<script type="text/javascript">
    $('.show_confirm').click(function(event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: `Are you sure you want to delete this record?`,
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
    });
</script>
@endsection
