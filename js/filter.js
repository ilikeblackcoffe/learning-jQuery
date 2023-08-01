$(function () {
    $("#filter li.category").on("click", function () {
        let category = $(this).html();
        $("#filter li").removeClass("active");
        $(this).addClass('active');

        if (category === "show all") {
            $("#portfolio li").fadeIn();
        } else {
            $("#portfolio li").fadeOut();

            $("#portfolio li").each(function () {
                if ($(this).find('img').hasClass(category)) {
                    $(this).fadeIn();
                }
            });
        }
    });
});