<!DOCTYPE html>
<html lang="en" class="layout-navbar-fixed layout-menu-fixed " dir="ltr" data-skin="default" data-bs-theme="light"
      data-assets-path="{{asset('theme/assets/')}}" data-template="vertical-menu-template-semi-dark">

<head>
    <meta charset="utf-8" />
    <title>Agenda Online</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('theme/assets/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('theme/assets/vendor/fonts/iconify-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendor/fonts/fontawesome.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('theme//assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('theme/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('theme/assets/vendor/libs/node-waves/node-waves.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <!-- Helpers -->
    <script src="{{asset('theme/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('theme/assets/js/config.js')}}"></script>

</head>

<body>

<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu" data-bs-theme="dark" >
            <div class="app-brand demo">
                <a href="/" class="app-brand-link">
                    <span class="app-brand-text menu-text fw-bold ms-3" style="font-size: 20px">Agenda Online</span>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                    <i class="icon-base ti menu-toggle-icon d-none d-xl-block"></i>
                    <i class="icon-base ti tabler-x d-block d-xl-none"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Page -->
                <li class="menu-item active">
                    <a href="/dashboard" class="menu-link">
                        <i class="menu-icon icon-base ti tabler-smart-home"></i>
                        <div data-i18n="Page 1">Dashboard</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/customers" class="menu-link">
                        <i class="menu-icon icon-base ti tabler-users"></i>
                        <div data-i18n="Page 2">Clientes</div>
                    </a>
                </li>
            </ul>
        </aside>

        <div class="menu-mobile-toggler d-xl-none rounded-1">
            <a href="javascript:void(0);"
               class="layout-menu-toggle menu-link text-large text-bg-secondary p-2 rounded-1">
                <i class="ti tabler-menu icon-base"></i>
                <i class="ti tabler-chevron-right icon-base"></i>
            </a>
        </div>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav
                class="layout-navbar container-fluid navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme"
                id="layout-navbar">
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                        <i class="icon-base ti tabler-menu-2 icon-md"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item dropdown me-2 me-xl-0">
                            <a
                                class="nav-link dropdown-toggle hide-arrow"
                                id="nav-theme"
                                href="javascript:void(0);"
                                data-bs-toggle="dropdown">
                                <i class="icon-base ti tabler-sun icon-md theme-icon-active"></i>
                                <span class="d-none ms-2" id="nav-theme-text">Toggle theme</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="nav-theme-text">
                                <li>
                                    <button
                                        type="button"
                                        class="dropdown-item align-items-center active"
                                        data-bs-theme-value="light"
                                        aria-pressed="false">
                                        <span><i class="icon-base ti tabler-sun icon-md me-3" data-icon="sun"></i>Light</span>
                                    </button>
                                </li>
                                <li>
                                    <button
                                        type="button"
                                        class="dropdown-item align-items-center"
                                        data-bs-theme-value="dark"
                                        aria-pressed="true">
                        <span
                        ><i class="icon-base ti tabler-moon-stars icon-md me-3" data-icon="moon-stars"></i>Dark</span
                        >
                                    </button>
                                </li>
                                <li>
                                    <button
                                        type="button"
                                        class="dropdown-item align-items-center"
                                        data-bs-theme-value="system"
                                        aria-pressed="false">
                        <span
                        ><i
                                class="icon-base ti tabler-device-desktop-analytics icon-md me-3"
                                data-icon="device-desktop-analytics"></i
                            >System</span
                        >
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <ul class="navbar-nav flex-row align-items-center ms-md-auto">
                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a
                                class="nav-link dropdown-toggle hide-arrow p-0"
                                href="javascript:void(0);"
                                data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="{{asset('theme/assets/img/avatars/1.png')}}" alt class="rounded-circle" />
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="{{asset('theme/assets/img/avatars/1.png')}}" alt
                                                         class="w-px-40 h-auto rounded-circle" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-0">John Doe</h6>
                                                <small class="text-body-secondary">Admin</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider my-1 mx-n2"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="icon-base ti tabler-user icon-md me-3"></i><span>My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="icon-base ti tabler-settings icon-md me-3"></i><span>Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 icon-base ti tabler-credit-card icon-md me-3"></i
                          ><span class="flex-grow-1 align-middle">Billing Plan</span>
                          <span class="flex-shrink-0 badge rounded-pill bg-danger">4</span>
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider my-1 mx-n2"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <i class="icon-base ti tabler-power icon-md me-3"></i><span>Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ User -->
                    </ul>
                </div>
            </nav>
            <div class="content-wrapper">
                @yield('content')
            </div>
            <footer class="content-footer footer bg-footer-theme">
                <div class="container-xxl">
                    <div
                        class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                        <div class="text-body">
                            Desenvolvido por: Agenda Online
                        </div>
                    </div>
                </div>
            </footer>
            <div class="content-backdrop fade"></div>
        </div>
    </div>

    <div class="layout-overlay layout-menu-toggle"></div>

    <div class="drag-target"></div>
</div>

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{asset('theme/assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('theme/assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('theme/assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('theme/assets/vendor/libs/node-waves/node-waves.js')}}"></script>
<script src="{{asset('theme/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('theme/assets/vendor/libs/hammer/hammer.js')}}"></script>
<script src="{{asset('theme/assets/vendor/js/menu.js')}}"></script>
<!-- endbuild -->

<!-- Main JS -->
<script src="{{asset('theme/assets/js/main.js')}}"></script>
</body>

</html>
