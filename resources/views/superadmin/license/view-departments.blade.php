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

                                {{-- <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb float-right m-0">
                                        <li class="breadcrumb-item"><a href="{{ url('/add-customers') }}"
                                                class="btn btn-primary fa fa-plus"> Add Customer</a></li>
                                    </ol>
                                </div> --}}

                                <div class="card-content">
                                    <div class="card-body card-dashboard pt-0">

                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                         
                                                        <th>Department</th>
                                                        <th>Description</th>
                                                        <th>Created At</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($departments as $item)
                                                        <tr>
                                                            <td>{{ $item->department_name }}</td>
                                                            <td>{{ $item->description }}</td>
                                                            <td>{{\Carbon\carbon::createFromFormat('Y-m-d h:i:s',$item->created_at)->format('d-F-Y') }}</td>
                                                            <td>
                                                                
                                                               <span class="d-flex">
                                                                <a href="{{route('superadmin-view-license',$item->id)}}"><i class="fa fa-eye"></i></a>
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

    $(document).ready(function(){

    $('.key').hide();
    $('#open').on('click',function(){
        $('.key').show();
    })

    });
    $('.open').click(function(){
        var copytext = $(this).attr('data-key');
      
        copytext.select();
        navigator.clipboard.writeText(copytext.value);
    });
    
</script>

@endsection
