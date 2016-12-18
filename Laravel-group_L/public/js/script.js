
$(document).ready(function(){
    $(".btn-block").click(function () {
        $(".booking").addClass("active");
    });
    $(".close").click(function () {
        $(".booking").removeClass("active");
    });
});