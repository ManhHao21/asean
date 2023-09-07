$(document).ready(function () {
    $("body").on("change", ".check", function (e) {
        var isChecked = this.checked;
        console.log(isChecked);
        var id = $(this).data("key");
        console.log(id);
        if ($(this).hasClass("post")) {
            callAjax("post-active", id, isChecked);
        } else if ($(this).hasClass("slider")) {
            callAjax("slider-active", id, isChecked);
        } else if ($(this).hasClass("review")) {
            callAjax("review-active", id, isChecked);
        } else if ($(this).hasClass("custommer")) {
            callAjax("custommer-active", id, isChecked);
        }
    });
});

function callAjax(url, id, check, type) {
    $.ajax({
        type: "post",
        url: url,
        data: {
            id: id,
            isChecked: check,
        },
        dataType: "json",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            if (response.success == 200) {
                Command: toastr["success"]("Thay đổi tình trang thành công");
                toastr.options = {
                    closeButton: false,
                    debug: false,
                    newestOnTop: false,
                    progressBar: false,
                    positionClass: "toast-top-right",
                    preventDuplicates: false,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    timeOut: "5000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                };
            }
        },
        error: function () {},
    });
}
