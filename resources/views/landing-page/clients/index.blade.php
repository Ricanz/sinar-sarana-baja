<x-guest-layout>
    <div class="section-news">
        
        <div class="hero-news">
            <h3>Klien Sinergy Sarana Baja</h3>
        </div>

        <div class="breadcrumb">
            <div class="content">
                <div class="bc-text">
                    <p>Beranda <i class="fa-solid fa-chevron-right ml-10"></i></p>
                </div>
                <div class="bc-active">
                    <p>Klien</p>
                </div>
            </div>
        </div>

        <div class="news-detail">
            <div class="content">
                <div class="news-title mb-10">
                    <a href="#" style="text-decoration: none">
                        <h2><strong>Klien</strong></h2>
                    </a>
                </div>
            </div>
        </div>

        <div class="section-3 no-background products-section">
            <div class="projects">
                @foreach($clients as $item)
                <div class="col-3 card-project mb-35">
                    <img src="{{ asset($item->image) }}" alt="">
                    <div class="card-desc">
                        <a href="#" target="_blank">
                            <h6 class="mb-10">{{ $item->title }}</h6>
                        </a>
                        <hr class="divider-hr mb-10">
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        
        <div class="newsletter" style="background-image: url({{ asset($newsletter->image) }})">
            <div class="content">
                <div class="col-6">
                </div>
                <div class="col-6 newsletter-desc">
                    <h3 class="mb-10">{{ $newsletter->vission }}</h3>
                    <p>{!! $newsletter->description !!}</p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>