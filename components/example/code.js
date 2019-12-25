$(document).ready(function () {

    let url = document.location.href;
    let arrView = url.split("=");
    let view = arrView[1];

    function fetch() {
        $.ajax({
            url: "components/" + view + "/data/index.php",
            success: function (data) {
                $("#root").html(data);
            }
        });
    }
    fetch();


    $(document).on("click", ".row-edit", function(){
        let id = $(this).attr("value");
        // alert(".row-edit-"+id);
        $("#edit-row-"+id).slideToggle();
    });

    $(document).on("click", ".row-update", function(){

        let id = $(this).attr("value");
        let title = $("[name='row_title_"+id+"']").val();
        let description = $("[name='row_description_"+id+"']").val();

        $.ajax({
            url: "components/" + view + "/data/update.php",
            type: "post",
            dataType: "json",
            data:{
                id: id,
                title: title,
                description: description
            },
            success: function(data){
                $("#row-title-"+id).html(data.title);
                $("#row-description-"+id).html(data.description);
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
                $("#" + view).html(data);
            }
        });
    });

    $(document).on("click", ".example-show-all", function () {
        fetch();
    });

    $(document).on("click", ".example-delete", function () {


        if (window.confirm("Wirklich löschen ?")) {

            let id = $(this).attr("value");

            $.ajax({
                url: "components/" + view + "/data/delete.php",
                type: "post",
                data: {
                    id: id
                },
                success: function (data) {
                    $("#" + view).html(data);
                }
            });
            fetch();

        } else {
            return false;
        }

    });

    $(document).on("click", ".example-destroy", function () {

        if (window.confirm("Wirklich löschen ?")) {
            if(window.confirm("Ohne Wiederherstellmöglichkeit ?")) {

                let id = $(this).attr("value");

                $.ajax({
                    url: "components/" + view + "/data/destroy.php",
                    type: "post",
                    data: {
                        id: id
                    },
                    success: function (data) {
                        $("#" + view).html(data);
                        fetch();
                    }
                });

                fetch();
            }else{
                return false;
            }
        }else {
            return false
        }
    });


    $(document).on("click",".row-new",function(){
        $(".row-new-form").slideToggle();
    });

    $(document).on("click", "#row-save", function(){

        let title = $("[name='title']").val();
        let description = $("[name='description']").val();

        $.ajax({
            url: "components/" + view + "/data/insert.php",
            type: "post",
            data: {
                title: title,
                description: description
            },
            success: function(data){
                fetch();
            }
        });

    });


});