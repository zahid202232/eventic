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
    googgle_recaptcha
    </div>
    <div class="card-body">
    <div class="col-lg-8 pt-8 pt-lg-0">
    <fieldset class="form-group">
        <legend class="col-form-label required">Enable Google Repatcha
    </legend>
        <div id="form_google_recaptcha_enabled">
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="form_google_recaptcha_enabled_16" name="form[google_recaptcha_enabled]" required="required" class="custom-control-input" value="yes" checked="checked">
            <label class="custom-control-label " for="form_google_recaptcha_enabled_16">
                   <span class="option"> Yes</span>
               </label>
            </div>
            
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="form_google_recaptcha_enabled_17" name="form[google_recaptcha_enabled]" required="required" class="custom-control-input" value="no" >
            <label class="custom-control-label " for="form_google_recaptcha_enabled_17">
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

    </div>   
</div>

@endsection
