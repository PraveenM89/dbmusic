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

    $("#review-submit").click(function () {
        var hiddenid = $("#hiddenid").val();
        var rtext = $("#reviewtext").val().trim();
        var rating = $("#rating").val();

        if (rtext == '') {
            rtext = 'No review';
        }

        $.post('/profile/newreview', { id: hiddenid, retext: rtext, rate: rating }, function (data) {
            
        });



    });

});

    