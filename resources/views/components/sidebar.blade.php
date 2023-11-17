<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/dashboard">Mega Andalan Kalasan</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/dashboard">MAK</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Work Order</li>
            <!-- <li class="nav-item dropdown {{ $type_menu === 'layout' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Tambah baru</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('layout-default-layout') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('layout-default-layout') }}">Default Layout</a>
                    </li>
                    <li class="{{ Request::is('transparent-sidebar') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('transparent-sidebar') }}">Transparent Sidebar</a>
                    </li>
                    <li class="{{ Request::is('layout-top-navigation') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('layout-top-navigation') }}">Top Navigation</a>
                    </li>
                </ul>
            </li> -->
            <li class="{{ Request::is('admintambahtugas') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('admintambahtugas') }}"><i class="fas fa-plus"></i> <span>Tambah Tugas Baru</span></a>
            </li>
            <li class="{{ Request::is('respond-permintaan') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('respond-permintaan') }}"><i class="fas fa-person" style="color: black;"></i> <span>Respon Permintaan </span></a>
            </li>
            <li class="{{ Request::is('blank-page') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('blank-page') }}"><i class="fas fa-database"></i> <span>Lihat Data Lengkap</span></a>
            </li>
            <li class="{{ Request::is('adminugas') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('adminugas') }}"><i class="fas fa-screwdriver-wrench"></i> <span>Servis Berlangsung
                    </span></a>
            </li>

    </aside>
</div>