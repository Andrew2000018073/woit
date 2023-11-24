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
            <li class="{{ Request::is('admintambahtugas') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('admintambahtugas') }}"><i class="fas fa-plus"></i> <span>Tambah Tugas Baru</span></a>
            </li>
            <li class="{{ Request::is('respond-permintaan') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('respond-permintaan') }}"><i class="fas fa-person" style="color: black;"></i> <span>Respon Permintaan </span></a>
            </li>
            <li class="{{ Request::is('daftar-wo') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('daftar-wo') }}"><i class="fas fa-database"></i> <span>Lihat Data Lengkap</span></a>
            </li>
            <li class="{{ Request::is('adminugas') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('adminugas') }}"><i class="fas fa-screwdriver-wrench"></i> <span>Servis Berlangsung
                    </span></a>
            </li>

    </aside>
</div>