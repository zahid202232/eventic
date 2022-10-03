@extends('layouts.admin')
@section('content')

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.companies.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.company.title_singular') }}
            </a>
        </div>
    </div>

<div class="card">
    <div class="card-header">
    Layout, parameters and SEO  
    </div>

    <div class="card-body">
        <fieldset class="form-group">
        <legend class="col-form-label required">App Environment</legend>
    <small id="app_layout_settings_app_environment_help" class="form-text text-muted mb-3"> 
    <i class="fas fa-info-circle text-primary mr-1"></i>
    Development environment is used for development purposes only
    </small>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="app_layout_settings_app_environment_0" name="app_layout_settings[app_environment]"  class="custom-control-input" value="prod" checked="checked">
    <label class="custom-control-label " for="app_layout_settings_app_environment_0">
        
           <span class="option" > Production</span>
       </label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="app_layout_settings_app_environment_1" name="app_layout_settings[app_environment]" required="required" class="custom-control-input" value="dev" >
    <label class="custom-control-label " for="app_layout_settings_app_environment_1">
           <span class="option"> Development</span>
       </label>
    </div>
    </fieldset>

    <fieldset class="form-group">
    <legend class="col-form-label required">App Debugging</legend>
        <small id="app_layout_settings_app_environment_help" class="form-text text-muted mb-3"> 
        <i class="fas fa-info-circle text-primary mr-1"></i>
        Enable to display stacktraces on error pages or if cache files should be dynamically rebuilt on each request
        </small>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="app_layout_settings_app_environment_2" name="app_layout_settings[app_environment]" required="required" class="custom-control-input" value="prod" checked="checked">
        <label class="custom-control-label " for="app_layout_settings_app_environment_2">
               <span class="option"> Enable</span>
           </label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="app_layout_settings_app_environment_3" name="app_layout_settings[app_environment]" required="required" class="custom-control-input" value="dev" >
        <label class="custom-control-label " for="app_layout_settings_app_environment_3">
               <span class="option"> Disable</span>
           </label>
        </div>
        
    </fieldset>
 <div class="form-group">
    <lable for="app_layout_settings_app_secret" class="required">
    App Secret
     </lable>
     <small id="app_layout_settings_app_secret_help" class="form-text text-muted mb-3">
        <i class="fas fa-info-circle text-primary mr-1">  </i>
        This is a string that should be unique to your application and it is commonly used to add more entropy to security related operations
      
        <input type="text" id="app_layout_settings_app_secret" name="app_layout_settings[app_secret]" required="required" aria-describedby="app_layout_settings_app_secret_help" class="form-control" value="23986743acdr9876xyz">
            
    </input>

     </small>
 </div>

 <fieldset class="form-group">
    <legend class="col-form-label required">Maintenance mode</legend>
        <small id="app_layout_settings_app_environment_help" class="form-text text-muted mb-3"> 
        <i class="fas fa-info-circle text-primary mr-1"></i>
        Enable maintenance mode to display a maintenance page for all users but the users who are granted the ROLE_ADMINISTRATOR role, if you lost your session, you can edit the MAINTENANCE_MODE parameter directly in the .env file
        </small>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="app_layout_settings_app_environment_4" name="app_layout_settings[app_environment]" required="required" class="custom-control-input" value="prod" checked="checked">
        <label class="custom-control-label " for="app_layout_settings_app_environment_4">
               <span class="option"> Disable</span>
           </label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="app_layout_settings_app_environment_5" name="app_layout_settings[app_environment]" required="required" class="custom-control-input" value="dev" >
        <label class="custom-control-label " for="app_layout_settings_app_environment_5">
               <span class="option"> Enable</span>
           </label>
        </div>
    </fieldset>

    <div class="form-group">
    <label  class="custom">Maintenance mode custom message</label>
    <textarea  id="app_layout_settings_maintenance_mode_custom_message" name="app_layout_settings[maintenance_mode_custom_message]" class="text" >
    </textarea>
    </div>

     <div class="form-group">
        <label for="app_layout_settings_date_format" class="required">
        Date and time format
        </label>
        <small id="app_layout_settings_date_format_help" class="form-text text-muted mb-3">
            <i class="fas fa-info-circle text-primary mr-1"></i>
            Project wide date and time format, follow this link for a list of supported characters: https://unicode-org.github.io/icu/userguide/format_parse/datetime/ . Please make sure to keep the double quotes " " around the format string
        </small>
        <input type="text" id="app_layout_settings_date_format" name="app_layout_settings[date_format]" required="required" aria-describedby="app_layout_settings_date_format_help" class="form-control" value="eee dd MMM y, h:mm a z">
     </div>
<!--  -->
     <div class="form-group">
        <label for="app_layout_settings_date_format" class="required">
        Alternative date and time format
        </label>
        <small id="app_layout_settings_date_format_help" class="form-text text-muted mb-3">
            <i class="fas fa-info-circle text-primary mr-1"></i>
            Used in some specific cases, follow this link for a list of supported characters: https://www.php.net/manual/en/datetime.format.php . Please make sure to keep the double quotes " " around the format string
        </small>
        <input type="text" id="app_layout_settings_date_format" name="app_layout_settings[date_format]" required="required" aria-describedby="app_layout_settings_date_format_help" class="form-control" value="d/m/Y, g:i A T">
     </div>

     <!--  -->
     <div class="form-group">
        <label for="app_layout_settings_date_format" class="required">
        Date only format
        </label>
        <small id="app_layout_settings_date_format_help" class="form-text text-muted mb-3">
            <i class="fas fa-info-circle text-primary mr-1"></i>
            Used in some specific cases, follow this link for a list of supported characters: https://www.php.net/manual/en/datetime.format.php . Please make sure to keep the double quotes " " around the format string
        </small>
        <input type="text" id="app_layout_settings_date_format" name="app_layout_settings[date_format]" required="required" aria-describedby="app_layout_settings_date_format_help" class="form-control" value="D j M Y">
     </div>

     <!--  -->
     <div class="form-group">
    <label for="app_layout_settings_Terms of service page slug" class="required">
    Timezone
        </label>
             <div class="form-group">
              <select class=" js-example-basic-multiple form-control" id="Terms of service">  
              <option value="Africa/Abidjan">Africa / Abidjan </option>  
             <option value="Africa/Accra">Africa/Accra </option> 
             <option value="Africa/Addis_Ababa">Africa/Addis_Ababa </option> 
             <option value="Africa/Algiers">Africa/Algiers </option> 
             <option value="Africa/Asmara">Africa/Asmara </option> 
              
              </select>
             </div>  

        <!--  -->
 
        <!--  -->
        <!--  -->
        <!--  -->

        <fieldset class="form-group">
            <legend class="col-form-label required" >
            Available languages
            </legend>
            <div id="app_layout_settings_app_locales">
                <div class="form-check">
                    <input type="checkbox" id="app_layout_settings_app_locales_0" name="app_layout_settings[app_locales][]" class="form-check-input" value="en" checked="checked">
                    <lable class="form-check-label" for="app_layout_settings_app_locales_0" >en</lable>
                 </div>
                 <div class="form-check">
                 <input type="checkbox" id="app_layout_settings_app_locales_1" name="app_layout_settings[app_locales][]" class="form-check-input" value="fr" checked="checked">
                    <lable class="form-check-label" for="app_layout_settings_app_locales_1" >fr</lable>
                 </div>
                 <div class="form-check">
                 <input type="checkbox" id="app_layout_settings_app_locales_2" name="app_layout_settings[app_locales][]" class="form-check-input" value="es" checked="checked">
                    <lable class="form-check-label" for="app_layout_settings_app_locales_2" >es</lable>
                 </div>
                 <div class="form-check">
                 <input type="checkbox" id="app_layout_settings_app_locales_3" name="app_layout_settings[app_locales][]" class="form-check-input" value="ar" checked="checked">
                    <lable class="form-check-label" for="app_layout_settings_app_locales_3" >ar</lable>
                 </div>
                
            </div>
            <!--  -->

            <div class="form-group">
             <lable for ="app_layout_settings_website_name" class="required" >
             Website name
             </lable>
             <input type="text" id="app_layout_settings_website_name" name="app_layout_settings[website_name]" required="required" class="form-control" value="Eventic">
            </div>
        </fieldset>
        <!--  -->
        <div class="form-group">
        <label for="app_layout_settings_website_slug" class="required">
        Website slug
        </label>
        <small id="app_layout_settings_website_slug_help" class="form-text text-muted mb-3">
            <i class="fas fa-info-circle text-primary mr-1"></i>
            Enter the chosen website name with no spaces and no uppercase characters (for SEO purposes)
        </small>
        <input type="text" id="app_layout_settings_website_slug" name="app_layout_settings[website_slug]" required="required" aria-describedby="app_layout_settings_date_format_help" class="form-control" value="eventic">
     </div>

         <!--  -->

         <div class="form-group">
        <label for="app_layout_settings_Website url" class="required">
        Website url
        </label>
        <small id="app_layout_settings_Website url_help" class="form-text text-muted mb-3">
            <i class="fas fa-info-circle text-primary mr-1"></i>
            Enter the full website url
        </small>
        <input type="text" id="app_layout_settings_website_slug" name="app_layout_settings[Website url]" required="required" aria-describedby="app_layout_settings_date_format_help" class="form-control" value="http://eventic.mtrsolution.com">
     </div>

     <!--  -->

     <div class="form-group">
        <label for="app_layout_settings_Website url" class="required">
        Website root url
        </label>
        <input type="text" id="app_layout_settings_Website root url" name="app_layout_settings[Website root url]" required="required" aria-describedby="app_layout_settings_date_format_help" class="form-control" value="http://eventic.mtrsolution.com">
     </div>

     <!--  -->
   <ul class="nav nav-pills mb-3">
    <li class="nav-item" >
        <a class="nav-link"data-toggle="tab" href="#website_description_en">Website description</a>
    </li>
    <li class="nav-item">
        <a class="nav-link"data-toggle="tab" href="#website_description_fr">Description du site</a>
    </li>
    <li class="nav-item">
        <a class="nav-link"data-toggle="tab" href="#website_description_es">Descripción del lugar</a>
    </li>
    <li class="nav-item">
        <a class="nav-link"data-toggle="tab" href="#website_description_ar">وصف الموقع</a>
    </li>
   </ul>
     
   <!--  -->
  <div class="tab-content">
    <div class="tab-pane container" id="website_description_en">
    <div class="form-group">
    <input type="text" id="app_layout_settings_website_description_en" name="app_layout_settings[website_description_en]" required="required" class ="form-control" value="Event Management And Ticket Sales">
    </div>
    </div>

  </div>
  <!--  -->

  <div class="tab-content">
    <div class="tab-pane container" id="website_description_fr">
    <div class="form-group">
    <input type="text" id="app_layout_settings_website_description_fr" name="app_layout_settings[website_description_fr]" required="required" class ="form-control" value="Gestion d'événements et vente de billets">
    </div>
    </div>
  </div>

  <!--  -->
  
  <div class="tab-content">
    <div class="tab-pane container" id="website_description_es">
    <div class="form-group">
    <input type="text" id="app_layout_settings_website_description_es" name="app_layout_settings[website_description_es]" required="required" class ="form-control" value="Gestión de eventos y venta de entradas">
    </div>
    </div>
  </div>

  <!--  -->
  <div class="tab-content">
    <div class="tab-pane container" id="website_description_ar">
    <div class="form-group">
    <input type="text" id="app_layout_settings_website_description_ar" name="app_layout_settings[website_description_ar]" required="required" class ="form-control" value="إدارة الأحداث ومبيعات التذاكر">
    </div>
    </div>
  </div>

<!--  -->
 
<div class="form-group">
        <label for="app_layout_settings_contact_email" class="required">
        Contact email
        </label>
        <input type="text" id="app_layout_settings_contact_email" name="app_layout_settings[contact_email]" required="required"  class="form-control" value="contact@mtrsolution.com">
     </div>

     <!--  -->
     <div class="form-group">
        <label for="app_layout_settings_Contact phone" class="required">
        Contact email
        </label>
        <input type="text" id="app_layout_settings_Contact phone" name="app_layout_settings[Contact phone]" required="required"  class="form-control" value="+123456789">
     </div>
     <!--  -->

     <div class="form-group">
        <label for="app_layout_settings_Contact address" class="required">
        Contact email
        </label>
        <input type="text" id="app_layout_settings_Contact address" name="app_layout_settings[Contact address]" required="required"  class="form-control" value="4916  Wyatt Street, 33128 Miami (FL), United States">
     </div>

     <!--  -->

     <div class="form-group">
        <label for="app_layout_settings_Facebook url" class="required">
        Facebook url
        </label>
        <input type="text" id="app_layout_settings_Facebook url" name="app_layout_settings[Facebook url]" required="required"  class="form-control" value="https://www.facebook.com">
     </div>
<!--  -->

    <div class="form-group">
        <label for="app_layout_settings_Instagram url" class="required">
        Instagram url
        </label>
        <input type="text" id="app_layout_settings_Instagram url" name="app_layout_settings[Instagram url]" required="required"  class="form-control" value="https://www.instagram.com">
     </div>

     <!--  -->
     <div class="form-group">
        <label for="app_layout_settings_Youtube url" class="required">
        Youtube url
        </label>
        <input type="text" id="app_layout_settings_Youtube url" name="app_layout_settings[Youtube url]" required="required"  class="form-control" value="https://www.youtube.com">
     </div>
     <!--  -->
     <div class="form-group">
        <label for="app_layout_settings_Youtube url" class="required">
        Youtube url
        </label>
        <input type="text" id="app_layout_settings_Youtube url" name="app_layout_settings[Youtube url]" required="required"  class="form-control" value="https://www.youtube.com">
     </div>
     <!--  -->

     <div class="form-group">
        <label for="app_layout_settings_Twitter url" class="required">
        Twitter url
        </label>
        <input type="text" id="app_layout_settings_Twitter url" name="app_layout_settings[Twitter url]" required="required"  class="form-control" value="https://www.twitter.com">
     </div>
     <!--  -->

     <fieldset  class="form-group">
        <legend class="col-form-label required">
        Application theme
        </legend>
        <div id="app_layout_settings_app_theme">
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="app_layout_settings_app_theme_0" name="app_layout_settings[app_theme]" required="required"  class="custom-control-input" value="orange" checked="checked">
            <label for="custom-control-label required"  for="app_layout_settings_app_theme_0">
            Orange
        </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="app_layout_settings_app_theme_1" name="aapp_layout_settings[app_theme]" required="required"  class="custom-control-input" value="lightblue" >
            <label for="custom-control-label required"  for="app_layout_settings_app_theme_1">
            lightblue   
        </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="app_layout_settings_app_theme_2" name="aapp_layout_settings[app_theme]" required="required"  class="custom-control-input" value="Dark blue" >
            <label for="custom-control-label required"  for="app_layout_settings_app_theme_2">
            Dark blue
        </label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="app_layout_settings_app_theme_3" name="aapp_layout_settings[app_theme]" required="required"  class="custom-control-input" value="yellow" >
            <label for="custom-control-label required"  for="app_layout_settings_app_theme_3">
            yellow
        </label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="app_layout_settings_app_theme_4" name="aapp_layout_settings[app_theme]" required="required"  class="custom-control-input" value="purple" >
            <label for="custom-control-label required"  for="app_layout_settings_app_theme_4">
            purple
        </label>
            </div>
        
        </div>

     </fieldset>
     
     <!--  -->

     <div class="form-group">
        <div id="appThemeColorPreview" class="shadow img-sm" style="background-color: rgb(53, 206, 141);"> </div>
     </div>

    <fieldset class="form-group">
    <legend class="col-form-label required">Application layout</legend>
        <small id="app_layout_settings_app_environment_help" class="form-text text-muted mb-3"> 
        </small>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="app_layout_settings_app_environment_6" name="app_layout_settings[app_environment]" required="required" class="custom-control-input" value="prod" checked="checked">
        <label class="custom-control-label " for="app_layout_settings_app_environment_6">
               <span class="option"> Compact</span>
           </label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="app_layout_settings_app_environment_7" name="app_layout_settings[app_environment]" required="required" class="custom-control-input" value="dev" >
        <label class="custom-control-label " for="app_layout_settings_app_environment_7">
               <span class="option"> Fluid</span>
           </label>
        </div>
        
    </fieldset>

<!--  -->
<div class="form-group">
        <label for="app_layout_settings_Primary color code" class="required">
        Primary color code
        </label>
        <input type="text" id="app_layout_settings_Primary color code" name="app_layout_settings[Primary color code]" required="required"  class="form-control" value="#1a1a1d">
     </div>

     <!--  -->

     <div class="form-group">
        <label for="app_layout_settings_No reply email address" class="required">
        No reply email address
        </label>
        <input type="text" id="app_layout_settings_No reply email address" name="app_layout_settings[No reply email address]" required="required"  class="form-control" value="no-reply@mtrsolution.com">
     </div>
     <!--  -->


     <fieldset class="form-group">
        <legend class="col-form">Logo</legend>
        <small id="app_layout_settings_logoFile_help" class="form-text text-muted mb-3">
            <i class="fas fa-info-circle text-primary mr-1"></i>
            Please choose a 200x50 image size to ensure compatibility with the website design
        </small>
        <div class="vich-image">
            <div class="custom-file">
       
                 <label class="app_layout_settings_logoFile_file " ><span class="bt" id="btnAddon">Browse</span>
                 <input type="file" id="app_layout_settings_logoFile_file" name="app_layout_settings[logoFile][file]"  class="custom-file-input" >
                 </label>
            </div>
        </div>
        <div class="img">
            <a href="https://eventic.mtrsolution.com/media/cache/scale/uploads/layout/5f626cc22a186068458664.png">  <img src="{{asset('images/image1.png')}}" alt></a>
        </div>
        </fieldset>
<!--  -->


<fieldset class="form-group">
        <legend class="col-form">Favicon</legend>
        <small id="app_layout_settings_faviconFile_help" class="form-text text-muted mb-3">
            <i class="fas fa-info-circle text-primary mr-1"></i>
            We recommend a 48x48 image size
        </small>
        <div class="vich-image">
            <div class="custom-file">
       
                 <label class="app_layout_settings_faviconFile_file" ><span class="bt" id="btnAddon">Browse</span>
                 <input type="file" id="app_layout_settings_logoFile_file" name="app_layout_settings[faviconFile][file]"  class="custom-file-input" >
                 </label>
            </div>
        </div>
        <div class="img">
            <a href="https://eventic.mtrsolution.com/media/cache/scale/uploads/layout/5ecac8821172a412596921.png">  <img src="{{asset('images/image2.png')}}" alt></a>
        </div>
        </fieldset>

<!--  -->


<fieldset class="form-group">
        <legend class="col-form">Social media share image</legend>
        <small id="app_layout_settings_ogImageFile_help" class="form-text text-muted mb-3">
            <i class="fas fa-info-circle text-primary mr-1"></i>
            Please choose a 200x200 minimum image size as it is required by Facebook
        </small>
        <div class="vich-image">
            <div class="custom-file">
       
                 <label class="app_layout_settings_faviconFile_file" ><span class="bt" id="basic-addon1">Browse</span>
                 <input type="file" id="app_layout_settings_logoFile_file" name="app_layout_settings[faviconFile][file]"  class="custom-file-input" aria-describedby=" basic-addon1" >
                 </label>
            </div>
        </div>
        <div class="img">
            <a href="https://eventic.mtrsolution.com/media/cache/scale/uploads/layout/5faadc546e235285098877.jpg">  <img src="{{asset('images/image3.png')}}" alt></a>
        </div>
        </fieldset>

     <!--  -->

     <fieldset class="form-group">
    <legend class="col-form-label required">Show the back to top button</legend>
        <small id="app_layout_settings_show_back_to_top_button" class="form-text text-muted mb-3"> 
        </small>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="app_layout_settings_show_back_to_top_button_8" name="app_layout_settings[show_back_to_top_button]" required="required" class="custom-control-input" value="prod" checked="checked">
        <label class="custom-control-label " for="app_layout_settings_show_back_to_top_button_8">
               <span class="option"> Yes</span>
           </label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="app_layout_settings_show_back_to_top_button_9" name="app_layout_settings[show_back_to_top_button]" required="required" class="custom-control-input" value="dev" >
        <label class="custom-control-label " for="app_layout_settings_show_back_to_top_button_9">
               <span class="option">on</span>
           </label>
        </div>
        
    </fieldset>

    <!--  -->
   
    <fieldset class="form-group">
    <legend class="col-form-label required">Show the terms of service page link</legend>
    <div id="app_layout_settings_show_terms_of_service_page">
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="app_layout_settings_show_terms_of_service_page_10" name="app_layout_settings[show_terms_of_service_page]" required="required" class="custom-control-input" vlaue="prod">
        <label class="custom-control-label " for="app_layout_settings_show_terms_of_service_page_10">
               <span class="option"> Yes</span>
           </label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="app_layout_settings_show_terms_of_service_page_11" name="app_layout_settings[show_terms_of_service_page]" required="required" class="custom-control-input" value="dev" >
        <label class="custom-control-label " for="app_layout_settings_show_terms_of_service_page_11">
               <span class="option">on</span>
           </label>
        </div>

        <div>
        
    </fieldset>  

    <!--  -->


    <div class="form-group">
    <label for="app_layout_settings_Terms of service page slug" class="required">
        Terms of service page slug
        </label>
             <div class="form-group">
              <select class=" js-example-basic-multiple form-control" id="Terms of service">  
               <option value="service">Terms of service </option>
               <option value="About as">Abbout as</option>
               <option value="Cookie policy">Cookie policy</option>
               <option value="GDPR compliance">GDPR compliance</option>
               <option value="Pricing and fees">Pricing and fees</option>
               <option value="Privacy policy">Privacy policy"</option>
               <option value="Terms  policy">Terms  policy</option>
              
              </select>
             </div>  

<!--  -->

             <fieldset class="form-group">
    <legend class="col-form-label required">Show the privacy policy page link
</legend>
    <div id="app_layout_settings_show_privacy_policy_page">
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="app_layout_settings_show_privacy_policy_page_12" name="app_layout_settings[show_privacy_policy_page]" required="required" class="custom-control-input" vlaue="prod">
        <label class="custom-control-label " for="app_layout_settings_show_privacy_policy_page_12">
               <span class="option"> Yes</span>
           </label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="app_layout_settings_show_privacy_policy_page_13" name="app_layout_settings[show_privacy_policy_page]" required="required" class="custom-control-input" value="ndev" >
        <label class="custom-control-label " for="app_layout_settings_show_privacy_policy_page_13">
               <span class="option">on</span>
           </label>
        </div>

        <div>
        
    </fieldset>
    <!--  -->

    <div class="form-group">
    <label for="app_layout_settings_Terms of service page slug" class="required">
    Privacy policy page slug
        </label>
             <div class="form-group">
              <select class="js-example-basic-multiple form-control" id="Terms of service">  
               <option value="service">Terms of service </option>
               <option value="About as">Abbout as</option>
               <option value="Cookie policy">Cookie policy</option>
               <option value="GDPR compliance">GDPR compliance</option>
               <option value="Pricing and fees">Pricing and fees</option>
               <option value="Privacy policy">Privacy policy"</option>
               <option value="Terms  policy">Terms  policy</option>
              
              </select>
             </div> 
    
    <!--  -->
    <fieldset class="form-group">
    <legend class="col-form-label required">Show the cookie policy bar at the bottom
</legend>
    <div id="app_layout_settings_show_cookie_policy_bar">
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="app_layout_settings_show_cookie_policy_bar_14" name="app_layout_settings[show_cookie_policy_bar]" required="required" class="custom-control-input" vlaue="prod">
        <label class="custom-control-label " for="app_layout_settings_show_cookie_policy_bar_14">
               <span class="option"> Yes</span>
           </label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="app_layout_settings_show_cookie_policy_bar_15" name="app_layout_settings[show_cookie_policy_bar]" required="required" class="custom-control-input" value="dev" >
        <label class="custom-control-label " for="app_layout_settings_show_cookie_policy_bar_15">
               <span class="option">on</span>
           </label>
        </div>

        <div>
        
    </fieldset>


    <!--  -->

    <fieldset class="form-group">
    <legend class="col-form-label required">Show the GDPR compliance page link
</legend>
    <div id="app_layout_settings_show_gdpr_compliance_page">
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="app_layout_settings_show_gdpr_compliance_page_16" name="app_layout_settings[show_gdpr_compliance_page]" required="required" class="custom-control-input" vlaue="prod">
        <label class="custom-control-label " for="app_layout_settings_show_gdpr_compliance_page_16">
               <span class="option"> Yes</span>
           </label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="app_layout_settings_show_gdpr_compliance_page_17" name="app_layout_settings[show_gdpr_compliance_page]" required="required" class="custom-control-input" value="dev" >
        <label class="custom-control-label " for="app_layout_settings_show_gdpr_compliance_page_17">
               <span class="option">on</span>
           </label>
        </div>

        <div>
        
    </fieldset>
    
    
    <!--  -->
   

    <div class="form-group">
    <label for="app_layout_settings_gdpr_compliance_page_slug" class="required">
    Gdpr compliance page slug
        </label>
             <div class="form-group">
              <select class="js-example-basic-multiple form-control" id="Terms of service">  
               <option value="service">Terms of service </option>
               <option value="About as">Abbout as</option>
               <option value="Cookie policy">Cookie policy</option>
               <option value="GDPR compliance">GDPR compliance</option>
               <option value="Pricing and fees">Pricing and fees</option>
               <option value="Privacy policy">Privacy policy"</option>
               <option value="Terms  policy">Terms  policy</option>
              
              </select>
             </div> 
    <!--  -->
    <div class="form-group">
    <label  class="custom">Custom css</label>
    <textarea  id="app_layout_settings_custom_css" name="app_layout_settings[custom_css]" rows="15" class="form-control" >
    </textarea>
    </div>
    

<!--  -->
<div class="form-group">
        <label for="app_layout_settings_google_analytics_code">
        Google analytics Tracking ID
        </label>
        <small id="app_layout_settings_google_analytics_code_help" class="form-text text-muted mb-3">
            <i class="fas fa-info-circle text-primary mr-1"></i>
            e.g. UA-000000-2
        </small>
        <input type="text" id="app_layout_settings_google_analytics_code" name="app_layout_settings[google_analytics_code]"  aria-describedby="app_layout_settings_google_analytics_code_help" class="form-control" value="UA-105603091-21">
     </div>
     <div class="form-group">
    <button type="submit" id="app_layout_settings_save" name="app_layout_settings[save]" class="btn btn-primary btn" >Save</button>
     </div>

</div>       
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('company_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.companies.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Company:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

})

</script>
<!--  -->
<script>


$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

$(document).ready(function () {
    $('input[name="app_layout_settings[app_theme]"]').change(function () {
        if ($(this).is(':checked')) {
            switch ($(this).val()) {
                case 'orange':
                        $('#app_layout_settings_primary_color').val('#f67611');
                        $('#appThemeColorPreview').css('background-color', '#f67611');
                        break;
                    case 'lightblue':
                        $('#app_layout_settings_primary_color').val('#90ccf4');
                        $('#appThemeColorPreview').css('background-color', '#90ccf4');
                        break;
                        case 'darkblue':
                        $('#app_layout_settings_primary_color').val('#3500d3');
                        $('#appThemeColorPreview').css('background-color', '#3500d3');
                        break;
                    case 'yellow':
                        $('#app_layout_settings_primary_color').val('#ffbd54');
                        $('#appThemeColorPreview').css('background-color', '#ffbd54');
                        break;
                    case 'purple':
                        $('#app_layout_settings_primary_color').val('#44318d');
                        $('#appThemeColorPreview').css('background-color', '#44318d');
                        break;

                    default:
                }
           }
       });
       $('input[name="app_layout_settings[app_theme]"]').trigger('change');
});

</script>
@endsection
