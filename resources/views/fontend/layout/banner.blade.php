@if (!empty($slidersItem))
    <section class="main-banner">
        <div class="main-banner__wrapper ps-relative">
            <img src="{{ asset('Fontend') }}/image/bg1.jpg" alt="background" class="image" />
            <div class="swiper mySwiper ps-relative">
                <div class="swiper-wrapper">
                    @if ($slidersItem)
                        @foreach ($slidersItem as $slider)
                            <div class="swiper-slide">
                                <img class="image" src="{{ $slider->imageBanner() }}" alt="backgroup" srcset=""
                                    class="img" />
                                <div class="content ps-absolute">
                                    <h1 class="title w-c  mb-33">
                                        {{ $slider->name }}
                                    </h1>
                                    <p class=" des  w-c">
                                        {{ $slider->description }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="swiper-button-next">
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>
@endif
