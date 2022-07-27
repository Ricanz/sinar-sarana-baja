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
                    <div class="col-9 image">
                        <img src="{{ asset('custom/landing-page/images/slide-1.png') }}" alt="">
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