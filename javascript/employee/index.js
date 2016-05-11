$(document).ready(function(){

    $('.deleteEmployee').click(function(event) {
        event.preventDefault();
        activePopUp(
            "Вы уверены что хотите удалить сотрудника?",
            "Удаление сотрудника",
            "employee/delete/" + $(this).attr('data-employee-id')
        );
    });


});