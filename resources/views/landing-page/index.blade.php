<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sinar Sarana Baja</title>
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow"> --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ asset('custom/landing-page/css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <div class="logo-ssb">
                <center>
                    <img src="{{ asset('custom/landing-page/images/logo-ssb.png') }}" alt="">
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
                    <input type="text" class="field-header" placeholder="">
                </div>
                <div class="lang">
                </div>
            </div>
        </nav>
    </header>

    {{-- Banner Slide --}}
    <div class="container">
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
                <h2>Refrensi Project</h2>
                <a href="">View All</a>
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

        <div class="section-5">
            <div class="news-content">
                <h6 class="mb-50">blog</h6>
                <div class="news-header">
                    <div class="col-5">
                        <h2 class="mb-20">Latest New</h2>
                        <p>The Company has concern on maintaining a healthy and green environment. Therefore, the Company together with the sub-contractors have conducted the waste management and disposal</p>
                    </div>
                    <div class="col-7">
                        <a href="">View All</a>
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


    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>