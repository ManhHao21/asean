@if (!empty($custommerItem))
    <section class="main-review">
        <div class="w-content wrapper">
            <h1 class="text-center title-opacity">Testimonial</h1>
            <div class="slider">
                <p class="title text-center">Cảm nhận khách hàng</p>
                <div class="slider-wrap">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="102" height="84"
                        viewBox="0 0 102 84" fill="none">
                        <path opacity="0.100214"
                            d="M32.7212 37.6637C30.2032 36.9581 27.6852 36.6 25.2358 36.6C21.4534 36.6 18.2972 37.4414 15.85 38.4717C18.2093 30.0644 23.877 15.5578 35.1674 13.9241C36.213 13.7728 37.0699 13.0368 37.3551 12.0462L39.8228 3.4552C40.0308 2.72867 39.9075 1.95099 39.4817 1.32049C39.056 0.689996 38.3718 0.269318 37.605 0.167019C36.7717 0.0563688 35.9224 0 35.0805 0C21.5284 0 8.10716 13.7686 2.44373 33.4831C-0.880754 45.0491 -1.85558 62.4378 6.33338 73.3828C10.9158 79.5071 17.6012 82.7776 26.2042 83.1043C26.2396 83.1053 26.2739 83.1064 26.3093 83.1064C36.924 83.1064 46.3366 76.148 49.2 66.1864C50.9105 60.2311 50.1373 53.9856 47.0208 48.5962C43.9376 43.2672 38.8597 39.383 32.7212 37.6637Z"
                            fill="#FC0001" />
                        <path opacity="0.100214"
                            d="M98.9311 48.5966C95.8478 43.2667 90.7699 39.3825 84.6313 37.6633C82.1133 36.9576 79.5952 36.5996 77.1468 36.5996C73.3644 36.5996 70.2072 37.4409 67.7599 38.4712C70.1192 30.064 75.787 15.5576 87.0786 13.924C88.1242 13.7726 88.98 13.0367 89.2664 12.0461L91.734 3.45515C91.9421 2.72863 91.8187 1.95096 91.393 1.32047C90.9683 0.689987 90.2841 0.269314 89.5162 0.167017C88.684 0.0563681 87.8347 0 86.9917 0C73.4395 0 60.018 13.7684 54.3534 33.4826C51.03 45.0485 50.0551 62.437 58.2453 73.3839C62.8267 79.5072 69.5133 82.7786 78.1152 83.1043C78.1506 83.1053 78.1849 83.1064 78.2214 83.1064C88.8352 83.1064 98.249 76.1481 101.112 66.1866C102.821 60.2314 102.046 53.985 98.9311 48.5966Z"
                            fill="#FC0001" />
                    </svg>
                    <div class="w-content swiper mySwipers slider" id="slider-user">
                        <div class="swiper-wrapper">
                            @foreach ($custommerItem as $key => $item)
                                <div class="slider-wrapper__item swiper-slide">
                                    <div class="custommer">
                                        <div class="user d-flex">
                                            <img src="{{ $item->imageReview() }}" alt="img user" srcset=""
                                                width="66px" height="66px" class="user-img" />
                                            <div class="user-info flex-derection">
                                                <p class="user-info__name">{{ $item->name }}</p>
                                                <p class="user-info__work">{{ $item->postion }}</p>
                                            </div>
                                        </div>
                                        <div class="des">
                                            <p class="f-400-s16">
                                                {{ $item->feedback }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
