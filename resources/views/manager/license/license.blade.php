@extends('manager.layouts.master')
@section('css')
<style>
    table.dataTable thead tr {
        background-color: #183153;
        color: white;
    }
    table.dataTable tbody td {
        border: 0.01px solid rgb(224, 224, 224);
    }
    .buttons-copy , .buttons-pdf , .buttons-print {
        background-color: #7367F0 !important;
    }
</style>
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">License</h2>

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
                                        <a href="{{ route('manager-add-license')}}" class="btn btn-primary mb-2" style="float: right;"><i class="feather icon-plus"></i>&nbsp; Add License</a>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>&nbsp;<input class="mychecks" type="checkbox" value="" id="select_all"></th>
                                                        <th>Title</th>
                                                        <th>Department</th>
                                                        <th>Key</th>
                                                        <th>Price</th>
                                                        <th>Attachment</th>
                                                        <th>Purchase Date</th>
                                                        <th>Renew Date</th>
                                                        <th>Date of Issue</th>
                                                        <th>Date of Expiry</th>
                                                        <th>Renew Alert</th>
                                                        <th>Expiry Alert</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $x=1;
                                                    @endphp
                                                    @foreach ($licenses as $license)
                                                        <tr>
                                                            <td><input type="checkbox" class="mychecks" value="" data-id="{{$license->id}}"></td>
                                                            <td>{{ $license->title }}</td>
                                                            <td>{{ $license->department->name }}</td>
                                                            <td>{{ $license->key }}</td>
                                                            <td>{{Auth::user()->currency}} {{ $license->price}}</td>
                                                            @if($license->attachment)
                                                            <td> <a href="{{asset('license-attachments')}}/{{$license->attachment}}" download><i class="fa fa-download"></i>Download</a></td>
                                                            @else
                                                            <td class="text-danger">N/A</td>
                                                            @endif
                                                            <td>{{ \Carbon\Carbon::parse($license->purchase_date)->format('d-F-Y') }}</td>
                                                            <td>{{ \Carbon\carbon::parse($license->renew_date)->format('d-F-Y') }}</td>
                                                            <td>{{ \Carbon\carbon::createFromFormat('Y-m-d', $license->date_of_issue)->format('d-F-Y') }}</td>
                                                            <td>{{ \Carbon\carbon::createFromFormat('Y-m-d', $license->date_of_expiry)->format('d-F-Y') }}</td>
                                                            @if($license->renew_alert == 1)
                                                            <td class="product-category">
                                                                <div class="chip chip-success">
                                                                    <div class="chip-body" style="max-width: 100px; width:auto; padding:5px;">
                                                                        <div class="chip-text"><strong>Active</strong></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            @else
                                                            <td class="product-category">
                                                                <div class="chip chip-warning">
                                                                    <div class="chip-body" style="max-width: 100px; width:auto; padding:5px;">
                                                                        <div class="chip-text"><strong>Disable</strong></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            @endif
                                                            @if($license->expiry_alert == 1)
                                                            <td class="product-category">
                                                                <div class="chip chip-success">
                                                                    <div class="chip-body" style="max-width: 100px; width:auto; padding:5px;">
                                                                        <div class="chip-text"><strong>Active</strong></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            @else
                                                            <td class="product-category">
                                                                <div class="chip chip-warning">
                                                                    <div class="chip-body" style="max-width: 100px; width:auto; padding:5px;">
                                                                        <div class="chip-text"><strong>Disable</strong></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            @endif
                                                            <td>
                                                                <span class="d-flex">
                                                                    <a href="{{route('manager-edit-license',$license->id)}}"><i class="fa fa-edit text-warning"></i></a>
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
                                            <form method="POST" action="{{route('export-manager-license')}}">
                                                @csrf
                                                <input type="hidden" name="id" value="" id="exp-fav">
                                                <button class="btn btn-primary" type="submit" id="export_btn" disabled><i class="fa fa-file-pdf-o"></i> Export</button>
                                                <button class="btn btn-primary" type="button" id="share_btn" data-toggle="modal" data-target="#exampleModalCenter" disabled><i class="fa fa-share"></i> Share</button>
                                            </form>
                                             <!-- Modal -->
                                             <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Send License List</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="POST" action="{{route('share-manager-license')}}">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label>Email</label>
                                                                    <input type="hidden" name="id" value="" id="fav">
                                                                    <input class="form-control" type="email" name="email" placeholder="Enter Email" required>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Send</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal -->
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
<script>
    // This part will check the (checked) all checkBoxes and add it into array //
    $("#select_all").change(function(){
        var favorite = [];
        $(".mychecks").prop('checked', $(this).prop("checked"));
        $.each($("input[class='mychecks']:checked"), function(){
            if($(this).attr('data-id') != null)
            {
                favorite.push($(this).attr('data-id'));
                console.log(favorite);
            }
        });
        ($('#fav').attr('value',favorite));
        $('#exp-fav').attr('value',favorite);
    });

    // This part will check the (checked) checkBoxes which are clicked  one by one and add it into array //
    $('.mychecks').change(function(){ 
        var fav = [];
        $.each($("input[class='mychecks']:checked"), function(){
            if($(this).attr('data-id') != null)
            {
                fav.push($(this).attr('data-id'));
                console.log(fav);
            }
        });
        ($('#fav').attr('value',fav));
        $('#exp-fav').attr('value',fav);
        if(false == $(this).prop("checked"))
        { 
            $("#select_all").prop('checked', false);
            
        }
        if ($('.mychecks:checked').length == $('.mychecks').length )
        {
            $("#select_all").prop('checked', true);
            
        }
    });

    // This part will check the (checked) check-box and then enable the button to be used //
    var checkBoxes = $('.mychecks');
    checkBoxes.change(function () {
        $('#share_btn').prop('disabled', checkBoxes.filter(':checked').length < 1);
        $('#export_btn').prop('disabled', checkBoxes.filter(':checked').length < 1);
    });
    $('.mychecks').change();
</script>
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