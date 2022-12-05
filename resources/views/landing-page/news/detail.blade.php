<x-guest-layout>
    <div class="section-news">
        
        <div class="hero-news">
            <h3>Article Sinergy Sarana Baja</h3>
        </div>

        <div class="breadcrumb">
            <div class="content">
                <div class="bc-text">
                    <p>Home <i class="fa-solid fa-chevron-right ml-10"></i></p>
                </div>
                <div class="bc-active">
                    <p>News</p>
                </div>
            </div>
        </div>

        <div class="news-detail">
            <div class="content">
                <div class="image">
                    <img src="{{ url($article->image) }}" alt="" class="mb-20">
                </div>
                <div class="time mb-10 med-text-desc">
                    <p>{{ $article->created_at->format('d M Y') }} | {{\Carbon\Carbon::parse($article->created_at)->diffForHumans()}}</p>
                </div>
                <div class="news-title mb-10">
                    <a href="#" style="text-decoration: none">
                        <h2><strong>{{ $article->title }}</strong></h2>
                    </a>
                </div>
                <div class="news-desc">
                    {!! $article->description !!}
                </div>
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