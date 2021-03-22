$('.buy').click(function () {
    var price = $(this).data('price'), product = $(this).data('product');
    console.log(price,product);
    return false;

});