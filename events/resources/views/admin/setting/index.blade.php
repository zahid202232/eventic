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
        Homepage
    </div>

    <div class="card-body">
        <form name="homepage_hero_settings" method="post" novalidate="novalidate" enctype="multipart/form-data" autocomplete="off">
                            
                            <fieldset class="form-group"><legend class="col-form-label required">What to show in the homepage hero ?</legend><div id="homepage_hero_settings_content"><div class="custom-control custom-radio custom-control-inline">                                                                                    <input type="radio" id="homepage_hero_settings_content_0" name="homepage_hero_settings[content]" required="required" class="custom-control-input" value="none" data-slug-id="what-to-show-in-the-homepage-hero-hide-slider-radio" data-category="user-data">
                                                                                    <label class="custom-control-label required" for="homepage_hero_settings_content_0">Hide slider</label></div><div class="custom-control custom-radio custom-control-inline">                                                                                    <input type="radio" id="homepage_hero_settings_content_1" name="homepage_hero_settings[content]" required="required" class="custom-control-input" value="events" checked="checked" data-slug-id="what-to-show-in-the-homepage-hero-events-slider-radio" data-category="user-data">
                                                                                    <label class="custom-control-label required" for="homepage_hero_settings_content_1">Events slider</label></div><div class="custom-control custom-radio custom-control-inline">                                                                                    <input type="radio" id="homepage_hero_settings_content_2" name="homepage_hero_settings[content]" required="required" class="custom-control-input" value="organizers" data-slug-id="what-to-show-in-the-homepage-hero-organizers-slider-radio" data-category="user-data">
                                                                                    <label class="custom-control-label required" for="homepage_hero_settings_content_2">Organizers slider</label></div><div class="custom-control custom-radio custom-control-inline">                                                                                    <input type="radio" id="homepage_hero_settings_content_3" name="homepage_hero_settings[content]" required="required" class="custom-control-input" value="custom" data-slug-id="what-to-show-in-the-homepage-hero-custom-hero-radio" data-category="user-data">
                                                                                    <label class="custom-control-label required" for="homepage_hero_settings_content_3">Custom hero</label></div></div></fieldset>
                            <div id="events">
                                <div class="form-group"><label class="" for="homepage_hero_settings_events">
                                    Events
                                </label>
                                <div class="select2-container select2-container-multi select2 form-control" id="s2id_homepage_hero_settings_events">
                                    <ul class="select2-choices"> 
                                         <li class="select2-search-choice">    
                                            <div>DevOps Training and Certification Course</div>  
                                              <a href="#" class="select2-search-choice-close" tabindex="-1"></a></li>
                                              <li class="select2-search-choice">    <div>Adventure In The Jungle</div>    <a href="#" class="select2-search-choice-close" tabindex="-1"></a></li><li class="select2-search-choice">    <div>ProSoccer FC vs Tigers FC</div>    <a href="#" class="select2-search-choice-close" tabindex="-1"></a></li><li class="select2-search-choice">    <div>SuperPower</div>    <a href="#" class="select2-search-choice-close" tabindex="-1"></a></li><li class="select2-search-choice">    <div>Learn Blockchain with Python - Kick-Start Your Career Today</div>    <a href="#" class="select2-search-choice-close" tabindex="-1"></a></li><li class="select2-search-choice">    <div>Gun Man</div>    <a href="#" class="select2-search-choice-close" tabindex="-1"></a></li><li class="select2-search-field">    <label for="s2id_autogen1" class="select2-offscreen">Events</label>    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" id="s2id_autogen1" placeholder="" style="width: 20px;" data-slug-id="events" data-category="user-data">  </li></ul><div class="select2-drop select2-drop-multi select2-display-none">   <ul class="select2-results">   <li class="select2-no-results">No matches found</li></ul></div></div><select id="homepage_hero_settings_events" name="homepage_hero_settings[events][]" class="select2 form-control select2-offscreen" multiple="multiple" tabindex="-1" data-slug-id="devops-training-and-certification-course-adventure-in-the-jungle-prosoccer-fc-vs-tigers-fc-superpower-learn-blockchain-with-python-kick-start-your-career-today-gun-man-events-select-multiple" data-category="user-data"><option value="27">Camping Trip</option><option value="23" selected="selected">DevOps Training and Certification Course</option><option value="28">Contemporary Art Exposition</option><option value="20" selected="selected">Adventure In The Jungle</option><option value="18" selected="selected">ProSoccer FC vs Tigers FC</option><option value="29">Super Attraction Park</option><option value="15" selected="selected">SuperPower</option><option value="22" selected="selected">Learn Blockchain with Python - Kick-Start Your Career Today</option><option value="25">Summer Festival</option><option value="24" selected="selected">Gun Man</option><option value="26">Rock Concert Live Stream</option></select></div>
                            </div>
                            <div id="organizers" style="display: none;">
                                <div class="form-group"><label class="" for="homepage_hero_settings_organizers">Organizers</label><small id="homepage_hero_settings_organizers_help" class="form-text text-muted mb-3">
                                                                                                    <i class="fas fa-info-circle text-primary mr-1"></i>Make sure to select organizers who have added a cover photo</small><div class="select2-container select2-container-multi select2 form-control" id="s2id_homepage_hero_settings_organizers"><ul class="select2-choices">  <li class="select2-search-choice">    <div>IT Training Center</div>    <a href="#" class="select2-search-choice-close" tabindex="-1"></a></li><li class="select2-search-choice">    <div>ProSoccer Football Club</div>    <a href="#" class="select2-search-choice-close" tabindex="-1"></a></li><li class="select2-search-choice">    <div>Movies Expert</div>    <a href="#" class="select2-search-choice-close" tabindex="-1"></a></li><li class="select2-search-field">    <label for="s2id_autogen2" class="select2-offscreen">Organizers</label>    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" id="s2id_autogen2" placeholder="" style="width: 20px;">  </li></ul><div class="select2-drop select2-drop-multi select2-display-none">   <ul class="select2-results">   <li class="select2-no-results">No matches found</li></ul></div></div><select id="homepage_hero_settings_organizers" name="homepage_hero_settings[organizers][]" class="select2 form-control select2-offscreen" aria-describedby="homepage_hero_settings_organizers_help" multiple="multiple" tabindex="-1"><option value="1010">da</option><option value="1005">leandro95</option><option value="997">LMC</option><option value="989">DigiFlow</option><option value="982">koros Events</option><option value="945">ID Business</option><option value="907">Test</option><option value="897">Abyss</option><option value="880">adf</option><option value="874">GLOBAL NET PRODUÇÕES</option><option value="858">activeminds</option><option value="857">Alex Event</option><option value="852">AdKK</option><option value="846">partiuheventos</option><option value="841">softseer</option><option value="819">test</option><option value="804">WEBADAP</option><option value="798">test</option><option value="751">Manuel</option><option value="723">ikechukwu</option><option value="716">dsi foot</option><option value="710">Culchr</option><option value="709">DiaEdu</option><option value="706">My  Live Event</option><option value="691">Symbiosis Events</option><option value="656">Movies.expert</option><option value="646">Zequee</option><option value="636">Down Town</option><option value="635">poi</option><option value="628">X3</option><option value="608">werwerwer</option><option value="567">Sajin Rajesh</option><option value="509">Ruan Morais</option><option value="504">Mickey Holiday</option><option value="480">Mark</option><option value="479">Mattgu</option><option value="420">CGL</option><option value="392">Combet Ohct</option><option value="390">MIMOZA</option><option value="384">fdsdfgdf</option><option value="348">Dev</option><option value="342">Toox</option><option value="339">MFO</option><option value="336">akash</option><option value="332">Michael Erwin</option><option value="331">DJ</option><option value="307">testerpp</option><option value="292">gfdsg</option><option value="277">Relrys Santini</option><option value="270">Henry Co</option><option value="261">Holo</option><option value="246">Dean</option><option value="223">Kosmos</option><option value="193">champions</option><option value="176">Gurpreet</option><option value="160">Kabzi</option><option value="154">вавава</option><option value="139">chaa</option><option value="138">bbbb</option><option value="118">Giacomo Robinson</option><option value="100">POV_TEAM</option><option value="98">POV EM</option><option value="86">Samsoft Tecnologies Expo</option><option value="85">testings</option><option value="74">chaa</option><option value="58">Zuri Events</option><option value="29">Super Amusement Park</option><option value="28">Art Heaven</option><option value="27">Best Caming Trips</option><option value="26">Music Concerts Master</option><option value="25">Summer Festival</option><option value="18" selected="selected">IT Training Center</option><option value="14" selected="selected">ProSoccer Football Club</option><option value="7" selected="selected">Movies Expert</option></select></div>
                            </div>
                            <div id="custom" style="display: none;">
                                <fieldset class="form-group"><legend class="col-form-label">Custom hero background image</legend>    <div class="vich-image"><div class="custom-file"><input type="file" id="homepage_hero_settings_customBackgroundFile_file" name="homepage_hero_settings[customBackgroundFile][file]" class="custom-file-input"><label for="homepage_hero_settings_customBackgroundFile_file" class="custom-file-label"></label></div><div class="form-group"><div class="form-check"><input type="checkbox" id="homepage_hero_settings_customBackgroundFile_delete" name="homepage_hero_settings[customBackgroundFile][delete]" class="form-check-input" value="1"><label class="form-check-label" for="homepage_hero_settings_customBackgroundFile_delete">Delete</label></div></div><a href="https://eventic.mtrsolution.com/media/cache/scale/uploads/homepage/hero/5d99d60e41207545475471.jpg"><img src="https://eventic.mtrsolution.com/media/cache/scale/uploads/homepage/hero/5d99d60e41207545475471.jpg" alt=""></a></div></fieldset>
                                <fieldset class="form-group"><legend class="col-form-label">Custom hero title and paragraph translation</legend>    

    <div class="a2lix_translations">
        <ul class="a2lix_translationsLocales nav nav-tabs" role="tablist">
                    
            <li class="nav-item">
                <a href="#homepage_hero_settings_translations_en_a2lix_translations-fields" class="nav-link active" data-toggle="tab" role="tab">
                    En
                    [Default]                                    </a>
            </li>
                    
            <li class="nav-item">
                <a href="#homepage_hero_settings_translations_fr_a2lix_translations-fields" class="nav-link " data-toggle="tab" role="tab">
                    Fr
                                                        </a>
            </li>
                    
            <li class="nav-item">
                <a href="#homepage_hero_settings_translations_es_a2lix_translations-fields" class="nav-link " data-toggle="tab" role="tab">
                    Es
                                                        </a>
            </li>
                    
            <li class="nav-item">
                <a href="#homepage_hero_settings_translations_ar_a2lix_translations-fields" class="nav-link " data-toggle="tab" role="tab">
                    Ar
                                                        </a>
            </li>
                </ul>

        <div class="a2lix_translationsFields tab-content">
                    
            <div id="homepage_hero_settings_translations_en_a2lix_translations-fields" class="tab-pane show active " role="tabpanel">
                
                <div id="homepage_hero_settings_translations_en">
                    <div class="form-group">
                        <label for="homepage_hero_settings_translations_en_title">Title</label>
                        <input type="text" id="homepage_hero_settings_translations_en_title" name="homepage_hero_settings[translations][en][title]" maxlength="100" class="form-control" value="Eventic">
                    </div>
                    <div class="form-group"><label for="homepage_hero_settings_translations_en_paragraph">
                        Paragraph
                    </label>
                    <input type="text" id="homepage_hero_settings_translations_en_paragraph" name="homepage_hero_settings[translations][en][paragraph]" maxlength="500" class="form-control" value="Online Event Management And Ticket Sales">
                </div>
            </div>
            </div>
                    
            <div id="homepage_hero_settings_translations_fr_a2lix_translations-fields" class="tab-pane  " role="tabpanel">
                
                <div id="homepage_hero_settings_translations_fr"><div class="form-group"><label for="homepage_hero_settings_translations_fr_title">Titre</label><input type="text" id="homepage_hero_settings_translations_fr_title" name="homepage_hero_settings[translations][fr][title]" maxlength="100" class="form-control" value="Eventic"></div><div class="form-group"><label for="homepage_hero_settings_translations_fr_paragraph">Paragraphe</label><input type="text" id="homepage_hero_settings_translations_fr_paragraph" name="homepage_hero_settings[translations][fr][paragraph]" maxlength="500" class="form-control" value="Gestion d'événements en ligne et vente de billets"></div></div>
            </div>
                    
            <div id="homepage_hero_settings_translations_es_a2lix_translations-fields" class="tab-pane  " role="tabpanel">
                
                <div id="homepage_hero_settings_translations_es"><div class="form-group"><label for="homepage_hero_settings_translations_es_title">
                    Título</label><input type="text" id="homepage_hero_settings_translations_es_title" name="homepage_hero_settings[translations][es][title]" maxlength="100" class="form-control" value="Eventic">
                </div>
                <div class="form-group">
                    <label for="homepage_hero_settings_translations_es_paragraph">
                        Párrafo</label>
                        <input type="text" id="homepage_hero_settings_translations_es_paragraph" name="homepage_hero_settings[translations][es][paragraph]" maxlength="500" class="form-control" value="Gestión de eventos en línea y venta de entradas">
                    </div>
                </div>
            </div>
                    
            <div id="homepage_hero_settings_translations_ar_a2lix_translations-fields" class="tab-pane  " role="tabpanel">
                
                <div id="homepage_hero_settings_translations_ar"><div class="form-group"><label for="homepage_hero_settings_translations_ar_title">عنوان</label><input type="text" id="homepage_hero_settings_translations_ar_title" name="homepage_hero_settings[translations][ar][title]" maxlength="100" class="form-control" value="Eventic"></div><div class="form-group"><label for="homepage_hero_settings_translations_ar_paragraph">فقرة</label><input type="text" id="homepage_hero_settings_translations_ar_paragraph" name="homepage_hero_settings[translations][ar][paragraph]" maxlength="500" class="form-control" value="إدارة الأحداث عبر الإنترنت ومبيعات التذاكر"></div></div>
            </div>
                </div>
    </div>
</fieldset>
                                <fieldset class="form-group"><legend class="col-form-label">Show the homepage hero seach box</legend><div id="homepage_hero_settings_show_search_box"><div class="custom-control custom-radio custom-control-inline">                                                                                    <input type="radio" id="homepage_hero_settings_show_search_box_placeholder" name="homepage_hero_settings[show_search_box]" class="custom-control-input" value="">
                                                                                    <label class="custom-control-label" for="homepage_hero_settings_show_search_box_placeholder">None</label></div><div class="custom-control custom-radio custom-control-inline">                                                                                    <input type="radio" id="homepage_hero_settings_show_search_box_0" name="homepage_hero_settings[show_search_box]" class="custom-control-input" value="1" checked="checked">
                                                                                    <label class="custom-control-label" for="homepage_hero_settings_show_search_box_0">Yes</label></div><div class="custom-control custom-radio custom-control-inline">                                                                                    <input type="radio" id="homepage_hero_settings_show_search_box_1" name="homepage_hero_settings[show_search_box]" class="custom-control-input" value="0">
                                                                                    <label class="custom-control-label" for="homepage_hero_settings_show_search_box_1">No</label></div></div></fieldset>
                            </div>
                            <fieldset class="form-group"><legend class="col-form-label required">Show the search box</legend><div id="homepage_hero_settings_homepage_show_search_box"><div class="custom-control custom-radio custom-control-inline">                                                                                    <input type="radio" id="homepage_hero_settings_homepage_show_search_box_0" name="homepage_hero_settings[homepage_show_search_box]" required="required" class="custom-control-input" value="yes" data-slug-id="show-the-search-box-yes-radio" data-category="user-data">
                                                                                    <label class="custom-control-label required" for="homepage_hero_settings_homepage_show_search_box_0">Yes</label></div><div class="custom-control custom-radio custom-control-inline">                                                                                    <input type="radio" id="homepage_hero_settings_homepage_show_search_box_1" name="homepage_hero_settings[homepage_show_search_box]" required="required" class="custom-control-input" value="no" checked="checked" data-slug-id="show-the-search-box-no-radio" data-category="user-data">
                                                                                    <label class="custom-control-label required" for="homepage_hero_settings_homepage_show_search_box_1">No</label></div></div></fieldset><div class="form-group"><label for="homepage_hero_settings_homepage_events_number" class="required">Number of events to show</label><div class="input-group  bootstrap-touchspin bootstrap-touchspin-injected"><input type="text" id="homepage_hero_settings_homepage_events_number" name="homepage_hero_settings[homepage_events_number]" required="required" class="touchspin-integer form-control" data-min="0" data-max="36" value="9" data-slug-id="number-of-events-to-show" data-category="user-data"><span class="input-group-btn-vertical"><button class="btn btn-primary bootstrap-touchspin-up " type="button">+</button><button class="btn btn-primary bootstrap-touchspin-down " type="button">-</button></span></div></div><div class="form-group"><label for="homepage_hero_settings_homepage_categories_number" class="required">Number of featured categories to show</label><div class="input-group  bootstrap-touchspin bootstrap-touchspin-injected"><input type="text" id="homepage_hero_settings_homepage_categories_number" name="homepage_hero_settings[homepage_categories_number]" required="required" class="touchspin-integer form-control" data-min="0" data-max="21" value="8" data-slug-id="number-of-featured-categories-to-show" data-category="user-data"><span class="input-group-btn-vertical"><button class="btn btn-primary bootstrap-touchspin-up " type="button">+</button><button class="btn btn-primary bootstrap-touchspin-down " type="button">-</button></span></div></div><div class="form-group"><label for="homepage_hero_settings_homepage_blogposts_number" class="required">Number of blog posts to show</label><div class="input-group  bootstrap-touchspin bootstrap-touchspin-injected"><input type="text" id="homepage_hero_settings_homepage_blogposts_number" name="homepage_hero_settings[homepage_blogposts_number]" required="required" class="touchspin-integer form-control" data-min="0" data-max="15" value="8" data-slug-id="number-of-blog-posts-to-show" data-category="user-data"><span class="input-group-btn-vertical"><button class="btn btn-primary bootstrap-touchspin-up " type="button">+</button><button class="btn btn-primary bootstrap-touchspin-down " type="button">-</button></span></div></div><fieldset class="form-group"><legend class="col-form-label required">Show the call to action block</legend><div id="homepage_hero_settings_homepage_show_call_to_action"><div class="custom-control custom-radio custom-control-inline">                                                                                    <input type="radio" id="homepage_hero_settings_homepage_show_call_to_action_0" name="homepage_hero_settings[homepage_show_call_to_action]" required="required" class="custom-control-input" value="yes" checked="checked" data-slug-id="show-the-call-to-action-block-yes-radio" data-category="user-data">
                                                                                    <label class="custom-control-label required" for="homepage_hero_settings_homepage_show_call_to_action_0">Yes</label></div><div class="custom-control custom-radio custom-control-inline">                                                                                    <input type="radio" id="homepage_hero_settings_homepage_show_call_to_action_1" name="homepage_hero_settings[homepage_show_call_to_action]" required="required" class="custom-control-input" value="no" data-slug-id="show-the-call-to-action-block-no-radio" data-category="user-data">
                                                                                    <label class="custom-control-label required" for="homepage_hero_settings_homepage_show_call_to_action_1">No</label></div></div></fieldset><div class="form-group"><button type="submit" id="homepage_hero_settings_save" name="homepage_hero_settings[save]" class="btn btn-primary btn">Save</button></div><input type="hidden" id="homepage_hero_settings__token" name="homepage_hero_settings[_token]" value="J4-q23RMtvlxZPGLS1DVwVmB5I3rfVDqvrwJObyl3hc"></form>

</div>


</div>

@endsection

