<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amy HRMS | Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- CK Editor -->
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <!-- Pagewise stylesheets -->
    @stack('styles')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Home</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <span class="text-muted text-sm">My Profile</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <span class="text-muted text-sm">Change Password</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{route('admin-logout')}}" class="dropdown-item">
                        <span class="text-muted text-sm">Logout</span>
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src="{{asset('images/amyindia-top-logo.png')}}" alt="AdminLTE Logo" class="">
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{route('admin-dashboard')}}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Pages
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin-new-page')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>New Page</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin-pages')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List Page</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Posts
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin-new-post')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>New Post</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin-posts')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List Post</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @if(!empty($customPosts))
                        @foreach($customPosts as $customPost)
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-tag"></i>
                                    <p>
                                        {{$customPost->getName()}}
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{route('admin-new-custom-post',['slug'=>$customPost->getSlug()])}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>New </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('admin-custom-posts',['slug'=>$customPost->getSlug()])}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>List </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endforeach
                    @endif
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Blocks
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin-new-block')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>New Block</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin-blocks')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List Block</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-images"></i>
                            <p>
                                Slider
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin-new-banner')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>New Slider</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin-banners')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List Slider</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Categories
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin-new-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>New Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin-categories')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List Category</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Custom Post Types
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin-new-custom-post-type')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>New Custom Post Type</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin-custom-post-types')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List Custom Post Type</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-briefcase"></i>
                            <p>
                                Jobs
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin-new-job')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>New Job</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin-jobs')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List Job</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin-settings')}}" class="nav-link">
                            <i class="nav-icon fas fa-wrench"></i>
                            <p>
                                Settings
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
        @yield('content')
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2020 <a href="#">Amy HRMS India Pvt. Ltd.</a>.</strong>
        All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
@stack('scripts')
</body>
</html>
