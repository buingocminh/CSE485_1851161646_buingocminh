$(document).ready(function () {
    $("#all").click(function () { 
        $("#all").addClass("activePort");
        $("#web").removeClass("activePort");
        $("#app").removeClass("activePort");
        $("#icon").removeClass("activePort");
        $("#col_1").show();
        $("#col_2").show();
        $("#col_3").show();
        $("#col_4").show();
    });
    $("#web").click(function () { 
        $("#web").addClass("activePort");
        $("#all").removeClass("activePort");
        $("#app").removeClass("activePort");
        $("#icon").removeClass("activePort");
        $("#col_1").show();
        $("#col_2").hide();
        $("#col_3").hide();
        $("#col_4").show();
    });
    $("#app").click(function () { 
        $("#app").addClass("activePort");
        $("#web").removeClass("activePort");
        $("#all").removeClass("activePort");
        $("#icon").removeClass("activePort");
        $("#col_1").hide();
        $("#col_2").show();
        $("#col_3").hide();
        $("#col_4").hide();
    });
    $("#icon").click(function () { 
        $("#icon").addClass("activePort");
        $("#web").removeClass("activePort");
        $("#all").removeClass("activePort");
        $("#app").removeClass("activePort");
        $("#col_1").hide();
        $("#col_2").hide();
        $("#col_3").show();
        $("#col_4").hide();
    });

});