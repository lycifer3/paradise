$(document).ready(function(){

    $('.deleteService').click(function(event) {
        event.preventDefault();
        activePopUp(
            "Вы уверены что хотите удалить услугу?",
            "Удаление услуги",
            "/services/delete/" + $(this).attr('data-service-id')
        );
    });


});