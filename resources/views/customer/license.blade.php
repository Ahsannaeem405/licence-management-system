
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
                        <h2 class="content-header-title float-left mb-0">License</h2>

                    </div>
                </div>
            </div>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb float-right m-0">
                    <li class="breadcrumb-item"><a href="{{route('customer-add-license') }}"
                            class="btn btn-primary fa fa-plus"> Add License</a></li>
                </ol>
            </div>

            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">

            </div>
        </div>

        <div class="content-body">
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                  <div class="card h-100 shadow-lg">
                    <div class="card-body">
                      <div class="text-center p-3">
                        <h5 class="card-title">Autocart License</h5>
                        {{-- <small>Individual</small> --}}
                        {{-- <br><br> --}}
                        {{-- <span class="h5">License No:</span>LE-13-1 --}}
                        {{-- <br><br> --}}
                      </div>
                      {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        {{-- <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/> --}}
                      </svg>Department : IT</li> 
                    </ul>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        </svg>Service: Autocart</li> 
                      </ul>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        </svg>Issue Date : 04-12-2000</li> 
                      </ul>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        </svg>Expiry Date : 05-12-2010</li> 
                      </ul>

                       <div class="card-body text-center">
                      
                            <a href="#"><i class="fa fa-edit text-warning" style="font-size:20px"></i></a>
                            
                         
                        {{-- <button class="btn btn-outline-primary btn-lg ml-2 mr-2" style="border-radius:30px">Select</button> --}}
                        <a href="#"><i class="fa fa-trash text-danger "style="font-size:20px"></i></a>
                      </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card h-100 shadow-lg">
                      <div class="card-body">
                        <div class="text-center p-3">
                          <h5 class="card-title">Buisness License</h5>
                          {{-- <small>Individual</small> --}}
                          {{-- <br><br> --}}
                          {{-- <span class="h5">License No:</span>LE-13-1 --}}
                          {{-- <br><br> --}}
                        </div>
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                          {{-- <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/> --}}
                        </svg>Department : Sceince</li> 
                      </ul>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        </svg>Service : IT</li> 
                      </ul>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        </svg>Issue Date : 02-03-2002</li> 
                      </ul>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        </svg>Expiry Date : 04-05-2012</li> 
                      </ul>
                      <div class="card-body text-center">
                      
                            <a href="#"><i class="fa fa-edit text-warning" style="font-size:20px"></i></a>
                            
                         
                        {{-- <button class="btn btn-outline-primary btn-lg ml-2 mr-2" style="border-radius:30px">Select</button> --}}
                        <a href="#"><i class="fa fa-trash text-danger " style="font-size:20px"></i></a>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card h-100 shadow-lg">
                      <div class="card-body">
                        <div class="text-center p-3">
                          <h5 class="card-title">Driving License</h5>
                          {{-- <small>Individual</small> --}}
                          {{-- <br><br> --}}
                          {{-- <span class="h5">License No:</span>LE-13-1 --}}
                          {{-- <br><br> --}}
                        </div>
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        </svg>Department : Wapda</li> 
                      </ul>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        </svg>Service : GM</li> 
                      </ul>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        </svg>Issue Date: 01-03-2012</li> 
                      </ul>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        </svg>Expiry Date : 03-05-2022</li> 
                      </ul>
                      
                      <div class="card-body text-center">
                      
                        <a href="#"><i class="fa fa-edit text-warning" style="font-size:20px"></i></a>
                        
                     
                    {{-- <button class="btn btn-outline-primary btn-lg ml-2 mr-2" style="border-radius:30px">Select</button> --}}
                    <a href="#"><i class="fa fa-trash text-danger " style="font-size:20px"></i></a>
                  </div>
                    </div>
                  </div>
        </div>
    </div>
</div>

  @endsection

  