$(document).ready(function () {

    let url = document.location.href;
    let arrView = url.split("=");
    let view = arrView[1];

    let inProgress = false;
    let startFrom = 0;

    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() >= $(document).height() && !inProgress) {
            fetchRows();
        }
    });

    function fetchRows() {

        if(!view){
            view = "example";
        }

        $.ajax({
            url: "components/" + view + "/data/index.php",
            type: "post",
            dataType: "json",
            data: {
                startFrom: startFrom,
            },
            success: function (data) {

                let out = '';

                $.each(data, function (index, row) {

                    out += "<div class='row' id='row-" + row.id + "'>";
                    out += "<div class='row-value'>";
                    out += "<div id='row-title-" + row.id + "'><b>" + row.title + "</b></div>";
                    out += "<div id='row-description-" + row.id + "'>" + row.description + "</div>";
                    out += "</div>";
                    out += "<div class='cmd-group'>";
                    out += "<button type='button' class='example-read' value='" + row.id + "'>read</button>";
                    out += "<button type='button' class='row-edit' value='" + row.id + "'>edit</button>";
                    if (row.active == 1) {
                        out += "<button type='button' class='example-delete' act='1' value='" + row.id + "'>off</button>";
                    } else {
                        out += "<button type='button' class='example-delete' act='0' value='" + row.id + "'>on</button>";
                    }
                    out += "<button type='button' class='row-destroy' value='" + row.id + "'>des</button>";
                    out += "</div>";

                    out += "<div id='edit-row-" + row.id + "' style='display: none'>";
                    out += "<input type='text' name='row_title_" + row.id + "' class='input-text-edit' value='" + row.title + "' placeholder='Titel'/>";
                    out += "<textarea name='row_description_" + row.id + "'  class='input-text-edit' rows='' cols='' placeholder='Beschreibung'>" + row.description + "</textarea>";
                    out += "<button class='btn-row-update' value='" + row.id + "'>upd</button>";
                    out += "</div>";

                    out += "</div>";

                });


                $(".rows").append(out);

                inProgress = false;
                startFrom += 10;
            },
            beforeSend: function () {
                // inProgress = true;
            }
        });
    }

    function fetch() {

        startFrom = 0;

        $.ajax({
            url: "components/" + view + "/data/index.php",
            type: "post",
            dataType: "json",
            data: {
                startFrom: startFrom
            },
            success: function (data) {

                let out = '';

                $.each(data, function (index, row) {

                    out += "<div class='row' id='row-" + row.id + "'>";
                    out += "<div class='row-value'>";
                    out += "<div id='row-title-" + row.id + "'><b>" + row.title + "</b></div>";
                    out += "<div id='row-description-" + row.id + "'>" + row.description + "</div>";
                    out += "</div>";
                    out += "<div class='cmd-group'>";
                    out += "<button type='button' class='example-read' value='" + row.id + "'>read</button>";
                    out += "<button type='button' class='row-edit' value='" + row.id + "'>edit</button>";
                    if (row.active == 1) {
                        out += "<button type='button' class='example-delete' act='1' value='" + row.id + "'>off</button>";
                    } else {
                        out += "<button type='button' class='example-delete' act='0' value='" + row.id + "'>on</button>";
                    }
                    out += "<button type='button' class='row-destroy' value='" + row.id + "'>des</button>";
                    out += "</div>";

                    out += "<div id='edit-row-" + row.id + "' style='display: none'>";
                    out += "<input type='text' name='row_title_" + row.id + "' class='input-text-edit' value='" + row.title + "' placeholder='Titel'/>";
                    out += "<textarea name='row_description_" + row.id + "'  class='input-text-edit' rows='5' cols='' placeholder='Beschreibung'>" + row.description + "</textarea>";
                    out += "<button class='btn-row-update' value='" + row.id + "'>upd</button>";
                    out += "</div>";

                    out += "</div>";

                });


                $(".rows").html(out);

            },
        });
    }

    fetchRows();


    $(document).on("click", ".row-edit", function () {
        let id = $(this).attr("value");
        $("#edit-row-" + id).slideToggle();
    });

    $(document).on("click", ".btn-row-update", function () {

        let id = $(this).attr("value");
        let title = $("[name='row_title_" + id + "']").val();
        let description = $("[name='row_description_" + id + "']").val();

        $.ajax({
            url: "components/" + view + "/data/update.php",
            type: "post",
            dataType: "json",
            data: {
                id: id,
                title: title,
                description: description
            },
            success: function (data) {
                $("#row-title-" + id).html(data.title);
                $("#row-description-" + id).html(data.description);
            }
        });

    });

    $(document).on("click", ".example-read", function () {

        let id = $(this).attr("value");

        $.ajax({
            url: "components/" + view + "/data/read.php",
            type: "post",
            data: {
                id: id
            },
            success: function (data) {
                $(".rows").html(data);
            }
        });
    });

    $(document).on("click", ".rows-show-all", function () {
        fetch();
    });

    $(document).on("click", ".example-delete", function () {

        if (window.confirm("Wirklich löschen ?")) {

            let id = $(this).attr("value");
            let active = $(this).attr("act");

            $.ajax({
                url: "components/" + view + "/data/delete.php",
                type: "post",
                data: {
                    id: id,
                    active: active
                },
                success: function (data) {
                    if (data) {
                        $("#rows-info").css("display", "block");
                        $(".rows-info").removeClass();
                        $("#rows-info").addClass("rows-info rows-info-success");
                        $("#rows-info").html("GELÖSCHT !");
                        fetch();
                    } else {
                        $("#rows-info").css("display", "block");
                        $(".rows-info").removeClass();
                        $("#rows-info").addClass("rows-info rows-info-error");
                        $("#rows-info").html("NICHT gelöscht !");
                    }
                }
            });


        } else {
            return false;
        }

    });

    $(document).on("click", ".row-destroy", function () {

        if (window.confirm("Wirklich löschen ?")) {
            if (window.confirm("Ohne Wiederherstellmöglichkeit ?")) {

                let id = $(this).attr("value");

                $.ajax({
                    url: "components/" + view + "/data/destroy.php",
                    type: "post",
                    data: {
                        id: id
                    },
                    success: function (data) {
                        if (data) {
                            $("#rows-info").css("display", "block");
                            $(".rows-info").removeClass();
                            $("#rows-info").addClass("rows-info rows-info-success");
                            $("#rows-info").html("Row destroyed");
                            fetch();
                        } else {
                            $("#rows-info").css("display", "block");
                            $(".rows-info").removeClass();
                            $("#rows-info").addClass("rows-info rows-info-error");
                            $("#rows-info").html("NICHT gelöscht !");
                        }
                    }
                });
            } else {
                return false;
            }
        } else {
            return false
        }
    });

    $(document).on("click", ".rows-info", function () {
        $(".rows-info").slideToggle();
    });

    $(document).on("click", ".row-new", function () {
        $(".row-new-form").slideToggle();
    });

    $(document).on("click", "#row-save", function () {

        let title = $("[name='title']").val();
        let description = $("[name='description']").val();

        $.ajax({
            url: "components/" + view + "/data/insert.php",
            type: "post",
            data: {
                title: title,
                description: description
            },
            success: function (data) {
                if (data) {
                    $("#rows-info").css("display", "block");
                    $(".rows-info").removeClass();
                    $("#rows-info").addClass("rows-info rows-info-success");
                    $("#rows-info").html("Gespeichert");
                    fetch();
                } else {
                    $("#rows-info").css("display", "block");
                    $(".rows-info").removeClass();
                    $("#rows-info").addClass("rows-info rows-info-error");
                    $("#rows-info").html("NICHT gespeichert !");
                }
            }
        });

    });

    $(document).on("click", ".seeds", function () {

        $.ajax({
            url: "components/" + view + "/data/seeds.php",
            success: function (data) {
                console.log(view + "seeds generated");
                fetch();
            }
        });

    });

    $(document).on("click", ".turn-cate", function () {

        $.ajax({
            url: "components/" + view + "/data/turnCate.php",
            success: function (data) {
                console.log(view + "seeds generated");
                fetch();
            }
        });

    });


});