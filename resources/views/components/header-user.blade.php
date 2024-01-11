<style>
    .navbar-gg {
        content: " ";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 70px;
        background-color: #6777ef;
        z-index: -1;
    }
</style>

<div class="navbar-gg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">MAK Servis</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
                <li class="nav-item {{ $slug == 'minta' ? 'active' : '' }}">
                    <a href="/user/permintaan/create" class="nav-link">Ajukan
                        request</a>
                </li>
                <li class="nav-item {{ $slug == 'cek' ? 'active' : '' }}">

                    <a class="nav-link" href="/user/cek-proses">Cek Pengerjaan</a>
                </li>
                <li class="nav-item {{ $slug == 'rate' ? 'active' : '' }}">
                    <a class="nav-link" href="/user/rate">Rate Servis</a>
                </li>
        </div>
    </div>
    </div>
</nav>
