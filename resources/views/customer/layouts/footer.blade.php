<div class="sidenav-overlay"></div>
<div class="drag-target"></div>


<!-- BEGIN: Footer-->
 {{-- <footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer> --}}
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->

<script src="{{asset('assets/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('assets/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/extensions/tether.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/extensions/shepherd.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('assets/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('assets/app-assets/js/core/app.js')}}"></script>
<script src="{{asset('assets/app-assets/js/scripts/components.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('assets/app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('assets/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
{{-- <script src="{{asset('assets/app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script> --}}
<!-- END: Page JS-->
<script src="{{asset('assets/app-assets/js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('assets/app-assets/js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
<script>
    $(function(){
    var current = location.pathname;
    $('.navigation  li a').each(function(){
        var $this = $(this);
        if($this.attr('href').indexOf(current) !== -1){
            $this.addClass('active');
        }
    });
});
</script>
</body>
<!-- END: Body-->

</html>