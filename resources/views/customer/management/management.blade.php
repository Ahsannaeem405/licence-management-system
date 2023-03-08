@extends('customer.layouts.master')
@section('css')
    <style>
        table.dataTable thead tr {
            background-color: #183153;
            color: white;
        }

        table.dataTable tbody td {
            border: 0.01px solid rgb(224, 224, 224);
        }

        .buttons-copy,
        .buttons-pdf,
        .buttons-print {
            background-color: #7367F0 !important;
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
                                        <a href="{{ route('customer-add-management') }}" class="btn btn-primary mb-2"
                                            style="float: right;"><i class="feather icon-plus"></i>&nbsp; Add Management</a>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>&nbsp;<input class="mychecks" type="checkbox" value=""
                                                                id="select_all"></th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Role</th>
                                                        <th>Department</th>
                                                        <th>Added By</th>
                                                        <th>Added On</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                @php
                                                    $x = 1;
                                                @endphp
                                                <tbody>
                                                    @foreach ($users as $user)
                                                        <tr>
                                                            <td><input type="checkbox" class="mychecks" value=""
                                                                    data-id="{{ $user->id }}"></td>
                                                            <td>{{ $user->name }}</td>
                                                            <td>{{ $user->email }}</td>
                                                            @if ($user->role == 'manager')
                                                                <td class="product-category">
                                                                    <div class="chip chip-primary">
                                                                        <div class="chip-body"
                                                                            style="max-width: 100px; width:65px; padding:5px;">
                                                                            <div class="chip-text">
                                                                                <strong>{{ $user->role }}</strong></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            @elseif($user->role == 'owner')
                                                                <td class="product-category">
                                                                    <div class="chip chip-info">
                                                                        <div class="chip-body"
                                                                            style="max-width: 100px; width:65px; padding:5px;">
                                                                            <div class="chip-text">
                                                                                <strong>{{ $user->role }}</strong></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            @endif
                                                            <td>{{ $user->department->name }}</td>
                                                            <td class="product-category">
                                                                <div class="chip chip-dark">
                                                                    <div class="chip-body"
                                                                        style="max-width: 100px; width:65px; padding:6px;">
                                                                        <div class="chip-text">
                                                                            <strong>{{ MyHelper::get_addby($user->add_by)->name }}</strong>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="product-category">
                                                                <div class="chip chip-dark">
                                                                    <div class="chip-body"
                                                                        style="max-width: 100px; width:65px; padding:6px;">
                                                                        <div class="chip-text">
                                                                            <strong> {{ \Carbon\Carbon::parse($user->created_at)->format('Y-m-d') }}</strong>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="d-flex">
                                                                    <a
                                                                        href="{{ route('customer-edit-management', $user->id) }}"><i
                                                                            class="fa fa-edit text-warning"></i></a>
                                                                    <form
                                                                        action="{{ route('customer-delete-management', $user->id) }}"
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
                                            <form method="POST" action="{{ route('export-management') }}">
                                                @csrf
                                                <input type="hidden" name="id" value="" id="exp-fav">
                                                <button class="btn btn-primary" type="submit" id="export_btn" disabled><i
                                                        class="fa fa-file-pdf-o"></i> Export</button>
                                                <button class="btn btn-primary" type="button" id="share_btn"
                                                    data-toggle="modal" data-target="#exampleModalCenter" disabled><i
                                                        class="fa fa-share"></i> Share</button>
                                            </form>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Send
                                                                Manager List</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="POST" action="{{ route('share-management') }}">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label>Email</label>
                                                                    <input type="hidden" name="id" value=""
                                                                        id="fav">
                                                                    <input class="form-control" type="email"
                                                                        name="email" placeholder="Enter Email" required>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Send</button>
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
        $("#select_all").change(function() {
            var favorite = [];
            $(".mychecks").prop('checked', $(this).prop("checked"));
            $.each($("input[class='mychecks']:checked"), function() {
                if ($(this).attr('data-id') != null) {
                    favorite.push($(this).attr('data-id'));
                    console.log(favorite);
                }
            });
            ($('#fav').attr('value', favorite));
            $('#exp-fav').attr('value', favorite);
        });

        // This part will check the (checked) checkBoxes which are clicked  one by one and add it into array //
        $('.mychecks').change(function() {
            var fav = [];
            $.each($("input[class='mychecks']:checked"), function() {
                if ($(this).attr('data-id') != null) {
                    fav.push($(this).attr('data-id'));
                    console.log(fav);
                }
            });
            ($('#fav').attr('value', fav));
            $('#exp-fav').attr('value', fav);
            if (false == $(this).prop("checked")) {
                $("#select_all").prop('checked', false);

            }
            if ($('.mychecks:checked').length == $('.mychecks').length) {
                $("#select_all").prop('checked', true);

            }
        });

        // This part will check the (checked) check-box and then enable the button to be used //
        var checkBoxes = $('.mychecks');
        checkBoxes.change(function() {
            $('#share_btn').prop('disabled', checkBoxes.filter(':checked').length < 1);
            $('#export_btn').prop('disabled', checkBoxes.filter(':checked').length < 1);
        });
        $('.mychecks').change();
    </script>
@endsection
