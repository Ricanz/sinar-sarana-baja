<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sinar Sarana Baja</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="{{ asset('custom/landing-page/css/style.css') }}">
    <script src="https://kit.fontawesome.com/25812ebfb2.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav>
            <div class="logo-ssb">
                <center>
                    <img src="{{ asset('custom/landing-page/images/ssb-logo.png') }}" alt="">
                </center>
            </div>
            <div class="nav-items">
                <ul>
                    <li class="active">Home</li>
                    <li>About</li>
                    <li>Jasa</li>
                    <li>Brosur</li>
                    <li>Klien</li>
                    <li>Kontak</li>
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
    </header>

    <div class="container">

        {{-- Banner Slide --}}
        <div class="section-1">
            <div class="row">
                <div class="slide-carousel">
                    <div class="col-5 description">
                        <h6 class="mb-35">Sinergy Sarana Baja</h6>
                        <h1 class="mb-50">Oil And Gas Equipment</h1>
                        <p class="mb-50">As the pioneer in manufacturing and construction of transmission line of high</p>
                        <div class="row banner-footer">
                            <a href="" class="btn-primary">
                                <div class="view-button">
                                    View More
                                </div>
                            </a>
                            <a href="">
                                <div class="work-button">
                                    <img src="" alt="">
                                    See Our Work
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-8 image">
                        <img src="{{ asset('custom/landing-page/images/slide-1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Description --}}
        <div class="section-2">
            <div class="sub-title">
                <h6>description</h6>
            </div>
            <div class="about">
                <div class="row">
                    <div class="col-5 about-image">
                        <img src="{{ asset('custom/landing-page/images/about.png') }}" alt="">
                    </div>
                    <div class="col-7 about-desc">
                        <h2 class="mb-20">Offshore Maintenance and Service</h2>
                        <div class="med-text-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                        </div>
                        <div class="spc-50"></div>
                        <div class="row">
                            <div class="col-6 box-desc mr-20">
                                <img class="mb-20" src="{{ asset('custom/landing-page/images/hr.png') }}" alt="" width="24px" height="3px">
                                <div class="sml-text-desc">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicab</p>
                                </div>
                            </div>
                            <div class="col-6 box-desc pl-20 mr-20">
                                <img class="mb-20" src="{{ asset('custom/landing-page/images/hr.png') }}" alt="" width="24px" height="3px">
                                <div class="sml-text-desc">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicab</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Projects --}}
        <div class="section-3">
            <div class="card-title">
                <h2 class="item">Refrensi Project</h2>
                <a class="btn btn-primary-outline" href="#">View All<i class="ml-10 fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="projects">
                <div class="col-4 card-project">
                    <img src="{{ asset('custom/landing-page/images/projects/1.png') }}" alt="">
                    <div class="card-desc">
                        <h6 class="mb-10">guardrail</h6>
                        <p>Pagar Pengaman Jalan adalah alat keselamatan jalan yang terbuat dari baja lembaran.</p>
                    </div>
                </div>
                <div class="col-4 card-project">
                    <img src="{{ asset('custom/landing-page/images/projects/2.png') }}" alt="">
                    <div class="card-desc">
                        <h6 class="mb-10">delineator</h6>
                        <p>Pagar Pengaman Jalan adalah alat keselamatan jalan yang terbuat dari baja lembaran.</p>
                    </div>
                </div>
                <div class="col-4 card-project">
                    <img src="{{ asset('custom/landing-page/images/projects/3.png') }}" alt="">
                    <div class="card-desc">
                        <h6 class="mb-10">delineator</h6>
                        <p>Pagar Pengaman Jalan adalah alat keselamatan jalan yang terbuat dari baja lembaran.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Services  --}}
        <div class="section-4">
            <div class="service-desc mb-80">
                <div class="col-6">
                    <h3>Jasa</h3>
                </div>
                <div class="col-6 med-text-desc">
                    <p>Indonesian citizen, 70 years old. Appointed as Commissioner of the Company since May 2011, based on the Deed of GMS No. 12 dated May 7, 2011, which was ratified by Notary H. Fedris, S.H.</p>
                </div>
            </div>
            <div class="services">
                <div class="col-4 service-box">
                    <img src="{{ asset('custom/landing-page/images/services/ic_3D_curve_auto_colon.png') }}" alt="">
                    <div class="bold-med-text">
                        <p><strong>Structured Approach</strong></p>
                    </div>
                    <div class="med-text-desc">
                        <p>Prior to joining the Company as one of the Board of Commissioners’member</p>
                    </div>
                </div>
                <div class="col-4 service-box">
                    <img src="{{ asset('custom/landing-page/images/services/ic_chat_bot.png') }}" alt="">
                    <div class="bold-med-text">
                        <p><strong>Professional Feedbacks</strong></p>
                    </div>
                    <div class="med-text-desc">
                        <p>Prior to joining the Company as one of the Board of Commissioners’member</p>
                    </div>
                </div>
                <div class="col-4 service-box">
                    <img src="{{ asset('custom/landing-page/images/services/ic_airport_location.png') }}" alt="">
                    <div class="bold-med-text">
                        <p><strong>Efficiency</strong></p>
                    </div>
                    <div class="med-text-desc">
                        <p>Prior to joining the Company as one of the Board of Commissioners’member</p>
                    </div>
                </div>
                <div class="col-4 service-box">
                    <img src="{{ asset('custom/landing-page/images/services/ic_event.png') }}" alt="">
                    <div class="bold-med-text">
                        <p><strong>Flexible Schedule</strong></p>
                    </div>
                    <div class="med-text-desc">
                        <p>Prior to joining the Company as one of the Board of Commissioners’member</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- News --}}
        <div class="section-5">
            <div class="news-content">
                <h6 class="mb-50">blog</h6>
                <div class="news-header">
                    <div class="col-5">
                        <h2 class="mb-20">Latest New</h2>
                        <p>The Company has concern on maintaining a healthy and green environment. Therefore, the Company together with the sub-contractors have conducted the waste management and disposal</p>
                    </div>
                    <div class="col-7 item">
                        <a class="btn btn-primary-outline" href="#">View All<i class="ml-10 fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="news">
                    <div class="col-6 primary-news">
                        <img src="{{ asset('custom/landing-page/images/news/2.png') }}" alt="">
                        <div class="time mb-10">
                            <p>24 Juli 2022 | 8 menit yang lalu</p>
                        </div>
                        <div class="news-title mb-10">
                            <p><strong>Training Pemadan Kebakaran Program ISO 45001:2018</strong></p>
                        </div>
                        <div class="news-detail">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
                        </div>
                    </div>
                    <div class="col-6 support-news">
                        <div class="col-6">
                            <div class="news-1">
                                <img src="{{ asset('custom/landing-page/images/news/artikel-1.png') }}" alt="">
                                <div class="time mb-10">
                                    <p>24 Juli 2022 | 8 menit yang lalu</p>
                                </div>
                                <div class="news-title mb-10">
                                    <p><strong>Training Pemadan Kebakaran Program ISO 45001:2018</strong></p>
                                </div>
                            </div>
                            <div class="news-1">
                                <img src="{{ asset('custom/landing-page/images/news/artikel-3.png') }}" alt="">
                                <div class="time mb-10">
                                    <p>24 Juli 2022 | 8 menit yang lalu</p>
                                </div>
                                <div class="news-title mb-10">
                                    <p><strong>Training Pemadan Kebakaran Program ISO 45001:2018</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="news-1">
                                <img src="{{ asset('custom/landing-page/images/news/artikel-2.png') }}" alt="">
                                <div class="time mb-10">
                                    <p>24 Juli 2022 | 8 menit yang lalu</p>
                                </div>
                                <div class="news-title mb-10">
                                    <p><strong>Training Pemadan Kebakaran Program ISO 45001:2018</strong></p>
                                </div>
                            </div>
                            <div class="news-1">
                                <img src="{{ asset('custom/landing-page/images/news/artikel-4.png') }}" alt="">
                                <div class="time mb-10">
                                    <p>24 Juli 2022 | 8 menit yang lalu</p>
                                </div>
                                <div class="news-title mb-10">
                                    <p><strong>Training Pemadan Kebakaran Program ISO 45001:2018</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Clients --}}
        <div class="section-6">
            <div class="card-title">
                <h2 class="mb-20">Our Clients</h2>
                <div class="med-text-desc mb-20">
                    <p>Klien kami sudah memilih kami</p>
                </div>
            </div>
            <div class="clients">
                <div class="row">
                    <div class="client-detail">
                        <img src="{{ asset('custom/landing-page/images/clients/client-1.png') }}" alt="">
                    </div>
                    <div class="client-detail">
                        <img src="{{ asset('custom/landing-page/images/clients/client-2.png') }}" alt="">
                    </div>
                    <div class="client-detail">
                        <img src="{{ asset('custom/landing-page/images/clients/client-3.png') }}" alt="">
                    </div>
                    <div class="client-detail">
                        <img src="{{ asset('custom/landing-page/images/clients/client-4.png') }}" alt="">
                    </div>
                    <div class="client-detail">
                        <img src="{{ asset('custom/landing-page/images/clients/client-5.png') }}" alt="">
                    </div>
                    <div class="client-detail">
                        <img src="{{ asset('custom/landing-page/images/clients/client-6.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="section-7">
            <div class="message-content">
                <div class="col-4 message-image">
                    <img src="{{ asset('custom/landing-page/images/illustration_contact.png') }}" alt="">
                </div>
                <div class="col-8 messages">
                    <h2 class="mb-10"><strong>Drop us a line</strong></h2>
                    <div class="sml-text-desc mb-35">
                        <p>We normally respond within 2 business days</p>
                    </div>
                    <div class="message-form form-input">
                        <input type="email" name="email" id="email" placeholder="Your Name...">
                        <input type="text" name="name" id="name" placeholder="Your Email...">
                        <input type="text" name="subject" id="subject" placeholder="Your Subject...">
                        <textarea name="message" id="message" cols="30" rows="10">Your Message...</textarea>
                        <button class="btn-primary mt-20">Send Message</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-8">
            <div class="row">
                <div class="col-5 contact-desc">
                    <h3>Get In Touch</h3>
                    <div class="contact-detail">
                        <div class="contact">
                            <div class="contact-head mb-10">
                                <img src="{{ asset('custom/landing-page/images/icons/ic_email.png') }}" alt="">
                                <p class="item"><strong>Email</strong></p>    
                            </div>
                            <span>riyanti@sinergybaja.com</span>
                        </div>
                        <div class="contact">
                            <div class="contact-head mb-10">
                                <img src="{{ asset('custom/landing-page/images/icons/ic_mobile.png') }}" alt="">
                                <p class="item"><strong>Phone</strong></p>    
                            </div>
                            <span>(62) 85-0101</span>
                        </div>
                        <div class="contact">
                            <div class="contact-head mb-10">
                                <img src="{{ asset('custom/landing-page/images/icons/ic_pin.png') }}" alt="">
                                <p class="item"><strong>Address</strong></p>    
                            </div>
                            <span>DKI Jakarta</span>
                        </div>
                    </div>
                </div>
                <div class="col-7 contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15924.475091023463!2d98.68546621852086!3d3.784324316961146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3036ce77adb6ced7%3A0xe1b6fd7218b0c050!2sBelawan%2C%20Belawan%20I%2C%20Medan%20Kota%20Belawan%2C%20Medan%20City%2C%20North%20Sumatra!5e0!3m2!1sen!2sid!4v1659264745013!5m2!1sen!2sid" style="border:0; border-radius: 16px;" width="665px" height="500px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="content">
            <div class="row">
                <div class="col-4 footer-desc">
                    <img class="mb-20" src="{{ asset('custom/landing-page/images/logo-ssb.png') }}" alt="">
                    <div class="sml-text-desc mb-35">
                        <p>Seiring dengan meningkatnya Proyek Infrastruktur sebagai penunjang pertumbuhan ekonomi nasional disamping meningkatnya permintaan pasar</p>
                    </div>
                    {{-- <h5>Let’s stay in touch</h5>
                    <div class="sml-text-desc">
                        <p>Berlangganan buletin kami untuk menerima artikel terbaru ke kotak masuk Anda setiap minggu.</p>
                    </div> --}}
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
                    <div class="col-4">
                        <div class="menu">
                            <h5 class="mb-10">About</h5>
                            <ul>
                                <li>Profile</li>
                                <li>Vision, Missiion & Values</li>
                            </ul>
                        </div>
                        <div class="menu">
                            <h5 class="mb-10">Brosur</h5>
                            <ul>
                                <li>Company Profile</li>
                                <li>Katalog Produk CSP</li>
                                <li>Katalog Produk 
                                    Steel Bridge</li>
                                <li>Katalog Produk 
                                    Perlengkapan Jalan</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="menu">
                            <h5 class="mb-10">Produk</h5>
                            <ul>
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
                            <h5 class="mb-10">Jasa</h5>
                            <ul>
                                <li>Landing</li>
                                <li>Course List</li>
                                <li>Course Details</li>
                                <li>Blog</li>
                                <li>Blog Post</li>
                                <li>About</li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="menu">
                            <h5 class="mb-10">Kontak</h5>
                            <ul>
                                <li>Lokasi</li>
                                <li>Hunting : nomor marketing</li>
                            </ul>
                        </div>
                        <div class="menu">
                            <h5 class="mb-10">Klien</h5>
                            <ul>
                                <li>Nama Klien</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mb-35">
        <div class="legal">
            <div class="box">
                <div class="sml-text-desc item">
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>