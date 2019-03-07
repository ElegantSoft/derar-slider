<body class="hold-transition skin-purple-light

 sidebar-mini">
    <div class="wrapper">
<header class="main-header">
    <!-- Logo -->
    <a href="{{url('/')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Saafca</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      @include('admin.layouts.menu')
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('/')}}/adminlte/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          {{--<p>{{Auth::user()->name}}</p>--}}
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->

      <ul class="sidebar-menu" data-widget="tree">
        {{--<li class="header">Welcome {{Auth::user()->name}}</li>--}}
          <li class=" " > <a href="{{url('/')}}/admin">
                  <i class="fa fa-dashboard"></i> <span>الرئيسية</span>
                  <span class="pull-right-container">

            </span>
              </a></li>
        <li class=" treeview">
          <a href="/admin/admins'">

            <i class="fa fa-users"></i> <span>المستخدمين</span>

            <span class="pull-right-container">


            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="{{url('/')}}/admin/users"><i class="fa fa-user-circle"></i> كافة المستخدمين</a></li>

          </ul>
        </li>
          <li class=" " > <a href="{{url('/')}}/admin/projects">
                  <i class="fa fa-bar-chart"></i> <span>المشاريع</span>
                  <span class="pull-right-container">

            </span>
              </a>
          </li>
        <li class=" " > <a href="{{url('/')}}/admin/salaries">
            <i class="fa fa-money"></i> <span>الميزانيات</span>
            <span class="pull-right-container">

            </span>
          </a>
        </li>
          <li class=" " > <a href="{{url('/')}}/admin/colors">
                  <i class="fa fa-paint-brush"></i> <span>الالوان</span>
                  <span class="pull-right-container">

            </span>
              </a>
          </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
