@extends('customer.layouts.master')
@section('content')

<style type="text/css">
  .hide{
    display: none;
  }
</style>
<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
          <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Subcription Packages</h2>

          </div>
        </div>
      </div>

      <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">

      </div>
    </div>

    <div class="content-body">
      <div class="row">
        @foreach($packages as $row)
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card h-100 subcard_shadow">
            <div class="card-body">
              <h5 class="card-title text_primary fw-bolder text-uppercase text-center">{{$row->package}} </h5>
              <h6 class="card-price text-center">$ {{$row->price}}<span class="period">/month</span></h6>
              <hr>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span>{{$row->entity}} user </li>
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span>1 department /Service
                  (Manage multiple teams
                  or departments)</li>
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span>10 Licenses
                </li>
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span>Basic reporting
                </li>
                <li><span class="fa-li"><i class="fa fa-close text-danger"></i></span>NA : Direct reports
                  sharing
                </li>
                <li><span class="fa-li"><i class="fa fa-close text-danger"></i></span>NA : Monthly Status
                  Report
                </li>
                <li><span class="fa-li"><i class="fa text-success fa-check"></i></span>Email Support

                </li>
                <li><span class="fa-li"><i class="fa fa-close text-danger "></i></span>NA: On-site training and
                  consultation

                </li>

              </ul>

            </div>

            <div class="card-body text-center">
              @if(Auth::user()->pack_id ==$row->id)
                <button class="btn btn-outline-primary btn-lg bg_primary sub_btn text-white" pack_id="{{$row->id}}" style="border-radius:30px;color: #263d72 !important;" disabled>Activated</button>
              @else
                @if(Auth::user()->stripe_id !=null)
                  <a href="{{url('customer/change_subscribe/' .$row->id)}}">
                  <button class="btn btn-outline-primary  btn-lg bg_primary sub_btn text-white" pack_id="{{$row->id}}" style="border-radius:30px">Subscribe</button></a>
                @else
                  <button class="btn btn-outline-primary add_subscription btn-lg bg_primary sub_btn text-white" pack_id="{{$row->id}}" style="border-radius:30px">Select</button>
                @endif  
              @endif
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal payment_model fade text-left" id="inlineForm" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33"> </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
           <form 
              role="form" 
              action="{{ url('customer/subscribe') }}" 
              method="post" 
              class="require-validation"
              data-cc-on-file="false"
              data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
              id="payment-form">
              @csrf
                <div class="modal-body">
                    <div class="panel panel-default credit-card-box">
                      <div class="panel-heading display-table" >
                          <h3 class="panel-title" >Payment Details</h3>
                      </div>
                      <div class="panel-body">
          
                          @if (Session::has('success'))
                              <div class="alert alert-success text-center">
                                  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                  <p>{{ Session::get('success') }}</p>
                              </div>
                          @endif
                              <input type="hidden" name="pack_id" class="pack_id_append">
                              <div class='form-row' style="display: contents">
                                  <div class='col-xs-12 form-group required'>
                                      <label class='control-label'>Name on Card</label> <input
                                          class='form-control' size='4' type='text'>
                                  </div>
                              </div>
          
                              <div class='form-row'  style="display: contents">
                                  <div class='col-xs-12 form-group  required'>
                                      <label class='control-label'>Card Number</label> <input
                                          autocomplete='off' class='form-control card-number' size='20'
                                          type='text' name="card_number">
                                  </div>
                              </div>
          
                              <div class='form-row row'>
                                  <div class='col-xs-12 col-md-4 form-group cvc required'>
                                      <label class='control-label'>CVC</label> <input autocomplete='off'
                                          class='form-control card-cvc' placeholder='ex. 311' size='4'
                                          type='text' name="card_cvc">
                                  </div>
                                  <div class='col-xs-12 col-md-4 form-group expiration required'>
                                      <label class='control-label'>Expiration Month</label> <input
                                          class='form-control card-expiry-month' placeholder='MM' size='2'
                                          type='text' name="card_expiry_month">
                                  </div>
                                  <div class='col-xs-12 col-md-4 form-group expiration required'>
                                      <label class='control-label'>Expiration Year</label> <input
                                          class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                          type='text' name="card_expiry_year">
                                  </div>
                              </div>
          
                              <div class=' form-row'>
                                  <div class='col-md-12 error form-group hide'>
                                      <div class='alert-danger alert'>Please correct the errors and try
                                          again.</div>
                                  </div>
                              </div>
          
                              
                                  
                          
                      </div>
                    </div>    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
@endsection
{{--
  <div class="breadcrumb-wrapper col-12">
    <ol class="breadcrumb float-right m-0">
        <li class="breadcrumb-item"><a href="{{route('customer-add-license') }}"
class="btn btn-primary fa fa-plus"> Add License</a></li>
</ol>
</div> --}}

@section('js')
<script type="text/javascript">
$(document).ready(function(){
  $(document).on('click','.add_subscription',function(){
    var pack_id=$(this).attr('pack_id');
    $('.pack_id_append').val(pack_id);


    $('.payment_model').modal('show');


  });
});

</script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    
<script type="text/javascript">
  
$(function() {
  
    /*------------------------------------------
    --------------------------------------------
    Stripe Payment Code
    --------------------------------------------
    --------------------------------------------*/
    
    var $form = $(".require-validation");
     
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');
    
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
     
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
    
    });
      
    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
                 
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
     
});
</script>
@endsection