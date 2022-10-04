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
            <input type="radio" id="form_google_recaptcha_enabled_14" name="form[show_tickets_left_on_cart_modal]" required="required" class="custom-control-input" vlaue="prod" checked="checked">
            <label class="custom-control-label " for="app_layout_settings_show_gdpr_compliance_page_14">
                   <span class="option"> Yes</span>
               </label>
            </div>
            
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="form_google_recaptcha_enabled_15" name="form[show_tickets_left_on_cart_modal]" required="required" class="custom-control-input" value="dev" >
            <label class="custom-control-label " for="form_google_recaptcha_enabled_15">
                   <span class="option">NO</span>
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
            <input type="radio" id="form_google_recaptcha_enabled_16" name="form[google_recaptcha_enabled]" required="required" class="custom-control-input" vlaue="yes" checked="checked">
            <label class="custom-control-label " for="app_layout_settings_show_gdpr_compliance_page_16">
                   <span class="option"> Yes</span>
               </label>
            </div>
            
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="form_show_tickets_left_on_cart_modal_17" name="form[google_recaptcha_enabled]" required="required" class="custom-control-input" value="no" >
            <label class="custom-control-label " for="form_show_tickets_left_on_cart_modal_17">
                   <span class="option">NO</span>
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
       <div class="form-group">
    <button type="submit" id="app_layout_settings_save" name="app_layout_settings[save]" class="btn btn-primary btn" >Save</button>
     </div>
<!--  -->
<!-- Google Maps Api Key -->
<h3>Google Maps Api Key</h3>
     <div class="form-group">
   
     <label for="form_google_recaptcha_secret_key" >
     Google Maps Api Key
        </label>
     <small id="form_google_maps_api_key_help" class="form-text text-muted mb-3">
        <i class="fas fa-info-circle text-primary mr-1">  </i>
        Leave api key empty to disable google maps project wide
        <input type="text" id="form_google_maps_api_key" name="form[google_maps_api_key]" required="required" aria-describedby="app_layout_settings_app_secret_help" class="form-control" value="AIzaSyD9vrkLJKSv1SFSa-_ojqx3s8Q-uHM4U5Q">
            
    </input>

     </small>
     <div class="form-group">
    <button type="submit" id="app_layout_settings_save" name="app_layout_settings[save]" class="btn btn-primary btn" >Save</button>
     </div>

<!-- Enable Facebook Social Login -->


 </div>
 <h3>Enable Facebook Social Login</h3>
     <fieldset class="form-group">
        <legend class="col-form-label required">Enable Facebook Social Login
    </legend>
        <div id="form_social_login_facebook_enabled">
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="form_social_login_facebook_enabled_0" name="form[social_login_facebook_enabled]" required="required" class="custom-control-input" vlaue="Yes" checked="checked">
            <label class="custom-control-label " for="form_social_login_facebook_enabled_0">
            Yes
               </label>
            </div>
            
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="form_social_login_facebook_enabled_1" name="form[google_recaptcha_enabled]" required="required" class="custom-control-input" value="No" >
            <label class="custom-control-label " for="form_social_login_facebook_enabled_1">
            NO
               </label>
            </div>
    
            <div>
            
         </fieldset>

        
         <div class="form-group">
        <label for="app_layout_settings_ Facebook Id">
        Facebook Id
        </label>
        <input type="text" id="app_layout_settings_ Facebook Id" name="app_layout_settings[ Facebook Id]" required="required"  class="form-control" value="123456">
     </div>

     <div class="form-group">
        <label for="app_layout_settings_Facebook Secret">
        Enable Google Social Login
        </label>
        <input type="text" id="form_social_login_google_enabled" name="form[social_login_facebook_id]" required="required"  class="form-control" value="123456wedyfuiwjdct">
     </div>

     <fieldset class="form-group">
        <legend class="col-form-label required">Enable Facebook Social Login
    </legend>
        <div id="form_social_login_google_enabled">
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="form_social_login_google_enabled_0" name="form[social_login_google_enabled]" required="required" class="custom-control-input" vlaue="Yes" checked="checked">
            <label class="custom-control-label " for="form_social_login_google_enabled_0">
            Yes
               </label>
            </div>
            
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="form_form_social_login_google_enabled_1" name="form[google_recaptcha_enabled]" required="required" class="custom-control-input" value="No" >
            <label class="custom-control-label " for="form_form_social_login_google_enabled_1">
            NO
               </label>
            </div>
    
            <div>
            
         </fieldset>
         <div class="form-group">
        <label for="form_social_login_google_id">
       Google Id
        </label>
        <input type="text" id="form_social_login_google_id" name="social_login_google_id" required="required"  class="form-control" value="527837659336-3tq9aofglk2j0ugcmnm15kafh2o1qtiv.apps.googleusercontent.com">
     </div>

     <div class="form-group">
        <label for="form_social_login_google_secret">
       Google Secret
        </label>
        <input type="text" id="form_social_login_google_secret" name="social_login_google_secret" required="required"  class="form-control" value="8n3Q9qAfnLUP4mTmivPZ-eHt">
     </div>
     <div class="form-group">
    <button type="submit" id="app_layout_settings_save" name="app_layout_settings[save]" class="btn btn-primary btn" >Save</button>
     </div>

     <!--  -->

   <h3>Venue page</h3>

   <fieldset class="form-group">
        <legend class="col-form-label required">Enable comments
    </legend>
        <div id="form_venue_comments_enabled">
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="form_venue_comments_enabled_0" name="form[venue_comments_enabled]" required="required" class="custom-control-input" vlaue="yes" checked="checked" >
            <label class="custom-control-label required " for="form_venue_comments_enabled_0">
            NO
               </label>
            </div>
            
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="form_venue_comments_enabled_1" name="form[venue_comments_enabled]" required="required" class="custom-control-input" value="disqus" checked="checked" >
            <label class="custom-control-label " for="form_venue_comments_enabled_1">
            Facebook comments
               </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="form_venue_comments_enabled_2" name="form[venue_comments_enabled]" required="required" class="custom-control-input" value="No" >
            <label class="custom-control-label " for="form_venue_comments_enabled_2">
            Disqus comments
               </label>
            </div>
    
            <div>
            
         </fieldset>
         <div class="form-group">
   
     <label for="form_google_recaptcha_secret_key" >
     Facebook app id
        </label>
     <small id="form_facebook_app_id_help" class="form-text text-muted mb-3">
        <i class="fas fa-info-circle text-primary mr-1">  </i>
        Go to the documentation to get help about getting an app ID
        <input type="text" id="form_facebook_app_id" name="form[facebook_app_id]" required="required" aria-describedby="form_facebook_app_id_help" class="form-control" value="685278955266750">
            
    </input>

     </small>
</div>
     
     <div class="form-group">
   
   <label for="form_disqus_subdomain" >
   Disqus subdomain
      </label>
   <small id="form_disqus_subdomain" class="form-text text-muted mb-3">
      <i class="fas fa-info-circle text-primary mr-1">  </i>
      Go to the documentation to get help about setting up Disqus
      <input type="text" id="form_disqus_subdomain" name="form[disqus_subdomain]" required="required" aria-describedby="form_disqus_subdomain_help" class="form-control" value="eventic">
          
  </input>

   </small>
</div>
   <div class="form-group">
  <button type="submit" id="app_layout_settings_save" name="app_layout_settings[save]" class="btn btn-primary btn" >Save</button>
   </div>

<!--  -->

<div class="form-group">
        <label for="app_layout_settings_Facebook Secret">
        Enable Google Social Login
        </label>
        <input type="text" id="form_social_login_google_enabled" name="form[social_login_facebook_id]" required="required"  class="form-control" value="123456wedyfuiwjdct">
     </div>
<h3> Enable newsletter</h3>
     <fieldset class="form-group">
        <legend class="col-form-label required">Enable newsletter
    </legend>

    <small id="form_facebook_app_id_help" class="form-text text-muted mb-3">
        <i class="fas fa-info-circle text-primary mr-1">  </i>
        SSL must be activated on your hosting server in order to use Mailchimp 
    </input>

     </small>

        <div id="form_newsletter_enabled_help">
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="form_newsletter_enabled_0" name="form[newsletter_enabled]" required="required" class="custom-control-input" vlaue="Yes" checked="checked">
            <label class="custom-control-label " for="form_newsletter_enabled_0">
            Yes
               </label>
            </div>
            
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="form_newsletter_enabled_1" name="form[newsletter_enabled]" required="required" class="custom-control-input" value="No" >
            <label class="custom-control-label " for="form_newsletter_enabled_1">
            NO
               </label>
            </div>
    
            <div>
            
         </fieldset>
         <div class="form-group">
   
   <label for="form_mailchimp_api_key" >
   Mailchimp app id
      </label>
   <small id="form_mailchimp_api_key_help" class="form-text text-muted mb-3">
      <i class="fas fa-info-circle text-primary mr-1">  </i>
      Go to the documentation to get help about getting an api key
      <input type="text" id="form_mailchimp_api_key" name="form[mailchimp_api_key]" required="required" aria-describedby="form_mailchimp_api_key_help" class="form-control" value="542673602536197ee271b0d4d78164da-us20">
          
  </input>

   </small>
</div>
<div class="form-group">
   
   <label for="form_mailchimp_list_id" >
   Mailchimp list id
      </label>
   <small id="form_mailchimp_list_id_help" class="form-text text-muted mb-3">
      <i class="fas fa-info-circle text-primary mr-1">  </i>
      Go to the documentation to get help about getting a list id
      <input type="text" id="form_mailchimp_list_id" name="form[mailchimp_list_id]" required="required" aria-describedby="form_mailchimp_api_key_help" class="form-control" value="542673602536197ee271b0d4d78164da-us20">
          
  </input>

   </small>
</div>
<div class="form-group">
    <button type="submit" id="app_layout_settings_save" name="app_layout_settings[save]" class="btn btn-primary btn" >Save</button>
     </div>

 <!--  -->

<!-- setting blog -->

   <div class="form-group">
   <label for="form_blog_posts_per_page" class="required">
   Number of blog posts per page

   </lable>
   <div class="input-group  bootstrap-touchspin bootstrap-touchspin-injected">
   <input id=demoInput type=number min=100 max=110 type="text" name="form[blog_posts_per_page]" required="required"  class="touchspin-integer form-control" value="9">
   <span class="input-group-btn-vertical">
   <button onclick="increment()" class="btn btn-primary bootstrap-touchspin-up " type="button">+</button>
   <button onclick="decrement()" class="btn btn-primary bootstrap-touchspin-down " type="button">-</button>

   </span>

   </div>

    </div>
    
   <fieldset class="form-group">
        <legend class="col-form-label required">Enable comments
    </legend>
        <div id="form_blog_comments_enabled">
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="form_blog_comments_enabled_0" name="form[blog_comments_enabled]" required="required" class="custom-control-input" vlaue="no" checked="checked" >
            <label class="custom-control-label required " for="form_blog_comments_enabled_0">
            NO
               </label>
            </div>
            
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="form_blog_comments_enabled_1" name="form[blog_comments_enabled]" required="required" class="custom-control-input" value="disqus" checked="checked" >
            <label class="custom-control-label " for="form_blog_comments_enabled_1">
            Disqus comments
               </label>
            </div>
            <div>
            
         </fieldset>
         <div class="form-group">
   
   <label for="form_mailchimp_list_id" >
  Facebook app id
      </label>
   <small id="form_facebook_app_id_help" class="form-text text-muted mb-3">
      <i class="fas fa-info-circle text-primary mr-1">  </i>
      Go to the documentation to get help about getting an app ID
      <input type="text" id="form_facebook_app_id" name="form[facebook_app_id]" required="required" aria-describedby="form_mailchimp_api_key_help" class="form-control" value="542673602536197ee271b0d4d78164da-us20">
          
  </input>

   </small>
</div>

<div class="form-group">
   
   <label for="form_disqus_subdomain" >
   Disqus subdomain
      </label>
   <small id="form_disqus_subdomain_help" class="form-text text-muted mb-3">
      <i class="fas fa-info-circle text-primary mr-1">  </i>
      Go to the documentation to get help about setting up Disqus
      <input type="text" id="form_disqus_subdomain" name="form[disqus_subdomain]" required="required" aria-describedby="form_disqus_subdomain_help" class="form-control" value="eventic">
          
  </input>

   </small>
</div>
<div class="form-group">
    <button type="submit" id="app_layout_settings_save" name="app_layout_settings[save]" class="btn btn-primary btn" >Save</button>
     </div>

</div>   
</div>



@endsection

