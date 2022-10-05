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
    google_maps
    </div>
    <div class="card-body">
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

    </div>   
</div>

@endsection
