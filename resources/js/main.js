function getCookie(name) {
    let v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
    return v ? v[2] : null;
}

function setCookie(name, value, days) {
    let d = new Date;
    d.setTime(d.getTime() + 24 * 60 * 60 * 1000 * days);
    document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
}

function deleteCookie(name) {
    setCookie(name, '', -1);
}


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
$(document).on("click", ".btn-logout", function () {
    deleteCookie("logged");
    window.location.href = window.location.href;
});


$(document).on("click",".btn-login", function () {
    $("#btn-login-check").css("display", "block");

    let out = "";

    out += "<input type='text' name='login' placeholder='Login' value='User1'>";
    out += "<input type='text' name='password' placeholder='Password' value='1234567'>";

    $(".modal-body").html(out);
})

$(document).on("click", "#btn-login-check", function () {

    let login = $("[name='login']").val();
    let password = $("[name='password']").val();

    $.ajax({
        url: "core/login/data/checkLogin.php",
        type: "post",
        dataType: "json",
        data: {
            login: login,
            password: password
        },
        success: function (data) {

            if (data) {
                setCookie("logged", data.logged, "7");
                // $(".modal-body").html("<div class='text-success'>OK !</div>");
                // $("#btn-login-check").css("display", "none");
                // $(".login").css("display", "none");
                window.location.href = window.location.href;

            }else{
                $(".modal-body").html("<div class='text-error'>Login oder password ist falsch !</div>");
                // $("#btn-login-check").css("display", "none");
            }
        }
    });

});


