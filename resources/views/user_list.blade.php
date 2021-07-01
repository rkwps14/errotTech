@extends('layouts.master')
@section('page_title','User List')
@section('content')

<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    {{Auth::user()->full_name}}
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Logout </a>
                        <form id="logout-form" action="{{url('logout')}}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
<div class="right_col" role="main">
          <div class="">
            <div class="row">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Users Table </h2>
                    
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                        
                            <th class="column-title">Id </th>
                            <th class="column-title">Full Name </th>
                            <th class="column-title">Email </th>
                            <th class="column-title">Password </th>
                            <th class="column-title">Is_Admin </th>
                            <th class="column-title">Created_by</th>
                            <th class="column-title">Created_at </th>
                            <th class="column-title">Updated_at</th>
                          </tr>
                        </thead>

                        <tbody>
                        @foreach($users as $user) 
                          <tr class="even pointer">
                            <td class=" ">{{$user->id}}</td>
                            <td class=" ">{{$user->full_name}}</td>
                            <td class=" ">{{$user->email}}</td>
                            <td class=" ">{{$user->password}}</td>
                            <td class=" ">{{$user->is_admin}}</td>
                            <td class=" ">{{$user->created_by}}</td>
                            <td class=" ">{{$user->created_at}}</td>
                            <td class=" ">{{$user->updated_at}}</td>
                            </tr>
                        @endforeach    
                        </tbody>
                      </table>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection