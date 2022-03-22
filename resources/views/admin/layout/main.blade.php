<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Panel</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <link rel="stylesheet" type="text/css" href="styles.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Red+Hat+Text:400,500&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
  <!-- Custom Font Icons CSS-->
  <link rel="stylesheet" href="{{asset('css/font.css')}}">
  <!-- Google fonts - Muli-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="{{asset('css/style.default.css')}}" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="{{asset('css/custom.css')}}">
  <!-- Charts css -->
  <link rel="stylesheet" href="{{asset('css/chartcss.css')}}">
  <!-- Favicon-->
  <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
  <!-- cahrt js -->
  <link rel="shortcut icon" href="{{asset('js/chart1.js')}}">
  <!-- Font Awesome cdn -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css
">


</head>

<body>
  <header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
            <div class="search-inner d-flex align-items-center justify-content-center">
                <div class="close-btn">
                    Close
                    <i class="fa fa-close">
                    </i>
                </div>
                <form action="#" id="searchForm">
                    <div class="form-group">
                        <input name="search" placeholder="What are you searching for..." type="search">
                            <button class="submit" type="submit">
                                Search
                            </button>
                        </input>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="navbar-header">
                <!-- Navbar Header-->
                <a class="navbar-brand" href="index.html">
                    <div class="brand-text brand-big visible text-uppercase">
                        <strong class="text-primary" style="color: white!important;">
                             Imperial Mining
                        </strong>
                        
                    </div>
                    <div class="brand-text brand-sm">
                        <strong class="text-primary" style="color: white!important;">
                            I
                        </strong>
                        
                    </div>
                </a>
                <!-- Sidebar Toggle Btn-->
                <button class="sidebar-toggle">
                    <i class="fa fa-long-arrow-left">
                    </i>
                </button>
            </div>
            <div class="right-menu list-inline no-margin-bottom">
               
               
                <!-- Tasks end-->
                <!-- Megamenu end     -->
                <!-- Languages dropdown    -->
               <div class="list-inline-item logout">
                     <a class="nav-link " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}<i class="icon-logout">
                        </i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </div>   
                
                <!-- Log out               -->
                
            </div>
        </div>
    </nav>
</header>
  @show
  <div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    @section('nav')
   
    <nav id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        @if(Auth()->user()->profile!=null)
         

          
        <div class="avatar"><img src="{{asset('upload/images/'.Auth()->user()->profile)}}" alt="..." class="img-fluid rounded-circle"></div>
        @else
        <div class="avatar"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8JyScJ3XAm0g9mNMQ1Ws7EI6LoVgs7_HDXg&usqp=CAU" alt="..." class="img-fluid rounded-circle"></div>
        
        @endif
        <div class="title">
          <h1 class="h5">{{Auth::user()->first_name}}</h1>

        </div>
      </div>
      <!-- Sidebar Navidation Menus-->
      <ul class="list-unstyled">
        <li class="{{ Request::is('admins/index') ? 'active' : '' }}"><a href="{{url('admins/index')}}"> <i class="icon-home"></i>Dashboard</a></li>
        <li class="{{Request::is('admins/deposit') ? 'active' : '' }}"><a href="{{url('admins/deposit')}}"> <i class="icon-grid"></i>Deposit</a></li>
          <!--         <li class="{{ Request::is('admins/currency') ? 'active' : '' }}"><a href="{{url('admins/currency')}}"> <i class="fa fa-usd"></i>Currency</a></li>
           -->        <li><a href="{{route('admin.withdraw')}}"> <i class="icon-padnote"></i>Withdraw Request</a></li>
          <li class="{{Request::is('admins/deposit_report') ? 'active' : '' }}"><a href="{{url('admins/deposit_report')}}"> <i class="icon-grid"></i>Deposit Report</a></li>
          <li class="{{Request::is('admins/withdraw_report') ? 'active' : '' }}"><a href="{{url('admins/withdraw_report')}}"> <i class="icon-grid"></i>Withdraw Report</a></li>
        <li class="{{ Request::is('admins/user') ? 'active' : '' }}"><a href="{{url('admins/user')}}"> <i class="icon-logout"></i>Users</a></li>
        <li class="{{ Request::is('admins/settings') ? 'active' : '' }}{{ Request::is('admins/profile') ? 'active' : '' }}"><a href="{{route('admin.profile-settings')}}"> <i class="icon-settings"></i>Settings</a></li>
        <!-- <li class="{{ Request::is('admins/settings') ? 'active' : '' }}"><a href="{{route('admin.settings')}}"> <i class="icon-settings"></i>Settings</a></li> -->
      </ul>
    </nav>
   
    @show
    <!-- Sidebar Navigation end-->
    @yield('content')
  </div>
  <!-- JavaScript files-->

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/popper.js/umd/popper.min.js')}}"> </script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
<script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('vendor/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/charts-custom.js')}}"></script>

<script src="{{asset('js/charts-home.js')}}"></script>
<script src="{{asset('js/front.js')}}"></script>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>


</html>