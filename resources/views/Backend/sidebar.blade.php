<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <img src="{{ asset('frontend/assets/img/logo-eventkuynew.png') }}" alt="" width="50px;">
        <div class="sidebar-brand-text mx-3" style="color: #512e67;">Eventkuy</div>
    </a>

    <div class="sidebar-heading" style="color: #512e67;">
        Menu
    </div>

    <!-- Nav Item - Admin -->
    @if (Auth::user()->jabatan == 'admin')
        <li class="nav-item active">
            <a class="nav-link" href="/verifikasi_event">
                <i class="fas fa-fw fa-tachometer-alt" style="color: #512e67;"></i>
                <span>Verifikasi Event</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/verifikasi_akun">
                <i class="fas fa-fw fa-tachometer-alt" style="color: #512e67;"></i>
                <span>Verifikasi Akun</span>
            </a>
        </li>
    @else
        <!-- Nav Item - User -->
        <li class="nav-item active">
            <a class="nav-link" href="/event">
                <i class="fas fa-fw fa-tachometer-alt" style="color: #512e67;"></i>
                <span>Event</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt" style="color: #512e67;"></i>
                <span>Tenant</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt" style="color: #512e67;"></i>
                <span>Profile</span></a>
        </li>
    @endif

    <!-- Garis -->
    <hr class="sidebar-divider bg-purple d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle  border-0" id="sidebarToggle"></button>
    </div>
</ul>
