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
    social_logins
    </div>
    <div class="card-body">
    <fieldset class="form-group">
    <legend class="col-form-label required">Enable Facebook Social Login</legend>
    <div class="form_social_login_facebook_enabled">
       
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="form_social_login_facebook_enabled_0" name="form_social_login_facebook_enabled"  class="custom-control-input"  checked="checked" value="yes">
        <label class="custom-control-label  " for="form_social_login_facebook_enabled_0">
               <span class="option"> Yes</span>
           </label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="form_social_login_facebook_enabled-1" name="form_social_login_facebook_enabled"  class="custom-control-input" value="no" >
        <label class="custom-control-label " for="form_social_login_facebook_enabled-1">
               <span class="option"> No</span>
           </label>
        </div>
     </div>
        
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
    <legend class="col-form-label required">Enable Google Social Login</legend>
    <div class="form_social_login_google_enabled">
       
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="form_social_login_google_enabled_0" name="form_social_login_google_enabled"  class="custom-control-input"  checked="checked" value="yes">
        <label class="custom-control-label  " for="form_social_login_google_enabled_0">
               <span class="option"> Yes</span>
           </label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="form_social_login_google_enabled-1" name="form_social_login_google_enabled"  class="custom-control-input" value="no" >
        <label class="custom-control-label " for="form_social_login_google_enabled-1">
               <span class="option"> No</span>
           </label>
        </div>
     </div>
        
    </fieldset>
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

    </div>   
</div>

@endsection
