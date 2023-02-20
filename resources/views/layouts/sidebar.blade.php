<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                <div class="nav accordion" id="accordionSidenav">
                    <!-- Sidenav Menu Heading (Account)-->
                    <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                    <div class="sidenav-menu-heading d-sm-none">Account</div>
                    <!-- Sidenav Link (Alerts)-->
                    <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                    <a class="nav-link d-sm-none" href="#!">
                        <div class="nav-link-icon"><i data-feather="bell"></i></div>
                        Alerts
                        <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
                    </a>
                    <!-- Sidenav Link (Messages)-->
                    <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                    <a class="nav-link d-sm-none" href="#!">
                        <div class="nav-link-icon"><i data-feather="mail"></i></div>
                        Messages
                        <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
                    </a>
                    <!-- Sidenav Menu Heading (Core)-->
                    <div class="sidenav-menu-heading">Main</div>

                    <a class="nav-link {{(request()->is('home'))? 'active':''}}" href='{{url("home")}}'>
                        <div class="nav-link-icon"><i data-feather="home"></i></div>
                        Dashboard
                    </a>


                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#barang" aria-expanded="false" aria-controls="barang">
                        <div class="nav-link-icon"><i data-feather="align-justify"></i></div>
                        Master Data
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div @if ( request()->is('jenis') || request()->is('pangkat') || request()->is('jabatan') )
                        class=""
                        @else
                        class="collapse"
                        @endif

                        class="collapse" id="barang" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav">
                            <a class="nav-link " href=''>Jenis Pegawai</a>
                        </nav>
                    </div>

                    {{-- manajemen user  --}}
                    @if(Auth::user()->role == "admin")
                    <a class="nav-link {{(request()->is('user-manajemen'))? 'active':''}}" href="{{ route('user-manajemen') }}">
                        <div class="nav-link-icon"><i data-feather="user-plus"></i></div>
                        Manajemen User
                    </a>
                    @endif



                    <!-- <div class="sidenav-menu-heading">Master</div>
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
                        <div class="nav-link-icon"><i data-feather="database"></i></div>
                        Data Master
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseFlows" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav">
                            <a class="nav-link" href="multi-tenant-select.html">Kategori</a>
                            <a class="nav-link" href="wizard.html">Kostan</a>
                            <a class="nav-link" href="wizard.html">Konsumen</a>
                            <a class="nav-link" href="wizard.html">Satuan</a>
                        </nav>
                    </div> -->
                    <!-- <a class="nav-link" href="tables.html">
                        <div class="nav-link-icon"><i data-feather="archive"></i></div>
                        Order
                    </a>
                     -->


                </div>


            </div>
            <!-- Sidenav Footer-->
            <div class="sidenav-footer">
                <div class="sidenav-footer-content">
                    <div class="sidenav-footer-subtitle">Logged in as:</div>
                    <div class="sidenav-footer-title">{{auth::user()->role}}</div>
                </div>
            </div>
        </nav>
    </div>