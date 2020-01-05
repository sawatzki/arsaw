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

// login
$(document).on("click", "#btn-login-check", function () {

    let login = $("[name='login']").val();
    let password = $("[name='password']").val();

    $.ajax({
        url: "core/login/data/read.php",
        type: "post",
        dataType: "json",
        data: {
            login: login,
            password: password
        },
        success: function(data){
            if(data) {
                console.log(data);
                $(".modal-body").html("<div class='text-success'>OK !</div>");
                $("#btn-login-check").css("display", "none");
                $(".login").css("display", "none");
            }else{
                alert("user not exist!");
            }
        }
    });

});


