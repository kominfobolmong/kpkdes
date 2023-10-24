<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="/" class="navbar-brand">
            <div class="d-flex justify-content-between">
                <img src="/sipoda.png" style="height: 50px;" />
                <div>
                    <h1 class="text-bold text-dark h4">SIPODA</h1>
                    <h2 class="h6 text-sm mt-n2 text-secondary">Sistem Informasi Potensi Daerah</h2>
                </div>
            </div>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3 text-sm" id="navbarCollapse">
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                <li class="nav-item">
                    <a href="/kependudukan" class="{{ $active == 'kependudukan' ? 'btn btn-outline-info' : 'nav-link' }}">Kependudukan</a>
                </li>
                <li class="nav-item">
                    <a href="/perikanan" class="{{ $active == 'perikanan' ? 'btn btn-outline-info' : 'nav-link' }}">Perikanan</a>
                </li>
                <li class="nav-item">
                    <a href="/pertanian" class="{{ $active == 'pertanian' ? 'btn btn-outline-info' : 'nav-link' }}">Pertaninan</a>
                </li>
                <li class="nav-item">
                    <a href="/perkebunan" class="{{ $active == 'perkebunan' ? 'btn btn-outline-info' : 'nav-link' }}">Perkebunan</a>
                </li>

                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Lainnya</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="/kesehatan" class="dropdown-item">Kesehatan</a></li>
                        <li><a href="/pariwisata" class="dropdown-item">Pariwisata</a></li>
                        <li><a href="/pendidikan" class="dropdown-item">Pendidikan</a></li>
                        <li><a href="/perdagangan" class="dropdown-item">Perdagangan</a></li>
                        <li><a href="/peternakan" class="dropdown-item">Peternakan</a></li>

                        <li class="dropdown-divider"></li>
                        <li><a href="/login" class="dropdown-item">Login</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- /.navbar -->