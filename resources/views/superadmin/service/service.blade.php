@extends('superadmin.layouts.master')
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
                            <h2 class="content-header-title float-left mb-0">Services</h2>

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
                                        <a href="{{ route('superadmin-add-service') }}" class="btn btn-primary mb-2" style="float: right;"><i class="feather icon-plus"></i>&nbsp; Add Service</a>
                                        <div class="table-responsive">
                                            <table class="table table-striped zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($services as $service)
                                                        <tr>
                                                            <td>{{ $service->name }}</td>
                                                           
                                                            <td>
                                                                <span class="d-flex">
                                                                    <a href="{{route('superadmin-edit-service',$service->id)}}"><i class="fa fa-edit text-warning"></i></a>&nbsp;
                                                                    <form method="POST" action="{{route('superadmin-delete-service',$service->id)}}">
                                                                        @csrf
                                                                        <input name="_method" type="hidden" value="GET">
                                                                        <button type="submit" class="show_confirm" data-toggle="tooltip" title='Delete' style="border:none; background-color:transparent;"><i class="text-danger feather icon-trash"></i></button>
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

@section('js')
<script type="text/javascript">
    $('.show_confirm').click(function(event) {
        var form =  $(this).closest("form");
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