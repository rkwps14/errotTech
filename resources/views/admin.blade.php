@extends('layouts.master')
@section('page_title','Dashboard')
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
                </li>
              </ul>
            </nav>
          </div>
        </div>
<div class="right_col" role="main">
          <div class="row card">
            <div class="card-header text-center">Import You file here</div>
              <div class="card-body">
                  <form action="{{url('upload-csv')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <table>
                    
                        <tr>
                            <td>Import CSV file here!!: </td>
                            <td class="border"><input type="file" name="file" /></td>
                        </tr>
                        <tr>
                        <td><button type="submit" class="btn btn-primary">Upload</button></td>
                        </tr> 
                    </table>
                    @if(session()->has('success'))
                            {{ session('success') }}
                    @endif
                </form>
              </div>
          </div>
        </div>
                
        </div>
          <!-- /top tiles -->

          
@endsection