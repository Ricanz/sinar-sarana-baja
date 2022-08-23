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

        @foreach ($news as $item)
            <div class="article">
                <div class="col-8 image-news mr-20">
                    <img src="{{ asset($item->image) }}" alt="" height="250px">
                </div>
                <div class="col-4 news-desc news-detail-mob">
                    <div class="time mb-10 med-text-desc">
                        <p>{{ $item->created_at->format('d M Y') }} | {{\Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</p>
                    </div>
                    <div class="news-title mb-10">
                        <a href="{{ url('news-detail/'.$item->slug) }}" style="text-decoration: none">
                            <h2><strong>{{ $item->title }}</strong></h2>
                        </a>
                    </div>
                    <div class="news-desc">
                        <div class="med-text-desc">
                            {!! Str::limit($item->short_desc, 100, '...') !!}
                        </div>
                    </div>
                    <div class="news-author">
                        <img src="{{ asset('custom/landing-page/images/admins/admin.png') }}" alt="">
                        <h5 class="selected">Admin SSB</h5>
                    </div>
                </div>
            </div>
            
        @endforeach

        {{-- <div class="load-more">
            <a href="#" class="btn btn-load-more">
                <img src="{{ asset('custom/landing-page/images/icons/ic_load.png') }}" alt=""> Load More
            </a>
        </div> --}}

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