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
    <!-- <div class="form-group">
    <lable for="app_layout_settings_app_secret" class="required">
    App Secret
     </lable>
     <small id="app_layout_settings_app_secret_help" class="form-text text-muted mb-3">
        <i class="fas fa-info-circle text-primary mr-1">  </i>
        This is a string that should be unique to your application and it is commonly used to add more entropy to security related operations
      
        <input type="text" id="form_checkout_timeleft" name="form[checkout_timeleft]" required="required" aria-describedby="form_checkout_timeleft_help" class="touchspin-integer form-control"data-min="80" data-max="360" value="180">
       
         </input>

     </small>
 </div> -->

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
          
    <fieldset class="form-group">
        <legend class="col-form-label required">Enable Google Repatcha
    </legend>
        <div id="form_show_tickets_left_on_cart_modal">
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="form_google_recaptcha_enabled_0" name="form[show_tickets_left_on_cart_modal]" required="required" class="custom-control-input" vlaue="yes" checked="checked">
            <label class="custom-control-label " for="app_layout_settings_show_gdpr_compliance_page_0">
                   <span class="option"> Yes</span>
               </label>
            </div>
            
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="form_google_recaptcha_enabled_1" name="form[show_tickets_left_on_cart_modal]" required="required" class="custom-control-input" value="no" >
            <label class="custom-control-label " for="form_google_recaptcha_enabled_1">
                   <span class="option">on</span>
               </label>
            </div>
    
            <div>
            
        </fieldset>
        <div class="form-group">
    <button type="submit" id="app_layout_settings_save" name="app_layout_settings[save]" class="btn btn-primary btn" >Save</button>
     </div>
            </div>

        </form>
    </div> 





    <!-- Google Recaptcha settings -->

    <h3>Google Recaptcha settings</h3>
    <div class="col-lg-8 pt-8 pt-lg-0">
    <fieldset class="form-group">
        <legend class="col-form-label required">Enable Google Repatcha
    </legend>
        <div id="form_show_tickets_left_on_cart_modal">
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="form_google_recaptcha_enabled_0" name="form[google_recaptcha_enabled]" required="required" class="custom-control-input" vlaue="yes" checked="checked">
            <label class="custom-control-label " for="app_layout_settings_show_gdpr_compliance_page_0">
                   <span class="option"> Yes</span>
               </label>
            </div>
            
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="form_show_tickets_left_on_cart_modal_1" name="form[google_recaptcha_enabled]" required="required" class="custom-control-input" value="no" >
            <label class="custom-control-label " for="form_show_tickets_left_on_cart_modal_1">
                   <span class="option">on</span>
               </label>
            </div>
    
            <div>
            
         </fieldset>

         <div class="form-group">
        <label for="form_google_recaptcha_site_keyl" class="required">
        Site key
        </label>
        <input type="text" id="form_google_recaptcha_site_key" name="form[google_recaptcha_site_key]"   class="form-control" value="6Ldio6wUAAAAAIp-aWdIxzMv24IA3qZv7-sibuS2">
       </div>
       <div class="form-group">
        <label for="form_google_recaptcha_secret_key" class="required">
        Secret key
        </label>
        <input type="text" id="form_google_recaptcha_secret_key" name="form[google_recaptcha_secret_key]"   class="form-control" value="6Ldio6wUAAAAAIp-aWdIxzMv24IA3qZv7-sibuS2">
       </div>
</div>   
</div>



@endsection

