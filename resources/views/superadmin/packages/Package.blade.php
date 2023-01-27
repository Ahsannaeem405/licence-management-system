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
                            <h2 class="content-header-title float-left mb-0">Package</h2>

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

                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb float-right m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('superadmin-add-package') }}"
                                                class="btn btn-primary fa fa-plus"> Add Package</a></li>
                                    </ol>
                                </div>

                                <div class="card-content">
                                    <div class="card-body card-dashboard pt-0">

                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>

                                                        <th>Package</th>
                                                        <th>No of Entity</th>
                                                        <th>Price</th>
                                                        <th>Description</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($pack as $item)
                                                        <tr>

                                                            <td>{{ $item->package }}</td>
                                                            <td>{{ $item->entity }}</td>
                                                            <td>{{ $item->price }}</td>
                                                            <td>{{ $item->description }}</td>
                                                            <td>
                                                                <span class="d-flex">
                                                                    <a
                                                                        href="{{ route('superadmin-edit-package', $item->id) }}"><i
                                                                            class="fa fa-edit text-warning"></i></a>
                                                                    <form
                                                                        action="{{ route('superadmin-delete-package', $item->id) }}"
                                                                        method="POST">
                                                                        <input type="hidden" value="GET" name="_method">
                                                                        <button type="submit"
                                                                            class="show_confirm text-danger"
                                                                            style="border: none; background:transparent;"><i
                                                                                class="fa fa-trash"></i></button>
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
