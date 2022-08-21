<x-guest-layout>
    {{-- Banner Slide --}}
    <div class="section-1">
        <div class="row">
            <div class="slide-carousel">
                <div class="col-5 description">
                    <h6 class="mb-35">Sinergy Sarana Baja</h6>
                    <h1 class="mb-50">Quality and Improvement</h1>
                    <p class="mb-50">
                        Menghadirkan produk berkualitas dengan bahan baku pilihan terbaik!
                    </p>
                    <div class="row banner-footer">
                        <a href="" class="view-more btn-primary">
                            <div class="view-button">
                                Lihat Produk
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
            <h6>tentang kami</h6>
        </div>
        <div class="about">
            <div class="row">
                <div class="col-5 about-image">
                    <img src="{{ asset('custom/landing-page/images/about.png') }}" alt="">
                </div>
                <div class="col-7 about-desc">
                    <h2 class="mb-20">PT. Sinergy Sarana Baja</h2>
                    <div class="med-text-desc">
                        <p>
                            Perusahaan nasional yang berdiri dengan dilatarbelakangi oleh pesatnya pertumbuhan proyek infrastruktur di Indonesia yang merupakan salah satu faktor penggerak ekonomi nasional khususnya pada proyek konstruksi baja.
                            <br><br>
                            PT. Sinergy Sarana Baja dengan SDM yang berkualitas dan berpengalaman di bidangnya.
                        </p>
                    </div>
                    <div class="spc-50"></div>
                    <div class="row dekstop-box">
                        <div class="col-6 box-desc mr-20">
                            <img class="mb-20" src="{{ asset('custom/landing-page/images/hr.png') }}" alt="" width="24px" height="3px">
                            <div class="sml-text-desc">
                                <p>
                                    Memberikan solusi untuk menekan biaya serta peningkatakan efisiensi yang membuat end user mendapatkan produk yang berkualitas dengan harga yang lebih bersaing.
                                </p>
                            </div>
                        </div>
                        <div class="col-6 box-desc pl-20 mr-20">
                            <img class="mb-20" src="{{ asset('custom/landing-page/images/hr.png') }}" alt="" width="24px" height="3px">
                            <div class="sml-text-desc">
                                <p>
                                    Produk yang PT. Sinergy Sarana Baja hasilkan dapat diterima, diminati dan diakui oleh para pelanggan di seluruh Indonesia.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-box">
                        <div class="box-desc mb-35">
                            <img class="mb-20 mobile-separator" src="{{ asset('custom/landing-page/images/hr.png') }}" alt="" width="24px" height="3px">
                            <div class="sml-text-desc">
                                <p>
                                    Memberikan solusi untuk menekan biaya serta peningkatakan efisiensi yang membuat end user mendapatkan produk yang berkualitas dengan harga yang lebih bersaing.
                                </p>
                            </div>
                        </div>
                        <div class="box-desc">
                            <img class="mb-20 mobile-separator" src="{{ asset('custom/landing-page/images/hr.png') }}" alt="" width="24px" height="3px">
                            <div class="sml-text-desc">
                                <p>
                                    Produk yang PT. Sinergy Sarana Baja hasilkan dapat diterima, diminati dan diakui oleh para pelanggan di seluruh Indonesia.
                                </p>
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
            <h2 class="item">Produk Kami</h2>
            <a class="btn btn-primary-outline btn-dekstop" href="#">Lihat Semua<i class="ml-10 fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="projects">
            @foreach($products as $product)
            <div class="col-3 card-project mb-35">
                <img src="{{ asset($product->image) }}" alt="">
                <div class="card-desc">
                    <a href="{{ url('product-detail/'.$product->slug) }}">
                        <h6 class="mb-10">{{ $product->name }}</h6>
                    </a>
                    <hr class="divider-hr">
                    <div class="med-text-desc">
                        {!! Str::limit($product->description, 100, '...') !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <center class="fill-button">
            <a class="btn btn-fill-white btn-mobile" href="#">View All<i class="ml-10 fa-solid fa-arrow-right"></i></a>
        </center>
    </div>

    {{-- Services  --}}
    <div class="section-4">
        <div class="service-desc mb-80">
            <div class="col-6">
                <h3>Jasa</h3>
            </div>
            <div class="col-6 med-text-desc mob-desc">
                <p>PT. Sinergy Sarana Baja berkomitmen untuk terus memberikan produk baja berkualitas dan berkelanjutan dalam berinovasi sesuai dengan perkembangan pasar.</p>
            </div>
        </div>
        <div class="services">
            <div class="col-4 service-box">
                <img src="{{ asset('custom/landing-page/images/services/ic_3D_curve_auto_colon.png') }}" alt="">
                <div class="bold-med-text">
                    <p><strong>Berintegritas</strong></p>
                </div>
                <div class="med-text-desc">
                    <p>
                        Integritas dalam pembuatan produk san service ke pelanggan
                    </p>
                </div>
            </div>
            <div class="col-4 service-box">
                <img src="{{ asset('custom/landing-page/images/services/ic_chat_bot.png') }}" alt="">
                <div class="bold-med-text">
                    <p><strong>Kepuasan Pelanggan</strong></p>
                </div>
                <div class="med-text-desc">
                    <p>
                        Aktif 24/7 untuk melayani hingga menuju kepuasan pelanggan yang baik.
                    </p>
                </div>
            </div>
            <div class="col-4 service-box">
                <img src="{{ asset('custom/landing-page/images/services/ic_airport_location.png') }}" alt="">
                <div class="bold-med-text">
                    <p><strong>Berinovasi</strong></p>
                </div>
                <div class="med-text-desc">
                    <p>
                        Selalu meletakkan inovasi yang baik di tiap produk.
                    </p>
                </div>
            </div>
            <div class="col-4 service-box">
                <img src="{{ asset('custom/landing-page/images/services/ic_event.png') }}" alt="">
                <div class="bold-med-text">
                    <p><strong>Berkembang</strong></p>
                </div>
                <div class="med-text-desc">
                    <p>
                        Perkembangan menjadi point utama dalam setiap persiapan kami.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- News --}}
    <div class="section-5">
        <div class="news-content">
            <div class="news-header">
                <div class="col-5 news-header-mob">
                    <h2 class="mb-20">Latest New</h2>
                    <p>
                        Informasi mengenai kegiatan terkini dan pengetahuan seputar produk dan jasa kami.
                    </p>
                </div>
                <div class="col-7 item">
                    <a class="btn btn-primary-outline btn-dekstop" href="{{ url('/news') }}">Lihat Semua<i class="ml-10 fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="news">
                <div class="col-6 primary-news dekstop-news">
                    <img src="{{ asset('custom/landing-page/images/news/2.png') }}" alt="">
                    <div class="time mb-10">
                        <p>24 Juli 2022 | 8 menit yang lalu</p>
                    </div>
                    <div class="news-title mb-10">
                        <a href="{{ url('/news-detail/pemadam-kebakaran') }}" style="text-decoration: none">
                            <p><strong>Training Pemadan Kebakaran Program ISO 45001:2018</strong></p>
                        </a>
                    </div>
                    <div class="news-detail">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
                    </div>
                </div>
                <div class="col-6 support-news dekstop-news">
                    <div class="col-6">
                        <div class="news-1">
                            <img src="{{ asset('custom/landing-page/images/news/artikel-1.png') }}" alt="">
                            <div class="time mb-10">
                                <p>24 Juli 2022 | 8 menit yang lalu</p>
                            </div>
                            <div class="news-title mb-10">
                                <a href="{{ url('/news-detail/pemadam-kebakaran') }}" style="text-decoration: none">
                                    <p><strong>Training Pemadan Kebakaran Program ISO 45001:2018</strong></p>
                                </a>
                            </div>
                        </div>
                        <div class="news-1">
                            <img src="{{ asset('custom/landing-page/images/news/artikel-3.png') }}" alt="">
                            <div class="time mb-10">
                                <p>24 Juli 2022 | 8 menit yang lalu</p>
                            </div>
                            <div class="news-title mb-10">
                                <a href="{{ url('/news-detail/pemadam-kebakaran') }}" style="text-decoration: none">
                                    <p><strong>Training Pemadan Kebakaran Program ISO 45001:2018</strong></p>
                                </a>
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
                                <a href="{{ url('/news-detail/pemadam-kebakaran') }}" style="text-decoration: none">
                                    <p><strong>Training Pemadan Kebakaran Program ISO 45001:2018</strong></p>
                                </a>
                            </div>
                        </div>
                        <div class="news-1">
                            <img src="{{ asset('custom/landing-page/images/news/artikel-4.png') }}" alt="">
                            <div class="time mb-10">
                                <p>24 Juli 2022 | 8 menit yang lalu</p>
                            </div>
                            <div class="news-title mb-10">
                                <a href="{{ url('/news-detail/pemadam-kebakaran') }}" style="text-decoration: none">
                                    <p><strong>Training Pemadan Kebakaran Program ISO 45001:2018</strong></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 support-news mobile-news">
                    <div class="news-1">
                        <div class="col-4 image-news mr-20">
                            <img src="{{ asset('custom/landing-page/images/news/artikel-1.png') }}" alt="">
                        </div>
                        <div class="col-8 news-detail-mob">
                            <a href="{{ url('/news-detail/pemadam-kebakaran') }}" style="text-decoration: none; color: #212B36">
                                <p><strong>Training Pemadan Kebakaran Program ISO 45001:2018</strong></p>
                            </a>
                            <p class="time">24 Juli 2022 | 8 menit yang lalu</p>
                        </div>
                    </div>
                    <div class="news-1">
                        <div class="col-4 image-news mr-20">
                            <img src="{{ asset('custom/landing-page/images/news/artikel-1.png') }}" alt="">
                        </div>
                        <div class="col-8 news-detail-mob">
                            <a href="{{ url('/news-detail/pemadam-kebakaran') }}" style="text-decoration: none; color: #212B36">
                                <p><strong>Training Pemadan Kebakaran Program ISO 45001:2018</strong></p>
                            </a>
                            <p class="time">24 Juli 2022 | 8 menit yang lalu</p>
                        </div>
                    </div>
                    <div class="news-1">
                        <div class="col-4 image-news mr-20">
                            <img src="{{ asset('custom/landing-page/images/news/artikel-1.png') }}" alt="">
                        </div>
                        <div class="col-8 news-detail-mob">
                            <a href="{{ url('/news-detail/pemadam-kebakaran') }}" style="text-decoration: none; color: #212B36">
                                <p><strong>Training Pemadan Kebakaran Program ISO 45001:2018</strong></p>
                            </a>
                            <p class="time">24 Juli 2022 | 8 menit yang lalu</p>
                        </div>
                    </div>
                    <div class="news-1">
                        <div class="col-4 image-news mr-20">
                            <img src="{{ asset('custom/landing-page/images/news/artikel-1.png') }}" alt="">
                        </div>
                        <div class="col-8 news-detail-mob">
                            <a href="{{ url('/news-detail/pemadam-kebakaran') }}" style="text-decoration: none; color: #212B36">
                                <p><strong>Training Pemadan Kebakaran Program ISO 45001:2018</strong></p>
                            </a>
                            <p class="time">24 Juli 2022 | 8 menit yang lalu</p>
                        </div>
                    </div>
                    <div class="news-1">
                        <div class="col-4 image-news mr-20">
                            <img src="{{ asset('custom/landing-page/images/news/artikel-1.png') }}" alt="">
                        </div>
                        <div class="col-8 news-detail-mob">
                            <a href="{{ url('/news-detail/pemadam-kebakaran') }}" style="text-decoration: none; color: #212B36">
                                <p><strong>Training Pemadan Kebakaran Program ISO 45001:2018</strong></p>
                            </a>
                            <p class="time">24 Juli 2022 | 8 menit yang lalu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Clients --}}
    <div class="section-6">
        <div class="card-title">
            <h2 class="mb-20">Klien</h2>
            <div class="med-text-desc mb-20">
                <p>Partner kerja sama PT. Sinergy Sarana Baja</p>
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

    {{-- Message --}}
    <div class="section-7">
        <div class="message-content">
            <div class="col-4 message-image message-dekstop">
                <img src="{{ asset('custom/landing-page/images/illustration_contact.png') }}" alt="">
            </div>
            <div class="col-8 messages">
                <h2 class="mb-10"><strong>Drop us a line</strong></h2>
                <div class="sml-text-desc mb-35">
                    <p>Kami aktif 24/7 untuk melayani Anda</p>
                </div>
                <div class="message-form form-input">
                    <input type="email" name="email" id="email" placeholder="Nama Anda..">
                    <input type="text" name="name" id="name" placeholder="Email Anda..">
                    <input type="text" name="subject" id="subject" placeholder="Pesan Anda..">
                    <textarea name="message" id="message" cols="30" rows="10">Pesan Anda..</textarea>
                    <div class="btn-center">
                        <button class="btn-primary mt-20">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Contact --}}
    <div class="section-8" id="contact">
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
            <div class="col-7 contact-map dekstop-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15924.475091023463!2d98.68546621852086!3d3.784324316961146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3036ce77adb6ced7%3A0xe1b6fd7218b0c050!2sBelawan%2C%20Belawan%20I%2C%20Medan%20Kota%20Belawan%2C%20Medan%20City%2C%20North%20Sumatra!5e0!3m2!1sen!2sid!4v1659264745013!5m2!1sen!2sid" style="border:0; border-radius: 16px;" width="665px" height="500px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-7 contact-map mobile-map">
                <center>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15924.475091023463!2d98.68546621852086!3d3.784324316961146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3036ce77adb6ced7%3A0xe1b6fd7218b0c050!2sBelawan%2C%20Belawan%20I%2C%20Medan%20Kota%20Belawan%2C%20Medan%20City%2C%20North%20Sumatra!5e0!3m2!1sen!2sid!4v1659264745013!5m2!1sen!2sid" style="border:0; border-radius: 16px;" width="300px" height="350px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </center>
            </div>
        </div>
    </div>
</x-guest-layout>