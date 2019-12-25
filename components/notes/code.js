$(document).ready(function(){
    console.log("notes.js");



});

$(document).on("click", ".note-upd", function(){
    let id = $(this).attr("value");

    $.ajax({
        url: "components/notes/data/read.php",
        type: "post",
        data: {
            id: id
        },
        success:function(data){
            $("#notes").html(data);
        }
    });
});