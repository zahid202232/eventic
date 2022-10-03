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
        menu
    </div>

    <div class="card-body">
        
    </div>
    <div class=" col-lg-9 mt-4 mt-lg-0">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-hover table-vcenter text-nowrap">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Header</th>
                                <th>Elements</th>
                                <th class="text-center">
                                    <i class="fas fa-cog"></i>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Header menu</td>
                                <td>"  "</td>
                                <td>8</td>
                                <td class="text-center">
                                    <div class="item-action dropdown">
                                        <a href="javascript:void(0)"data-toggle="dropdown" data-boundary="window" class="icon">
                                            <i class="fas fa-ellipsis-v">
                                           <!-- ::before -->
                                            </i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="https://eventic.mtrsolution.com/en/dashboard/administrator/settings/menus/header-menu/edit" class="dropdown-item">
                                                <i class="dropdown-icon fas fa-edit fa-fw text-muted"></i>
                                                Edit
                                            </a>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            
                            <!--  -->

                            <tr>
                                <td>
                                    First Footer Section Menu
                                </td>
                                <td>
                                    Useful Links
                                 </td>
                                <td>5</td>
                                <td class="text-center">
                                    <div class="item-action dropdown">
                                        <a href="javascript:void(0)"data-toggle="dropdown" data-boundary="window" class="icon">
                                            <i class="fas fa-ellipsis-v">
                                           <!-- ::before -->
                                            </i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="https://eventic.mtrsolution.com/en/dashboard/administrator/settings/menus/header-menu/edit" class="dropdown-item">
                                                <i class="dropdown-icon fas fa-edit fa-fw text-muted"></i>
                                                Edit
                                            </a>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                             
                            <!--  -->
                            <tr>
                                <td>
                                    Second Footer Section Menu
                                </td>
                                <td>
                                    My Account
                                 </td>
                                <td>5</td>
                                <td class="text-center">
                                    <div class="item-action dropdown">
                                        <a href="javascript:void(0)"data-toggle="dropdown" data-boundary="window" class="icon">
                                            <i class="fas fa-ellipsis-v">
                                           <!-- ::before -->
                                            </i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="https://eventic.mtrsolution.com/en/dashboard/administrator/settings/menus/header-menu/edit" class="dropdown-item">
                                                <i class="dropdown-icon fas fa-edit fa-fw text-muted"></i>
                                                Edit
                                            </a>

                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <!--  -->
                            <tr>
                                <td>
                                    Third Footer Section Menu
                                </td>
                                <td>
                                    Event Categories
                                 </td>
                                <td>2</td>
                                <td class="text-center">
                                    <div class="item-action dropdown">
                                        <a href="javascript:void(0)"data-toggle="dropdown" data-boundary="window" class="icon">
                                            <i class="fas fa-ellipsis-v">
                                           <!-- ::before -->
                                            </i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="https://eventic.mtrsolution.com/en/dashboard/administrator/settings/menus/header-menu/edit" class="dropdown-item">
                                                <i class="dropdown-icon fas fa-edit fa-fw text-muted"></i>
                                                Edit
                                            </a>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                    
                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>
  </div>


  
</div>



@endsection

