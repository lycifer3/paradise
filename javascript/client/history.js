$(document).ready(function(){

    $('.deleteUser').click(function(event) {
        event.preventDefault();
        activePopUp("Вы уверены что хотите удалить пользователя?", "Удаление пользователя");
    });


});