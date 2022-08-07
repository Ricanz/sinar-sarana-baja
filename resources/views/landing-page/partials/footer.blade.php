<footer>
    <div class="content">
        <div class="row">
            <div class="col-4 footer-desc">
                <img class="mb-20" src="{{ asset('custom/landing-page/images/logo-ssb.png') }}" alt="">
                <div class="mb-35">
                    <p>Seiring dengan meningkatnya Proyek Infrastruktur sebagai penunjang pertumbuhan ekonomi nasional disamping meningkatnya permintaan pasar</p>
                </div>
                <div class="social">
                    <h5>Social</h5>
                    <div class="medias">
                        <img src="{{ asset('custom/landing-page/images/icons/fb-wht.png') }}" alt="">
                        <img src="{{ asset('custom/landing-page/images/icons/ig-wht.png') }}" alt="">
                        <img src="{{ asset('custom/landing-page/images/icons/li-wht.png') }}" alt="">
                        <img src="{{ asset('custom/landing-page/images/icons/twt-wht.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-8 footer-menu">
                <div class="col-4 mob-menu">
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
                        <h5 class="mb-10" onclick="footerDropdown('brosur')">Brosur<i class="fa-solid fa-chevron-right mob-icon brosur"></i></h5>
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
                <div class="col-4 mob-menu">
                    <div class="menu">
                        <h5 class="mb-10" onclick="footerDropdown('produk')">Produk<i class="fa-solid fa-chevron-right mob-icon produk"></i></h5>
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
                        <h5 class="mb-10" onclick="footerDropdown('jasa')">Jasa<i class="fa-solid fa-chevron-right mob-icon jasa"></i></h5>
                        <ul class="menu-dropdown-jasa">
                            <li>Landing</li>
                            <li>Jasa Perakitan</li>
                            <li>Jasa Pekerjaan Sipil</li>
                            <li>Jasa Rancang Bangun</li>
                        </ul>
                    </div>
                </div>
                <div class="col-4 mob-menu">
                    {{-- <div class="menu">
                        <h5 class="mb-10" onclick="footerDropdown('kontak')">Kontak<i class="fa-solid fa-chevron-right mob-icon kontak"></i></h5>
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
                        <h5 class="mb-10" onclick="footerDropdown('klien')">Klien<i class="fa-solid fa-chevron-right mob-icon klien"></i></h5>
                        <ul class="menu-dropdown-klien">
                            <li>Nama Klien</li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <hr class="mb-35">
    <div class="legal">
        <div class="box">
            <div class="item">
                <p>© 2022. All rights reserved</p>
            </div>
            <div class="sml-text-desc">
                <ul>
                    <li>Help Center</li>
                    <li>Terms of Service</li>
                </ul>
            </div>
        </div>
    </div>
</footer>