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
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('dashboard') }}"><i class="fas fa-gauge fa-lg"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="{{ Request::is('admintambahtugas') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('admintambahtugas') }}"><i class="fas fa-plus"></i> <span>Tambah Tugas
                        Baru</span></a>
            </li>
            <li class="{{ Request::is('respond') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('respond') }}">
                    <i class="fas fa-person ">
                    </i>
                    <span>Respon Permintaan </span>
                    <h6 class="badge badge-danger">
                        <?php
                        use Illuminate\Support\Facades\DB;
                        $count = DB::table('workorders')
                            ->where('status', 'Belum dikerjakan')
                            ->get()
                            ->count();
                        if ($count == 0) {
                            $count = ' ';
                        }
                        ?>
                        {{ $count }}
                    </h6>
                </a>
            </li>
            <li class="{{ Request::is('daftar-wo') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('daftar-wo') }}"><i class="fas fa-database"></i> <span>Lihat Data
                        Lengkap</span></a>
            </li>
            <li class="{{ Request::is('tugas') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('tugas') }}"><i class="fas fa-screwdriver-wrench"></i> <span>Servis
                        Berlangsung
                    </span></a>
            </li>
            <li class="{{ Request::is('selesai') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('selesai') }}"><i class="fas fa-circle-check"></i><span>Servis
                        Selesai
                    </span></a>
            </li>


    </aside>
</div>
