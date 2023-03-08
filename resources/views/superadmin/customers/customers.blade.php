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
                            <h2 class="content-header-title float-left mb-0">{{__('messages.customer')}}</h2>

                        </div>
                        {{-- {{ Config::get('app.locale') }} --}}
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
                                        <a href="{{ route('superadmin-add-customers') }}" class="btn btn-primary mb-2" style="float: right;"><i class="feather icon-plus"></i>&nbsp;{{__('messages.th add')}}</a>
                                        <div class="table-responsive">
                                            <table class="table table-striped zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>{{__('messages.th name')}}</th>
                                                        <th>{{__('messages.th email')}}</th>
                                                        <th>Role</th>
                                                        <th>{{__('messages.th address')}}</th>
                                                        <th>{{__('messages.th phone')}}</th>
                                                        <th>{{__('messages.th added')}}</th>
                                                        <th>Date</th>
                                                        <th>{{__('messages.th action')}}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $x=1;
                                                    @endphp
                                                    @foreach ($customers as $customer)
                                                        <tr>
                                                            <td>{{$x++}}</td>
                                                            <td>{{ $customer->name }}</td>
                                                            <td>{{ $customer->email }}</td>
                                                            <td class="product-category">
                                                                <div class="chip chip-primary">
                                                                    <div class="chip-body" style="max-width: 100px; width:auto; padding:5px;">
                                                                        <div class="chip-text"><strong>{{$customer->role}}</strong></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>{{ $customer->address }}</td>
                                                            <td>{{ $customer->phone }}</td>
                                                            @if($customer->add_by)
                                                            <td class="product-category">
                                                                <div class="chip chip-dark">
                                                                    <div class="chip-body" style="max-width: 100px; width:auto; padding:5px;">
                                                                        <div class="chip-text"><strong>{{MyHelper::get_addby($customer->add_by)->name}}</strong></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            @else
                                                            <td class="product-category">
                                                                <div class="chip chip-danger">
                                                                    <div class="chip-body" style="max-width: 100px; width:auto; padding:5px;">
                                                                        <div class="chip-text"><strong>N/A</strong></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            @endif
                                                            <td>{{\Carbon\carbon::createFromFormat('Y-m-d H:i:s',$customer->created_at)->format('d-F-Y') }}</td>
                                                            <td>
                                                                <span class="d-flex">
                                                                    <a href="{{route('superadmin-edit-customer',$customer->id)}}"><i class="fa fa-edit text-warning"></i></a>&nbsp;
                                                                    <form method="POST" action="{{route('superadmin-delete-customer',$customer->id)}}">
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