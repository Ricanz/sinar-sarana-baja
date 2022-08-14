<x-guest-layout>
    <div class="section-news">
        
        <div class="hero-news">
            <h3>Jasa Sinergy Sarana Baja</h3>
        </div>

        <div class="breadcrumb">
            <div class="content">
                <div class="bc-text">
                    <p>Home <i class="fa-solid fa-chevron-right ml-10"></i></p>
                </div>
                <div class="bc-active">
                    <p>Services</p>
                </div>
            </div>
        </div>

        <div class="news-detail">
            <div class="content">
                <div class="time mb-10 med-text-desc">
                    <p>Our Services</p>
                </div>
                <div class="news-title mb-10">
                    <a href="#" style="text-decoration: none">
                        <h2><strong>{{ $data->title }}</strong></h2>
                    </a>
                </div>
                <div class="news-desc">
                    <p>
                        {!! $data->description !!}
                    </p>
                </div>
            </div>
        </div>

        
        <div class="newsletter">
            <div class="content">
                <div class="col-6">
                </div>
                <div class="col-6 newsletter-desc">
                    <h3 class="mb-10">Sinergy Sarana Baja</h3>
                    <p>We serve as ur motto said "Quality & Improvement"</p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>