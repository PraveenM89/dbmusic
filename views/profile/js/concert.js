$(document).ready(function () {
    var flag = 0;
    $("#reviewclick").click(function () {
        if (flag == 0) {
            $(".reviewblock").show("slow");
            flag = 1;
        }
        else {
            $(".reviewblock").hide();
            flag = 0;
        }

    });
});

    