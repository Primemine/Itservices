<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Admin</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!--end of ck_editor-->
    <!--icon -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!--end of icon-->
    <!-- Font Awesome Icons -->
    <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- overlayScrollbars -->
    <link href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/summernote/summernote-bs4.css') }}" rel="stylesheet">
    <!-- Theme style -->
    <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!--font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--sweet alrert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--editor-->
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: 'textarea#editor',
                skin: 'bootstrap',
                plugins: 'lists, link, image, media',
                toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
                menubar: false
            });
        </script>
    <!--end of editor-->




<!--for image upload>
      <script src="{{ asset('js/fileinput.js') }}" defer></script>
      <script src="{{ asset('js/fileinput.min..js') }}" defer></script>
      <script src="{{ asset('js/plugins/piexif.js') }}" defer></script>
      <script src="{{ asset('js/plugins/sortable.js') }}" defer></script>
      <script src="{{ asset('js/fas/theme.js') }}" defer></script>
      <script src="{{ asset('js/themes/explorer-fas/theme.js') }}" defer></script>
      <end of image upload links>
      <link href="{{ asset('css/fileinput.css') }}" rel="stylesheet">
      <link href="{{ asset('css/themes/explorer-fas/theme.css') }}" rel="stylesheet"-->


    <!--end of image upload links-->
    <link href="{{ asset('css/fileinput.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themes/explorer-fas/theme.css') }}" rel="stylesheet">


</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <!--form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form-->

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <!-- Notifications Dropdown Menu -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest



        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src=" {{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alex Otto</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="{{route('admin/index')}}" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('admin/service')}}" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Create Services
                            </p>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="{{route('posts.create')}}" class="nav-link">
                            <i class="nav-icon fas fa-cart-plus"></i>
                            <p>
                                Create Posts
                                <!--span class="right badge badge-danger">New</span-->
                            </p>
                        </a>
                    </li>
                    <!--li class="nav-item">
                        <a href="{{route('posts.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-cart-plus"></i>
                            <p>
                                Edit Posts

                            </p>
                        </a>
                    </li-->
                    <li class="nav-item has-treeview">
                        <a href="{{route('admin/service_view')}}" class="nav-link">
                            <i class="nav-icon far fa-plus-square "></i>
                            <p>
                                Services List

                            </p>
                        </a>

                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('posts.index')}}" class="nav-link">
                            <i class="nav-icon fa fa-list"></i>
                            <p>
                                Posts list

                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('admin/users')}}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Users List
                                <!--i class="right fas fa-angle-left"></i-->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-user-circle-o"></i>
                            <p>
                                User Settings
                                <!--i class="fas fa-angle-left right"></i-->
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    @yield('components')
    <!-- /.content -->

        <!--sweet alert-->
        @include('sweetalert::alert')
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2019 <a href="#">Dev.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0.0
        </div>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}" defer></script>
<!-- Bootstrap -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}" defer></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}" defer></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('dist/js/demo.js') }}" defer></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js') }}" defer></script>
<script src="{{ asset('plugins/raphael/raphael.min.js') }}" defer></script>
<script src="{{ asset('plugins/jquery-mapael/jquery.mapael.min.js') }}" defer></script>
<script src="{{ asset('plugins/jquery-mapael/maps/usa_states.min.js') }}" defer></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}" defer></script>

<!-- PAGE SCRIPTS -->
<script src="{{ asset('dist/js/pages/dashboard2.js') }}" defer></script>
<!--for image upload-->
<!--for image upload-->
<script src="{{ asset('js/fileinput.js') }}" defer></script>
<script src="{{ asset('js/fileinput.min..js') }}" defer></script>
<script src="{{ asset('js/plugins/piexif.js') }}" defer></script>
<script src="{{ asset('js/plugins/sortable.js') }}" defer></script>
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}" defer></script>
<script src="{{ asset('css/themes/fas/theme.js') }}" defer></script>
<script src="{{ asset('themes/explorer-fas/theme.js') }}" defer></script>


</body>
</html>
