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
                            <h2 class="content-header-title float-left mb-0">Department Licenses</h2>

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
                                        <a href="{{ route('customer-add-license') }}" class="btn btn-primary mb-2" style="float: right;"><i class="feather icon-plus"></i>&nbsp; Add License</a>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>Title</th>
                                                        <th>Department</th>
                                                        <th>Key</th>
                                                        <th>Date of Issue</th>
                                                        <th>Date of Expiry</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($license as $item)
                                                        <tr>

                                                            <td>{{ $item->title }}</td>
                                                            <td>{{ $item->department->department_name }}</td>
                                                            <td>{{ $item->service }}</td>
                                                            <td>{{ $item->key }}</td>
                                                            <td>{{ \Carbon\carbon::createFromFormat('Y-m-d', $item->date_of_issue)->format('d-F-Y') }}
                                                            </td>
                                                            <td>{{ \Carbon\carbon::createFromFormat('Y-m-d', $item->date_of_expiry)->format('d-F-Y') }}
                                                            </td>
                                                            <td>
                                                                <a href="{{route('customer-edit-license',$item->id)}}"><i class="fa fa-edit text-warning"></i></a>
                                                                <a href="{{route('customer-delete-license',$item->id)}}"><i class="fa fa-trash text-danger"></i></a>
                                                            </td>

                                                            {{-- <span class="d-flex">
                                                                <form action="{{route('license-delete',$item->id)}}" method="POST">
                                                                    <input type="hidden" value="GET" name="_method">
                                                                    <button type="submit" class="show_confirm text-danger" style="border: none; background:transparent;"><i class="fa fa-trash"></i></button>
                                                                </form>
                                                                <a href="#" class="open" data-key={{$item->key}}><i class="fa fa-copy"  ></i></a>
                                                            </span>  --}}
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

        // $(document).ready(function(){

        // $('.key').hide();
        // $('#open').on('click',function(){
        //     $('.key').show();
        // })

        // });
        // $('.open').click(function(){
        //     var copytext = $(this).attr('data-key');

        //     copytext.select();
        //     navigator.clipboard.writeText(copytext.value);
        // });
    </script>
@endsection
