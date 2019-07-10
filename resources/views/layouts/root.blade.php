<!DOCTYPE html>
<html lang="en">
<head>
  <title>洪泽分局交通违法录入平台</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
  <!-- Font-icon css-->
  <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('bootstrap-fileinput-master/css/fileinput.css') }}">
  <link rel="stylesheet" href="{{ asset('bootstrap-fileinput-master/themes/explorer-fas/theme.css') }}">
  <style>
    .datepicker.dropdown-menu {
      z-index: 2500 !important;
    }
  </style>
  <!-- Essential javascripts for application to work-->
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="{{ asset('js/plugins/pace.min.js') }}"></script>
  <!-- Page specific javascripts-->
  <script src="{{ asset('js/plugins/chart.js') }}"></script>
  <script src="{{ asset('js/plugins/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('js/plugins/select2.min.js') }}"></script>
  <script src="{{ asset('js/plugins/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('bootstrap-fileinput-master/js/fileinput.min.js') }}"></script>
  <script src="{{ asset('bootstrap-fileinput-master/js/locales/zh.js') }}"></script>
  <script src="{{ asset('bootstrap-fileinput-master/themes/fas/theme.js') }}"></script>
  <!-- Google analytics script-->
</head>
<body class="app sidebar-mini rtl">
  <!-- Navbar-->
  <header class="app-header"><a class="app-header__logo" href="index.html">洪泽分局</a>
    <!-- Sidebar toggle button-->
    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar"aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <!--Notification Menu-->
      <!-- User Menu-->
      @if (Auth::check())
      <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i
        class="fa fa-user fa-lg"></i><span style="font-size: 16px">&nbsp;{{ Auth::user()->name }}</span></a>
        <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> 设置</a></li>
          <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i>个人信息</a></li>
          <li>
            <a class="dropdown-item" href="#">
              <form action="{{ route('logout') }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
              </form>
            </a>
          </li>
        </ul>
      </li>
      @endif
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
      <div>
        <p class="app-sidebar__user-name">管理员</p>
      </div>
    </div>
    <ul class="app-menu">
      <li><a class="app-menu__item active" href="{{ route('root') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">首页</span></a></li>
      <li><a class="app-menu__item" href="{{ route('lawList.index') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">信息管理</span></a></li>
      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">用户管理</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="form-components.html"><i class="icon fa fa-circle-o"></i>用户列表</a></li>
        </ul>
      </li>
    </ul>
  </aside>
  <main class="app-content">
    @yield('content')
  </main>
</body>
</html>