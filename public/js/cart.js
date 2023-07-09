$(document).ready(function () {
    // $(".hitung").prop("disabled", true);
    $(document).on("click", ".plus", function () {
        $(".hitung").val(parseInt($(".hitung").val()) + 1);
    });
    $(document).on("click", ".minus", function () {
        $(".hitung").val(parseInt($(".hitung").val()) - 1);
        if ($(".hitung").val() == 0) {
            $(".hitung").val(1);
        }
    });
});
