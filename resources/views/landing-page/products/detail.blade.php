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
                        <h2><strong>{{ $data->name }}</strong></h2>
                    </a>
                </div>
                <!--
  
  Radio version of tabs.

  Requirements:
  - not rely on specific IDs for CSS (the CSS shouldn't need to know specific IDs)
  - flexible for any number of unkown tabs [2-6]
  - accessible

  Caveats:
  - since these are checkboxes the tabs not tab-able, need to use arrow keys

  Also worth reading:
  http://simplyaccessible.com/article/danger-aria-tabs/
-->

                <div class="tabset">
                    <!-- Tab 1 -->
                    
                    <input type="radio" name="tabset" id="{{ $primary_tab->slug }}" aria-controls="{{ $primary_tab->slug }}" checked>
                    <label for="{{ $primary_tab->slug }}">{{ $primary_tab->title }}</label>
                    @foreach ($details as $detail)
                        <input type="radio" name="tabset" id="{{ $detail->slug }}" aria-controls="{{ $detail->slug }}">
                        <label for="{{ $detail->slug }}">{{ $detail->title }}</label>
                    @endforeach
                    {{-- <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
                    <label for="tab1">Märzen</label> --}}
                    <!-- Tab 2 -->

                    <div class="tab-panels">
                        <section id="{{ $primary_tab->slug }}" class="tab-panel">
                            {!! $primary_tab->description !!}
                            @if ($primary_tab->images)
                                @foreach ($primary_tab->images as $data)
                                    <img src="{{ asset($data->image) }}" alt="Images" class="mb-20">
                                @endforeach
                            @endif
                        </section>
                        @foreach($details as $item)
                            <section id="{{ $item->slug }}" class="tab-panel">
                                {!! $item->description !!}
                                @if ($item->images)
                                    @foreach ($item->images as $data)
                                        <img src="{{ asset($data->image) }}" alt="Images" class="mb-20">
                                    @endforeach
                                @endif
                            </section>
                        @endforeach
                        {{-- <section id="marzen" class="tab-panel">
                            <h2>6A. Märzen</h2>
                            <p><strong>Overall Impression:</strong> An elegant, malty German amber lager with a clean,
                                rich, toasty and bready malt flavor, restrained bitterness, and a dry finish that
                                encourages another drink. The overall malt impression is soft, elegant, and complex,
                                with a rich aftertaste that is never cloying or heavy.</p>
                            <p><strong>History:</strong> As the name suggests, brewed as a stronger “March beer” in
                                March and lagered in cold caves over the summer. Modern versions trace back to the lager
                                developed by Spaten in 1841, contemporaneous to the development of Vienna lager.
                                However, the Märzen name is much older than 1841; the early ones were dark brown, and in
                                Austria the name implied a strength band (14 °P) rather than a style. The German amber
                                lager version (in the Viennese style of the time) was first served at Oktoberfest in
                                1872, a tradition that lasted until 1990 when the golden Festbier was adopted as the
                                standard festival beer.</p>
                        </section> --}}
                    </div>

                </div>
            </div>
        </div>


        <div class="newsletter">
            <div class="content">
                <div class="col-6">
                </div>
                <div class="col-6 newsletter-desc">
                    <h3 class="mb-10">Sinergy Sarana Baja</h3>
                    <p>We serve as our motto said "Quality & Improvement"</p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
