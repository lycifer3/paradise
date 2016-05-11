function activePopUp(message, title, width, height) {

    $("#popup").attr('title', title);
    $("#popup").html(message);

    if(width == undefined) {
        width = 300;
    }

    if(height == undefined) {
        height = 180;
    }

    $("#popup").dialog({
        resizable: false,
        width: width,
        height: height,
        buttons: {
            Ok: function() {
                $(this).dialog("close");
            },

            "Отмена": function() {
                $(this).dialog("close");
            }
        }
    });
}