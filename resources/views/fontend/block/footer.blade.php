<footer class="main-footer">
    <div class="wrapper">
        <div class="background">
            <div class="background-map"><img src="{{asset('Fontend')}}/image/bando.png" alt=""></div>
            <div class="form w-content">
                <div class="background-form">
                    <div class="form-request d-flex">
                        <div class="title flex-derection">
                            <p class="regis">Đăng ký nhận tư vấn</p>
                            <p>
                                Liên hệ với chúng tôi để được tư vấn các giải pháp phù
                                hợp
                            </p>
                        </div>
                        <form method="post" id="email">
                            <input type="text" placeholder="Nhập email" id="emailInput" />
                            <button type="submit">GỬI YÊU CẦU</button>
                            <meta name="csrf-token" content="{{ csrf_token() }}" />
                            <p class=" err email" style="display:none;">Email không đúng định dang</p>
                        </form>

                    </div>
                </div>
            </div>
            <div class="footer w-content">
                <div class="footer-top d-flex">
                    <img src="{{ asset('Fontend') }}/image/logo asean-PNG.png" alt="logo asean" srcset="" />
                    <div class="footer-title w-c">
                        <p class="footer-title__company ">
                            CÔNG TY CỔ PHẦN ÐÀO TẠO NHÂN LỰC ASEAN
                        </p>
                        <p class="footer-title__addr">
                            Ðịa chỉ: Số nhà 455, đường Ðồng Ðăng, Tổ 5, Khu 1, Phường
                            Việt Hưng, TP. Hạ Long, Tỉnh Quảng Ninh.
                        </p>
                        <div class="address d-flex">
                            <p >Ðiện thoại: 02036 577 666</p>
                            <p >Email: asean.dtnl@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="footer-content flex-center-between">
                    <ul class="w-c">
                        <li class="header">Thông tin</li>
                        <li><a href="#" class="w-c">Về chúng tôi</a></li>
                        <li><a href="#" class="w-c">Dịch vụ</a></li>
                        <li><a href="#" class="w-c">Tin tức</a></li>
                        <li><a href="#" class="w-c">Liên hệ</a></li>
                    </ul>
                    <ul class="w-c">
                        <li class="header">Chi nhánh Hà Nội</li>
                        <li>
                            <span>Ðịa chỉ:</span> Số 82/116, Nhân Hòa, Nhân Chính,
                            Thanh Xuân, TP. Hà Nội.
                        </li>
                        <li><span>Ðiện thoại:</span> 0242.2693.909</li>
                    </ul>
                    <ul class="w-c">
                        <li class="header">Chi nhánh Hải Phòng</li>
                        <li>
                            <span>Ðịa chỉ:</span> Số 3 Lê Thánh Tông, Máy Tơ, Ngô
                            Quyền, TP. Hải Phòng
                        </li>
                    </ul>
                    <ul class="w-c">
                        <li class="header">Chi nhánh Nghệ An</li>
                        <li>
                            <span>Ðịa chỉ: </span>Đường Trần Thủ Ðộ, khối 17, P.
                            Trường Thi, TP.Vinh, Nghệ An.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="copyright flex-center-between w-content w-c">
                <p>
                    © Copyright 2022 Asean. Ghi rõ nguồn asean.com khi sử dụng
                    thông tin từ website
                </p>
                <p>Điều khoản và Chính sách bảo mật</p>
            </div>
        </div>
    </div>
</footer>
