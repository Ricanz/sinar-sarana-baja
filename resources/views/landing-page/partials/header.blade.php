
<header>
    <nav class="dekstop-nav">
        <div class="logo-ssb">
            <center>
                <img src="{{ asset('custom/landing-page/images/ssb-logo.png') }}" alt="">
            </center>
        </div>
        <div class="nav-items">
            <div class="dropdown">
                <a class="nav-menu active" href="{{ url('/') }}">Home</a>
            </div>
            <div class="dropdown about">
                <a class="nav-menu" href="#">About</a>
                <div class="dropdown-content menu-about">
                    <a href="{{ url('about-us') }}">Profile</a>
                    <a href="#">Vision, Missiion & Values</a>
                    <a href="#">Sertifikat/Legalitas</a>
                </div>
            </div>
            <div class="dropdown product">
                <a class="nav-menu" href="#">Product</a>
                <div class="dropdown-content menu-product">
                    <a href="#">Nestable Flange E-100</a>
                    <a href="#">Multi Plate (sub lagi 13 tipe)</a>
                    <a href="#">Flex Beam Guardrail & Railing</a>
                    <a href="#">Tiang PJU</a>
                    <a href="#">Steel Bridge</a>
                    <a href="#">Steel Pipe</a>
                    <a href="#">Bronjong</a>
                </div>
            </div>
            <div class="dropdown service">
                <a class="nav-menu" href="#">Jasa</a>
                <div class="dropdown-content menu-service">
                    <a href="#">Jasa Perakitan</a>
                    <a href="#">Jasa Pekerjaan Sipil</a>
                    <a href="#">Jasa Rancang Bangun</a>
                </div>
            </div>
            <div class="dropdown brosur">
                <a class="nav-menu" href="#">Brosur</a>
                <div class="dropdown-content menu-brosur">
                    <a href="#">Company Profile</a>
                    <a href="#">Katalog Produk CSP</a>
                    <a href="#">Katalog Produk Steel Bridge</a>
                    <a href="#">Katalog Produk Perlengkapan Jalan</a>
                    <a href="#">Katalog Steel Pipe</a>
                    <a href="#">Katalog Bronjong</a>
                </div>
            </div>
            <div class="dropdown">
                <a class="nav-menu" href="#">News</a>
            </div>
            <div class="dropdown client">
                <a class="nav-menu" href="#">Client</a>
                <div class="dropdown-content menu-client">
                    <a href="#">List Client</a>
                    <a href="#">List Client</a>
                    <a href="#">List Client</a>
                </div>
            </div>
            <div class="dropdown">
                <a class="nav-menu" href="#contact">Contact Us</a>
            </div>
        </div>
        <div class="search-box">
            <div class="search">
                <i class="fa-solid fa-magnifying-glass icon"></i>
                <input type="text" class="field-header" placeholder="Pencarian">
            </div>
            <div class="lang">
                <img src="{{ asset('custom/landing-page/images/icons/lang.png') }}" alt="">
            </div>
        </div>
    </nav>

    <nav class="mobile-nav">
        <div class="logo-ssb item">
            <img src="{{ asset('custom/landing-page/images/ssb-logo.png') }}" alt="">
        </div>
        <div class="items">
            <div class="toggle">
                <img src="{{ asset('custom/landing-page/images/iconbase.png') }}" alt="">
            </div>
            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass icon"></i>
            </div>

        </div>
    </nav>
</header>