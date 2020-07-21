$(document).ready(function(){
    $("#textarea").bind('input propertychange',function(){
       $("#story").text($(this).val()) 
        
    });
    $("#new").click(function(){
        $("#textarea").val('')
        $("#story").text('')
    });
    $("#change").click(function(){
        let newclass =$("#type").val()
        $("#story").toggleClass(newclass)
        
    });
})