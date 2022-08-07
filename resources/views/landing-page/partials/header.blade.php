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
            <div class="toggle" id="myBtn">
                <img src="{{ asset('custom/landing-page/images/iconbase.png') }}" alt="">
            </div>
            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass icon"></i>
            </div>

        </div>
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="nav-menu">
                    <div class="mob-menu">
                        <div class="menu">
                            <h5 class="mb-10">About</h5>
                            <ul>
                                <a href="{{ url('about-us') }}">
                                    <li>Profile</li>
                                </a>
                                <a href="{{ url('about-us#vission-mission') }}">
                                    <li>Vision, Missiion & Values</li>
                                </a>
                                <li>Sertifikat/Legalitas</li>
                            </ul>
                        </div>
                        <div class="menu">
                            <h5 class="mb-10" onclick="footerDropdown('brosur')">Brosur<i
                                    class="fa-solid fa-chevron-right mob-icon brosur"></i></h5>
                            <ul class="menu-dropdown-brosur">
                                <li>Company Profile</li>
                                <li>Katalog Produk CSP</li>
                                <li>Katalog Produk
                                    Steel Bridge</li>
                                <li>Katalog Produk
                                    Perlengkapan Jalan</li>
                                <li>Katalog Steel Pipe</li>
                                <li>Katalog Bronjong</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mob-menu">
                        <div class="menu">
                            <h5 class="mb-10" onclick="footerDropdown('produk')">Produk<i
                                    class="fa-solid fa-chevron-right mob-icon produk"></i></h5>
                            <ul class="menu-dropdown-produk">
                                <li>Nestable Flange E-100</li>
                                <li>Multi Plate (sub lagi 13 tipe)</li>
                                <li>Flex Beam Guardrail & Railing</li>
                                <li>Tiang PJU</li>
                                <li>Steel Bridge</li>
                                <li>Steel Pipe</li>
                                <li>Bronjong</li>
                            </ul>
                        </div>
                        <div class="menu">
                            <h5 class="mb-10" onclick="footerDropdown('jasa')">Jasa<i
                                    class="fa-solid fa-chevron-right mob-icon jasa"></i></h5>
                            <ul class="menu-dropdown-jasa">
                                <li>Landing</li>
                                <li>Jasa Perakitan</li>
                                <li>Jasa Pekerjaan Sipil</li>
                                <li>Jasa Rancang Bangun</li>
                            </ul>
                        </div>
                    </div>

                </div>
                {{-- <div class="col-4 mob-menu">
                    <div class="menu">
                        <h5 class="mb-10" onclick="footerDropdown('kontak')">Kontak<i
                                class="fa-solid fa-chevron-right mob-icon kontak"></i></h5>
                        <ul class="menu-dropdown-kontak">
                            <li>Lokasi</li>
                            <li>Hunting : nomor marketing</li>
                            <li>Nomor Gigih/Dito</li>
                            <li>Nomor Dhendi/Budi</li>
                            <li>Nomor Herdyan/Santoso</li>
                            <li>Nomor Anton/Gress</li>
                        </ul>
                    </div>
                    <div class="menu">
                        <h5 class="mb-10" onclick="footerDropdown('klien')">Klien<i
                                class="fa-solid fa-chevron-right mob-icon klien"></i></h5>
                        <ul class="menu-dropdown-klien">
                            <li>Nama Klien</li>
                        </ul>
                    </div>
                </div> --}}
            </div>

        </div>
    </nav>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</header>
