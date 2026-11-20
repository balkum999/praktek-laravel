<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Home -->
    <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu Utama
    </div>

    <!-- Nav Item - Product -->
    <li class="nav-item {{ request()->routeIs('product') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('product') }}">
            <i class="fas fa-fw fa-box"></i>
            <span>Product</span>
        </a>
    </li>

    <!-- Nav Item - Service -->
    <li class="nav-item {{ request()->routeIs('service') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('service') }}">
            <i class="fas fa-fw fa-cogs"></i>
            <span>Service</span>
        </a>
    </li>

    <!-- Nav Item - Contact -->
    <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('contact') }}">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Contact</span>
        </a>
    </li>

    <!-- Nav Item - About -->
    <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('about') }}">
            <i class="fas fa-fw fa-info-circle"></i>
            <span>About</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->