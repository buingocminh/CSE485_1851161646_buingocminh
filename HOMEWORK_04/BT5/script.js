$(document).ready(function () {
    $(".dropdown").each(function () {
        $(this).mouseenter(function () {
            if($(this).css('height')!='450px'){
            $(this).animate({ height: '+=400px' }, "slow");
            }
        })
        $(this).mouseout(function () {
            $(this).css("height", '50')
        })
    })
})