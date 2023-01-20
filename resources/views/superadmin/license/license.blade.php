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
                            <h2 class="content-header-title float-left mb-0">List of Departments</h2>

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
                                <div class="breadcrumb-wrapper col-12">
                                    {{-- <ol class="breadcrumb float-right m-0">
                                        <li class="breadcrumb-item"><a href="{{ url('/add-Package') }}"
                                                class="btn btn-primary fa fa-plus"> Add Package</a></li>
                                    </ol> --}}
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">

                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>

                                                        <th>Name</th>
                                                        <th>Descriptions</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>

                                                        {{-- <td>$320,800</td> --}}
                                                        <td>
                                                              <a href="{{route('superadmin-view-license') }}"
                                                             class="btn btn-primary  "> View </a> 
                                                             
                                                         
                                                        </td>
                                                    </tr>
                                                    <tr>

                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>

                                                        {{-- <td>$170,750</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>

                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>

                                                        {{-- <td>$86,000</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>

                                                        <td>Senior Javascript Developer</td>
                                                        <td>Edinburgh</td>

                                                        {{-- <td>$433,060</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>

                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>

                                                        {{-- <td>$162,700</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>

                                                        <td>Sales Assistant</td>
                                                        <td>San Francisco</td>

                                                        {{-- <td>$137,500</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>

                                                        <td>Sales Assistant</td>
                                                        <td>San Francisco</td>

                                                        {{-- <td>$137,500</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>

                                                        <td>Integration Specialist</td>
                                                        <td>Javascript Developer</td>
                                                        {{-- <td>$327,900</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a>
                                                            
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>

                                                        <td>Javascript Developer</td>
                                                        <td>San Francisco</td>

                                                        {{-- <td>$205,500</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>

                                                        <td>Software Engineer</td>
                                                        <td>Edinburgh</td>

                                                        {{-- <td>$103,600</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>

                                                        <td>Office Manager</td>
                                                        <td>London</td>

                                                        {{-- <td>$90,560</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>

                                                        <td>Support Lead</td>
                                                        <td>Edinburgh</td>

                                                        {{-- <td>$342,000</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>

                                                        <td>Regional Director</td>
                                                        <td>San Francisco</td>
                                                        {{-- <td>36</td> --}}
                                                        {{-- <td>2008/10/16</td> --}}
                                                        {{-- <td>$470,600</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                        {{-- <td>Haley Kennedy</td> --}}
                                                        <td>Senior Marketing Designer</td>
                                                        <td>London</td>
                                                        {{-- <td>43</td> --}}
                                                        {{-- <td>2012/12/18</td> --}}
                                                        {{-- <td>$313,500</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                        {{-- <td>Tatyana Fitzpatrick</td> --}}
                                                        <td>Regional Director</td>
                                                        <td>London</td>
                                                        {{-- <td>19</td> --}}
                                                        {{-- <td>2010/03/17</td> --}}
                                                        {{-- <td>$385,750</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                        {{-- <td>Michael Silva</td> --}}
                                                        <td>Marketing Designer</td>
                                                        <td>London</td>
                                                        {{-- <td>66</td> --}}
                                                        {{-- <td>2012/11/27</td> --}}
                                                        {{-- <td>$198,500</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                        {{-- <td>Paul Byrd</td> --}}
                                                        <td>Chief Financial Officer (CFO)</td>
                                                        <td>New York</td>
                                                        {{-- <td>64</td> --}}
                                                        {{-- <td>2010/06/09</td> --}}
                                                        {{-- <td>$725,000</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                        {{-- <td>Gloria Little</td> --}}
                                                        <td>Systems Administrator</td>
                                                        <td>New York</td>
                                                        {{-- <td>59</td> --}}
                                                        {{-- <td>2009/04/10</td> --}}
                                                        {{-- <td>$237,500</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                        {{-- <td>Bradley Greer</td> --}}
                                                        <td>Software Engineer</td>
                                                        <td>London</td>
                                                        {{-- <td>41</td> --}}
                                                        {{-- <td>2012/10/13</td> --}}
                                                        {{-- <td>$132,000</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                        {{-- <td>Dai Rios</td> --}}
                                                        <td>Personnel Lead</td>
                                                        <td>Edinburgh</td>
                                                        {{-- <td>35</td> --}}
                                                        {{-- <td>2012/09/26</td> --}}
                                                        {{-- <td>$217,500</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                        {{-- <td>Jenette Caldwell</td> --}}
                                                        <td>Development Lead</td>
                                                        <td>New York</td>
                                                        {{-- <td>30</td> --}}
                                                        {{-- <td>2011/09/03</td> --}}
                                                        {{-- <td>$345,000</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                        {{-- <td>Yuri Berry</td> --}}
                                                        <td>Chief Marketing Officer (CMO)</td>
                                                        <td>New York</td>
                                                        {{-- <td>40</td> --}}
                                                        {{-- <td>2009/06/25</td> --}}
                                                        {{-- <td>$675,000</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                        {{-- <td>Cara Stevens</td> --}}
                                                        <td>Sales Assistant</td>
                                                        <td>New York</td>
                                                        {{-- <td>46</td> --}}
                                                        {{-- <td>2011/12/06</td> --}}
                                                        {{-- <td>$145,600</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                        {{-- <td>Hermione Butler</td> --}}
                                                        <td>Regional Director</td>
                                                        <td>London</td>
                                                        {{-- <td>47</td> --}}
                                                        {{-- <td>2011/03/21</td> --}}
                                                        {{-- <td>$356,250</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                        {{-- <td>Lael Greer</td> --}}
                                                        <td>Systems Administrator</td>
                                                        <td>London</td>
                                                        {{-- <td>21</td> --}}
                                                        {{-- <td>2009/02/27</td> --}}
                                                        {{-- <td>$103,500</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                        {{-- <td>Jonas Alexander</td> --}}
                                                        <td>Developer</td>
                                                        <td>San Francisco</td>
                                                        {{-- <td>30</td> --}}
                                                        {{-- <td>2010/07/14</td> --}}
                                                        {{-- <td>$86,500</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                        {{-- <td>Shad Decker</td> --}}
                                                        <td>Regional Director</td>
                                                        <td>Edinburgh</td>
                                                        {{-- <td>51</td> --}}
                                                        {{-- <td>2008/11/13</td> --}}
                                                        {{-- <td>$183,000</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                        {{-- <td>Michael Bruce</td> --}}
                                                        <td>Javascript Developer</td>
                                                        <td>Singapore</td>
                                                        {{-- <td>29</td> --}}
                                                        {{-- <td>2011/06/27</td> --}}
                                                        {{-- <td>$183,000</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                        {{-- <td>Donna Snider</td> --}}
                                                        <td>Customer Support</td>
                                                        <td>New York</td>
                                                        {{-- <td>27</td> --}}
                                                        {{-- <td>2011/01/25</td> --}}
                                                        {{-- <td>$112,000</td> --}}
                                                        <td>
                                                            <a href="{{route('superadmin-view-license') }}"
                                                           class="btn btn-primary  "> View </a> 
                                                       
                                                      </td>
                                                    </tr>
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
