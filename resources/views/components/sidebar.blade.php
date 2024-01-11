<div class="main-sidebar sidebar-style-2" style="overflow: hidden; outline: none;" tabindex="1">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/dashboard">Mega Andalan Kalasan</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/dashboard">MAK</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Work Order</li>
            <li class="{{ $slug == 'dashboard' ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('dashboard') }}"><i class="fas fa-gauge fa-lg"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="{{ $slug == 'tambah' ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('admintambahtugas/create') }}"><i class="fas fa-plus"></i> <span>Tambah
                        Tugas
                        Baru</span></a>
            </li>
            <li class="{{ $slug == 'respon' ? 'active' : '' }}">
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

            <li class="{{ $slug == 'tugas' ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('tugas') }}"><i class="fas fa-screwdriver-wrench"></i> <span>Servis
                        Berlangsung
                    </span></a>
            </li>
            <li class="{{ $slug == 'selesai' ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('selesai') }}"><i class="fas fa-circle-check"></i><span>Servis
                        Selesai
                    </span></a>
            </li>
            <li class="{{ $slug == 'daftar' ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('daftar-wo') }}"><i class="fas fa-database"></i> <span>Lihat Data
                        Lengkap</span></a>
            </li>


    </aside>
</div>
