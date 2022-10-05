<aside class="main-sidebar sidebar-light-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="text-align: center;">
        <!-- <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span> -->
        <img src="{{ asset('./images/logotip-identiks-en.png')}}" alt="" class="collap-hide">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("admin.home") }}">
                       <i class="fas fa-home nav-icon"></i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>
                <!-- @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/permissions*") ? "menu-open" : "" }} {{ request()->is("admin/roles*") ? "menu-open" : "" }} {{ request()->is("admin/users*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.userManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.permission.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-briefcase">

                                        </i>
                                        <p>
                                            {{ trans('cruds.role.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user">

                                        </i>
                                        <p>
                                            {{ trans('cruds.user.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan -->
                <!-- @can('basic_c_r_m_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/crm-statuses*") ? "menu-open" : "" }} {{ request()->is("admin/crm-customers*") ? "menu-open" : "" }} {{ request()->is("admin/crm-notes*") ? "menu-open" : "" }} {{ request()->is("admin/crm-documents*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-briefcase">

                            </i>
                            <p>
                                {{ trans('cruds.basicCRM.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('crm_status_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.crm-statuses.index") }}" class="nav-link {{ request()->is("admin/crm-statuses") || request()->is("admin/crm-statuses/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-folder">

                                        </i>
                                        <p>
                                            {{ trans('cruds.crmStatus.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('crm_customer_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.crm-customers.index") }}" class="nav-link {{ request()->is("admin/crm-customers") || request()->is("admin/crm-customers/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user-plus">

                                        </i>
                                        <p>
                                            {{ trans('cruds.crmCustomer.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('crm_note_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.crm-notes.index") }}" class="nav-link {{ request()->is("admin/crm-notes") || request()->is("admin/crm-notes/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-sticky-note">

                                        </i>
                                        <p>
                                            {{ trans('cruds.crmNote.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('crm_document_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.crm-documents.index") }}" class="nav-link {{ request()->is("admin/crm-documents") || request()->is("admin/crm-documents/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-folder">

                                        </i>
                                        <p>
                                            {{ trans('cruds.crmDocument.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan -->
                @can('company_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.companies.index") }}" class="nav-link {{ request()->is("admin/companies") || request()->is("admin/companies/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon far fa-building">

                            </i>
                            <p>
                                {{ trans('cruds.company.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('participant_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.participants.index") }}" class="nav-link {{ request()->is("admin/participants") || request()->is("admin/participants/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.participant.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('event_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.events.index") }}" class="nav-link {{ request()->is("admin/events") || request()->is("admin/events/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-weight">

                            </i>
                            <p>
                                {{ trans('cruds.event.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('attendy_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.attendies.index") }}" class="nav-link {{ request()->is("admin/attendies") || request()->is("admin/attendies/*") ? "active" : "" }}">
                        <i class="fa-solid fas fa-user-check" style="margin-right: 0.2rem;"></i>
                            <p>
                                {{ trans('cruds.attendy.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                <li class="nav-item nav-item has-treeview {{ request()->is('admin/sites*') ? 'menu-open' : '' }}{{ request()->is('admin/guards*') ? 'menu-open' : '' }} {{ request()->is('admin/cluster-ids*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-home"></i>
                            <p>
                              Settings
                               <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="{{ route("admin.setting.index") }}" class="nav-link {{ request()->is("admin/setting") || request()->is("admin/setting/*") ? "active" : "" }}">
                            <!-- <i class="fa-fw nav-icon far fa-building"> -->
                            <i class='far fa-home'></i>

                            </i>
                            <p>
                               Homepage
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.setting.menu") }}" class="nav-link {{ request()->is("admin/setting") || request()->is("admin/setting/*") ? "active" : "" }}">
                            <!-- <i class="fa-fw nav-icon far fa-building"> -->
                            <!-- <i class="fa-solid fa-building"></i> -->
                            <i class='fas fa-align-justify'></i>
                            </i>
                            <p>
                               menu
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.setting.checkout") }}" class="nav-link {{ request()->is("admin/setting") || request()->is("admin/setting/*") ? "active" : "" }}">
                            <!-- <i class="fa-fw nav-icon far fa-building"> -->
                            <!-- <i class='fal fa-sign-out-alt'></i> -->
                            <!-- <i class='far fa-inbox-adn'></i> -->
                            <!-- <i class='fal fa-arrow-alt-to-right'></i> -->
                            <i class='fas fa-ad'></i>

                            </i>
                            <p>
                               checkout
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.payment_fees") }}" class="nav-link {{ request()->is("admin/setting") || request()->is("admin/setting/*") ? "active" : "" }}">
                            <!-- <i class="fa-fw nav-icon far fa-building"> -->
                            <!-- <i class='far fa-money-check-alt'></i> -->
                            <i class='fas fa-money-check-alt'></i>



                            <!-- </i> -->
                            <p>
                            payment fees
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("setting.blog_settings") }}" class="nav-link {{ request()->is("admin/setting") || request()->is("admin/setting/*") ? "active" : "" }}">
                            <!-- <i class="fa-fw nav-icon far fa-building"> -->
                            <!-- <i class='far fa-blog'></i> -->
                            <i class='fas fa-blog'></i>

                            </i>
                            <p>
                            blog setting
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("setting.new_letters") }}" class="nav-link {{ request()->is("admin/setting") || request()->is("admin/setting/*") ? "active" : "" }}">
                            <!-- <i class="fa-fw nav-icon far fa-building"> -->
                            <!-- <i class='fal fa-newspaper'></i> -->
                            <i class='fas fa-newspaper'></i>

                            </i>
                            <p>
                            new_letter
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("setting.event_lists") }}" class="nav-link {{ request()->is("admin/setting") || request()->is("admin/setting/*") ? "active" : "" }}">
                            <!-- <i class="fa-fw nav-icon far fa-building"> -->
                            <!-- <i class='far fa-clipboard-list'></i> -->
                            <i class='fas fa-clipboard-list'></i>



                            </i>
                            <p>
                            event_list
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("setting.social_logins") }}" class="nav-link {{ request()->is("admin/setting") || request()->is("admin/setting/*") ? "active" : "" }}">
                            <!-- <i class="fa-fw nav-icon far fa-building"> -->
                            <!-- <i class='far fa-bullhorn'></i> -->
                            <i class='fas fa-at'></i>
                            </i>
                            <p>
                            social_logins
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("setting.google_maps") }}" class="nav-link {{ request()->is("admin/setting") || request()->is("admin/setting/*") ? "active" : "" }}">
                            <!-- <i class="fa-fw nav-icon far fa-building"> -->
                            <!-- <i class='far fa-landmark'></i> -->
                            <i class='fas fa-globe'></i>

                            </i>
                            <p>
                            google_maps
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("setting.googgle_recaptcha") }}" class="nav-link {{ request()->is("admin/setting") || request()->is("admin/setting/*") ? "active" : "" }}">
                            <!-- <i class="fa-fw nav-icon far fa-building"> -->
                            <!-- <i class='far fa-landmark'></i> -->
                            <!-- <i class='far fa-globe'></i> -->
                            <i class='fas fa-desktop'></i>


                            <!-- </i> -->
                            <p>
                            google recaptcha
                            </p>
                        </a>
                    </li>
                        </ul>
                    </li>
                    
            
                @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                    @can('profile_password_edit')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                                <i class="fa-fw fas fa-key nav-icon">
                                </i>
                                <p>
                                    {{ trans('global.change_password') }}
                                </p>
                            </a>
                        </li>
                    @endcan
                @endif
                {{--  @dd(Auth::User()->roles[0]->title);  --}}
              @if (Auth::User()->roles[0]->title == 'Admin')
                 <li class="nav-item">
                    <a href="{{ route('admin.report') }}" class="nav-link" >
                        <p>
                            <i class="fa fa-file nav-icon">

                            </i>
                            <p>Report</p>
                        </p>
                    </a>
                </li>
                @endif

          @if (Auth::User()->roles[0]->title == 'company')
                   
                    <li class="nav-item">
                        <a href="{{ route("admin.participants.index") }}" class="nav-link {{ request()->is("admin/participants") || request()->is("admin/participants/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.participant.title') }}
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route("admin.events.index") }}" class="nav-link {{ request()->is("admin/events") || request()->is("admin/events/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-weight">

                            </i>
                            <p>
                                {{ trans('cruds.event.title') }}
                            </p>
                        </a>
                    </li>
                @endif
				<li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt nav-icon">

                            </i>
                            <p>{{ trans('global.logout') }}</p>
                        </p>
                    </a>
                </li>
               <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none" >
                  @csrf
                </form>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
