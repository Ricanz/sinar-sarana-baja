<x-guest-layout>
    {{-- Banner Slide --}}
    <div class="section-1">
        <div class="row">
            <div class="slide-carousel">
                <div class="col-5 description">
                    <h6 class="mb-35">Sinergy Sarana Baja</h6>
                    <h1 class="mb-50">{{ $banner->vission }}</h1>
                    <p class="mb-50">
                        {!! $banner->description !!}
                    </p>
                    <br>
                    <div class="row banner-footer">
                        <a href="{{ url('products') }}" class="view-more btn-primary">
                            <div class="view-button">
                                Lihat Produk
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-8 image">
                    <img src="{{ asset($banner->image) }}" alt="">
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
                    <img src="{{ $short->image == null ? asset('custom/landing-page/images/about(1).jpg') : $short->image }}" alt="">
                </div>
                <div class="col-7 about-desc">
                    <h2 class="mb-20">{{ $short->vission }}</h2>
                    <div class="med-text-desc">
                        {!! $short->description !!}
                    </div>
                    <div class="spc-50"></div>
                    <div class="row dekstop-box">
                        <div class="col-6 box-desc mr-20">
                            <img class="mb-20" src="{{ asset('custom/landing-page/images/hr.png') }}" alt="" width="24px" height="3px">
                            <div class="sml-text-desc">
                                {!! $left->description !!}
                            </div>
                        </div>
                        <div class="col-6 box-desc pl-20 mr-20">
                            <img class="mb-20" src="{{ asset('custom/landing-page/images/hr.png') }}" alt="" width="24px" height="3px">
                            <div class="sml-text-desc">
                                {!! $right->description !!}
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
                        {!! Str::limit($product->short_desc, 100, '...') !!}
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
                <h3>{{ $service_desc->vission }}</h3>
            </div>
            <div class="col-6 med-text-desc mob-desc">
                <p>{!! $service_desc->description !!}</p>
            </div>
        </div>
        <div class="services">
            @foreach ($service_icon as $item)
                <div class="col-4 service-box">
                    <img src="{{ asset($item->image) }}" alt="">
                    <div class="bold-med-text">
                        <p><strong>{{ $item->title }}</strong></p>
                    </div>
                    <div class="med-text-desc">
                        <p>
                            {!! $item->description !!}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- News --}}
    <div class="section-5">
        <div class="news-content">
            <div class="news-header">
                <div class="col-5 news-header-mob">
                    <h2 class="mb-20">{{ $article_description->vission }}</h2>
                    <p>
                        {!! $article_description->description !!}
                    </p>
                </div>
                <div class="col-7 item">
                    <a class="btn btn-primary-outline btn-dekstop" href="{{ url('/news') }}">Lihat Semua<i class="ml-10 fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="news">
                <div class="col-6 primary-news dekstop-news">
                    <img src="{{ asset($main_news->image) }}" alt="">
                    <div class="time mb-10">
                        <p>{{ $main_news->created_at->format('d M Y') }} | {{ \Carbon\Carbon::parse($main_news->created_at)->diffForHumans() }}</p>
                    </div>
                    <div class="news-title mb-10">
                        <a href="{{ url('/news-detail/'.$main_news->slug) }}" style="text-decoration: none">
                            <p><strong>{{ $main_news->title }}</strong></p>
                        </a>
                    </div>
                    <div class="news-detail">
                        <p>{{ Str::limit($main_news->short_desc, 150, '...') }}</p>
                    </div>
                </div>
                <div class="col-6 support-news dekstop-news">
                    <div class="col-6">
                        @foreach ($news_left as $article)
                        <div class="news-1">
                            <img src="{{ asset($article->image) }}" alt="">
                            <div class="time mb-10">
                                <p>{{ $article->created_at->format('d M Y') }} | {{ \Carbon\Carbon::parse($article->created_at)->diffForHumans() }}</p>
                            </div>
                            <div class="news-title mb-10">
                                <a href="{{ url('/news-detail/'.$article->slug) }}" style="text-decoration: none">
                                    <p><strong>{{ $article->title }}</strong></p>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-6">
                        @foreach ($news_right as $article)
                        <div class="news-1">
                            <img src="{{ asset($article->image) }}" alt="">
                            <div class="time mb-10">
                                <p>{{ $article->created_at->format('d M Y') }} | {{ \Carbon\Carbon::parse($article->created_at)->diffForHumans() }}</p>
                            </div>
                            <div class="news-title mb-10">
                                <a href="{{ url('/news-detail/'.$article->slug) }}" style="text-decoration: none">
                                    <p><strong>{{ $article->title }}</strong></p>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-6 support-news mobile-news">
                    @foreach ($mobile_news as $article)
                    <div class="news-1">
                        <div class="col-4 image-news mr-20">
                            <img src="{{ asset($article->image) }}" alt="">
                        </div>
                        <div class="col-8 news-detail-mob">
                            <a href="{{ url('/news-detail/'.$article->slug) }}" style="text-decoration: none; color: #212B36">
                                <p><strong>{{ $article->title }}</strong></p>
                            </a>
                            <p class="time">{{ $article->created_at->format('d M Y') }} | {{ \Carbon\Carbon::parse($article->created_at)->diffForHumans() }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- Clients --}}
    <div class="section-6">
        <div class="card-title">
            <h2 class="mb-20">{{ $client_description->vission }}</h2>
            <div class="med-text-desc mb-20">
                <p>{!! $client_description->description !!}</p>
            </div>
        </div>
        <div class="clients">
            <div class="row">
                @foreach ($client as $item)
                    <div class="client-detail">
                        <img src="{{ asset($item->image) }}" alt="">
                    </div>
                @endforeach
                {{-- <div class="client-detail">
                    <img src="{{ asset('custom/landing-page/images/clients/client-2.png') }}" alt="">
                </div> --}}
            </div>
        </div>
    </div>

    {{-- Message --}}
    {{-- <div class="section-7">
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
    </div> --}}

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
                        <span>{{ $primary_contact->email }}</span>
                    </div>
                    <div class="contact">
                        <div class="contact-head mb-10">
                            <img src="{{ asset('custom/landing-page/images/icons/ic_mobile.png') }}" alt="">
                            <p class="item"><strong>Telepon</strong></p>    
                        </div>
                        <span>{{ $primary_contact->phone }}</span>
                    </div>
                    <div class="contact">
                        <div class="contact-head mb-10">
                            <img src="{{ asset('custom/landing-page/images/icons/ic_pin.png') }}" alt="">
                            <p class="item"><strong>Alamat</strong></p>    
                        </div>
                        <span>{{ $primary_contact->name }}</span>
                    </div>
                </div>
            </div>
            <div class="col-7 contact-map dekstop-map">
                {!! $map->description !!}
                {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15924.475091023463!2d98.68546621852086!3d3.784324316961146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3036ce77adb6ced7%3A0xe1b6fd7218b0c050!2sBelawan%2C%20Belawan%20I%2C%20Medan%20Kota%20Belawan%2C%20Medan%20City%2C%20North%20Sumatra!5e0!3m2!1sen!2sid!4v1659264745013!5m2!1sen!2sid" style="border:0; border-radius: 16px;" width="665px" height="500px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
            </div>
            <div class="col-7 contact-map mobile-map">
                <center>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4060928.851578041!2d102.46042170000003!3d-6.296439199999989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbb4dcc3f5cb%3A0x3b9f0302bb5fc11a!2sPT.%20Sinergy%20Sarana%20Baja!5e0!3m2!1sid!2sid!4v1662302979075!5m2!1sid!2sid" style="border:0; border-radius: 16px;" style="border:0; border-radius: 16px;" width="300px" height="350px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15924.475091023463!2d98.68546621852086!3d3.784324316961146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3036ce77adb6ced7%3A0xe1b6fd7218b0c050!2sBelawan%2C%20Belawan%20I%2C%20Medan%20Kota%20Belawan%2C%20Medan%20City%2C%20North%20Sumatra!5e0!3m2!1sen!2sid!4v1659264745013!5m2!1sen!2sid" style="border:0; border-radius: 16px;" width="300px" height="350px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                </center>
            </div>
        </div>
    </div>
</x-guest-layout>