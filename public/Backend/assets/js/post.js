$(document).ready(function () {
    $("#image-power").on("change", function () {
        var files = $(this)[0].files;
        var imageContainer = $(".image-review-thumb").empty();
        console.log(imageContainer);
        if (files.length > 0) {
            $("#deleteImageButton").show();
        }
        for (var i = 0; i < files.length; i++) {
            var reader = new FileReader();
            reader.onload = function (e) {
                var image =
                    '<div class="image-container mt-5 mr-5">' +
                    '<img src="' +
                    e.target.result +
                    '" alt="Preview Image" style="max-width: 200px; height: auto;">';
                imageContainer.append(image);
            };
            reader.readAsDataURL(files[i]);
        }
    });
});

$(document).ready(function () {
    $(document).ready(function () {
        $(".image-input").on("change", function (e) {
            var input = e.target;
            var $powerContainer = $(input).closest(".power-container");
            var previewImage = $powerContainer.find(".image-preview");
            previewImage.empty();
            var reader = new FileReader();

            reader.onload = function (e) {
                var image =
                    '<div class="image-container mt-5 mr-5">' +
                    '<img src="' +
                    e.target.result +
                    '" alt="Preview Image" style="max-width: 200px; height: auto;">' +
                    "</div>";
                previewImage.html(image);
            };

            reader.readAsDataURL(input.files[0]);
        });
    });

   
});
