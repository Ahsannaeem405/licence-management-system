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
                            <h2 class="content-header-title float-left mb-0">{{__('messages.multi lang')}}</h2>

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
                                        <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#inlineForm" style="float: right;"><i class="feather icon-plus"></i>&nbsp; {{__('messages.add lang')}}</button>
                                        <div class="table-responsive">
                                            <table class="table table-striped zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>{{__('messages.lang coun')}}</th>
                                                        <th>{{__('messages.lang')}}</th>
                                                        <th>{{__('messages.th action')}}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $x=1;
                                                    @endphp
                                                    @foreach($languages as $language)
                                                    <tr>
                                                        <td>{{$x++}}</td>
                                                        <td>{{$language->country}}</td>
                                                        <td>{{$language->language}}</td>
                                                        <td>
                                                            <span class="d-flex">
                                                                <a href="{{route('superadmin-edit-language',$language->id)}}"><i class="fa fa-edit text-warning"></i></a>
                                                                <form method="POST" action="{{route('superadmin-delete-language',$language->id)}}">
                                                                    @csrf
                                                                    <input name="_method" type="hidden" value="GET">
                                                                    <button type="submit" class="show_confirm" data-toggle="tooltip" title='Delete' style="border:none; background-color:transparent;"><i class="text-danger fa fa-trash"></i></button>
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
                <!-- Modal -->
                <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel33" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel33"> </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{route('superadmin-add-language')}}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <label>{{__('messages.lang coun')}}</label>
                                    <div class="form-group">
                                        <input type="text" name="country" placeholder="Enter Country Name" class="form-control">
                                    </div>
                                    <label>{{__('messages.lang')}}</label>
                                    <div class="form-group">
                                        <input type="text" name="language" placeholder="Enter Language" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">{{__('messages.frm submit')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
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
