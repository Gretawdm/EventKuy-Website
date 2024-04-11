<aside id="sidebar" class="sidebar">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <img src="{{ asset('frontend/assets/img/MyEventLogoFooter.png') }}" alt="" width="50px;">
            <div class="sidebar-brand-text mx-3">Eventkuy</div>
        </a>

        <div class="sidebar-heading">
            Menu
        </div>

        <!-- Nav Item - Admin -->
        @if (Auth::user()->jabatan == 'admin')
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Verifikasi Event</span>
                </a>
            </li>
        @else
            <!-- Nav Item - User -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Event</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tenant</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Profile</span></a>
            </li>
        @endif

        <!-- Garis -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>

</aside><!-- End Sidebar-->
