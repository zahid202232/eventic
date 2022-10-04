@extends('layouts.admin')
@section('content')
@can('attendy_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
           
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
    checkout
    </div>
   

 <div class="col-lg-8 pt-8 pt-lg-0">
    <!-- <div class="card box"> -->
        <form name="checkout_settings" method="post" novalidate="novalidate">
            <div id="form">
          <div class="form-group">
            <label for="form_checkout_timeleft" class="required">
                Timeleft
            </label>
            <small id="form_checkout_timeleft_help" class="form-text text-muted mb-3">
                <i class="fas fa-info-circle text-primary mr-1"></i>
                Number of seconds before the reserved tickets are released if the order is still awaiting payment
            </small>
            <div class="input-group  bootstrap-touchspin bootstrap-touchspin-injected">
            <input type="text" id="form_checkout_timeleft" name="form[checkout_timeleft]" required="required" class="touchspin-integer form-control" data-min="100" data-max="3600"aria-describedby="form_checkout_timeleft_help" value="1800" >
           <span class="input-group-btn-vertical" >
            <button class="btn btn-primary bootstrap-touchspin-up " type="button">+</button>
            <button class="btn btn-primary bootstrap-touchspin-up " type="button">-</button>
           </span>    
        </div>
          </div>
   





    <!-- Google Recaptcha settings -->

    
   
<!--  -->
<!-- Google Maps Api Key -->

    

<!-- Enable Facebook Social Login -->


     <!--  -->

   

<!--  -->


 <!--  -->

<!-- setting blog -->




</div>   
</div>



@endsection

