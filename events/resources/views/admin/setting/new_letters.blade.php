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
        new_letter
    </div>
    <div class="card-body">
        <fieldset class="form-group">
            <legend class="col-form-label required">Show audience filter</legend>
            <small id="form_facebook_app_id_help" class="form-text text-muted mb-3">
                <i class="fas fa-info-circle text-primary mr-1"> </i>
                SSL must be activated on your hosting server in order to use Mailchimp
                </input>

            </small>

            <div class="form_show_audience_filter">

                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="form_newsletter_enabled_0" name="newsletter_enabled"
                        class="custom-control-input" checked="checked">
                    <label class="custom-control-label  " for="form_newsletter_enabled_0">
                        <span class="option"> Yes</span>
                    </label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="newsletter_enabled-1" name="newsletter_enabled" class="custom-control-input"
                        value="no">
                    <label class="custom-control-label " for="newsletter_enabled-1">
                        <span class="option"> No</span>
                    </label>
                </div>
            </div>

        </fieldset>


        <div class="form-group">

            <label for="form_mailchimp_api_key">
                Mailchimp app id
            </label>
            <small id="form_mailchimp_api_key_help" class="form-text text-muted mb-3">
                <i class="fas fa-info-circle text-primary mr-1"> </i>
                Go to the documentation to get help about getting an api key
                <input type="text" id="form_mailchimp_api_key" name="form[mailchimp_api_key]" required="required"
                    aria-describedby="form_mailchimp_api_key_help" class="form-control"
                    value="542673602536197ee271b0d4d78164da-us20">

                </input>

            </small>
        </div>
        <div class="form-group">

            <label for="form_mailchimp_list_id">
                Mailchimp list id
            </label>
            <small id="form_mailchimp_list_id_help" class="form-text text-muted mb-3">
                <i class="fas fa-info-circle text-primary mr-1"> </i>
                Go to the documentation to get help about getting a list id
                <input type="text" id="form_mailchimp_list_id" name="form[mailchimp_list_id]" required="required"
                    aria-describedby="form_mailchimp_api_key_help" class="form-control"
                    value="542673602536197ee271b0d4d78164da-us20">

                </input>

            </small>
        </div>
        <div class="form-group">
            <button type="submit" id="app_layout_settings_save" name="app_layout_settings[save]"
                class="btn btn-primary btn">Save</button>
        </div>
    </div>
</div>

@endsection