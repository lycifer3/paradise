$(document).ready(function(){
    $('.orderInput').blur(function() {
        var startCount = 1;
        var productPrice = parseInt($(this).parents('tr').find('.productPrice').html());
        var productCount = $(this).val();

        var productSumm = parseInt(productPrice * productCount);

        if($.isNumeric(productSumm) && productSumm > 0) {
            $(this).parents('tr').find('.productSumm').html(productSumm);
        } else {
            $(this).val(startCount);
            alert("Введены неверные данные");
        }
    });
});