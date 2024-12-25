function readURL(input, id = '#imagePreview') {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(id).css(
                "background-image",
                "url(" + e.target.result + ")"
            );
            $(id).hide();
            $(id).fadeIn(650);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function () {
    readURL(this);
});

// image AR
function readARURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#imageARPreview").css(
                "background-image",
                "url(" + e.target.result + ")"
            );
            $("#imageARPreview").hide();
            $("#imageARPreview").fadeIn(650);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageARUpload").change(function () {
    readARURL(this);
});
