@if (!empty($custommerHightlightItem))
    <section class="main-custommer">
        <div class="main-custommer__wrap w-content">
            <div class="title">
                <h1 class="title-opacity title-custommer">Customer</h1>
                <p>Khách hàng tiêu biểu</p>
            </div>
            <div class="custommer swiper mySwiperss w-content">
                <div class="custommer-slider swiper-wrapper">
                    @foreach ($custommerHightlightItem as $item)
                        <a href="{{ $item->link }}" class="custommer-slider__item swiper-slide" target="_blank">
                            <img src="{{ $item->imageReview() }}" alt="logo" srcset="" width="130px"
                                height="75px" />
                        </a>
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
@endif
