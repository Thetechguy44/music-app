
<!doctype html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title data-setting="app_name" data-rightJoin=" Responsive Bootstrap 5 Admin Dashboard Template">Afro Music - @yield('title')</title>
        <meta name="description" content="Muzik is a revolutionary Bootstrap Admin Dashboard Template and UI Components Library. The Admin Dashboard Template and UI Component features 8 modules.">
        <meta name="keywords" content="premium, admin, dashboard, template, bootstrap 5, clean ui, muzik, admin dashboard,responsive dashboard, optimized dashboard,">
        <meta name="author" content="Iqonic Design">
        <meta name="DC.title" content="Muzik Responsive Bootstrap 5 Admin Dashboard Template">

        <!-- Favicon -->
        <link rel="shortcut icon" href="https://templates.iqonic.design/muzik/html/assets/images/favicon.ico">
        
        <!-- Library / Plugin Css Build -->
        <link rel="stylesheet" href="https://templates.iqonic.design/muzik/html/assets/css/core/libs.min.css">
        
        <link rel="stylesheet" href="https://templates.iqonic.design/muzik/html/assets/vendor/sheperd/dist/css/sheperd.css">
        <!-- muzik Design System Css -->
        <link rel="stylesheet" href="https://templates.iqonic.design/muzik/html/assets/css/muzik.min.css?v=1.0.1">
        
        <!-- Custom Css -->
        <link rel="stylesheet" href="https://templates.iqonic.design/muzik/html/assets/css/custom.min.css?v=1.0.1">
        <!-- Dark Css -->
        <link rel="stylesheet" href="https://templates.iqonic.design/muzik/html/assets/css/dark.min.css?v=1.0.1">
        
        <!-- Customizer Css -->
        <link rel="stylesheet" href="https://templates.iqonic.design/muzik/html/assets/css/customizer.min.css?v=1.0.1" >
        
        <!-- RTL Css -->
        <link rel="stylesheet" href="https://templates.iqonic.design/muzik/html/assets/css/rtl.min.css?v=1.0.1">
        
        <link rel="stylesheet" href="https://templates.iqonic.design/muzik/html/assets/vendor/swiperSlider/swiper-bundle.min.css">
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">        
        <meta name="root_path" content="../">
        @livewireStyles
    </head>
    <body class="  ">
        <!-- loader Start -->
        <div id="loading">
            <div class="loader simple-loader">
                <div class="loader-body ">
                    <img src="https://templates.iqonic.design/muzik/html/assets/images/loader.gif" alt="loader" class=" img-fluid ">
                </div>
            </div>
        </div>
        <!-- loader END -->
        <aside class="sidebar sidebar-base sidebar-white sidebar-default  " id="first-tour"
            data-toggle="main-sidebar" data-sidebar="responsive">
            <div class="sidebar-header d-flex align-items-center justify-content-center">
                <a href="index-2.html" class="navbar-brand">
                    
                    <!--Logo start-->
                    <div class="logo-main">
                        <img src="https://templates.iqonic.design/muzik/html/assets/images/logo.svg" class="logo-normal img-fluid" alt="logo">
                        <img src="https://templates.iqonic.design/muzik/html/assets/images/logo-dark.svg" class="logo-normal dark-normal img-fluid" alt="logo-dark">
                        <img src="https://templates.iqonic.design/muzik/html/assets/images/logo-color.svg" class="logo-normal white-normal img-fluid" alt="logo-color">
                        <img src="https://templates.iqonic.design/muzik/html/assets/images/logo-mini.svg" class="logo-mini img-fluid" alt="logo-mini">
                        <img src="https://templates.iqonic.design/muzik/html/assets/images/logo-dark-mini.svg" class="logo-mini dark-mini img-fluid" alt="logo-dark-mini">
                        <img src="https://templates.iqonic.design/muzik/html/assets/images/logo-color-mini.svg" class="logo-mini white-mini img-fluid" alt="logo-white-mini">
                    </div>
                    <!--logo End-->        </a>
                <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                    <i class="icon">
        
                        <svg class="icon-10" width="10" height="10" viewBox="0 0 8 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.29853 8C7.11974 8 6.94002 7.93083 6.80335 7.79248L3.53927 4.50446C3.40728 4.37085 3.33333 4.18987 3.33333 4.00036C3.33333 3.81179 3.40728 3.63081 3.53927 3.4972L6.80335 0.207279C7.07762 -0.069408 7.52132 -0.069408 7.79558 0.209174C8.06892 0.487756 8.06798 0.937847 7.79371 1.21453L5.02949 4.00036L7.79371 6.78618C8.06798 7.06286 8.06892 7.51201 7.79558 7.79059C7.65892 7.93083 7.47826 8 7.29853 8Z"
                                fill="white" />
                            <path
                                d="M3.96552 8C3.78673 8 3.60701 7.93083 3.47034 7.79248L0.206261 4.50446C0.0742745 4.37085 0.000325203 4.18987 0.000325203 4.00036C0.000325203 3.81179 0.0742745 3.63081 0.206261 3.4972L3.47034 0.207279C3.74461 -0.069408 4.18831 -0.069408 4.46258 0.209174C4.73591 0.487756 4.73497 0.937847 4.4607 1.21453L1.69649 4.00036L4.4607 6.78618C4.73497 7.06286 4.73591 7.51201 4.46258 7.79059C4.32591 7.93083 4.14525 8 3.96552 8Z"
                                fill="white" />
                        </svg>
                    </i>
                </div>
            </div>
            <div class="sidebar-body pt-0 data-scrollbar">
                <div class="sidebar-list">
                    <!-- Sidebar Menu Start -->
                    <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                        <li class="nav-item static-item mt-5">
                            <a class="nav-link static-item disabled text-start" href="#" tabindex="-1">
                                <span class="custom-icon default-icon text-uppercase">Main</span>
                                <span class="mini-icon" data-bs-toggle="tooltip" title="Home" data-bs-placement="right">-</span>
                            </a>
                        </li>
                       <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#home-menu" role="button" aria-expanded="false"
                                aria-controls="home-menu">
                                <i class="icon" data-bs-toggle="tooltip" title="Dashboard" data-bs-placement="right">
                                     <svg  class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20" class="icon-20" height="20" viewBox="0 0 20 20" fill="none">
                                        <g clip-path="url(#clip0_389_2893)">
                                            <path d="M16.875 16.875V9.02655C16.875 8.93945 16.8568 8.85332 16.8215 8.77367C16.7863 8.69403 16.7348 8.62263 16.6703 8.56405L10.4203 2.66249C10.3052 2.55774 10.1552 2.49969 9.99961 2.49969C9.844 2.49969 9.69399 2.55774 9.57891 2.66249L3.32891 8.56405C3.26459 8.6227 3.21323 8.69413 3.17811 8.77377C3.143 8.85341 3.12491 8.93951 3.125 9.02655V16.875" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M1.25 16.875H18.75" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.875 16.875V12.5C11.875 12.3342 11.8092 12.1753 11.6919 12.0581C11.5747 11.9408 11.4158 11.875 11.25 11.875H8.75C8.58424 11.875 8.42527 11.9408 8.30806 12.0581C8.19085 12.1753 8.125 12.3342 8.125 12.5V16.875" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_389_2893">
                                            <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </i>
                                <span class="item-name">Home</span>
                                <i class="right-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" class="icon-18" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </i>
                            </a>
                            <ul class="sub-nav collapse" id="home-menu" data-bs-parent="#sidebar-menu">
                                <li class="nav-item">
                                    <a class="nav-link active"
                                        href="{{ route('dashboard.home') }}">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Dashboard" data-bs-placement="right"> H
                                        </i>
                                        <span class="item-name"> Dashboard </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="release.html">
                                        <i class="icon svg-icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Release" data-bs-placement="right"> R
                                        </i>
                                        <span class="item-name">Release</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="albums.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Albums" data-bs-placement="right"> A
                                        </i>
                                        <span class="item-name">Albums</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#admin-menu" role="button" aria-expanded="false"
                                aria-controls="admin-menu">
                                <i class="icon" data-bs-toggle="tooltip" title="Admin" data-bs-placement="right">
                                    <svg class="icon-20"  xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_389_2900)">
                                        <path d="M8.4375 12.5C11.0263 12.5 13.125 10.4013 13.125 7.8125C13.125 5.22367 11.0263 3.125 8.4375 3.125C5.84867 3.125 3.75 5.22367 3.75 7.8125C3.75 10.4013 5.84867 12.5 8.4375 12.5Z" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10"/>
                                        <path d="M1.875 15.625C3.48047 13.7148 5.74688 12.5 8.4375 12.5C11.1281 12.5 13.3945 13.7148 15 15.625" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M16.875 11.875C17.5654 11.875 18.125 11.3154 18.125 10.625C18.125 9.93464 17.5654 9.375 16.875 9.375C16.1846 9.375 15.625 9.93464 15.625 10.625C15.625 11.3154 16.1846 11.875 16.875 11.875Z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M16.875 9.375V8.4375" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15.7922 10L14.9805 9.53125" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15.7922 11.25L14.9805 11.7188" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M16.875 11.875V12.8125" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17.9578 11.25L18.7695 11.7188" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17.9578 10L18.7695 9.53125" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_389_2900">
                                        <rect width="20" height="20" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                </i>
                                <span class="item-name">Admin</span>
                                <i class="right-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" class="icon-18" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </i>
                            </a>
                            <ul class="sub-nav collapse" id="admin-menu" data-bs-parent="#sidebar-menu">
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="admin/dashboard.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Admin" data-bs-placement="right"> A
                                        </i>
                                        <span class="item-name"> Admin </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="admin/admin-category.html">
                                        <i class="icon svg-icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Category" data-bs-placement="right"> C
                                        </i>
                                        <span class="item-name">Category</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="admin/admin-writer.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Writer" data-bs-placement="right"> W
                                        </i>
                                        <span class="item-name">Writer</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="admin/admin-singer.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Singer" data-bs-placement="right"> S
                                        </i>
                                        <span class="item-name">Singer</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="admin/admin-song.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Muzic" data-bs-placement="right"> M
                                        </i>
                                        <span class="item-name">Muzic</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-special" role="button" aria-expanded="false"
                                aria-controls="sidebar-special">
                                <i class="icon" data-bs-toggle="tooltip" title="Spacial Pages" data-bs-placement="right">
                                   <svg class="icon-20"  xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_389_11986)">
                                        <path d="M13.125 17.5H4.375C4.20924 17.5 4.05027 17.4342 3.93306 17.3169C3.81585 17.1997 3.75 17.0408 3.75 16.875V5.625C3.75 5.45924 3.81585 5.30027 3.93306 5.18306C4.05027 5.06585 4.20924 5 4.375 5H10.625L13.75 8.125V16.875C13.75 17.0408 13.6842 17.1997 13.5669 17.3169C13.4497 17.4342 13.2908 17.5 13.125 17.5Z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6.25 5V3.125C6.25 2.95924 6.31585 2.80027 6.43306 2.68306C6.55027 2.56585 6.70924 2.5 6.875 2.5H13.125L16.25 5.625V14.375C16.25 14.5408 16.1842 14.6997 16.0669 14.8169C15.9497 14.9342 15.7908 15 15.625 15H13.75" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6.875 11.875H10.625" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6.875 14.375H10.625" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_389_11986">
                                        <rect width="20" height="20" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                </i>
                                <span class="item-name">Special Pages</span>
                                <i class="right-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" class="icon-18" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </i>
                            </a>
                            <ul class="sub-nav collapse" id="sidebar-special" data-bs-parent="#sidebar-menu">
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="special-pages/billing.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Billing" data-bs-placement="right">B</i>
                                        <span class="item-name">Billing </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="special-pages/calender.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Calender"
                                            data-bs-placement="right">C</i>
                                        <span class="item-name">Calender</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="special-pages/kanban.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="kanban" data-bs-placement="right">K</i>
                                        <span class="item-name">kanban</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="special-pages/pricing.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Pricing"
                                            data-bs-placement="right">P</i>
                                        <span class="item-name">Pricing</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="special-pages/timeline.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Timeline"
                                            data-bs-placement="right">T</i>
                                        <span class="item-name">Timeline</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-auth" role="button" aria-expanded="false"
                                aria-controls="sidebar-auth">
                                <i class="icon" data-bs-toggle="tooltip" title="Auth Skins" data-bs-placement="right">
                                   <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M26 10H12V7C12 5.93913 12.4214 4.92172 13.1716 4.17157C13.9217 3.42143 14.9391 3 16 3C17.9213 3 19.65 4.375 20.02 6.19875C20.0749 6.45646 20.2294 6.68207 20.4497 6.82655C20.6701 6.97103 20.9385 7.0227 21.1968 6.97032C21.455 6.91795 21.6822 6.76577 21.8288 6.54686C21.9755 6.32795 22.0298 6.06 21.98 5.80125C21.415 3.01875 18.9 1 16 1C14.4092 1.00165 12.884 1.63433 11.7592 2.75919C10.6343 3.88405 10.0017 5.40921 10 7V10H6C5.46957 10 4.96086 10.2107 4.58579 10.5858C4.21071 10.9609 4 11.4696 4 12V26C4 26.5304 4.21071 27.0391 4.58579 27.4142C4.96086 27.7893 5.46957 28 6 28H26C26.5304 28 27.0391 27.7893 27.4142 27.4142C27.7893 27.0391 28 26.5304 28 26V12C28 11.4696 27.7893 10.9609 27.4142 10.5858C27.0391 10.2107 26.5304 10 26 10ZM26 26H6V12H26V26ZM16 14C15.1595 14.0003 14.3472 14.303 13.7115 14.8529C13.0758 15.4027 12.6592 16.163 12.5378 16.9947C12.4165 17.8264 12.5985 18.674 13.0506 19.3825C13.5027 20.0911 14.1946 20.6133 15 20.8538V23C15 23.2652 15.1054 23.5196 15.2929 23.7071C15.4804 23.8946 15.7348 24 16 24C16.2652 24 16.5196 23.8946 16.7071 23.7071C16.8946 23.5196 17 23.2652 17 23V20.8538C17.8054 20.6133 18.4973 20.0911 18.9494 19.3825C19.4015 18.674 19.5835 17.8264 19.4622 16.9947C19.3408 16.163 18.9242 15.4027 18.2885 14.8529C17.6528 14.303 16.8405 14.0003 16 14ZM16 19C15.7033 19 15.4133 18.912 15.1666 18.7472C14.92 18.5824 14.7277 18.3481 14.6142 18.074C14.5006 17.7999 14.4709 17.4983 14.5288 17.2074C14.5867 16.9164 14.7296 16.6491 14.9393 16.4393C15.1491 16.2296 15.4164 16.0867 15.7074 16.0288C15.9983 15.9709 16.2999 16.0007 16.574 16.1142C16.8481 16.2277 17.0824 16.42 17.2472 16.6666C17.412 16.9133 17.5 17.2033 17.5 17.5C17.5 17.8978 17.342 18.2794 17.0607 18.5607C16.7794 18.842 16.3978 19 16 19Z" fill="currentColor"/>
                                    </svg>
                                </i>
                                <span class="item-name">Auth Skins</span>
                                <i class="right-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" class="icon-18" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </i>
                            </a>
                            <ul class="sub-nav collapse" id="sidebar-auth" data-bs-parent="#sidebar-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="auth/sign-in.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Login" data-bs-placement="right">L</i>
                                        <span class="item-name">Login</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="auth/sign-up.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Register"
                                            data-bs-placement="right">R</i>
                                        <span class="item-name">Register</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="auth/confirm-mail.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Confirm Mail"
                                            data-bs-placement="right">CM</i>
                                        <span class="item-name">Confirm Mail</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="auth/lock-screen.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Lock Screen"
                                            data-bs-placement="right">LS</i>
                                        <span class="item-name">Lock Screen</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="auth/recoverpw.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Recover Password"
                                            data-bs-placement="right"> RP </i>
                                        <span class="item-name">Recover Password</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="auth/two-factor.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Two Factor" data-bs-placement="right">
                                            TF </i>
                                        <span class="item-name">Two Factor</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="auth/account-deactivate.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Account Deactivate"
                                            data-bs-placement="right"> AD </i>
                                        <span class="item-name">Account Deactivate</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-user" role="button" aria-expanded="false"
                                aria-controls="sidebar-user">
                                <i class="icon" data-bs-toggle="tooltip" title="Users" data-bs-placement="right">
                                    <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_389_11969)">
                                        <path d="M10 12.5C12.7614 12.5 15 10.2614 15 7.5C15 4.73858 12.7614 2.5 10 2.5C7.23858 2.5 5 4.73858 5 7.5C5 10.2614 7.23858 12.5 10 12.5Z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M2.5 16.875C4.01328 14.2602 6.76172 12.5 10 12.5C13.2383 12.5 15.9867 14.2602 17.5 16.875" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_389_11969">
                                        <rect width="20" height="20" fill="white"/>
                                        </clipPath>
                                    </defs>
                                    </svg>
                                </i>
                                <span class="item-name">Users</span>
                                <i class="right-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" class="icon-18" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </i>
                            </a>
                            <ul class="sub-nav collapse" id="sidebar-user" data-bs-parent="#sidebar-menu">
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="app/user-profile.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="User Profile"
                                            data-bs-placement="right"> U </i>
                                        <span class="item-name">User Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="app/user-add.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Add User" data-bs-placement="right"> A
                                        </i>
                                        <span class="item-name">Add User</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="app/user-list.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="User List" data-bs-placement="right"> U
                                        </i>
                                        <span class="item-name">User List</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#utilities-error" role="button" aria-expanded="false"
                                aria-controls="utilities-error">
                                <i class="icon" data-bs-toggle="tooltip" title="Utilities" data-bs-placement="right">
                                    <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <path d="M28.7075 12.2926C28.8004 12.3855 28.8741 12.4958 28.9244 12.6172C28.9747 12.7386 29.0005 12.8687 29.0005 13.0001C29.0005 13.1315 28.9747 13.2616 28.9244 13.383C28.8741 13.5044 28.8004 13.6147 28.7075 13.7076C28.6146 13.8005 28.5043 13.8742 28.3829 13.9245C28.2615 13.9747 28.1314 14.0006 28 14.0006C27.8686 14.0006 27.7385 13.9747 27.6171 13.9245C27.4957 13.8742 27.3854 13.8005 27.2925 13.7076L25 11.4138L22.7075 13.7076C22.5198 13.8952 22.2653 14.0006 22 14.0006C21.7346 14.0006 21.4801 13.8952 21.2925 13.7076C21.1048 13.5199 20.9994 13.2654 20.9994 13.0001C20.9994 12.7347 21.1048 12.4802 21.2925 12.2926L23.5862 10.0001L21.2925 7.70757C21.1996 7.61466 21.1259 7.50436 21.0756 7.38296C21.0253 7.26157 20.9994 7.13146 20.9994 7.00007C20.9994 6.86867 21.0253 6.73856 21.0756 6.61717C21.1259 6.49578 21.1996 6.38548 21.2925 6.29257C21.4801 6.10493 21.7346 5.99951 22 5.99951C22.1314 5.99951 22.2615 6.02539 22.3829 6.07567C22.5043 6.12596 22.6146 6.19966 22.7075 6.29257L25 8.58632L27.2925 6.29257C27.3854 6.19966 27.4957 6.12596 27.6171 6.07567C27.7385 6.02539 27.8686 5.99951 28 5.99951C28.1314 5.99951 28.2615 6.02539 28.3829 6.07567C28.5043 6.12596 28.6146 6.19966 28.7075 6.29257C28.8004 6.38548 28.8741 6.49578 28.9244 6.61717C28.9747 6.73856 29.0005 6.86867 29.0005 7.00007C29.0005 7.13146 28.9747 7.26157 28.9244 7.38296C28.8741 7.50436 28.8004 7.61466 28.7075 7.70757L26.4137 10.0001L28.7075 12.2926ZM16 24.0001C15.7033 24.0001 15.4133 24.088 15.1666 24.2529C14.92 24.4177 14.7277 24.652 14.6142 24.926C14.5006 25.2001 14.4709 25.5017 14.5288 25.7927C14.5867 26.0837 14.7295 26.3509 14.9393 26.5607C15.1491 26.7705 15.4164 26.9134 15.7073 26.9712C15.9983 27.0291 16.2999 26.9994 16.574 26.8859C16.8481 26.7724 17.0824 26.5801 17.2472 26.3334C17.412 26.0868 17.5 25.7967 17.5 25.5001C17.5 25.1022 17.3419 24.7207 17.0606 24.4394C16.7793 24.1581 16.3978 24.0001 16 24.0001ZM21.5887 19.8163C19.9644 18.6358 18.008 18 16 18C13.992 18 12.0356 18.6358 10.4112 19.8163C10.1967 19.9725 10.0531 20.2074 10.0118 20.4695C9.97054 20.7316 10.0351 20.9993 10.1912 21.2138C10.3474 21.4283 10.5823 21.572 10.8444 21.6132C11.1065 21.6545 11.3742 21.59 11.5887 21.4338C12.8706 20.5015 14.4149 19.9994 16 19.9994C17.585 19.9994 19.1293 20.5015 20.4112 21.4338C20.5174 21.5111 20.6378 21.5668 20.7655 21.5976C20.8933 21.6283 21.0258 21.6337 21.1555 21.6132C21.2853 21.5928 21.4098 21.547 21.5219 21.4785C21.6339 21.41 21.7314 21.32 21.8087 21.2138C21.8861 21.1076 21.9417 20.9872 21.9725 20.8595C22.0033 20.7318 22.0086 20.5993 21.9882 20.4695C21.9677 20.3397 21.9219 20.2153 21.8534 20.1032C21.7849 19.9911 21.6949 19.8936 21.5887 19.8163ZM17.9037 8.09132C18.0363 8.10772 18.1708 8.0974 18.2993 8.06097C18.4278 8.02453 18.5477 7.96273 18.6519 7.8792C18.7561 7.79567 18.8426 7.6921 18.9061 7.57462C18.9697 7.45714 19.009 7.32811 19.0219 7.19517C19.0347 7.06222 19.0208 6.92805 18.981 6.80056C18.9411 6.67308 18.8762 6.55487 18.7899 6.45291C18.7036 6.35095 18.5978 6.26731 18.4786 6.20692C18.3595 6.14654 18.2295 6.11063 18.0962 6.10132C17.405 6.03382 16.6987 6.00007 16 6.00007C11.0287 6.00322 6.21139 7.72557 2.36499 10.8751C2.26346 10.9585 2.17935 11.061 2.11746 11.1769C2.05557 11.2928 2.01712 11.4198 2.00429 11.5505C1.99146 11.6813 2.00452 11.8133 2.04271 11.939C2.0809 12.0647 2.14347 12.1817 2.22686 12.2832C2.31025 12.3847 2.41282 12.4688 2.52871 12.5307C2.64461 12.5926 2.77156 12.6311 2.90232 12.6439C3.16639 12.6698 3.42994 12.5897 3.63499 12.4213C7.12284 9.56463 11.4916 8.00254 16 8.00007C16.635 8.00007 17.275 8.03132 17.9037 8.09132ZM17.8637 14.1251C18.1251 14.1584 18.3891 14.0872 18.5983 13.927C18.8075 13.7667 18.9449 13.5304 18.9808 13.2694C19.0168 13.0083 18.9482 12.7436 18.79 12.5329C18.6319 12.3221 18.3969 12.1823 18.1362 12.1438C17.4283 12.047 16.7145 11.999 16 12.0001C12.5041 11.9863 9.10839 13.1669 6.37499 15.3463C6.21399 15.476 6.09715 15.6524 6.04054 15.8512C5.98393 16.05 5.99033 16.2615 6.05886 16.4566C6.12739 16.6516 6.25469 16.8206 6.42322 16.9403C6.59176 17.06 6.79326 17.1246 6.99999 17.1251C7.22693 17.1267 7.44755 17.0503 7.62499 16.9088C10.0041 15.0141 12.9586 13.988 16 14.0001C16.6234 13.999 17.2461 14.0408 17.8637 14.1251Z" fill="currentColor"/>
                                    </svg>
                                </i>
                                <span class="item-name">Utilities</span>
                                <i class="right-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" class="icon-18" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </i>
                            </a>
                            <ul class="sub-nav collapse" id="utilities-error" data-bs-parent="#sidebar-menu">
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="errors/error404.html">
                                        <i class="icon" data-bs-toggle="tooltip" title="Error 404" data-bs-placement="right">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <span class="item-name">Error 404</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="errors/error500.html">
                                        <i class="icon" data-bs-toggle="tooltip" title="Error 500" data-bs-placement="right">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <span class="item-name">Error 500</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="errors/maintenance.html">
                                        <i class="icon" data-bs-toggle="tooltip" title="Maintenance" data-bs-placement="right">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <span class="item-name">Maintenance</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-plugins" role="button" aria-expanded="false"
                                aria-controls="sidebar-user">
                                <i class="icon" data-bs-toggle="tooltip" title="Plugins" data-bs-placement="right">
                                   <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M27.5338 19.8174C27.3912 19.7274 27.2282 19.675 27.0599 19.6649C26.8916 19.6549 26.7235 19.6875 26.5713 19.7599C26.1902 19.9401 25.7698 20.021 25.3491 19.9952C24.9284 19.9693 24.521 19.8375 24.1649 19.612C23.8088 19.3865 23.5155 19.0746 23.3122 18.7053C23.109 18.336 23.0024 17.9214 23.0024 17.4999C23.0024 17.0784 23.109 16.6637 23.3122 16.2944C23.5155 15.9251 23.8088 15.6133 24.1649 15.3877C24.521 15.1622 24.9284 15.0304 25.3491 15.0046C25.7698 14.9787 26.1902 15.0597 26.5713 15.2399C26.7237 15.3122 26.892 15.3448 27.0604 15.3346C27.2288 15.3244 27.392 15.2718 27.5346 15.1816C27.6772 15.0913 27.7946 14.9665 27.876 14.8187C27.9574 14.6709 28.0001 14.5049 28 14.3361V8.99986C28 8.46943 27.7893 7.96072 27.4142 7.58565C27.0391 7.21057 26.5304 6.99986 26 6.99986H21.4725C21.4911 6.83385 21.5003 6.66691 21.5 6.49986C21.4991 5.88526 21.3727 5.27733 21.1285 4.71332C20.8843 4.14931 20.5275 3.64111 20.08 3.21986C19.4603 2.63787 18.6885 2.24332 17.8539 2.08188C17.0192 1.92045 16.1559 1.99874 15.3639 2.30768C14.5719 2.61663 13.8837 3.1436 13.3788 3.82756C12.8739 4.51152 12.5731 5.3245 12.5112 6.17236C12.492 6.44815 12.4979 6.72512 12.5287 6.99986H8C7.46957 6.99986 6.96086 7.21057 6.58579 7.58565C6.21071 7.96072 6 8.46943 6 8.99986V13.0274C5.83399 13.0088 5.66705 12.9996 5.5 12.9999C4.88542 13.0009 4.2775 13.1273 3.7135 13.3715C3.1495 13.6156 2.64129 13.9724 2.22 14.4199C1.79569 14.8681 1.46896 15.3994 1.26047 15.9803C1.05199 16.5613 0.966274 17.1791 1.00875 17.7949C1.08041 18.8791 1.54109 19.901 2.30609 20.6726C3.07108 21.4443 4.08894 21.9138 5.1725 21.9949C5.44828 22.0147 5.72531 22.0088 6 21.9774V25.9999C6 26.5303 6.21071 27.039 6.58579 27.4141C6.96086 27.7891 7.46957 27.9999 8 27.9999H26C26.5304 27.9999 27.0391 27.7891 27.4142 27.4141C27.7893 27.039 28 26.5303 28 25.9999V20.6636C28.0001 20.4947 27.9574 20.3284 27.8759 20.1804C27.7943 20.0325 27.6766 19.9075 27.5338 19.8174ZM26 25.9999H8V20.6636C8.00005 20.4949 7.95741 20.3288 7.87603 20.181C7.79465 20.0332 7.67719 19.9084 7.53458 19.8182C7.39197 19.728 7.22885 19.6753 7.06041 19.6651C6.89197 19.6549 6.7237 19.6875 6.57125 19.7599C6.19021 19.9401 5.76978 20.021 5.34907 19.9952C4.92836 19.9693 4.52101 19.8375 4.1649 19.612C3.80879 19.3865 3.51548 19.0746 3.31224 18.7053C3.10899 18.336 3.00242 17.9214 3.00242 17.4999C3.00242 17.0784 3.10899 16.6637 3.31224 16.2944C3.51548 15.9251 3.80879 15.6133 4.1649 15.3877C4.52101 15.1622 4.92836 15.0304 5.34907 15.0046C5.76978 14.9787 6.19021 15.0597 6.57125 15.2399C6.7237 15.3122 6.89197 15.3448 7.06041 15.3346C7.22885 15.3244 7.39197 15.2718 7.53458 15.1816C7.67719 15.0913 7.79465 14.9665 7.87603 14.8187C7.95741 14.6709 8.00005 14.5049 8 14.3361V8.99986H13.8362C14.005 8.99992 14.171 8.95727 14.3188 8.87589C14.4667 8.79451 14.5915 8.67705 14.6817 8.53444C14.7719 8.39183 14.8246 8.22871 14.8347 8.06027C14.8449 7.89184 14.8123 7.72356 14.74 7.57111C14.5598 7.19007 14.4789 6.76964 14.5047 6.34893C14.5306 5.92822 14.6624 5.52087 14.8879 5.16476C15.1134 4.80865 15.4253 4.51534 15.7946 4.3121C16.1638 4.10885 16.5785 4.00228 17 4.00228C17.4215 4.00228 17.8362 4.10885 18.2054 4.3121C18.5747 4.51534 18.8866 4.80865 19.1121 5.16476C19.3376 5.52087 19.4694 5.92822 19.4953 6.34893C19.5211 6.76964 19.4402 7.19007 19.26 7.57111C19.1877 7.72356 19.1551 7.89184 19.1652 8.06027C19.1754 8.22871 19.2281 8.39183 19.3183 8.53444C19.4085 8.67705 19.5333 8.79451 19.6812 8.87589C19.829 8.95727 19.995 8.99992 20.1637 8.99986H26V13.0286C25.7253 12.9971 25.4483 12.9913 25.1725 13.0111C24.0086 13.0935 22.9223 13.6248 22.1426 14.4928C21.3629 15.3608 20.9509 16.4977 20.9933 17.6637C21.0358 18.8297 21.5295 19.9336 22.3703 20.7426C23.2111 21.5516 24.3332 22.0024 25.5 21.9999C25.6671 22.0002 25.834 21.991 26 21.9724V25.9999Z" fill="currentColor"/>
                                    </svg>
                                </i>
                                <span class="item-name">Plugins</span>
                                <i class="right-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" class="icon-18" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </i>
                            </a>
                            <ul class="sub-nav collapse" id="sidebar-plugins" data-bs-parent="#sidebar-menu">
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="plugins/apexcharts.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Apexcharts" data-bs-placement="right">
                                            A </i>
                                        <span class="item-name">Apexcharts</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="plugins/button-hover.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Button Hover"
                                            data-bs-placement="right"> BH </i>
                                        <span class="item-name">Button Hover </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="plugins/choise-js.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Choice JS" data-bs-placement="right"> C
                                        </i>
                                        <span class="item-name">Choice JS</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="plugins/flatpickr.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Flatpickr" data-bs-placement="right"> F
                                        </i>
                                        <span class="item-name">Flatpickr </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="plugins/fslightbox.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="FSlightbox" data-bs-placement="right">
                                            F </i>
                                        <span class="item-name">FSlightbox </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="plugins/gallery-hover.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Gallery Hover"
                                            data-bs-placement="right"> G </i>
                                        <span class="item-name">Gallery Hover </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="plugins/image-croper.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Image Croper"
                                            data-bs-placement="right"> I </i>
                                        <span class="item-name">Image Croper </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="plugins/loader.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Loader" data-bs-placement="right"> L
                                        </i>
                                        <span class="item-name">Loader </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="plugins/rating.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Rating" data-bs-placement="right"> R
                                        </i>
                                        <span class="item-name">Rating</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="plugins/select2.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Select2" data-bs-placement="right"> S
                                        </i>
                                        <span class="item-name">Select2 </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="plugins/sweet-alert.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Sweet Alert" data-bs-placement="right">
                                            S </i>
                                        <span class="item-name">Sweet Alert</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="plugins/quill-editor.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="quill-editor"
                                            data-bs-placement="right"> T </i>
                                        <span class="item-name">Quill</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="plugins/uppy.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Uppy" data-bs-placement="right"> U </i>
                                        <span class="item-name">Uppy</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link "
                                href="blank-page.html">
                                <i class="icon" data-bs-toggle="tooltip" title="Blank Page" data-bs-placement="right">
                                    <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_389_11986)">
                                        <path d="M13.125 17.5H4.375C4.20924 17.5 4.05027 17.4342 3.93306 17.3169C3.81585 17.1997 3.75 17.0408 3.75 16.875V5.625C3.75 5.45924 3.81585 5.30027 3.93306 5.18306C4.05027 5.06585 4.20924 5 4.375 5H10.625L13.75 8.125V16.875C13.75 17.0408 13.6842 17.1997 13.5669 17.3169C13.4497 17.4342 13.2908 17.5 13.125 17.5Z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6.25 5V3.125C6.25 2.95924 6.31585 2.80027 6.43306 2.68306C6.55027 2.56585 6.70924 2.5 6.875 2.5H13.125L16.25 5.625V14.375C16.25 14.5408 16.1842 14.6997 16.0669 14.8169C15.9497 14.9342 15.7908 15 15.625 15H13.75" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6.875 11.875H10.625" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6.875 14.375H10.625" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_389_11986">
                                        <rect width="20" height="20" fill="white"/>
                                        </clipPath>
                                    </defs>
                                    </svg>
                                </i>
                                <span class="item-name">Blank Page</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#ui" role="button" aria-expanded="false"
                                aria-controls="utilities-error">
                                <i class="icon" data-bs-toggle="tooltip" title="UI Elements" data-bs-placement="right">
                                   <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_389_11975)">
                                        <path d="M1.25 6.25H8.125" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11.875 6.25H18.75" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10 8.125C11.0355 8.125 11.875 7.28553 11.875 6.25C11.875 5.21447 11.0355 4.375 10 4.375C8.96447 4.375 8.125 5.21447 8.125 6.25C8.125 7.28553 8.96447 8.125 10 8.125Z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M3.125 15.625C4.16053 15.625 5 14.7855 5 13.75C5 12.7145 4.16053 11.875 3.125 11.875C2.08947 11.875 1.25 12.7145 1.25 13.75C1.25 14.7855 2.08947 15.625 3.125 15.625Z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M16.875 15.625C17.9105 15.625 18.75 14.7855 18.75 13.75C18.75 12.7145 17.9105 11.875 16.875 11.875C15.8395 11.875 15 12.7145 15 13.75C15 14.7855 15.8395 15.625 16.875 15.625Z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11.8578 6.50391C13.0958 6.85228 14.2114 7.54047 15.0783 8.49047C15.9452 9.44046 16.5286 10.6143 16.7625 11.8789" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M3.23749 11.8789C3.47145 10.6143 4.05492 9.44054 4.92178 8.49056C5.78864 7.54058 6.90424 6.85237 8.14218 6.50391" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_389_11975">
                                        <rect width="20" height="20" fill="white"/>
                                        </clipPath>
                                    </defs>
                                    </svg>
                                </i>
                                <span class="item-name">UI Elements</span>
                                <i class="right-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </i>
                            </a>
                            <ul class="sub-nav collapse" id="ui" data-parent="#sidebar-menu">
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="ui-elements/ui-avatars.html">
                                        <i class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon"> A</i>
                                        <span class="item-name">Avatars</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="ui-elements/ui-alerts.html">
                                        <i class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon"> A </i>
                                        <span class="item-name">Alerts</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="ui-elements/ui-badges.html">
                                        <i class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon"> B </i>
                                        <span class="item-name">Badge</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="ui-elements/ui-breadcrumb.html">
                                        <i class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon"> B </i>
                                        <span class="item-name">Breadcrumb</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="ui-elements/ui-buttons.html">
                                        <i class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon"> B </i>
                                        <span class="item-name">Buttons</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="ui-elements/ui-buttons-group.html">
                                        <i class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon"> B </i>
                                        <span class="item-name">Buttons Group</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="ui-elements/ui-offcanvas.html">
                                        <i class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon"> O </i>
                                        <span class="item-name">Offcanvas</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="ui-elements/ui-color.html">
                                        <i class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon"> C</i>
                                        <span class="item-name">Colors</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="ui-elements/ui-cards.html">
                                        <i class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon"> C </i>
                                        <span class="item-name">Cards</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="ui-elements/ui-carousel.html">
                                        <i class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon"> C </i>
                                        <span class="item-name">Carousel</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="ui-elements/ui-grid.html">
                                        <i class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon"> G </i>
                                        <span class="item-name">Grid</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="ui-elements/ui-images.html">
                                        <i class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon"> I </i>
                                        <span class="item-name">Images</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="ui-elements/ui-list-group.html">
                                        <i class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon"> L </i>
                                        <span class="item-name">List Group</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="ui-elements/ui-modal.html">
                                        <i class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon"> M </i>
                                        <span class="item-name">Modal</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="ui-elements/ui-notifications.html">
                                        <i class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon"> N </i>
                                        <span class="item-name">Notifications</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="ui-elements/ui-pagination.html">
                                        <i class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon"> P </i>
                                        <span class="item-name">Pagination</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="ui-elements/ui-popovers.html">
                                        <i class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon"> P </i>
                                        <span class="item-name">Popovers</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="ui-elements/ui-typography.html">
                                        <i class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon"> T </i>
                                        <span class="item-name">Typography</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="ui-elements/ui-tabs.html">
                                        <i class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon"> T </i>
                                        <span class="item-name">Tabs</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="ui-elements/ui-tooltips.html">
                                        <i class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon"> T </i>
                                        <span class="item-name">Tooltips</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="ui-elements/ui-embed-video.html">
                                        <i class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon"> V </i>
                                        <span class="item-name">Video</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-widget" role="button" aria-expanded="false"
                                aria-controls="sidebar-widget">
                                <i class="icon" data-bs-toggle="tooltip" title="Widgets" data-bs-placement="right">
                                    <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <path d="M27.96 8.26877L16.96 2.25002C16.6661 2.08763 16.3358 2.00244 16 2.00244C15.6642 2.00244 15.3339 2.08763 15.04 2.25002L4.04 8.27127C3.72586 8.44315 3.46363 8.69622 3.28069 9.00405C3.09775 9.31188 3.00081 9.66319 3 10.0213V21.9763C3.00081 22.3344 3.09775 22.6857 3.28069 22.9935C3.46363 23.3013 3.72586 23.5544 4.04 23.7263L15.04 29.7475C15.3339 29.9099 15.6642 29.9951 16 29.9951C16.3358 29.9951 16.6661 29.9099 16.96 29.7475L27.96 23.7263C28.2741 23.5544 28.5364 23.3013 28.7193 22.9935C28.9023 22.6857 28.9992 22.3344 29 21.9763V10.0225C28.9999 9.6638 28.9032 9.31172 28.7203 9.00317C28.5373 8.69462 28.2747 8.44096 27.96 8.26877ZM16 4.00002L26.0425 9.50002L16 15L5.9575 9.50002L16 4.00002ZM5 11.25L15 16.7225V27.4463L5 21.9775V11.25ZM17 27.4463V16.7275L27 11.25V21.9725L17 27.4463Z" fill="currentColor"/>
                                    </svg>
                                </i>
                                <span class="item-name">Widgets</span>
                                <i class="right-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" class="icon-18" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </i>
                            </a>
                            <ul class="sub-nav collapse" id="sidebar-widget" data-bs-parent="#sidebar-menu">
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="widget/widgetbasic.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Widget Basic"
                                            data-bs-placement="right"> WB </i>
                                        <span class="item-name">Widget Basic</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="widget/widgetchart.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Widget Chart"
                                            data-bs-placement="right"> WC </i>
                                        <span class="item-name">Widget Chart</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="widget/widgetcard.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Widget Card" data-bs-placement="right">
                                            WC </i>
                                        <span class="item-name">Widget Card</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-maps" role="button" aria-expanded="false"
                                aria-controls="sidebar-maps">
                                <i class="icon" data-bs-toggle="tooltip" title="Maps" data-bs-placement="right">
                                    <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <path d="M25 28H18.8175C19.8561 27.0727 20.8355 26.0811 21.75 25.0312C25.1812 21.085 27 16.925 27 13C27 10.0826 25.8411 7.28473 23.7782 5.22183C21.7153 3.15893 18.9174 2 16 2C13.0826 2 10.2847 3.15893 8.22183 5.22183C6.15893 7.28473 5 10.0826 5 13C5 16.925 6.81375 21.085 10.25 25.0312C11.1645 26.0811 12.1439 27.0727 13.1825 28H7C6.73478 28 6.48043 28.1054 6.29289 28.2929C6.10536 28.4804 6 28.7348 6 29C6 29.2652 6.10536 29.5196 6.29289 29.7071C6.48043 29.8946 6.73478 30 7 30H25C25.2652 30 25.5196 29.8946 25.7071 29.7071C25.8946 29.5196 26 29.2652 26 29C26 28.7348 25.8946 28.4804 25.7071 28.2929C25.5196 28.1054 25.2652 28 25 28ZM7 13C7 10.6131 7.94821 8.32387 9.63604 6.63604C11.3239 4.94821 13.6131 4 16 4C18.3869 4 20.6761 4.94821 22.364 6.63604C24.0518 8.32387 25 10.6131 25 13C25 20.1537 18.0662 26.125 16 27.75C13.9338 26.125 7 20.1537 7 13ZM21 13C21 12.0111 20.7068 11.0444 20.1573 10.2221C19.6079 9.3999 18.827 8.75904 17.9134 8.3806C16.9998 8.00216 15.9945 7.90315 15.0245 8.09607C14.0546 8.289 13.1637 8.7652 12.4645 9.46447C11.7652 10.1637 11.289 11.0546 11.0961 12.0245C10.9031 12.9945 11.0022 13.9998 11.3806 14.9134C11.759 15.827 12.3999 16.6079 13.2221 17.1573C14.0444 17.7068 15.0111 18 16 18C17.3261 18 18.5979 17.4732 19.5355 16.5355C20.4732 15.5979 21 14.3261 21 13ZM13 13C13 12.4067 13.1759 11.8266 13.5056 11.3333C13.8352 10.8399 14.3038 10.4554 14.8519 10.2284C15.4001 10.0013 16.0033 9.94189 16.5853 10.0576C17.1672 10.1734 17.7018 10.4591 18.1213 10.8787C18.5409 11.2982 18.8266 11.8328 18.9424 12.4147C19.0581 12.9967 18.9987 13.5999 18.7716 14.1481C18.5446 14.6962 18.1601 15.1648 17.6667 15.4944C17.1734 15.8241 16.5933 16 16 16C15.2044 16 14.4413 15.6839 13.8787 15.1213C13.3161 14.5587 13 13.7956 13 13Z" fill="currentColor"/>
                                    </svg>
                                </i>
                                <span class="item-name">Maps</span>
                                <i class="right-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" class="icon-18" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </i>
                            </a>
                            <ul class="sub-nav collapse" id="sidebar-maps" data-bs-parent="#sidebar-menu">
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="maps/google.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Google" data-bs-placement="right"> G
                                        </i>
                                        <span class="item-name">Google</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="maps/vector.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Vector" data-bs-placement="right"> V
                                        </i>
                                        <span class="item-name">Vector</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-form" role="button" aria-expanded="false"
                                aria-controls="sidebar-form">
                                <i class="icon" class="icon-20" data-bs-toggle="tooltip" title="Form" data-bs-placement="right">
                                    <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <path d="M21 16C21 16.2652 20.8946 16.5196 20.7071 16.7071C20.5196 16.8946 20.2652 17 20 17H12C11.7348 17 11.4804 16.8946 11.2929 16.7071C11.1054 16.5196 11 16.2652 11 16C11 15.7348 11.1054 15.4804 11.2929 15.2929C11.4804 15.1054 11.7348 15 12 15H20C20.2652 15 20.5196 15.1054 20.7071 15.2929C20.8946 15.4804 21 15.7348 21 16ZM20 19H12C11.7348 19 11.4804 19.1054 11.2929 19.2929C11.1054 19.4804 11 19.7348 11 20C11 20.2652 11.1054 20.5196 11.2929 20.7071C11.4804 20.8946 11.7348 21 12 21H20C20.2652 21 20.5196 20.8946 20.7071 20.7071C20.8946 20.5196 21 20.2652 21 20C21 19.7348 20.8946 19.4804 20.7071 19.2929C20.5196 19.1054 20.2652 19 20 19ZM27 6V25C27 26.0609 26.5786 27.0783 25.8284 27.8284C25.0783 28.5786 24.0609 29 23 29H9C7.93913 29 6.92172 28.5786 6.17157 27.8284C5.42143 27.0783 5 26.0609 5 25V6C5 5.46957 5.21071 4.96086 5.58579 4.58579C5.96086 4.21071 6.46957 4 7 4H9V3C9 2.73478 9.10536 2.48043 9.29289 2.29289C9.48043 2.10536 9.73478 2 10 2C10.2652 2 10.5196 2.10536 10.7071 2.29289C10.8946 2.48043 11 2.73478 11 3V4H15V3C15 2.73478 15.1054 2.48043 15.2929 2.29289C15.4804 2.10536 15.7348 2 16 2C16.2652 2 16.5196 2.10536 16.7071 2.29289C16.8946 2.48043 17 2.73478 17 3V4H21V3C21 2.73478 21.1054 2.48043 21.2929 2.29289C21.4804 2.10536 21.7348 2 22 2C22.2652 2 22.5196 2.10536 22.7071 2.29289C22.8946 2.48043 23 2.73478 23 3V4H25C25.5304 4 26.0391 4.21071 26.4142 4.58579C26.7893 4.96086 27 5.46957 27 6ZM25 6H23V7C23 7.26522 22.8946 7.51957 22.7071 7.70711C22.5196 7.89464 22.2652 8 22 8C21.7348 8 21.4804 7.89464 21.2929 7.70711C21.1054 7.51957 21 7.26522 21 7V6H17V7C17 7.26522 16.8946 7.51957 16.7071 7.70711C16.5196 7.89464 16.2652 8 16 8C15.7348 8 15.4804 7.89464 15.2929 7.70711C15.1054 7.51957 15 7.26522 15 7V6H11V7C11 7.26522 10.8946 7.51957 10.7071 7.70711C10.5196 7.89464 10.2652 8 10 8C9.73478 8 9.48043 7.89464 9.29289 7.70711C9.10536 7.51957 9 7.26522 9 7V6H7V25C7 25.5304 7.21071 26.0391 7.58579 26.4142C7.96086 26.7893 8.46957 27 9 27H23C23.5304 27 24.0391 26.7893 24.4142 26.4142C24.7893 26.0391 25 25.5304 25 25V6Z" fill="currentColor"/>
                                    </svg>
                                </i>
                                <span class="item-name">Form</span>
                                <i class="right-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" class="icon-18" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </i>
                            </a>
                            <ul class="sub-nav collapse" id="sidebar-form" data-bs-parent="#sidebar-menu">
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="form/form-element.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Elements" data-bs-placement="right"> E
                                        </i>
                                        <span class="item-name">Elements</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="form/form-wizard.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Wizard" data-bs-placement="right"> W
                                        </i>
                                        <span class="item-name">Wizard</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="form/form-validation.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Validation" data-bs-placement="right">
                                            V </i>
                                        <span class="item-name">Validation</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-table" role="button" aria-expanded="false"
                                aria-controls="sidebar-table">
                                <i class="icon" data-bs-toggle="tooltip" title="Table" data-bs-placement="right">
                                    <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <path d="M28 6H4C3.73478 6 3.48043 6.10536 3.29289 6.29289C3.10536 6.48043 3 6.73478 3 7V24C3 24.5304 3.21071 25.0391 3.58579 25.4142C3.96086 25.7893 4.46957 26 5 26H27C27.5304 26 28.0391 25.7893 28.4142 25.4142C28.7893 25.0391 29 24.5304 29 24V7C29 6.73478 28.8946 6.48043 28.7071 6.29289C28.5196 6.10536 28.2652 6 28 6ZM5 14H10V18H5V14ZM12 14H27V18H12V14ZM27 8V12H5V8H27ZM5 20H10V24H5V20ZM27 24H12V20H27V24Z" fill="currentColor"/>
                                    </svg>
                                </i>
                                <span class="item-name">Table</span>
                                <i class="right-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" class="icon-18" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </i>
                            </a>
                            <ul class="sub-nav collapse" id="sidebar-table" data-bs-parent="#sidebar-menu">
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="table/bootstrap-table.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Bootstrap Table"
                                            data-bs-placement="right"> BT </i>
                                        <span class="item-name">Bootstrap Table</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="table/table-data.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Datatable" data-bs-placement="right"> D
                                        </i>
                                        <span class="item-name">Datatable</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="table/border-table.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Bordered Table"
                                            data-bs-placement="right"> BT </i>
                                        <span class="item-name">Bordered Table</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="table/fancy-table.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Fancy Table" data-bs-placement="right">
                                            F </i>
                                        <span class="item-name">Fancy Table</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-icons" role="button" aria-expanded="false"
                                aria-controls="sidebar-icons">
                                <i class="icon" data-bs-toggle="tooltip" title="Icons" data-bs-placement="right">
                                    <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <path d="M16 3C13.4288 3 10.9154 3.76244 8.77759 5.1909C6.63975 6.61935 4.97351 8.64968 3.98957 11.0251C3.00563 13.4006 2.74819 16.0144 3.2498 18.5362C3.75141 21.0579 4.98953 23.3743 6.80762 25.1924C8.6257 27.0105 10.9421 28.2486 13.4638 28.7502C15.9856 29.2518 18.5995 28.9944 20.9749 28.0104C23.3503 27.0265 25.3807 25.3603 26.8091 23.2224C28.2376 21.0846 29 18.5712 29 16C28.9964 12.5533 27.6256 9.24882 25.1884 6.81163C22.7512 4.37445 19.4467 3.00364 16 3ZM16 27C13.8244 27 11.6977 26.3549 9.88873 25.1462C8.07979 23.9375 6.66989 22.2195 5.83733 20.2095C5.00477 18.1995 4.78693 15.9878 5.21137 13.854C5.63581 11.7202 6.68345 9.7602 8.22183 8.22183C9.76021 6.68345 11.7202 5.6358 13.854 5.21136C15.9878 4.78692 18.1995 5.00476 20.2095 5.83733C22.2195 6.66989 23.9375 8.07979 25.1462 9.88873C26.3549 11.6977 27 13.8244 27 16C26.9967 18.9164 25.8367 21.7123 23.7745 23.7745C21.7123 25.8367 18.9164 26.9967 16 27ZM18 22C18 22.2652 17.8946 22.5196 17.7071 22.7071C17.5196 22.8946 17.2652 23 17 23C16.4696 23 15.9609 22.7893 15.5858 22.4142C15.2107 22.0391 15 21.5304 15 21V16C14.7348 16 14.4804 15.8946 14.2929 15.7071C14.1054 15.5196 14 15.2652 14 15C14 14.7348 14.1054 14.4804 14.2929 14.2929C14.4804 14.1054 14.7348 14 15 14C15.5304 14 16.0391 14.2107 16.4142 14.5858C16.7893 14.9609 17 15.4696 17 16V21C17.2652 21 17.5196 21.1054 17.7071 21.2929C17.8946 21.4804 18 21.7348 18 22ZM14 10.5C14 10.2033 14.088 9.91332 14.2528 9.66665C14.4176 9.41997 14.6519 9.22771 14.926 9.11418C15.2001 9.00065 15.5017 8.97094 15.7926 9.02882C16.0836 9.0867 16.3509 9.22956 16.5607 9.43934C16.7704 9.64912 16.9133 9.91639 16.9712 10.2074C17.0291 10.4983 16.9994 10.7999 16.8858 11.074C16.7723 11.3481 16.58 11.5824 16.3334 11.7472C16.0867 11.912 15.7967 12 15.5 12C15.1022 12 14.7206 11.842 14.4393 11.5607C14.158 11.2794 14 10.8978 14 10.5Z" fill="currentColor"/>
                                    </svg>
                                </i>
                                <span class="item-name">Icons</span>
                                <i class="right-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" class="icon-18" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </i>
                            </a>
                            <ul class="sub-nav collapse" id="sidebar-icons" data-bs-parent="#sidebar-menu">
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="icons/solid.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Solid" data-bs-placement="right"> S
                                        </i>
                                        <span class="item-name">Solid</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="icons/outline.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Outlined" data-bs-placement="right"> O
                                        </i>
                                        <span class="item-name">Outlined</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="icons/dual-tone.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Dual Tone" data-bs-placement="right"> D
                                        </i>
                                        <span class="item-name">Dual Tone</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Sidebar Menu End -->        
                </div>
            </div>
            <div class="sidebar-footer">
            </div>
        </aside>  
             
        <main class="main-content">
            <div class="position-relative ">
            <!--Nav Start-->
                <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar">
                   <div class="container-fluid navbar-inner">
                      <a href="index-2.html" class="navbar-brand">
                         
                         <!--Logo start-->
                         <div class="logo-main">
                             <img src="https://templates.iqonic.design/muzik/html/assets/images/logo.svg" class="logo-normal img-fluid" alt="logo">
                             <img src="https://templates.iqonic.design/muzik/html/assets/images/logo-dark.svg" class="logo-normal dark-normal img-fluid" alt="logo-dark">
                             <img src="https://templates.iqonic.design/muzik/html/assets/images/logo-color.svg" class="logo-normal white-normal img-fluid" alt="logo-color">
                             <img src="https://templates.iqonic.design/muzik/html/assets/images/logo-mini.svg" class="logo-mini img-fluid" alt="logo-mini">
                             <img src="https://templates.iqonic.design/muzik/html/assets/images/logo-dark-mini.svg" class="logo-mini dark-mini img-fluid" alt="logo-dark-mini">
                             <img src="https://templates.iqonic.design/muzik/html/assets/images/logo-color-mini.svg" class="logo-mini white-mini img-fluid" alt="logo-white-mini">
                         </div>
                         <!--logo End-->      </a>
                      <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                         <i class="icon d-flex">
                            <svg class="icon-20" width="20" viewBox="0 0 24 24">
                               <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                            </svg>
                         </i>
                      </div>
                      <div class="d-flex align-items-center justify-content-between product-offcanvas">
                         <div class="offcanvas offcanvas-end shadow-none iq-product-menu-responsive" tabindex="-1" id="offcanvasBottom">
                            <div class="offcanvas-body">
                               <ul class="iq-nav-menu list-unstyled">
                                  <li class="nav-item">
                                     <a class="nav-link active" aria-current="page"
                                        href="{{ route('dashboard.home') }}">
                                        <span class="item-name">Home</span>
                                     </a>
                                  </li>
                                  <li class="nav-item">
                                     <a class="nav-link " aria-current="page"
                                        href="release.html">
                                        <span class="item-name">Release</span>
                                     </a>
                                  </li>
                                  <li class="nav-item">
                                     <a class="nav-link " aria-current="page"
                                           href="albums.html">
                                           <span class="item-name">Albums</span>
                                     </a>
                                  </li>
                               </ul>
                            </div>
                         </div>
                      </div>
                      <div class="d-flex align-items-center">
                         <button id="navbar-toggle" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                               <span class="navbar-toggler-bar bar1 mt-1"></span>
                               <span class="navbar-toggler-bar bar2"></span>
                               <span class="navbar-toggler-bar bar3"></span>
                            </span>
                         </button>
                      </div>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <div class="search-box d-xl-block d-none">
                            <div class="dropdown">
                               <div class="search-box-drop" id="search-box-drop" data-bs-toggle="dropdown">
                                  <div class="d-flex align-items-center justify-content-between gap-2">
                                     <div class="search-box-inner">
                                        <button type="submit" class="search-box-drop-submit">
                                           <svg fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                              viewBox="0 0 24 24">
                                              <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5"
                                                 stroke-linecap="round" stroke-linejoin="round" />
                                              <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                                 stroke-linecap="round" stroke-linejoin="round" />
                                           </svg>
                                        </button>
                                        <input type="text" placeholder="Search Here...">
                                     </div>
                                  </div>
                               </div>
                               <ul class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="search-drop">
                                  <li class="">
                                     <div class="p-0 card-body all-notification">
                                        <div class="d-flex align-items-center border-bottom search-hover py-2 px-3">
                                           <div class="flex-shrink-0">
                                              <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/64.jpg"
                                                 class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                           </div>
                                           <div class="d-flex flex-column ms-3 w-100">
                                              <a href="javascript:void(0);" class="h5">Paige Turner</a>
                                              <span>Paige001</span>
                                           </div>
                                        </div>
                                     </div>
                                  </li>
                               </ul>
                            </div>
                         </div>
                         <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
                            <li class="nav-item dropdown d-xl-none d-block">
                               <a href="#" class="nav-link" id="search-drop" data-bs-toggle="dropdown">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                        transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                     <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="currentColor"></path>
                                  </svg>
                               </a>
                               <ul class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="search-drop">
                                  <li class="">
                                     <div class="p-3 card-header justify-content-between border-bottom rounded-top">
                                        <div class="header-title">
                                           <div class="iq-search-bar device-search  position-relative">
                                              <form action="#" class="searchbox">
                                                 <input type="text" class="text search-input form-control bg-soft-primary"
                                                    placeholder="Search here...">
                                                 <a class="d-lg-none d-flex" href="javascript:void(0);">
                                                    <span class="material-symbols-outlined">search</span>
                                                 </a>
                                              </form>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="p-0 card-body all-notification">
                                        <div class="d-flex align-items-center border-bottom search-hover py-2 px-3">
                                           <div class="flex-shrink-0">
                                              <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/64.jpg"
                                                 class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                           </div>
                                           <div class="d-flex flex-column ms-3 w-100">
                                              <a href="javascript:void(0);" class="h6">Alexa Zone</a>
                                              <span>Muzic Player</span>
                                           </div>
                                        </div>
                                     </div>
                                  </li>
                               </ul>
                            </li>
                            <li class="nav-item dropdown">
                               <a href="#" class="nav-link p-0 ps-3" id="notification-drop" data-bs-toggle="dropdown">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                     <g clip-path="url(#clip0_549_1304)">
                                        <path d="M7.5 15C7.5 15.663 7.76339 16.2989 8.23223 16.7678C8.70107 17.2366 9.33696 17.5 10 17.5C10.663 17.5 11.2989 17.2366 11.7678 16.7678C12.2366 16.2989 12.5 15.663 12.5 15" stroke="#AAAAAA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M4.37502 8.125C4.37502 6.63316 4.96766 5.20242 6.02255 4.14752C7.07744 3.09263 8.50818 2.5 10 2.5C11.4919 2.5 12.9226 3.09263 13.9775 4.14752C15.0324 5.20242 15.625 6.63316 15.625 8.125C15.625 10.9234 16.2735 13.1719 16.7891 14.0625C16.8439 14.1574 16.8727 14.2649 16.8728 14.3744C16.8729 14.484 16.8442 14.5916 16.7896 14.6865C16.735 14.7815 16.6565 14.8604 16.5618 14.9154C16.467 14.9705 16.3595 14.9996 16.25 15H3.75002C3.64063 14.9993 3.53333 14.97 3.43884 14.9149C3.34435 14.8597 3.26599 14.7808 3.21158 14.6859C3.15717 14.591 3.12862 14.4835 3.12878 14.3741C3.12895 14.2647 3.15783 14.1572 3.21252 14.0625C3.72737 13.1719 4.37502 10.9227 4.37502 8.125Z" stroke="#AAAAAA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <circle cx="14.2803" cy="2.91665" r="2.58333" fill="#EF3E36" stroke="white"/>
                                     </g>
                                     <defs>
                                        <clipPath id="clip0_549_1304">
                                           <rect width="20" height="20" fill="white"/>
                                        </clipPath>
                                     </defs>
                                  </svg>
                                  <span class="bg-danger dots"></span>
                               </a>
                               <ul class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="notification-drop">
                                  <li class="">
                                     <div class="p-3 card-header d-flex justify-content-between bg-primary rounded-top">
                                        <div class="header-title">
                                           <h5 class="mb-0 text-white">All Notifications</h5>
                                        </div>
                                     </div>
                                     <div class="p-0 card-body all-notification">
                                        <a href="#" class="iq-sub-card">
                                           <div class="d-flex align-items-center">
                                              <img class="p-1 avatar-40 rounded-pill bg-soft-primary"
                                                 src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/24.png" alt="" loading="lazy">
                                              <div class="ms-3 w-100">
                                                 <h6 class="mb-0 ">Emma Watson Bni</h6>
                                                 <div class="d-flex justify-content-between align-items-center">
                                                    <p class="mb-0">95 MB</p>
                                                    <small class="float-end font-size-12">Just Now</small>
                                                 </div>
                                              </div>
                                           </div>
                                        </a>
                                     </div>
                                  </li>
                               </ul>
                            </li>
                            <li class="nav-item dropdown">
                               <a class="p-0 ps-3 nav-link d-flex align-items-center position-relative" href="#" id="profile-setting" role="button"
                                  data-bs-toggle="dropdown" aria-expanded="false">
                                  <img src="{{ auth()->user()->picture }}" alt="User-Profile" class="theme-color-default-img img-fluid avatar avatar-40 avatar-rounded" loading="lazy">
                                  <div class="iq-profile-badge  bg-success"></div
                               </a>
                               <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile-setting">
                                  <li><a class="dropdown-item" href="{{ url('/dashboard/profile') }}">Profile</a></li>
                                  <li><a class="dropdown-item" href="app/user-privacy-setting.html">Privacy
                                        Setting</a></li>
                                  <li>
                                     <hr class="dropdown-divider">
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                               </ul>
                            </li>
                         </ul>
                      </div>
                   </div>
                </nav>            
            <!--Nav End-->
            </div>
            @yield('content')
        </main>
        <!--Footer Start-->
        <!-- Footer Section Start -->
        <footer class="footer">
            <div class="footer-top">
                <div class="row">
                    <div class="col-12">
                        <input type="range" min="1" max="100" value="0" class="seek_slider" onchange="seekTo()">
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container-fluid px-4">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="details">
                                <div class="footer-track-detail d-flex align-items-center gap-3 flex-wrap justify-content-sm-start justify-content-center">
                                    <div class="track-art"></div>
                                    <div>
                                        <h6 class="track-name text-white font-size-14 mb-1"></h6>
                                        <p class="track-artist text-white small m-0"></p>
                                    </div>
                                    <div class="like text-white flex-shrink-0 ms-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                            fill="none">
                                            <g>
                                                <path
                                                    d="M9 15.1875C9 15.1875 1.6875 11.25 1.6875 6.60938C1.6875 5.60238 2.08753 4.63663 2.79958 3.92458C3.51163 3.21253 4.47738 2.8125 5.48438 2.8125C7.07273 2.8125 8.43328 3.67805 9 5.0625C9.56672 3.67805 10.9273 2.8125 12.5156 2.8125C13.5226 2.8125 14.4884 3.21253 15.2004 3.92458C15.9125 4.63663 16.3125 5.60238 16.3125 6.60938C16.3125 11.25 9 15.1875 9 15.1875Z"
                                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-3 col-sm-6 mt-sm-0 mt-3">
                            <div class="d-flex align-items-center justify-content-md-center justify-content-sm-end justify-content-center gap-3">
                                <div class="track-suffle text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                        fill="none">
                                        <g>
                                            <path
                                                d="M6.67969 6.358L5.69109 5.36941C5.30132 4.97784 4.83776 4.66747 4.32723 4.45626C3.81671 4.24505 3.26936 4.13719 2.71687 4.13894H0.849022C0.625246 4.13894 0.410634 4.22783 0.252401 4.38607C0.0941667 4.5443 0.00527191 4.75891 0.00527191 4.98269C0.00527191 5.20646 0.0941667 5.42107 0.252401 5.57931C0.410634 5.73754 0.625246 5.82644 0.849022 5.82644H2.71512C3.04606 5.82554 3.3739 5.89033 3.67962 6.01706C3.98535 6.14379 4.26288 6.32994 4.49613 6.56472L5.48437 7.5512C5.6426 7.70971 5.85732 7.79887 6.08128 7.79907C6.30525 7.79927 6.52012 7.71049 6.67863 7.55226C6.83714 7.39403 6.9263 7.17931 6.9265 6.95535C6.9267 6.73138 6.83791 6.51651 6.67969 6.358Z"
                                                fill="currentColor" />
                                            <path
                                                d="M5.68336 12.6299L11.7506 6.56259C11.9839 6.32784 12.2614 6.14172 12.5672 6.01499C12.8729 5.88826 13.2007 5.82345 13.5316 5.82431H15.1281L14.1529 6.79954C14.0742 6.87793 14.0118 6.97107 13.9692 7.07363C13.9266 7.17619 13.9047 7.28615 13.9047 7.3972C13.9047 7.50825 13.9266 7.61821 13.9692 7.72076C14.0118 7.82332 14.0742 7.91647 14.1529 7.99486C14.3111 8.15308 14.5257 8.24196 14.7495 8.24196C14.9732 8.24196 15.1878 8.15308 15.3461 7.99486L17.7465 5.59579C17.8271 5.51525 17.8911 5.41961 17.9347 5.31435C17.9783 5.20909 18.0008 5.09626 18.0008 4.98232C18.0008 4.86837 17.9783 4.75555 17.9347 4.65028C17.8911 4.54502 17.8271 4.44938 17.7465 4.36884L15.3461 1.96872C15.1898 1.81251 14.9785 1.72382 14.7576 1.72172C14.5366 1.71961 14.3237 1.80426 14.1645 1.95747C13.8234 2.28548 13.8315 2.84095 14.1662 3.17564L15.127 4.13646H13.5316C12.9792 4.13475 12.4318 4.24263 11.9213 4.45383C11.4108 4.66504 10.9472 4.97539 10.5574 5.36693L4.49016 11.4363C4.2569 11.6711 3.97937 11.8572 3.67365 11.984C3.36792 12.1107 3.04009 12.1755 2.70914 12.1746H0.84375C0.619974 12.1746 0.405362 12.2635 0.247129 12.4217C0.0888948 12.5799 0 12.7946 0 13.0183C0 13.2421 0.0888948 13.4567 0.247129 13.615C0.405362 13.7732 0.619974 13.8621 0.84375 13.8621H2.70914C3.26174 13.8635 3.80913 13.7553 4.31965 13.5438C4.83016 13.3323 5.29367 13.0217 5.68336 12.6299Z"
                                                fill="currentColor" />
                                            <path
                                                d="M15.3461 16.0311L17.7465 13.6317C17.8271 13.5512 17.891 13.4556 17.9347 13.3504C17.9783 13.2451 18.0007 13.1323 18.0007 13.0184C18.0007 12.9045 17.9783 12.7917 17.9347 12.6865C17.891 12.5812 17.8271 12.4856 17.7465 12.4051L15.3461 10.0053C15.1898 9.84913 14.9785 9.76044 14.7576 9.75834C14.5366 9.75624 14.3237 9.84088 14.1645 9.99409C13.8234 10.3221 13.8315 10.8776 14.1662 11.2123L15.127 12.1731H13.5376C13.2067 12.1739 12.8789 12.1091 12.5731 11.9824C12.2674 11.8557 11.9899 11.6695 11.7566 11.4348L10.6625 10.3407C10.5844 10.2613 10.4914 10.1982 10.3887 10.1549C10.2861 10.1117 10.1759 10.0892 10.0645 10.0887C9.95314 10.0883 9.84277 10.1099 9.73978 10.1523C9.63679 10.1947 9.54322 10.2571 9.46446 10.3359C9.3857 10.4146 9.32331 10.5082 9.2809 10.6112C9.23849 10.7142 9.21688 10.8245 9.21734 10.9359C9.21779 11.0473 9.24029 11.1575 9.28354 11.2601C9.32679 11.3628 9.38994 11.4558 9.46934 11.5339L10.5634 12.6284C10.9533 13.0198 11.4168 13.3301 11.9273 13.5413C12.4378 13.7525 12.9852 13.8604 13.5376 13.8588H15.1277L14.1529 14.8358C13.9946 14.994 13.9057 15.2086 13.9057 15.4324C13.9057 15.6562 13.9946 15.8708 14.1529 16.029C14.3108 16.1875 14.5253 16.2768 14.749 16.2772C14.9728 16.2776 15.1875 16.1891 15.3461 16.0311Z"
                                                fill="currentColor" />
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="18" height="18" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="prev-track text-white" onclick="prevTrack()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <g>
                                            <path
                                                d="M13 2.9925V13.0075C12.9981 13.1848 12.9492 13.3584 12.8581 13.5105C12.767 13.6627 12.6372 13.7879 12.4818 13.8733C12.3264 13.9587 12.1511 14.0013 11.9739 13.9966C11.7966 13.992 11.6238 13.9403 11.4731 13.8469L4 9.17313V13.5C4 13.6326 3.94732 13.7598 3.85355 13.8536C3.75979 13.9473 3.63261 14 3.5 14C3.36739 14 3.24021 13.9473 3.14645 13.8536C3.05268 13.7598 3 13.6326 3 13.5V2.5C3 2.36739 3.05268 2.24021 3.14645 2.14645C3.24021 2.05268 3.36739 2 3.5 2C3.63261 2 3.75979 2.05268 3.85355 2.14645C3.94732 2.24021 4 2.36739 4 2.5V6.82688L11.4731 2.15313C11.6236 2.05865 11.7966 2.00612 11.9743 2.00097C12.1519 1.99582 12.3277 2.03825 12.4834 2.12385C12.6391 2.20946 12.7691 2.33513 12.8599 2.48785C12.9508 2.64058 12.9991 2.81481 13 2.9925Z"
                                                fill="currentColor" />
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="playpause-track" onclick="playpauseTrack()">
                                    <span class="d-inline-block rounded-circle p-2 bg-primary text-white">
                                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M16.6308 13.131C16.5743 13.189 16.3609 13.437 16.1622 13.641C14.9971 14.924 11.9576 17.024 10.3668 17.665C10.1252 17.768 9.51437 17.986 9.18802 18C8.8753 18 8.5772 17.928 8.29274 17.782C7.93814 17.578 7.65368 17.257 7.49781 16.878C7.39747 16.615 7.2416 15.828 7.2416 15.814C7.08573 14.953 7 13.554 7 12.008C7 10.535 7.08573 9.193 7.21335 8.319C7.22796 8.305 7.38383 7.327 7.55431 6.992C7.86702 6.38 8.47784 6 9.13151 6H9.18802C9.61374 6.015 10.509 6.395 10.509 6.409C12.0141 7.051 14.9834 9.048 16.1768 10.375C16.1768 10.375 16.5129 10.716 16.659 10.929C16.887 11.235 17 11.614 17 11.993C17 12.416 16.8724 12.81 16.6308 13.131Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="next-track text-white" onclick="nextTrack()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <g>
                                            <path
                                                d="M13 2.5V13.5C13 13.6326 12.9473 13.7598 12.8536 13.8536C12.7598 13.9473 12.6326 14 12.5 14C12.3674 14 12.2402 13.9473 12.1464 13.8536C12.0527 13.7598 12 13.6326 12 13.5V9.17313L4.52688 13.8469C4.37638 13.9414 4.20336 13.9939 4.02574 13.999C3.84811 14.0042 3.67235 13.9618 3.51663 13.8761C3.36091 13.7905 3.23091 13.6649 3.14007 13.5121C3.04924 13.3594 3.00088 13.1852 3 13.0075V2.9925C3.00088 2.81481 3.04924 2.64058 3.14007 2.48785C3.23091 2.33513 3.36091 2.20946 3.51663 2.12385C3.67235 2.03825 3.84811 1.99582 4.02574 2.00097C4.20336 2.00612 4.37638 2.05865 4.52688 2.15313L12 6.82688V2.5C12 2.36739 12.0527 2.24021 12.1464 2.14645C12.2402 2.05268 12.3674 2 12.5 2C12.6326 2 12.7598 2.05268 12.8536 2.14645C12.9473 2.24021 13 2.36739 13 2.5Z"
                                                fill="currentColor" />
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="track-replay text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <g>
                                            <path
                                                d="M15.3762 9.55705C15.6487 7.4768 15.0562 5.53405 13.909 4.0368C13.7607 3.8433 13.4937 3.78655 13.2827 3.90855L12.2672 4.49555C12.009 4.6448 11.9535 4.98655 12.141 5.2188C13.0152 6.30055 13.4742 7.7303 13.2757 9.26405C12.965 11.6633 11.0062 13.5823 8.60125 13.8473C5.397 14.2001 2.678 11.6906 2.678 8.5568C2.678 5.6228 5.064 3.23505 7.99975 3.23505V3.86855C7.99975 4.23805 8.3995 4.4688 8.7195 4.28405L11.6535 2.59005C11.9732 2.4053 11.9732 1.9438 11.6535 1.75905L8.71975 0.0650508C8.4 -0.119699 8 0.111051 8 0.480551V1.11455C3.89675 1.11455 0.557999 4.45305 0.557999 8.55655C0.557999 12.9438 4.37125 16.4553 8.85575 15.9518C12.2132 15.5753 14.9377 12.9066 15.3762 9.55705Z"
                                                fill="currentColor" />
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-5 mt-md-0 mt-3">
                            <div class="row align-items-center gx-xl-5 justify-content-md-end justify-content-center">
                                <div class="col-lg-2 d-lg-block d-none"></div>
                                <div class="col-lg-4 col-md-5 col-sm-4 col-4">
                                    <div class="track-volumne d-flex align-items-center justify-content-md-end justify-content-sm-start justify-content-center">
                                        <div class="flex-shrink-0 text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none">
                                                <g>
                                                    <path
                                                        d="M6.25 13.125H2.5C2.33424 13.125 2.17527 13.0592 2.05806 12.9419C1.94085 12.8247 1.875 12.6658 1.875 12.5V7.5C1.875 7.33424 1.94085 7.17527 2.05806 7.05806C2.17527 6.94085 2.33424 6.875 2.5 6.875H6.25L11.875 2.5V17.5L6.25 13.125Z"
                                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M15 8.125V11.875" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath>
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <input type="range" min="1" max="100" value="99" class="volume_slider"
                                            onchange="setVolume()">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-5 col-sm-4 col-5">
                                    <div class="track-time text-center">
                                        <span class="current-time text-white small">00:00</span>
                                        <span class="mx-1 text-white">
                                            <svg width="6" height="16" viewBox="0 0 4 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.73047 0.392578H3.62109L0.890625 9H0L2.73047 0.392578Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <span class="total-duration text-white small">00:00</span>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-4 col-3">
                                    <ul class="list-unstyled m-0 p-0 d-flex align-items-center justify-content-sm-end justify-content-center">
                                        <li>
                                            <svg class="" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none">
                                                <g>
                                                    <path d="M3.125 5H16.875" stroke="#AAAAAA" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M3.125 10H10.625" stroke="#AAAAAA" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M3.125 15H10.625" stroke="#AAAAAA" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M18.75 12.5L13.75 15.625V9.375L18.75 12.5Z" stroke="#AAAAAA"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath>
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </li>
                                        <li class="nav-item iq-full-screen d-none d-xl-block ms-3" id="fullscreen-item">
                                            <a href="#" class="nav-link" id="btnFullscreen" data-bs-toggle="dropdown">
                                                <span class="btn-inner">
                                                    <svg class="normal-screen icon-24" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18.5528 5.99656L13.8595 10.8961" stroke="#AAAAAA"
                                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                        </path>
                                                        <path d="M14.8016 5.97618L18.5524 5.99629L18.5176 9.96906"
                                                            stroke="#AAAAAA" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M5.8574 18.896L10.5507 13.9964" stroke="#AAAAAA"
                                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                        </path>
                                                        <path d="M9.60852 18.9164L5.85775 18.8963L5.89258 14.9235"
                                                            stroke="#AAAAAA" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                    <svg class="full-normal-screen icon-32 d-none" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.7542 10.1932L18.1867 5.79319" stroke="#AAAAAA"
                                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                        </path>
                                                        <path d="M17.2976 10.212L13.7547 10.1934L13.7871 6.62518"
                                                            stroke="#AAAAAA" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M10.4224 13.5726L5.82149 18.1398" stroke="#AAAAAA"
                                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                        </path>
                                                        <path d="M6.74391 13.5535L10.4209 13.5723L10.3867 17.2755"
                                                            stroke="#AAAAAA" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->        
        <!--Footer End-->

        <!--Burger Menu Start-->
        <div class="iq-float-menu">
            <input type="checkbox" href="#" name="menu-open" id="menu-open" class="iq-float-menu-open">
            <label for="menu-open" class="iq-float-menu-open-button">
                <span class="lines line-1"></span>
                <span class="lines line-2"></span>
                <span class="lines line-3"></span>
            </label>
            <span class="iq-float-menu-item bg-primary float-menu-rtl-mode" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Direction Mode">
                <span class="ltr-mode" data-setting="attribute">
                    <input type="radio" value="ltr" class="btn-check" name="theme_scheme_direction" data-prop="dir"
                        id="theme-scheme-direction-ltr">
                    <label class="m-o p-0" for="theme-scheme-direction-ltr">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 18H21M3 18L6 21M3 18L6 15M11 12V3H17M15 3V12M10.5 3C10.0404 3 9.58525 3.0776 9.16061 3.22836C8.73597 3.37913 8.35013 3.6001 8.02513 3.87868C7.70012 4.15726 7.44231 4.48797 7.26642 4.85195C7.09053 5.21593 7 5.60603 7 6C7 6.39397 7.09053 6.78407 7.26642 7.14805C7.44231 7.51203 7.70012 7.84274 8.02513 8.12132C8.35013 8.3999 8.73597 8.62087 9.16061 8.77164C9.58525 8.9224 10.0404 9 10.5 9L10.5 3Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </label>
                </span>
                <span class="rtl-mode" data-setting="attribute">
                    <input type="radio" value="rtl" class="btn-check" name="theme_scheme_direction" data-prop="dir"
                        id="theme-scheme-direction-rtl">
                    <label class="m-o p-0" for="theme-scheme-direction-rtl">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 18H21M3 18L6 21M3 18L6 15M11 12V3H17M15 3V12M10.5 3C10.0404 3 9.58525 3.0776 9.16061 3.22836C8.73597 3.37913 8.35013 3.6001 8.02513 3.87868C7.70012 4.15726 7.44231 4.48797 7.26642 4.85195C7.09053 5.21593 7 5.60603 7 6C7 6.39397 7.09053 6.78407 7.26642 7.14805C7.44231 7.51203 7.70012 7.84274 8.02513 8.12132C8.35013 8.3999 8.73597 8.62087 9.16061 8.77164C9.58525 8.9224 10.0404 9 10.5 9L10.5 3Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </label>
                </span>
            </span>
            <span class="iq-float-menu-item bg-info float-menu-color-mode" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Color Mode">
                <span class="light-mode" data-setting="radio">
                    <input type="radio" id="color-mode-light" class="btn-check" value="light" name="theme_scheme">
                    <label class="switch-icon-label light-icon" for="color-mode-light">
                        <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M15.6999 11.0021C15.6999 13.449 13.7161 15.4328 11.2691 15.4328C8.82218 15.4328 6.83838 13.449 6.83838 11.0021C6.83838 8.55509 8.82218 6.57129 11.2691 6.57129C13.7161 6.57129 15.6999 8.55509 15.6999 11.0021Z"
                                    stroke="currentColor" stroke-width="1.5" />
                                <path d="M11.2693 4.50365L11.2693 1.5498" stroke="currentColor" stroke-width="1.5" />
                                <path d="M11.2693 20.4543L11.2693 17.5005" stroke="currentColor" stroke-width="1.5" />
                                <path d="M17.7676 11.002L20.7214 11.002" stroke="currentColor" stroke-width="1.5" />
                                <path d="M1.81691 11.002L4.77075 11.002" stroke="currentColor" stroke-width="1.5" />
                                <path d="M15.8642 6.40654L17.9529 4.31787" stroke="currentColor" stroke-width="1.5" />
                                <path d="M4.58516 17.6858L6.67383 15.5972" stroke="currentColor" stroke-width="1.5" />
                                <path d="M15.8647 15.5969L17.9534 17.6855" stroke="currentColor" stroke-width="1.5" />
                                <path d="M4.58541 4.31807L6.67407 6.40674" stroke="currentColor" stroke-width="1.5" />
                            </g>
                            <defs>
                                <clipPath>
                                    <rect width="21.5385" height="20" fill="white" transform="translate(0.5 0.848145)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </label>
                </span>
                <div class="dark-mode" data-setting="radio">
                    <input type="radio" id="color-mode-dark" class="btn-check custom-inputs" value="dark" name="theme_scheme"
                        checked>
                    <label class="switch-icon-label dark-icon" for="color-mode-dark">
                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.67947 0.610121C7.54098 0.798414 7.51561 1.04704 7.6132 1.25943C8.04109 2.19062 8.25182 3.11105 8.25182 4.13855C8.25182 7.36765 5.53103 10.128 2.03754 10.128C1.66261 10.128 1.27334 10.0371 0.793957 9.92119C0.55797 9.86413 0.309965 9.94489 0.152823 10.13C-0.00431902 10.315 -0.0437864 10.5729 0.0507908 10.7965C1.20467 13.5246 4.00668 15.3481 7.26756 15.3481C11.5607 15.3481 15 11.9261 15 7.84815C15 4.02506 12.0717 0.842474 8.27956 0.353436C8.04774 0.32354 7.81796 0.421827 7.67947 0.610121ZM9.21399 1.86727C11.8368 2.67847 13.7143 5.07555 13.7143 7.84815C13.7143 11.1894 10.8775 14.0624 7.26756 14.0624C4.97916 14.0624 3.00922 13.015 1.85983 11.4093C1.91884 11.4122 1.97811 11.4137 2.03754 11.4137C6.21474 11.4137 9.53753 8.10382 9.53753 4.13855C9.53753 3.34115 9.42909 2.594 9.21399 1.86727Z"
                                fill="currentColor" />
                        </svg>
                    </label>
                </div>
            </span>
            <span class="iq-float-menu-item bg-dark float-menu-coming-soon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Coming Soon">
                <span class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-palette"
                        viewBox="0 0 16 16">
                        <path
                            d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm4 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM5.5 7a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                        <path
                            d="M16 8c0 3.15-1.866 2.585-3.567 2.07C11.42 9.763 10.465 9.473 10 10c-.603.683-.475 1.819-.351 2.92C9.826 14.495 9.996 16 8 16a8 8 0 1 1 8-8zm-8 7c.611 0 .654-.171.655-.176.078-.146.124-.464.07-1.119-.014-.168-.037-.37-.061-.591-.052-.464-.112-1.005-.118-1.462-.01-.707.083-1.61.704-2.314.369-.417.845-.578 1.272-.618.404-.038.812.026 1.16.104.343.077.702.186 1.025.284l.028.008c.346.105.658.199.953.266.653.148.904.083.991.024C14.717 9.38 15 9.161 15 8a7 7 0 1 0-7 7z" />
                    </svg>
                </span>
            </span>
        </div>        
        <!--Burger Menu End-->

        <!-- Wrapper End-->
  
        <!-- Library Bundle Script -->
        <script src="https://templates.iqonic.design/muzik/html/assets/js/core/libs.min.js"></script>
        <!-- Plugin Scripts -->
        <!-- Tour plugin Start -->
        <script src="https://templates.iqonic.design/muzik/html/assets/vendor/sheperd/dist/js/sheperd.min.js"></script>
        <script src="https://templates.iqonic.design/muzik/html/assets/js/plugins/tour.js" defer></script>
        <!-- Slider-tab Script -->
        <script src="https://templates.iqonic.design/muzik/html/assets/js/plugins/slider-tabs.js"></script>
        <!-- SwiperSlider Script -->
        <script src="https://templates.iqonic.design/muzik/html/assets/vendor/swiperSlider/swiper-bundle.min.js"></script>
        <script src="https://templates.iqonic.design/muzik/html/assets/js/plugins/swiper-slider.js" defer></script>
        <!-- Lodash Utility -->
        <script src="https://templates.iqonic.design/muzik/html/assets/vendor/lodash/lodash.min.js"></script>
        <!-- Utilities Functions -->
        <script src="https://templates.iqonic.design/muzik/html/assets/js/iqonic-script/utility.min.js"></script>
        <!-- Settings Script -->
        <script src="https://templates.iqonic.design/muzik/html/assets/js/iqonic-script/setting.min.js"></script>
        <!-- Settings Init Script -->
        <script src="https://templates.iqonic.design/muzik/html/assets/js/setting-init.js"></script>
        <!-- External Library Bundle Script -->
        <script src="https://templates.iqonic.design/muzik/html/assets/js/core/external.min.js"></script>
        <!-- Widgetchart Script -->
        <script src="https://templates.iqonic.design/muzik/html/assets/js/charts/widgetcharts.js?v=1.0.1" defer></script>
        <!-- Dashboard Script -->
        <script src="https://templates.iqonic.design/muzik/html/assets/js/charts/dashboard.js?v=1.0.1" defer></script>
        <!-- Music Player -->
        <script src="https://templates.iqonic.design/muzik/html/assets/js/music-player.js?v=1.0.1" defer></script>
        <!-- qompacui Script -->
        <script src="https://templates.iqonic.design/muzik/html/assets/js/muzik.js?v=1.0.1" defer></script>
        <script src="https://templates.iqonic.design/muzik/html/assets/js/sidebar.js?v=1.0.1" defer></script>
        @livewireScripts
    </body>
</html>
