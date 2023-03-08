@extends('superadmin.layouts.master')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Package</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal" action="{{route('superadmin-update-package',$pack->id)}}" method="POST">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <span><b>Package</b></span>
                                                    <input type="text" class="form-control" name="name" value="{{$pack->name}}" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <span><b>Price</b></span>
                                                    <input type="text" class="form-control" name="price" value="{{$pack->price}}"  >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Point</th>
                                            <th scope="col">Value</th>
                                            <th scope="col">Status</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @foreach($pack->package_details as $details)
                                          <tr>
                                            <th scope="row">{{$loop->index+1}}</th>
                                            <td>
                                                <input type="text" class="form-control" name="point_name[]" value="{{$details->point_name}}">
                                                <input type="hidden" name="detail_id[]" value="{{$details->id}}">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="point_value[]" value="{{$details->point_value}}">
                                            </td>
                                            <td>
                                                <input type="checkbox" name="status[{{$loop->index}}]" value="1" {{$details->status == '1' ? 'checked' : ''}}>
                                            </td>
                                          </tr>
                                          @endforeach
                                         
                                        </tbody>
                                      </table>
                                      <div class="col-md-12 ">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1" style="float: right">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </section>
    </div>
</div>
</div>
</section>
@endsection
