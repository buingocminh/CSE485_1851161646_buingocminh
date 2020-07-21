
$(document).ready(function(){
    $("#number").change(function(){
        var num = $(this).val();
        $("#display").html("");
        for(let i=0; i<num; i++){
            $("#display").append('<div class="square"></div>')
        }
    })
})