$(document).ready(function () {
    $("#cricle").mouseenter(function () {
        $(this).fadeOut(1000)
    })

    $("#cricle").mouseleave(function () {
        $(this).show()
    })

})