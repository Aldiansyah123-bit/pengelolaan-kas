    <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title1')</title>

     <!-- Fonts -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

     <!-- Custom fonts for this template -->
     <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
     <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="mx-3 sidebar-brand-text">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="my-0 sidebar-divider">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{request()->is('dashboard')? 'active': ''}}">
                <a class="nav-link" href="/dashboard" >
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>DASHBOARD</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>
            <!-- Nav Item - Tables -->
            <li class="nav-item {{request()->is('masuk')? 'active': ''}}">
                <a class="nav-link" href="/masuk">
                    <i class="fas fa-fw fa-table"></i>
                    <span>PEMASUKAN</span></a>
            </li>

            <li class="nav-item {{request()->is('keluar')? 'active': ''}}">
                <a class="nav-link" href="/keluar">
                    <i class="fas fa-fw fa-table"></i>
                    <span>PENGELUARAN</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="border-0 rounded-circle" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="mb-4 bg-white shadow navbar navbar-expand navbar-light topbar static-top">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="mr-3 btn btn-link d-md-none rounded-circle">
                        <i class="fa fa-bars"></i>
                    </button>
                    <h1><b>Sistem Informasi Pengelolaan Kas</b></h1>
                    <!-- Topbar Navbar -->
                    <ul class="ml-auto navbar-nav">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="p-3 shadow dropdown-menu dropdown-menu-right animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="mr-auto form-inline w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="border-0 form-control bg-light small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 text-gray-600 d-none d-lg-inline small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ Auth::user()->profile_photo_url }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="shadow dropdown-menu dropdown-menu-right animated--grow-in"
                                aria-labelledby="userDropdown">

                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Account') }}
                                    </div>

                                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </x-jet-dropdown-link>

                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                            {{ __('API Tokens') }}
                                        </x-jet-dropdown-link>
                                    @endif

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-jet-dropdown-link>
                                    </form>


                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    @yield('content')

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="my-auto text-center copyright">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="rounded scroll-to-top" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('template') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('template') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('template') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('template') }}/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('template') }}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('template') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('template') }}/js/demo/datatables-demo.js"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('template') }}/vendor/chart.js/Chart.min.js"></script>


    <script src="{{ asset('template') }}/js/demo/chart-bar-demo.js"></script>

    <script>
        window.setTimeout(function(){
          $(".alert").fadeTo(500,0).slideUp(500,function(){
            $(this).remove();
          });
        },3000)
    </script>
@livewireScripts
</body>

</html>
