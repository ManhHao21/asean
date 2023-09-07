$(document).ready(function () {
    $("#emailInput").focus(function () {
        $(".err.email").hide();
        $("#emailInput").css("border", "1px solid #d6d8db");
    });

    $('body form[id="email"] button[type="submit"]').on("click", function (e) {
        e.preventDefault();
        const emailInput = $("#emailInput");
        const errorText = $(" .err.email");
        const emailValue = emailInput.val().trim();

        if (!IsEmail(emailValue) || emailValue === "") {
            errorText.show();
            $("#emailInput").css("border", "1px solid #fc0001");
        } else {
            errorText.hide();
            $("#emailInput").css("border", "none");
            emailInput.val("");

            $.ajax({
                type: "post",
                url: "send-mail",
                data: {
                    email: emailValue,
                },
                dataType: "json",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                success: function (response) {
                    console.log("AJAX request successful", response);
                },
                error: function (xhr, status, error) {
                    console.error("AJAX request error", error);
                },
            });
        }
    });

    function IsEmail(email) {
        var regex =
            /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    var swiper = new Swiper(".mySwipers", {
        slidesPerView: 3,
        spaceBetween: 30,

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    var swiper = new Swiper(".mySwiperss", {
        slidesPerView: 6,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
});
