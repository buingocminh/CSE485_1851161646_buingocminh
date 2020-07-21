$(document).ready(function () {
    $(".circles").each(function () {
        $(this).click(function () {
            if ($(this).css("background-color") == "rgb(255, 0, 0)") {
                $(this).css("background-color", '#abcdef');
            } else {
                $(this).css("background-color", 'red');
            };
        })
    })
    $(".squares").each(function () {
        $(this).click(function () {
            var w = $(this).width()
            $(this).css("width", w/2)
            var h = $(this).height()
            $(this).css("height", h/2)
  
        })
    })

    $(".rectangles").each(function(){
        var mrg=0 ;
        $(this).click(function(){
            mrg=mrg +10;
            $(this).css('marginTop', mrg + 'px');
        })
    })
})