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
                            <h2 class="content-header-title float-left mb-0">Subcriptions</h2>
                            
                        </div>
                    </div>
                 </div>
                 <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        {{-- <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div> --}}
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
                                         
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Package</th>
                                                        <th>Date</th>
                                                        <th>Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tiger Nixon</td>
                                                        <td>ranatalha5093@gmail.com</td>
                                                        <td>System Architect</td>
                                                      
                                                        {{-- <td>61</td> --}}
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Garrett Winters</td>
                                                        <td> garrat66@gmail.com</td>
                                                        <td>Accountant</td>
                                                     
                                                        {{-- <td>63</td> --}}
                                                        <td>2011/07/25</td>
                                                        <td>$170,750</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ashton Cox</td>
                                                        <td>arhton0@gmail.com</td>
                                                        <td>Junior Technical Author</td>
                                                     
                                                        {{-- <td>66</td> --}}
                                                        <td>2009/01/12</td>
                                                        <td>$86,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cedric Kelly</td>
                                                        <td>cedric@gmail.com</td>
                                                        <td>Senior Javascript Developer</td>
                                                      
                                                        {{-- <td>22</td> --}}
                                                        <td>2012/03/29</td>
                                                        <td>$433,060</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Airi Satou</td>
                                                        <td>airi8@gmail.com</td>
                                                        <td>Accountant</td>
                                                      
                                                        {{-- <td>33</td> --}}
                                                        <td>2008/11/28</td>
                                                        <td>$162,700</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Brielle Williamson</td>
                                                        <td>brille3@gmail.com</td>
                                                        <td>Integration Specialist</td>
                                                      
                                                        {{-- <td>61</td> --}}
                                                        <td>2012/12/02</td>
                                                        <td>$372,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Herrod Chandler</td>
                                                        <td>herrod8@gmail.com</td>
                                                        <td>Sales Assistant</td>
                                                      
                                                        {{-- <td>59</td> --}}
                                                        <td>2012/08/06</td>
                                                        <td>$137,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rhona Davidson</td>
                                                        <td>rhona88@gmail.com</td>
                                                        <td>Integration Specialist</td>
                                                      
                                                        {{-- <td>55</td> --}}
                                                        <td>2010/10/14</td>
                                                        <td>$327,900</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Colleen Hurst</td>
                                                        <td>sonya88@gmail.com</td>
                                                        <td>Javascript Developer</td>
                                                       
                                                        {{-- <td>39</td> --}}
                                                        <td>2009/09/15</td>
                                                        <td>$205,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sonya Frost</td>
                                                        <td>jena88@gmail.com</td>
                                                        <td>Software Engineer</td>
                                                      
                                                        {{-- <td>23</td> --}}
                                                        <td>2008/12/13</td>
                                                        <td>$103,600</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jena Gaines</td>
                                                        <td>flynn77@gmail.com</td>
                                                        <td>Office Manager</td>
                                                       
                                                        {{-- <td>30</td> --}}
                                                        <td>2008/12/19</td>
                                                        <td>$90,560</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Quinn Flynn</td>
                                                        <td>edinburugh55@gmail.com</td>
                                                        <td>Support Lead</td>
                                                      
                                                        {{-- <td>22</td> --}}
                                                        <td>2013/03/03</td>
                                                        <td>$342,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Charde Marshall</td>
                                                        <td>haley66@gmail.com</td>
                                                        <td>Regional Director</td>
                                                       
                                                        {{-- <td>36</td> --}}
                                                        <td>2008/10/16</td>
                                                        <td>$470,600</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Haley Kennedy</td>
                                                        <td>tatyana44@gmail.com</td>
                                                        <td>Senior Marketing Designer</td>
                                                     
                                                        {{-- <td>43</td> --}}
                                                        <td>2012/12/18</td>
                                                        <td>$313,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tatyana Fitzpatrick</td>
                                                        <td>silva1@gmail.com</td>
                                                        <td>Regional Director</td>
                                                      
                                                        {{-- <td>19</td> --}}
                                                        <td>2010/03/17</td>
                                                        <td>$385,750</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Michael Silva</td>
                                                        <td>byrud33@gmail.com</td>
                                                        <td>Marketing Designer</td>
                                                      
                                                        {{-- <td>66</td> --}}
                                                        <td>2012/11/27</td>
                                                        <td>$198,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Paul Byrd</td>
                                                        <td>little44@gmail.com</td>
                                                        <td>Chief Financial Officer (CFO)</td>
                                                     
                                                        {{-- <td>64</td> --}}
                                                        <td>2010/06/09</td>
                                                        <td>$725,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gloria Little</td>
                                                        <td>greer33@gmail.com</td>
                                                        <td>Systems Administrator</td>
                                                      
                                                        {{-- <td>59</td> --}}
                                                        <td>2009/04/10</td>
                                                        <td>$237,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bradley Greer</td>
                                                        <td>caldwel7@gmail.com</td>
                                                        <td>Software Engineer</td>
                                                        
                                                        {{-- <td>41</td> --}}
                                                        <td>2012/10/13</td>
                                                        <td>$132,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dai Rios</td>
                                                        <td>berry33@gmail.com</td>
                                                        <td>Personnel Lead</td>
                                                      
                                                        {{-- <td>35</td> --}}
                                                        <td>2012/09/26</td>
                                                        <td>$217,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenette Caldwell</td>
                                                        <td>steven1@gmail.com</td>
                                                        <td>Development Lead</td>
                                                      
                                                        {{-- <td>30</td> --}}
                                                        <td>2011/09/03</td>
                                                        <td>$345,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Yuri Berry</td>
                                                        <td>butler2@gmail.com</td>
                                                        <td>Chief Marketing Officer (CMO)</td>
                                                      
                                                        {{-- <td>40</td> --}}
                                                        <td>2009/06/25</td>
                                                        <td>$675,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cara Stevens</td>
                                                        <td>ahmed@gmail.com</td>
                                                        <td>Sales Assistant</td>
                                                       
                                                        {{-- <td>46</td> --}}
                                                        <td>2011/12/06</td>
                                                        <td>$145,600</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hermione Butler</td>
                                                        <td>rahul3@gmail.com</td>
                                                        <td>Regional Director</td>
                                                      
                                                        {{-- <td>47</td> --}}
                                                        <td>2011/03/21</td>
                                                        <td>$356,250</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lael Greer</td>
                                                        <td>angel5093@gmail.com</td>
                                                        <td>Systems Administrator</td>
                                                      
                                                        {{-- <td>21</td> --}}
                                                        <td>2009/02/27</td>
                                                        <td>$103,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jonas Alexander</td>
                                                        <td>ahmed3@gmail.com</td>
                                                        <td>Developer</td>
                                                      
                                                        {{-- <td>30</td> --}}
                                                        <td>2010/07/14</td>
                                                        <td>$86,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shad Decker</td>
                                                        <td>taha93@gmail.com</td>
                                                        <td>Regional Director</td>
                                                      
                                                        {{-- <td>51</td> --}}
                                                        <td>2008/11/13</td>
                                                        <td>$183,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Michael Bruce</td>
                                                        <td>shiekh@gmail.com</td>
                                                        <td>Javascript Developer</td>
                                                      
                                                        {{-- <td>29</td> --}}
                                                        <td>2011/06/27</td>
                                                        <td>$183,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Donna Snider</td>
                                                        <td>talha93@gmail.com</td>
                                                        <td>Customer Support</td>
                                                       
                                                        {{-- <td>27</td> --}}
                                                        <td>2011/01/25</td>
                                                        <td>$112,000</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>gufran1@gmail.com</th>
                                                        <th>Position</th>
                                                        
                                                        {{-- <th>Age</th> --}}
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </tfoot>
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