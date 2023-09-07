 @if (!empty($optionHomePower) && isset($optionHomePower))
     <section class="main-info">
         <div class="main-info__wrap">
             <div class="info">
                 <div class="info-top flex-derection w-content">
                     <h1>About us</h1>
                     <div class="wrapper flex-center-between">
                         <div class="info-top__left">
                             <div class="content">
                                 <p class=" name">PHƯƠNG CHÂM</p>
                                 <p class="red-c title">
                                     @if ($optionHomePower['data']['title'])
                                         {{ $optionHomePower['data']['title'] }}
                                     @endif
                                 </p>
                                 <p class="des">
                                     @if ($optionHomePower['data']['des'])
                                         {{ $optionHomePower['data']['des'] }}
                                     @endif
                                 </p>

                             </div>
                             <a href="#" class="button">Xem thêm</a>
                         </div>
                         <div class="info-top__right d-flex">
                             @if ($optionHomePower['data']['images'])
                                 @foreach ($optionHomePower['data']['images'] as $item)
                                     <img src="{{ asset($item) }}" alt="info-img__a1" width="250px" height="250px" />
                                 @endforeach
                             @endif
                             {{-- 
                        <img src="{{ asset('Fontend') }}/image/a1.png" alt="info-img__a1" width="250px"
                            height="250px" />
                        <img src="{{ asset('Fontend') }}/image/a1.png" alt="info-img__a1" width="250px"
                            height="250px" /> --}}
                         </div>
                     </div>
                     <div class="list w-content flex-center-between">
                         @foreach ($optionHomePower['power'] as $key => $powerData)
                             <div class="list-item">
                                 <img src="{{ isset($powerData['image-power']) ? $powerData['image-power'] : "" }}" alt="tam nhin" srcset=""
                                     class="list-item__img" width="76px" height="76px" />
                                     <h3 class="list-item__title f-700">{{ isset($powerData['title']) ? strip_tags($powerData['title']) : "" }}</h3>

                                 <p class="list-item__des ">
                                     {!! isset($powerData['content']) ?  htmlspecialchars_decode(strip_tags($powerData['content'])) : "" !!}
                                 </p>

                             </div>
                         @endforeach

                         {{-- <div class="list-item">
                        <img src="{{ asset('Fontend') }}/image/Object.png" alt="tam nhin" srcset=""
                            class="list-item__img" width="76px" height="76px" />
                        <h3 class="list-item__title">Tầm nhìn</h3>
                        <p class="list-item__des">
                            Chúng tôi luôn đặt phát triển bền vững làm cốt lõi trong
                            lĩnh vực kinh doanh của mình. Từng bước trở thành một
                            trong những đơn vị ưu thế trong lĩnh vực an toàn, vệ sinh
                            lao động và đào tạo nghề.
                        </p>
                    </div>
                    <div class="list-item">
                        <img src="{{ asset('Fontend') }}/image/Object.png" alt="tam nhin" srcset=""
                            class="list-item__img" width="76px" height="76px" />
                        <h3 class="list-item__title">Tầm nhìn</h3>
                        <p class="list-item__des">
                            Chúng tôi luôn đặt phát triển bền vững làm cốt lõi trong
                            lĩnh vực kinh doanh của mình. Từng bước trở thành một
                            trong những đơn vị ưu thế trong lĩnh vực an toàn, vệ sinh
                            lao động và đào tạo nghề.
                        </p>
                    </div> --}}
                     </div>
                 </div>
             </div>
         </div>
     </section>
 @endif
