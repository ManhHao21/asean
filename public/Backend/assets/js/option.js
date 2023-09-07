$(document).ready(function () {
    $("body").on("click", "button[type='submit']", function (e) {
        e.preventDefault();
        var selectedCategory = $('select[name="category_id"]').val();
        var numberInput = $('input[name="number"]').val();
        var selectedDisplay = $('select[name="display"]').val();
        $.ajax({
            type: "POST",
            url: "getoption",
            data: {
                cate: selectedCategory,
                number: numberInput,
                display: selectedDisplay,
            },
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            dataType: "json",
            success: function (response) {
                if (response.status == 200) {
                    location.reload();
                }
            },
        });
    });
});
