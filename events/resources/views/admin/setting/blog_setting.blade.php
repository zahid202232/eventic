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
        blog setting
    </div>
    <div class="card-body">
        <label for="form_blog_posts_per_page">
            Number of blog posts per page

            </lable>
            <br>
            <div class="btn">
                <!-- <input type="number" id="incrementText" > -->
                <input id="incrementText">
                <button onclick="IncrementButton()">+</button>
                <button onclick="decrmentButton()">-</button>

            </div>

            <fieldset class="form-group">
                <legend class="col-form-label required">Enable comments</legend>
                <div class="form_show_audience_filter">

                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="form_show_audience_filter-0" name="form_show_audience_filter"
                            class="custom-control-input" checked="checked" value="yes">
                        <label class="custom-control-label  " for="form_show_audience_filter_0">
                            <span class="option"> NO</span>
                        </label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="form_show_audience_filter-1" name="form_show_audience_filter"
                            class="custom-control-input" value="no">
                        <label class="custom-control-label " for="form_show_audience_filter-1">
                            <span class="option">Facebook comment</span>
                        </label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="form_show_audience_filter-2" name="form_show_audience_filter"
                            class="custom-control-input" value="dev">
                        <label class="custom-control-label " for="form_show_audience_filter-2">
                            <span class="option">Disqus comments</span>
                        </label>
                    </div>
                </div>

            </fieldset>
            <div class="form-group">

                <label for="form_mailchimp_list_id">
                    Facebook app id
                </label>
                <small id="form_facebook_app_id_help" class="form-text text-muted mb-3">
                    <i class="fas fa-info-circle text-primary mr-1"> </i>
                    Go to the documentation to get help about getting an app ID
                    <input type="text" id="form_facebook_app_id" name="form[facebook_app_id]" required="required"
                        aria-describedby="form_mailchimp_api_key_help" class="form-control"
                        value="542673602536197ee271b0d4d78164da-us20">

                    </input>

                </small>
            </div>

            <div class="form-group">

                <label for="form_disqus_subdomain">
                    Disqus subdomain
                </label>
                <small id="form_disqus_subdomain_help" class="form-text text-muted mb-3">
                    <i class="fas fa-info-circle text-primary mr-1"> </i>
                    Go to the documentation to get help about setting up Disqus
                    <input type="text" id="form_disqus_subdomain" name="form[disqus_subdomain]" required="required"
                        aria-describedby="form_disqus_subdomain_help" class="form-control" value="eventic">

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
@section('scripts')

<script>
// 


function IncrementButton() {
    var element = document.getElementById('incrementText');
    var v = element.value;
    ++v;
    console.log(v);
    document.getElementById('incrementText').value = v;
}

function decrmentButton() {
    var element = document.getElementById('incrementText');
    var v = element.value;




    --v;


    document.getElementById('incrementText').value = v;


}
</script>

@endsection