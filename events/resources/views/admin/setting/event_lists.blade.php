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
    event_lists
    </div>
    <div class="card-body">
    <div class="form-group">
   <label for="form_blog_posts_per_page" >
   Number of blog posts per page

   </lable>
   <div class="input-group  bootstrap-touchspin bootstrap-touchspin-injected">
   <input id=demoInput type=number min=100 max=110 type="text" name="form[blog_posts_per_page]" required="required"  class="touchspin-integer form-control" value="9">
   <span class="input-group-btn-vertical">
   <button onclick="increment()" class="btn btn-primary bootstrap-touchspin-up " type="button">+</button>
   <button onclick="decrement()" class="btn btn-primary bootstrap-touchspin-down " type="button">-</button>

   </span>

   </div>
   <fieldset class="form-group">
    <legend class="col-form-label required">Show map button</legend>
    <div class="form_show_map_button">
       
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="form_show_map_button_0" name="form[show_map_button]"  class="custom-control-input"  checked="checked">
        <label class="custom-control-label  " for="form_show_map_button_0">
               <span class="option"> Yes</span>
           </label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="form_show_map_button_1" name="form[show_map_button]"  class="custom-control-input" value="no" >
        <label class="custom-control-label " for="form_show_map_button_1">
               <span class="option"> No</span>
           </label>
        </div>
     </div>
        
    </fieldset>



    <fieldset class="form-group">
    <legend class="col-form-label required">Show calendar button</legend>
    <div class="form_show_calender_button">
       
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="form_show_calendar_button-0" name="show_calendar_button"  class="custom-control-input"  checked="checked" value="yes">
        <label class="custom-control-label  " for="form_show_calendar_button-0">
               <span class="option"> Yes</span>
           </label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="form_show_calendar_button-1" name="show_calendar_button"  class="custom-control-input" value="no" >
        <label class="custom-control-label " for="form_show_calendar_button-1">
               <span class="option"> No</span>
           </label>
        </div>
     </div>
        
    </fieldset>





    <fieldset class="form-group">
    <legend class="col-form-label required">Show RSS feed button</legend>
    <div class="form_show_rss_feed_button">
       
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="form_show_rss_feed_button_0" name="show_rss_feed_button"  class="custom-control-input"  checked="checked">
        <label class="custom-control-label  " for="form_show_rss_feed_button_0">
               <span class="option"> Yes</span>
           </label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="form_show_rss_feed_button-1" name="show_rss_feed_button"  class="custom-control-input" value="no" >
        <label class="custom-control-label " for="form_show_rss_feed_button-1">
               <span class="option"> No</span>
           </label>
        </div>
     </div>
        
     
    </fieldset>

    <fieldset class="form-group">
    <legend class="col-form-label required">Show category filter</legend>
    <div class="form_show_category_filter">
       
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="form_show_category_filter_0" name="form_show_category_filter"  class="custom-control-input"  checked="checked">
        <label class="custom-control-label  " for="form_show_category_filter_0">
               <span class="option"> Yes</span>
           </label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="form_show_category_filter-1" name="form_show_category_filter"  class="custom-control-input" value="no" >
        <label class="custom-control-label " for="form_show_category_filter-1">
               <span class="option"> No</span>
           </label>
        </div>
     </div>
        
    </fieldset>
    
    <fieldset class="form-group">
    <legend class="col-form-label required">Show category filter</legend>
    <div class="Show location filter">
       
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="Show location filter_0" name="Show location filter"  class="custom-control-input"  checked="checked">
        <label class="custom-control-label  " for="Show location filter_0">
               <span class="option"> Yes</span>
           </label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="Show location filter-1" name="Show location filter"  class="custom-control-input" value="no" >
        <label class="custom-control-label " for="Show location filter-1">
               <span class="option"> No</span>
           </label>
        </div>
     </div>
        
    </fieldset>


    <fieldset class="form-group">
    <legend class="col-form-label required">Show date filter</legend>
    <div class="form_show_date_filter">
       
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="form_show_date_filter_0" name="form_show_date_filter"  class="custom-control-input"  checked="checked">
        <label class="custom-control-label  " for="form_show_date_filter_0">
               <span class="option"> Yes</span>
           </label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="form_show_date_filter-1" name="form_show_date_filter"  class="custom-control-input" value="no" >
        <label class="custom-control-label " for="form_show_date_filter-1">
               <span class="option"> No</span>
           </label>
        </div>
     </div>
        
    </fieldset>


    <fieldset class="form-group">
    <legend class="col-form-label required">Show ticket price filter</legend>
    <div class="form_show_ticket_price_filter">
       
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="form_show_ticket_price_filter_0" name="form[show_ticket_price_filter]"  class="custom-control-input"  checked="checked" vlaue="yes">
        <label class="custom-control-label  " for="form_show_ticket_price_filter_0">
               <span class="option"> Yes</span>
           </label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="form_show_ticket_price_filter_1" name="form[show_ticket_price_filter]"  class="custom-control-input" value="no" >
        <label class="custom-control-label " for="form_show_ticket_price_filter_1">
               <span class="option"> No</span>
           </label>
        </div>
     </div>
        
    </fieldset>


    <fieldset class="form-group">
    <legend class="col-form-label required">Show audience filter</legend>
    <div class="form_show_audience_filter">
       
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="form_show_audience_filter_10" name="form_show_audience_filter"  class="custom-control-input"  checked="checked" vlaue="yes">
        <label class="custom-control-label  " for="form_show_audience_filter_10">
               <span class="option"> Yes</span>
           </label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="form_show_audience_filter-1" name="form_show_audience_filter"  class="custom-control-input" value="no" >
        <label class="custom-control-label " for="form_show_audience_filter-1">
               <span class="option"> No</span>
           </label>
        </div>
     </div>
        
    </fieldset>

    <div class="form-group">
    <button type="submit" id="app_layout_settings_save" name="app_layout_settings[save]" class="btn btn-primary btn" >Save</button>
     </div>

    </div> 

</div>

@endsection
