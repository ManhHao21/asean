<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('Fontend') }}/build/css/main.min.css" />
    <link rel="stylesheet" href="{{ asset('Fontend') }}/css/reset.css" />
    <link rel="stylesheet" href="{{ asset('Fontend') }}/font/font roboto/font-roboto.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('Fontend') }}/font/font/font.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>Asean</title>
</head>

<body>
    <div class="wrapper" class="page-wrapper">
        @include('fontend.block.header')
        <main class="main">
            @if (!empty($slidersItem))
                @include('fontend.layout.banner', ['slidersItem' => $slidersItem])
            @else
            @endif

            @if (!empty($optionHomePower))
                @include('fontend.layout.power', ['optionHomePower' => $optionHomePower])
            @else
            @endif
            @if (!empty($services))
                <section class="main-services">
                    <div class="main-services__top w-content d-flex">
                        <div class="content">
                            <h1 class="title-opacity services">Services</h1>
                            <div class="title">
                                <h3>{{ $services->title }}</h3>
                            </div>
                        </div>
                        <div class="des-wrap">
                            <div class="des">
                                {{ $services->description }}
                            </div>
                            <svg width="57" height="3" viewBox="0 0 57 3" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="57" height="3" fill="#FC0001" />
                            </svg>
                        </div>
                    </div>
                    <div class="main-services__bottom">
                        <div class="background">
                            <div class="list w-content">
                                @if (!empty($listServices))
                                    @foreach ($listServices as $key => $services)
                                        <div class="list-item">
                                            <img src="{{ asset('Fontend') }}/image/service.png" alt="service"
                                                srcset="" width="52px" height="52px" />
                                            <h3 class="list-item__title">
                                                @if ($services['title'])
                                                    {!! $services['title'] !!}
                                                @endif
                                            </h3>
                                            <p class="list-item__des ">
                                                @if ($services['des'])
                                                    {!! strip_tags($services['des']) !!}
                                                @endif
                                            </p>
                                        </div>
                                    @endforeach
                                @endif
                                {{-- <div class="list-item">
                                <img src="{{ asset('Fontend') }}/image/service.png" alt="service" srcset=""
                                    width="52px" height="52px" />
                                <h3 class="list-item__title">Dịch vụ huấn luyện</h3>
                                <p class="list-item__des f-400-s16">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco
                                </p>
                            </div>
                            <div class="list-item">
                                <img src="{{ asset('Fontend') }}/image/service.png" alt="service" srcset=""
                                    width="52px" height="52px" />
                                <h3 class="list-item__title">Dịch vụ huấn luyện</h3>
                                <p class="list-item__des f-400-s16">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco
                                </p>
                            </div>
                            <div class="list-item">
                                <img src="{{ asset('Fontend') }}/image/service.png" alt="service" srcset=""
                                    width="52px" height="52px" />
                                <h3 class="list-item__title">Dịch vụ huấn luyện</h3>
                                <p class="list-item__des f-400-s16">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco
                                </p>
                            </div> --}}
                            </div>
                        </div>
                    </div>
                </section>
            @endif
            @if (!empty($custommerItem))
                @include('fontend.layout.review', ['custommerItem' => $custommerItem])
            @else
            @endif
            @if (!empty($custommerHightlightItem))
                @include('fontend.layout.custommer_hightlight', ['custommerHightlightItem' => $custommerHightlightItem])
            @else
            @endif
         
            {{-- <section class="main-review">
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
                                    @if (!empty($customerReviews))
                                        @foreach ($customerReviews as $key => $item)
                                            <div class="slider-wrapper__item swiper-slide">
                                                <div class="custommer">
                                                    <div class="user d-flex">
                                                        <img src="{{ $item->imageReview() }}" alt="img user"
                                                            srcset="" width="66px" height="66px"
                                                            class="user-img" />
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
                                    @endif
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
        
            @include('fontend.layout.blog', ['cates' => $postCategories])
            @include('fontend.block.footer')
        </main>
    </div>

    <div class="list-sharing">
        <ul class="list-sharing__wrap">
            <li class="item row">
                <a class="item--icon" rel="nofollow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45"
                        fill="none">
                        <path
                            d="M22.5 0C10.0738 0 0 10.0738 0 22.5C0 27.0729 1.36784 31.3255 3.71171 34.8766L0 45L10.4702 41.5102C13.95 43.7167 18.0737 45 22.5 45C34.9262 45 45 34.9262 45 22.5C45 10.0738 34.9262 0 22.5 0Z"
                            fill="#FC0001" />
                        <path
                            d="M34.9129 29.4502V33.1875C34.9184 34.5639 33.805 35.6834 32.4263 35.6897C32.3479 35.6897 32.2696 35.6866 32.1912 35.6796C28.35 35.263 24.66 33.9533 21.4184 31.8546C18.4026 29.9421 15.8453 27.3895 13.9282 24.3791C11.8186 21.129 10.5059 17.4282 10.0962 13.5775C9.97213 12.2073 10.9846 10.9955 12.3578 10.8713C12.4323 10.8658 12.506 10.862 12.5805 10.862H16.3257C17.5787 10.8496 18.647 11.7666 18.8224 13.0049C18.9807 14.2013 19.2739 15.3752 19.696 16.5056C20.0389 17.4165 19.8194 18.4429 19.1343 19.1342L17.5492 20.7162C19.3259 23.8352 21.9142 26.418 25.0393 28.1916L26.6244 26.6097C27.3173 25.9254 28.346 25.7066 29.2585 26.0488C30.3912 26.4708 31.5675 26.7633 32.7662 26.9208C34.0215 27.0977 34.9447 28.1856 34.9129 29.4502Z"
                            fill="white" />
                    </svg>
                </a>
            </li>
            <li class="item">
                <a class="item__icon" href="" target="_blank" rel="nofollow">
                    <img src="{{ asset('Fontend') }}/image/zal.png" alt="zalo" srcset="" />
                </a>
            </li>
            <li class="item">
                <a class="item--icon" href="" target="_blank" rel="nofollow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45"
                        fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.0117188 20.8331C0.0117188 9.32739 10.0085 0 22.3403 0C34.6728 0 44.6687 9.32739 44.6687 20.8334C44.6687 32.3385 34.6728 41.6667 22.3403 41.6667C20.0392 41.6667 17.8192 41.3416 15.7299 40.7398L8.23636 45V36.9855C3.21698 33.1655 0.0117188 27.3483 0.0117188 20.8331ZM18.873 21.8642L24.5991 27.8767L36.5723 15.1271L25.7351 21.0347L19.9555 15.1271L7.91418 27.8767L18.873 21.8642Z"
                            fill="#FFB800" />
                    </svg>
                </a>
            </li>
        </ul>
    </div>
    <script type="text/javascript" src="{{ asset('Fontend') }}/build/js/node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('Fontend') }}/js/main.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>

</html>
