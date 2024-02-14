<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Kanakku </title>

<link rel="shortcut icon" href="{{asset('img/favicon.png')}}">

<link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset ('plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset ('plugins/fontawesome/css/all.min.css')}}">

<link rel="stylesheet" href="{{asset ('plugins/feather/feather.css')}}">

<link rel="stylesheet" href="{{asset ('style/bootstrap-datetimepicker.min.css')}}">

<link rel="stylesheet" href="{{asset ('plugins/datatables/datatables.min.css')}}">

<link rel="stylesheet" href="{{asset ('style/style.css')}}">
</head>
<body>

<div class="main-wrapper">

<div class="header header-one">

<a href="javascript:void(0);" id="toggle_btn">
<span class="toggle-bars">
<span class="bar-icons"></span>
<span class="bar-icons"></span>
<span class="bar-icons"></span>
<span class="bar-icons"></span>
</span>
</a>


<div class="top-nav-search">

</div>


<a class="mobile_btn" id="mobile_btn">
<i class="fas fa-bars"></i>
</a>


<ul class="nav nav-tabs user-menu">

<li class="nav-item dropdown has-arrow flag-nav">
<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
<img src="{{asset ('img/flags/us1.png')}}" alt height="20"><span>English</span>
</a>
<div class="dropdown-menu dropdown-menu-end">
<a href="javascript:void(0);" class="dropdown-item">
<img src="{{asset ('img/flags/us.png')}}" alt height="16"><span>English</span>
</a>
<a href="javascript:void(0);" class="dropdown-item">
<img src="{{('img/flags/fr.png')}}" alt height="16"><span>French</span>
</a>
<a href="javascript:void(0);" class="dropdown-item">
<img src="{{asset ('img/flags/es.png')}}" alt height="16"><span>Spanish</span>
</a>
<a href="javascript:void(0);" class="dropdown-item">
<img src="{{asset ('img/flags/de.png')}}" alt height="16"><span>German</span>
</a>
</div>
</li>

<li class="nav-item  has-arrow dropdown-heads ">
<a href="javascript:void(0);" class="toggle-switch">
<i class="fe fe-moon"></i>
</a>
</li>
<li class="nav-item dropdown  flag-nav dropdown-heads">
<a class="nav-link" data-bs-toggle="dropdown" href="#" role="button">
<i class="fe fe-bell"></i> <span class="badge rounded-pill"></span>
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All</a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message">
<a href="profile.html">
<div class="media d-flex">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt src="{{asset ('profiles/avatar-02.jpg')}}">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Brian Johnson</span> paid the invoice <span class="noti-title">#DF65485</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="profile.html">
<div class="media d-flex">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt src="{{asset ('img/profiles/avatar-03.jpg')}}"">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Marie Canales</span> has accepted your estimate <span class="noti-title">#GTR458789</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="profile.html">
<div class="media d-flex">
<div class="avatar avatar-sm">
<span class="avatar-title rounded-circle bg-primary-light"><i class="far fa-user"></i></span>
</div>
<div class="media-body">
<p class="noti-details"><span class="noti-title">New user registered</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="profile.html">
<div class="media d-flex">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt src="{{asset ('img/profiles/avatar-04.jpg')}}">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Barbara Moore</span> declined the invoice <span class="noti-title">#RDW026896</span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="profile.html">
<div class="media d-flex">
<div class="avatar avatar-sm">
<span class="avatar-title rounded-circle bg-info-light"><i class="far fa-comment"></i></span>
</div>
<div class="media-body">
<p class="noti-details"><span class="noti-title">You have received a new message</span></p>
<p class="noti-time"><span class="notification-time">2 days ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="notifications.html">View all Notifications</a>
</div>
</div>
</li>
<li class="nav-item  has-arrow dropdown-heads ">
<a href="javascript:void(0);" class="win-maximize">
<i class="fe fe-maximize"></i>
</a>
</li>

<li class="nav-item dropdown">
<a href="javascript:void(0)" class="user-link  nav-link" data-bs-toggle="dropdown">
<span class="user-img">
<img src="{{asset ('img/profiles/avatar-07.jpg')}}" alt="img" class="profilesidebar">
<span class="animate-circle"></span>
</span>
<span class="user-content">
<span class="user-details">Admin</span>
<span class="user-name">John Smith</span>
</span>
</a>
<div class="dropdown-menu menu-drop-user">
<div class="profilemenu">
<div class="subscription-menu">
<ul>
<li>
<a class="dropdown-item" href="{{route('profile')}}">Profile</a>
</li>
<li>
<a class="dropdown-item" href="{{route('setting')}}">Settings</a>
</li>
</ul>
</div>
<div class="subscription-logout">
<ul>
<li class="pb-0">
<a class="dropdown-item" href="{{route('logout')}}">Log Out</a>
</li>
</ul>
</div>
</div>
</div>
</li>

</ul>

</div>

<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
    <div class="sidebar-logo">
    <a href="index.html">
    <img src="{{asset('img/logo.png')}}" class="img-fluid logo" alt>
    </a>
    <a href="index.html">
    <img src="{{asset('img/logo-small.png')}}" class="img-fluid logo-small" alt>
    </a>
    </div>
    </div>
    <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
    
    <ul>
    <li class="menu-title"><span>Main</span></li>
    <li class="submenu">
    <a href="{{route('dashboard')}}"><i class="fe fe-home"></i> <span> Dashboard</span> </a>
    
    </li>
    <li class="submenu">
    <a href="{{route('logout')}}"><i class="fe fe-grid"></i> <span> Logout</span></a>
   
    </li>
    </ul>
    
   
        <ul>
    <li class="menu-title"><span>Category</span></li>
    <li>
    <a href="{{route('categories.index')}}"><i class="fe fe-users"></i> <span>Category</span></a>
    </li>
   </ul>
  
        <ul>
    <li class="menu-title"><span>Product</span></li>
    <li>
    <a href="{{route('products.index')}}"><i class="fe fe-users"></i> <span>Product</span></a>
    </li>
   </ul>
    
  
    
    
    <ul>
    <li class="menu-title"><span>Settings</span></li>
    <li>
    <a href="settings.html"><i class="fe fe-settings"></i> <span>Settings</span></a>
    </li>
    <li>
    <a href="{{route('logout')}}"><i class="fe fe-power"></i> <span>Logout</span></a>
    </li>
    </ul>
    
    </div>
    </div>
    </div>

    <script src="{{asset('script/jquery-3.6.3.min.js')}}"></script>

    <script src="{{asset('script/bootstrap.bundle.min.js')}}"></script>
    
    <script src="{{asset('script/feather.min.js')}}"></script>
    
    <script src="{{asset('plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    
    <script src="{{asset('plugins/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{asset('plugins/apexchart/chart-data.js')}}"></script>
    
    <script src="{{asset('js/script.js')}}"></script>
    </body>
    <script>
        function toggleDropdown() {
          var dropdown = document.querySelector("#userDropdown .dropdown-menu");
          if (dropdown.style.display === "block") {
            dropdown.style.display = "none";
          } else {
            dropdown.style.display = "block";
          }
        }
      </script>
      
    </html>