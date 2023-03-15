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
                        <h2 class="content-header-title float-left mb-0"> Update License</h2>

                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">

                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Input Validation start -->
            <section class="input-validation">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                {{-- <h4 class="card-title">Customer Form</h4> --}}
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form-horizontal" novalidate action="{{route('manager-update-license',$license->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> Title</label>
                                                    <div class="controls">
                                                        <input type="text" name="title" class="form-control"
                                                            data-validation-required-message="This field is required"
                                                             value="{{$license->title}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea type="text" class="form-control" name="description">{{$license->description}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <div class="controls">
                                                        <input type="number" name="price" value="{{$license->price}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Purchase Date <font class="text-danger">*</font></label>
                                                    <div class="controls">
                                                        <input type="date" name="purchase_date" value="{{$license->purchase_date}}" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label> Issue of Date</label>
                                                    <div class="controls">
                                                        <input type="date" name="issue" class="form-control" value="{{$license->date_of_issue}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Additional Information</label>
                                                    <textarea type="text" class="form-control" name="additional_info">{{$license->additional_info}}</textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label>Departments</label>
                                                    <select class="form-control" name="department" readonly>
                                                        <option selected value="{{$department->id}}">{{$department->name}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Manager List <font class="text-danger">*</font></label>
                                                    <select class="form-control" name="reffer" required>
                                                        <option disabled>Please Select Manger</option>
                                                        <option value="{{Auth::user()->id}}" selected>{{Auth::user()->name}}</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>License Owner</label>
                                                    <textarea type="text" class="form-control" name="license_owner">{{$license->license_owner}}</textarea>
                                                </div>
                                                {{-- <div class="form-group">
                                                    <label>Services</label>
                                                    <select class="form-control" class="service" name="service">
                                                        <option selected disabled>Please Select Service</option>
                                                        @foreach($services as $service)
                                                        <option value="{{$service->id}}" {{$service->id == $license->service_id ? 'selected' : ''}}>{{$service->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div> --}}
                                                <div class="form-group">
                                                    <label>Attachment</label>
                                                    <div class="controls">
                                                        <input type="file" name="attachment" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Renew Date</label>
                                                    <div class="controls">
                                                        <input type="date" name="renew_date" value="{{$license->renew_date}}" min="{{ date('Y-m-d') }}" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Expiry of Date</label>
                                                    <div class="controls">
                                                        <input type="date" name="expiry" min="{{ date('Y-m-d') }}" class="form-control" value="{{$license->date_of_expiry}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Key</label>
                                                    <textarea type="text" class="form-control" name="key" required> {{$license->key}} </textarea>
                                                </div>


                                                <div class="form-group ">
                                                    <div class="controls p-2">
                                                        <input type="checkbox" name="renew_alert" {{$license->renew_alert ? 'checked' : null}} value="1">&nbsp;<label>Renew ALert</label>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <input type="checkbox" name="expiry_alert" {{$license->expiry_alert ? 'checked' : null}} value="1">&nbsp;<label>Expiry Alert</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-12 ">
                                            <button type="submit" class="btn btn-primary mr-1 mb-1"
                                                style="float: right">Save</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Input Validation end -->

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection
