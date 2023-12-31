<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard.index') }}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-chart-line text-white"></i>
        </div>
        <div class="sidebar-brand-text mx-3 text-white">SPK SAW</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="fas fa-tachometer-alt"></i>
            <span class="text-light">Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('kriteria.index') }}">
            <i class="fas fa-list"></i>
            <span class="text-light">Kriteria</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('alternatif.index') }}">
            <i class="fas fa-users"></i>
            <span class="text-light">Alternatif</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('penilaian.index') }}">
            <i class="fas fa-star"></i>
            <span class="text-light">Penilaian</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('perhitungan.index') }}">
            <i class="fas fa-calculator"></i>
            <span class="text-light">Perhitungan</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
