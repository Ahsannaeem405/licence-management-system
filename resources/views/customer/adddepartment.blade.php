@extends('customer.layouts.master')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title  ">Add Department</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                            
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-2">
                                                        <span>Department Name</span>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input type="text"   class="form-control" name="package" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                          
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-2">
                                                        <span>logo</span>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input type="file"   class="form-control" name="logo" placeholder="">
                                                    </div>
                                                </div>
                                            </div>

                                          
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-2">
                                                        <span>Description</span>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <textarea type="text"   class="form-control" name="Price"  ></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="col-md-12 ">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1" style="float: right">Submit</button>
                                               
                                            </div>
                                        </div>
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
