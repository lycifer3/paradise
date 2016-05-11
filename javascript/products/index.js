$(document).ready(function(){

    $('.deleteProduct').click(function(event) {
        event.preventDefault();
        activePopUp(
            "Вы уверены что хотите удалить товар?",
            "Удаление товара",
            "products/delete/" + $(this).attr('data-product-id')
        );
    });
});