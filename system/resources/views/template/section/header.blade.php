<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Beranda</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          Noberto
          <img src="{{url('public')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" style="height: 100%;">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
             <i class="fa fa-user"></i> Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
           <i class="fa fa-cog"></i> Setting
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{url('login')}}" class="dropdown-item">
              <i class="fa fa-sign"></i> Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>