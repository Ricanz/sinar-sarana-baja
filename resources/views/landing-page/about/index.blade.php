<x-guest-layout>
    <div class="section-2 about-us">
        <div class="about">
            <div class="row">
                <div class="col-5 about-image">
                    <img src="{{ asset($profile->image) }}" alt="">
                </div>
                <div class="col-7 about-desc about-us">
                    <h2 class="mb-20">Profil</h2>
                    <div class="med-text-desc mb-35">
                        <p>
                            {!! $profile->description !!}
                        </p>
                    </div>
                    <a href="#" class="btn btn-primary btn-white-mob">Check our work<i class="ml-10 fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

        </div>
    </div>
    <div class="section-vision" id="vission-mission">
        <div class="vision-bg">
            <h3 class="item">Our Vision</h3>
            <center class="item">
                <img class="btn-play-fill" src="{{ asset('custom/landing-page/images/icons/iconbase.png') }}" alt="">
            </center>
            <h5 class="mb-20">
                {!! $profile->vission !!}
            </h5>
        </div>
    </div>

    <div class="section-mission">
        <div class="mission-bg">
            <h3 class="item mb-20">Our Mission</h3>
            <div class="med-text-desc">
                <p>Misi PT. Sinergy Sarana Baja</p>
            </div>
            <div class="row dekstop-mission">
                <div class="col-6 mission-img">
                    <img src="{{ asset('custom/landing-page/images/illustration_vision.png') }}" alt="">
                </div>
                <div class="col-6 mission-desc">
                    <div class="col-6 content">
                        <div class="mission mb-20">
                            <h1 class="mb-35">01</h1>
                            <h5 class="mb-20">{{ $mission1->title }}</h5>
                            <div class="med-text-desc">
                                {!! $mission1->description !!}
                            </div>
                        </div>
                        <div class="mission">
                            <h1 class="mb-35">02</h1>
                            <h5 class="mb-20">{{ $mission2->title }}</h5>
                            <div class="med-text-desc">
                                {!! $mission2->description !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-6 content ml-20">
                        <div class="mission mb-20">
                            <h1 class="mb-35">03</h1>
                            <h5 class="mb-20">{{ $mission3->title }}</h5>
                            <div class="med-text-desc">
                                {!! $mission3->description !!}
                            </div>
                        </div>
                        <div class="mission">
                            <h1 class="mb-35">04</h1>
                            <h5 class="mb-20">{{ $mission4->title }}</h5>
                            <div class="med-text-desc">
                                {!! $mission4->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mobile-mission">
                <div class="mission-desc">
                    <div class="content">
                        <div class="mission mb-20">
                            <h1 class="mb-35">01</h1>
                            <h5 class="mb-20">{{ $mission1->title }}</h5>
                            <div class="med-text-desc">
                                {!! $mission1->description !!}
                            </div>
                        </div>
                        <div class="mission mb-20">
                            <h1 class="mb-35">02</h1>
                            <h5 class="mb-20">{{ $mission2->title }}</h5>
                            <div class="med-text-desc">
                                {!! $mission2->description !!}
                            </div>
                        </div>
                        <div class="mission mb-20">
                            <h1 class="mb-35">03</h1>
                            <h5 class="mb-20">{{ $mission3->title }}</h5>
                            <div class="med-text-desc">
                                {!! $mission3->description !!}
                            </div>
                        </div>
                        <div class="mission mb-20">
                            <h1 class="mb-35">04</h1>
                            <h5 class="mb-20">{{ $mission4->title }}</h5>
                            <div class="med-text-desc">
                                {!! $mission4->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="section-4">
        <div class="service-desc mb-80">
            <h3>Our Core Values</h3>
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
</x-guest-layout>