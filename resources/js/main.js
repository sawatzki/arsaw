//MENU-TOP
if ($(document).width() < 1183) {

    $(document).on("mouseout", "#menu-top-mobile-icon", function (e) {
        e.preventDefault();
        $("#menu-top").css({"margin-left": "-195px"});
        $("#menu-top").css({"transition": "ease-in-out 5s"});
    });

    $(document).on("mouseout", "#menu-top", function (e) {
        e.preventDefault();
        $("#menu-top").css({"margin-left": "-195px"});
        $("#menu-top").css({"transition": "ease-in-out 5s"});
    });


    $(document).on("mouseover", "#menu-top-mobile-icon", function (e) {
        e.preventDefault();
        $("#menu-top").css({"margin-left": "0"});
        $("#menu-top").css({"transition": "ease-in-out 0.5s"});
    });

    $(document).on("mouseover", "#menu-top", function (e) {
        e.preventDefault();
        $("#menu-top").css({"margin-left": "0"});
        $("#menu-top").css({"transition": "ease-in-out 0.5s"});
    });
}