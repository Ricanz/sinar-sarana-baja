<header>
    <nav class="dekstop-nav">
        <div class="logo-ssb">
            <center>
                <a href="{{ url('/') }}">
                    <img src="{{ asset('custom/landing-page/images/ssb-logo.png') }}" alt="">
                </a>
            </center>
        </div>
        {{-- <div class="nav-items">
            <div class="dropdown">
                <a class="nav-menu active" href="{{ url('/') }}">Home</a>
            </div>
            <div class="dropdown about">
                <a class="nav-menu" href="#">About</a>
                <div class="dropdown-content menu-about">
                    <a href="{{ url('about-us') }}">Profile</a>
                    <a href="{{ url('about-us#vission-mission') }}">Vision, Missiion & Values</a>
                    <a href="#">Sertifikat/Legalitas</a>
                </div>
            </div>
            <div class="dropdown product">
                <a class="nav-menu" href="#">Product</a>
                <div class="dropdown-content menu-product">
                    <a href="#">Nestable Flange E-100</a>
                    <a href="#">Multi Plate</a>
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
                    @foreach ($services as $item)
                        <a href="{{ url('service/'.$item->slug) }}">{{ $item->title }}</a>
                    @endforeach
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
                <a class="nav-menu" href="{{ url('news') }}">News</a>
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
                <a class="nav-menu" href="/#contact">Contact Us</a>
            </div>
        </div> --}}
        <div class="nav-items">
            <ul>

                <li><a href="{{ url('/') }}" style="color: #015291">Beranda</a></li>
    
                <li><a href="{{ url('about-us') }}">Tentang</a>
                    <ul>
                        <li><a href="{{ url('about-us') }}">Profile</a></li>
                        <li><a href="{{ url('about-us#vission-mission') }}">Vision, Missiion & Values</a></li>
                        <li><a href="{{ url('certificates') }}">Sertifikat/Legalitas</a></li>
                    </ul>
                </li>
    
                <li class="dropdown"><a href="{{ url('products') }}">Produk</a>
                    <ul>
                        @foreach ($products as $item)
                            <li>
                                <a href="{{ url('product-detail/'.$item->slug) }}">{{ $item->name }}</a>
                                @if ($item->details)
                                    <ul>
                                        @foreach ($item->details as $tab)
                                            <li><a href="{{ url('product-detail/'.$item->slug) }}">{{ $tab->title }}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li><a href="#">Jasa</a>
                    <ul>
                        @foreach ($services as $item)
                            <li><a href="{{ url('service/'.$item->slug) }}">{{ $item->title }}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li><a href="{{ url('/brochures') }}">Brosur</a></li>

                <li><a href="{{ url('/news') }}">Berita</a></li>
    
                <li><a href="{{ url('/clients') }}">Klien</a></li>

                <li><a href="{{ url('/#contact') }}">Kontak</a></li>
    
            </ul>
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
            <a href="{{ url('/') }}">
                <img src="{{ asset('custom/landing-page/images/ssb-logo.png') }}" alt="">
            </a>
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
                            <h5 class="mb-10">Tentang</h5>
                            <ul>
                                <a href="{{ url('about-us') }}">
                                    <li>Profile</li>
                                </a>
                                <a href="{{ url('about-us#vission-mission') }}">
                                    <li>Vision, Missiion & Values</li>
                                </a>
                                <a href="{{ url('certificates') }}">
                                    <li>Sertifikat/Legalitas</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                    <div class="mob-menu">
                        <div class="menu">
                            <h5 class="mb-10" onclick="footerDropdown('produk')">Produk<i
                                    class="fa-solid fa-chevron-right mob-icon produk"></i></h5>
                            <div class="menu-dropdown-produk">
                                <ul>
                                    @foreach ($products as $item)
                                    <a href="{{ url('product-detail/'.$item->slug) }}">
                                        <li>{{ $item->name }}</li>
                                    </a>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="menu">
                            <h5 class="mb-10" onclick="footerDropdown('jasa')">Jasa<i
                                    class="fa-solid fa-chevron-right mob-icon jasa"></i></h5>
                            <div class="menu-dropdown-jasa">
                                <ul>
                                    @foreach ($services as $item)
                                    <a href="{{ url('service/'.$item->slug) }}">
                                        <li>{{ $item->title }}</li>
                                    </a>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="menu">
                            <a href="{{ url('/brochures') }}">
                                <h5 class="mb-10 menu-header">Brosur</h5>
                            </a>
                        </div>
                        <div class="menu">
                            <a href="{{ url('/clients') }}">
                                <h5 class="mb-10 menu-header">Klien</h5>
                            </a>
                        </div>
                        <div class="menu">
                            <a href="{{ url('/news') }}">
                                <h5 class="mb-10 menu-header">Berita</h5>
                            </a>
                        </div>
                        <div class="menu">
                            <a href="/#contact">
                                <h5 class="mb-10 menu-header">Kontak</h5>
                            </a>
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
