<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Qoduby - Admin & Dashboard template by tempload.">
    <meta name="keywords"
        content="qoduby, tempload, bootstrap, bootstrap 5, admin, template, dashboard, theme, admin themes, admin, templates">
    <meta name="author" content="tempload">
    <title>Gestion voiture</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/auth/media/logo/favicon.png') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../../../css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Global CSS -->
    <link href="{{ asset('assets/auth/css/style.css') }}" rel="stylesheet" type="text/css">

    <!-- Light-Dark Mode & Theme Direction Selector -->
    <script src="{{ asset('assets/auth/js/theme.js') }}" crossorigin="anonymous"></script>
</head>

<body>
    @yield('avant-contenu')
    <div class="app-root d-flex flex-column">
        <!-- ***** Sidebar Start ***** -->
        <div class="app-sidebar">
            <!-- ***** Logo Start ***** -->
            <div class="sidebar-logo d-flex justify-content-center">
                <a href="index.html">
                    <img src="{{ asset('assets/auth/media/logo/logo-default.svg') }}" height="30" alt="Qoduby">
                </a>
            </div>
            <!-- ***** Logo End ***** -->

            <!-- ***** Sidebar Menu Start ***** -->
            <div class="sidebar-menu custom-scroll pt-4">
                <!-- ***** Dashboards Menu Start ***** -->
                <ul class="menu-group m-0 px-4 mb-4">
                    <li class="sub-menu active">
                        <a href="{{ route('admin') }}" class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <i data-feather="home" stroke-width="1.5" height="20" class="me2"></i>
                                <span>Dashboards</span>
                            </div>
                            <!-- <i class="arrow" data-feather="chevron-right" height="14"></i> -->
                        </a>
                    </li>
                </ul>
                <!-- ***** Dashboards Menu End ***** -->


                <ul class="menu-group m-0 px-4 mb-4">
                    <li class="single-menu">
                        <a href="{{ route('admin.voitures.liste') }}"
                            class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <i data-feather="alert-circle" stroke-width="1.5" height="18" class="me2"></i>
                                <span>Liste De Voiture</span>
                            </div>
                        </a>
                    </li>

                    <li class="single-menu">
                        <a href="{{ route('admin.voitures.details', ['id' => 1]) }}"
                            class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <i data-feather="alert-circle" stroke-width="1.5" height="18" class="me2"></i>
                                <span>Detail Voiture</span>
                            </div>
                        </a>
                    </li>


                    <li class="single-menu">
                        <a href="projects-car-rental-reservations.html"
                            class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <i data-feather="alert-circle" stroke-width="1.5" height="18" class="me2"></i>
                                <span>Reservations</span>
                            </div>
                        </a>
                    </li>

                    <li class="single-menu">
                        <a href="{{ route('admin.marques.liste')}}" class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <i data-feather="alert-circle" stroke-width="1.5" height="18" class="me2"></i>
                                <span>Marques</span>
                            </div>
                        </a>
                    </li>

                </ul>

                <!-- ***** Pages Menu End ***** -->
            </div>
            <!-- ***** Sidebar Menu End ***** -->

            <!-- ***** Sidebar Footer Start ***** -->
            <div class="sidebar-footer d-flex align-items-center justify-content-center">
                <a href="../../../../documentation/index.html" class="sidebar-footer-button">Parametre</a>
            </div>
            <!-- ***** Sidebar Footer End ***** -->
        </div>
        <!-- ***** Sidebar End ***** -->

        <!-- ***** Responsive Menu Backdrop Start ***** -->
        <div class="menu-backdrop"></div>
        <!-- ***** Responsive Menu Backdrop End ***** -->

        <!-- ***** Main Start ***** -->
        <main class="app-main">
            <!-- ***** Header Start ***** -->
            <header class="main-header d-flex justify-content-between">
                <!-- ***** Sidebar Menu Open Button Start ***** -->
                <a href="javascript:;" class="sidebar-menu-trigger"><span>Menu</span></a>
                <!-- ***** Sidebar Menu Open Button End ***** -->

                <!-- ***** Navbar Start ***** -->
                <nav class="top-nav">
                    <ul class="menu-group">
                        <!-- ***** Dashboards Menu Start ***** -->
                        <li class="sub-menu open-mega-menu">
                            <a class="menu-link" href="javascript:;">
                                Dashboards
                                <i class="arrow" data-feather="chevron-down" width="14"></i>
                            </a>
                            <div class="mega-menu-wrapper">
                                <div class="mega-menu">
                                    <div class="container-fluid">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-lg-7 mb-sm-1">
                                                <div class="cover">
                                                    <img src="{{ asset('assets/auth/media/menu/1.jpg') }}"
                                                        class="img-fluid w-100" alt="">
                                                    <div
                                                        class="text p-3 d-flex align-items-center justify-content-center">
                                                        <div class="text-center">
                                                            <h6 class="text-white mb-1">Want to see an overview?</h6>
                                                            <p class="text-white mb-4">See all the pages at once.</p>
                                                            <a href="#" class="btn btn-success">View All
                                                                Pages</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="menu-content ps6 sm-p-0">
                                                    <strong class="text-heading d-block mb-2">DASHBOARDS</strong>
                                                    <ul class="mega-sub-menu">
                                                        <li><a class="hover-primary" href="index.html">Default</a>
                                                        </li>

                                                        <li><a class="hover-primary"
                                                                href="dashboards-car-rental.html">Car Rental</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- ***** Dashboards Menu End ***** -->

                    </ul>
                </nav>
                <!-- ***** Navbar End ***** -->

                <div class="header-tools d-flex align-items-center">
                    <!-- ***** Search Dropdown Start ***** -->
                    <div class="dropdown me3">
                        <!-- ***** Icon Start ***** -->
                        <a href="javascript:;"
                            class="dropdown-toggle header-dropdown bg-secondary-subtle rounded d-flex align-items-center justify-content-center overflow-auto outline-none"
                            data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                            <i data-feather="search" stroke-width="2" height="22" class="text-secondary"></i>
                        </a>
                        <!-- ***** Icon End ***** -->

                        <!-- ***** Dropdown Content Start ***** -->
                        <div class="dropdown-menu width-350 p0">
                            <!-- ***** Content Start ***** -->
                            <div class="p3">
                                <div class="w-100 position-relative d-flex align-items-center">
                                    <i data-feather="search" stroke-width="2" height="22"
                                        class="text-body-tertiary position-absolute"></i>
                                    <input type="text"
                                        class="form-control border-0 outline-none input-reset ps6 bg-transparent"
                                        placeholder="Search...">
                                </div>
                            </div>
                            <hr class="opacity-20 m0">


                            <!-- ***** Content End ***** -->
                        </div>
                        <!-- ***** Dropdown Content Start ***** -->
                    </div>
                    <!-- ***** Search Dropdown End ***** -->

                    <!-- ***** Chat Start ***** -->
                    <div class="dropdown me3">
                        <!-- ***** Icon Start ***** -->
                        <a href="javascript:;"
                            class="header-dropdown bg-secondary-subtle rounded d-flex align-items-center justify-content-center position-relative overflow-auto outline-none"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"
                            data-disablescrolling="false">
                            <i data-feather="message-square" stroke-width="2" height="22" class="text-secondary"></i>
                            <span
                                class="badge rounded-pill text-bg-danger position-absolute scale-70 top-0 end-0">3</span>
                        </a>
                        <!-- ***** Icon End ***** -->

                        <!-- ***** Chat Content Start ***** -->
                        <div class="offcanvas offcanvas-end offcanvas-chat" tabindex="-1" id="offcanvasRight"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header p6">
                                <div class="d-flex">
                                    <div class="d-flex align-items-center">
                                        <div class="position-relative">
                                            <div class="img-fix rounded-circle me3 height-40 width-40">
                                                <img src="{{ asset('assets/auth/media/avatars/12.jpg') }}" alt="">
                                            </div>
                                            <span
                                                class="badge rounded-pill text-bg-success position-absolute scale-70 bottom-0 end-0">&nbsp;</span>
                                        </div>
                                        <h6 class="mb0">Justin Case</h6>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="dropdown">
                                        <button type="button"
                                            class="border-0 bg-transparent p0 outline-none me2 dropdown-toggle arrow-none"
                                            data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i data-feather="more-horizontal" stroke-width="2" height="22"
                                                class="text-body"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i data-feather="archive" stroke-width="1.5" height="14"
                                                        class="text-body me1"></i>
                                                    Archive
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i data-feather="mic-off" stroke-width="1.5" height="16"
                                                        class="text-body me1"></i>
                                                    Muted
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">
                                                    <div class="d-flex align-items-center">
                                                        <i data-feather="trash-2" stroke-width="1.5" height="16"
                                                            class="text-body me1"></i>
                                                        Delete
                                                    </div>
                                                    <i data-feather="info" stroke-width="2" height="12"
                                                        class="text-body me1" data-bs-toggle="tooltip"
                                                        data-bs-placement="left" data-bs-custom-class="qd-tooltip"
                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <button type="button" class="border-0 bg-transparent p0 outline-none"
                                        data-bs-dismiss="offcanvas" aria-label="Close">
                                        <i data-feather="x" stroke-width="2" height="22" class="text-body"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="offcanvas-body p0 overflow-hidden">
                                <div class="p6 pt3 pb3 chat-scroll ss-container" style="height: 100%;">
                                    <div class="d-flex flex-column align-items-start mb6">
                                        <div class="d-flex align-items-center mb3">
                                            <div class="img-fix rounded-circle me3 height-30 width-30 me3">
                                                <img src="{{ asset('asseets/auth/media/avatars/12.jpg') }}" alt="">
                                            </div>
                                            <span class="text-heading me3">Justin Case</span>
                                            <span>48 min.</span>
                                        </div>
                                        <div class="p4 bg-info-subtle rounded">
                                            <span class="text-heading">Hi, can you send me the files of the new project
                                                by email?</span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column align-items-end mb6">
                                        <div class="d-flex align-items-center mb3">
                                            <span>46 min.</span>
                                            <span class="text-heading ms3">You</span>
                                            <div class="img-fix rounded-circle me3 height-30 width-30 ms3">
                                                <img src="{{ asset('assets/auth/media/avatars/6.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="p4 bg-light rounded">
                                            <span class="text-heading">I don't have all the files. I can only send
                                                documents.</span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column align-items-start mb6">
                                        <div class="d-flex align-items-center mb3">
                                            <div class="img-fix rounded-circle me3 height-30 width-30 me3">
                                                <img src="{{ asset('assets/auth/media/avatars/12.jpg') }}" alt="">
                                            </div>
                                            <span class="text-heading me3">Justin Case</span>
                                            <span>43 min.</span>
                                        </div>
                                        <div class="p4 bg-info-subtle rounded">
                                            <span class="text-heading">Okey send.</span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column align-items-end mb6">
                                        <div class="d-flex align-items-center mb3">
                                            <span>40 min.</span>
                                            <span class="text-heading ms3">You</span>
                                            <div class="img-fix rounded-circle me3 height-30 width-30 ms3">
                                                <img src="{{ asset('assets/auth/media/avatars/6.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="p4 mb1 bg-light rounded">
                                            <a href="#"
                                                class="text-heading d-flex align-items-center text-decoration-none">
                                                <i data-feather="file" stroke-width="1.5" height="22"
                                                    class="text-heading me2"></i>
                                                New Project.docx
                                            </a>
                                        </div>
                                        <div class="p4 bg-light rounded">
                                            <span class="text-heading">This file contains all the information.</span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column align-items-start">
                                        <div class="d-flex align-items-center mb3">
                                            <div class="img-fix rounded-circle me3 height-30 width-30 me3">
                                                <img src="{{ asset('assets/auth/media/avatars/12.jpg') }}" alt="">
                                            </div>
                                            <span class="text-heading me3">Justin Case</span>
                                            <span>38 min.</span>
                                        </div>
                                        <div class="p4 bg-info-subtle rounded">
                                            <span class="text-heading">Thank you very much. I owe you lunch 😁</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p6 bg-light">
                                <div
                                    class="bg-chat border p1 rounded d-flex align-items-center justify-content-between">
                                    <div>
                                        <a href="#"
                                            class="bg-light width-40 height-40 rounded d-flex align-items-center justify-content-center">
                                            <i data-feather="paperclip" stroke-width="1.5" height="18"
                                                class="text-body"></i>
                                        </a>
                                    </div>
                                    <div class="w-100">
                                        <input type="text"
                                            class="form-control border-0 outline-none input-reset bg-transparent"
                                            placeholder="Type your message here">
                                    </div>
                                    <div>
                                        <a href="#"
                                            class="width-40 height-40 d-flex align-items-center justify-content-center">
                                            <i data-feather="send" stroke-width="1.5" height="22" class="text-body"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ***** Chat Content Start ***** -->
                    </div>
                    <!-- ***** Chat End ***** -->



                    <!-- ***** Notification Dropdown Start ***** -->
                    <div class="dropdown me3">
                        <!-- ***** Icon Start ***** -->
                        <a href="javascript:;"
                            class="dropdown-toggle header-dropdown bg-secondary-subtle rounded d-flex align-items-center justify-content-center position-relative overflow-auto outline-none"
                            data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                            <i data-feather="bell" stroke-width="2" height="22" class="text-secondary"></i>
                            <span
                                class="badge rounded-pill text-bg-info position-absolute scale-70 top-0 end-0">2</span>
                        </a>
                        <!-- ***** Icon End ***** -->

                        <!-- ***** Dropdown Content Start ***** -->
                        <div class="dropdown-menu width-350 p0">
                            <!-- ***** Content Start ***** -->
                            <div class="d-flex justify-content-between align-items-center p5">
                                <h6 class="mb0">Notifications</h6>
                                <span class="badge rounded-pill badge-soft text-bg-primary">4 New</span>
                            </div>
                            <hr class="opacity-20 m0">
                            <div class="p5">
                                <a href="#" class="d-flex justify-content-start text-decoration-none">
                                    <div class="img-fix width-40 height-40 rounded-circle me3">
                                        <img src="{{ asset('assets/auth/media/avatars/1.jpg') }}" alt="">
                                    </div>
                                    <div class="d-flex flex-column align-items-start">
                                        <strong class="text-heading me1">Congratulations Barry! 🥳</strong>
                                        <span class="mb1 text-body">You've been the top seller this month.</span>
                                        <span class="badge rounded-pill badge-soft text-bg-info">16 minutes ago</span>
                                    </div>
                                </a>
                                <hr class="opacity-20 border-dashed">
                                <a href="#" class="d-flex justify-content-start text-decoration-none">
                                    <div class="me3">
                                        <div
                                            class="rounded-circle bg-primary-subtle width-40 height-40 d-flex align-items-center justify-content-center">
                                            <i data-feather="dollar-sign" stroke-width="1.5" height="22"
                                                class="text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-start">
                                        <strong class="text-heading me1">Qoduby has been sold 🤑</strong>
                                        <span class="mb1 text-body">You earned $40 from this sale.</span>
                                        <span class="badge rounded-pill badge-soft text-bg-primary">22 minutes
                                            ago</span>
                                    </div>
                                </a>
                                <hr class="opacity-20 border-dashed">
                                <a href="#" class="d-flex justify-content-start text-decoration-none">
                                    <div class="me3">
                                        <div
                                            class="rounded-circle bg-success-subtle width-40 height-40 d-flex align-items-center justify-content-center">
                                            <i data-feather="bar-chart-2" stroke-width="1.5" height="22"
                                                class="text-success"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-start">
                                        <strong class="text-heading me1">Monthly Report 👨‍💻</strong>
                                        <span class="mb1 text-body">The monthly report was uploaded.</span>
                                        <span class="badge rounded-pill badge-soft text-bg-success">27 minutes
                                            ago</span>
                                    </div>
                                </a>
                                <hr class="opacity-20 border-dashed">
                                <a href="#" class="d-flex justify-content-start text-decoration-none">
                                    <div class="img-fix width-40 height-40 rounded-circle me3">
                                        <img class="rounded-circle" src="assets/media/avatars/8.jpg" alt="">
                                    </div>
                                    <div class="d-flex flex-column align-items-start">
                                        <strong class="text-heading me1">New message received 👋🏻</strong>
                                        <span class="mb1 text-body">You have 7 unread messages.</span>
                                        <span class="badge rounded-pill badge-soft text-bg-info">48 minutes ago</span>
                                    </div>
                                </a>
                                <hr class="opacity-20 border-dashed">
                                <a class="btn btn-primary btn-soft btn-sm d-block" href="#" role="button">Read
                                    All Notifications</a>
                            </div>
                            <!-- ***** Content End ***** -->
                        </div>
                        <!-- ***** Dropdown Content Start ***** -->
                    </div>
                    <!-- ***** Notification Dropdown End ***** -->

                    <!-- ***** Profile Dropdown Start ***** -->
                    <div class="dropdown">
                        <!-- ***** Profile Image Start ***** -->
                        <a href="javascript:;" class="dropdown-toggle header-dropdown outline-none"
                            data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="img-fix width-40 height-40 rounded">
                                <img src="{{ asset('assets/auth/media/avatars/6.jpg') }}" alt="">
                            </div>
                        </a>
                        <!-- ***** Profile Image End ***** -->

                        <!-- ***** Dropdown Content Start ***** -->
                        <div class="dropdown-menu width-250 p0">
                            <!-- ***** Content Info Start ***** -->
                            <div class="d-flex justify-content-start mb3 p5 pb0">
                                <div class="img-fix width-40 height-40 me3 rounded">
                                    <img src="{{ asset('assets/auth/media/avatars/6.jpg') }}" alt="">
                                </div>
                                <div class="d-flex flex-column text-start">
                                    <div class="d-flex flex-row align-items-center">
                                        <strong class="text-heading me1">Dominique</strong>
                                        <span class="badge badge-soft rounded-pill text-bg-success">Pro</span>
                                    </div>
                                    <small>SuperTronics</small>
                                </div>
                            </div>
                            <!-- ***** Content Info End ***** -->

                            <!-- ***** Balance Start ***** -->
                            <div class="p5 pt0">

                            </div>
                            <hr class="opacity-20 mt0">
                            <!-- ***** Balance End ***** -->

                            <!-- ***** Menu Start ***** -->
                            <div class="p5 pt0 pb0">
                                <ul class="nav flex-column text-start p0">
                                    <li class="nav-item">
                                        <a class="nav-link text-heading hover-primary ps0"
                                            href="pages-account-user-overview.html">My Profile</a>
                                    </li>

                                </ul>
                            </div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
													this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                            <hr class="opacity-20">
                            <!-- ***** Menu End ***** -->
                        </div>
                        <!-- ***** Dropdown Content Start ***** -->
                    </div>
                    <!-- ***** Profile Dropdown End ***** -->

                    <!-- ***** Header Menu Open Button Start ***** -->
                    <a class="header-menu-trigger ms3"><span>Menu</span></a>
                    <!-- ***** Header Menu Open Button End ***** -->
                </div>
            </header>
            <!-- ***** Header End ***** -->

            <!-- ***** Content Start ***** -->
            @yield('contenu')
            <!-- ***** Content End ***** -->

            <!-- ***** Footer Start ***** -->
            <footer class="p6 pt5 pb5">
                <div class="container-fluid p0">
                    <div class="row">
                        <div class="col-sm-6 text-center text-lg-start mb-sm-1">
                            <span>2023©</span>
                            <span class="text-heading">SuperTronics</span>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-inline m0 text-center text-lg-end">
                                <li class="list-inline-item"><a href="#"
                                        class="text-body text-decoration-none hover-primary">Support</a></li>
                                <li class="list-inline-item"><a href="#"
                                        class="text-body text-decoration-none hover-primary">License</a></li>
                                <li class="list-inline-item"><a href="#"
                                        class="text-body text-decoration-none hover-primary">Documentation</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- ***** End Start ***** -->
        </main>
        <!-- ***** Main End ***** -->
    </div>

    <!-- Plugin Bundle -->
    <script src="{{ asset('assets/auth/js/plugins.bundle.js') }}" crossorigin="anonymous"></script>
    <!-- Common Javascript -->
    <script src="{{ asset('assets/auth/js/app.js') }}" crossorigin="anonymous"></script>
    <!-- Page Specific Javascript -->
    <script src="{{ asset('assets/auth/js/pages/dashboards/dashboard-01.js') }}" crossorigin="anonymous"></script>
</body>

</html>