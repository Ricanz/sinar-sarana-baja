<x-guest-layout>
    <div class="section-news">

        <div class="hero-news">
            <h3>Produk Sinergy Sarana Baja</h3>
        </div>

        <div class="breadcrumb">
            <div class="content">
                <div class="bc-text">
                    <p>Beranda <i class="fa-solid fa-chevron-right ml-10"></i></p>
                </div>
                <div class="bc-active">
                    <p>Produk</p>
                </div>
            </div>
        </div>

        <div class="news-detail">
            <div class="content">
                <div class="time mb-10 med-text-desc">
                    <p>Produk Kami</p>
                </div>
                <div class="news-title mb-10">
                    <a href="#" style="text-decoration: none">
                        <h2><strong>{{ $details->title }}</strong></h2>
                    </a>
                </div>

                {{-- {!! $details->description !!} --}}

                <div class="tabset">
                    <!-- Tab 1 -->
                    {{-- <input type="radio" name="tabset" id="{{ $details->slug }}" aria-controls="{{ $details->slug }}" checked>
                    <label for="{{ $details->slug }}">{{ $details->title }}</label> --}}
                    @foreach ($subs as $detail)
                        <input type="radio" name="tabset" id="{{ $detail->slug }}" aria-controls="{{ $detail->slug }}" {{ $loop->iteration == 1 ? 'checked' : '' }}>
                        <label for="{{ $detail->slug }}">{{ $detail->title }}</label>
                    @endforeach

                    <div class="tab-panels">
                        {{-- <section id="{{ $details->slug }}" class="tab-panel">
                            {!! $details->description !!}
                        </section> --}}
                        @foreach($subs as $item)
                            <section id="{{ $item->slug }}" class="tab-panel">
                                {!! $item->description !!}
                            </section>
                        @endforeach
                    </div>

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
