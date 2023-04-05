<!doctype html>
<html lang="en">
<head>

        <meta charset="utf-8" />
        <title>Dashboard | {{ env('APP_NAME') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin_theme') }}/assets/images/favicon.ico">

        <!-- plugin css -->
        <link href="{{ asset('admin_theme') }}/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- preloader css -->
        <link rel="stylesheet" href="{{ asset('admin_theme') }}/assets/css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('admin_theme') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('admin_theme') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

        <!-- Sweet Alert-->
        <link href="{{ asset('admin_theme') }}/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet"
        type="text/css" />

        <!-- App Css-->
        <link href="{{ asset('admin_theme') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <style>
            [data-letters]:before {
                content: attr(data-letters);
                display: inline-block;
                font-size: 1em;
                width: 2.5em;
                height: 2.5em;
                line-height: 2.5em;
                text-align: center;
                border-radius: 50%;
                background: plum;
                vertical-align: middle;
                margin-right: 1em;
                color: white;
            }

            .amchart {
                width: 100%;
                height: 500px;
            }
        </style>

        @stack('css')
    </head>

    <body data-sidebar="brand">

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('admin_theme') }}/assets/images/logo-sm.svg" alt="" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('admin_theme') }}/assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">{{ env('APP_NAME') }}</span>
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('admin_theme') }}/assets/images/logo-sm.svg" alt="" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('admin_theme') }}/assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">{{ env('APP_NAME') }}</span>
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="search" class="icon-lg"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Search Result">

                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item topbar-light bg-light-subtle border-start border-end" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {!! MyHelper::avatarUser(Auth::user()) !!}
                                <span class="d-none d-xl-inline-block ms-1 fw-medium">{{ Auth::user()->name }}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="apps-contacts-profile.html"><i class="mdi mdi-face-man font-size-16 align-middle me-1"></i> Profile</a>
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item"
                                        href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit();"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" data-key="t-menu">Menu</li>

                            <li>
                                <a href="{{ route('dashboard.index') }}">
                                    <i data-feather="home"></i>
                                    <span data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('dashboard.kategori.index') }}">
                                    <i data-feather="grid"></i>
                                    <span data-key="t-apps">Master Kategori</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
