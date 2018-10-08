$('.textCount').on('change', function() {
    var Oneprice = $(this).parents('tr').find('.oneprice').val();
    var price = $(this).parents('tr').find('.price');
    var number = $(this).val();
    var idproduct = $(this).attr('data-input');
    $.get('index.php', { path: 'product', action: 'change', count: number, id: idproduct }, function(data) {
        var total = (Oneprice * number);
        price.html(parseFloat(total).toLocaleString(window.document.documentElement.lang));
        $.get('index.php', { path: 'product', action: 'total' }, function(data) {
            $('#total').html(parseFloat(data).toLocaleString(window.document.documentElement.lang) + " VNĐ");
        });
    });
})

// Xử lí các nút cập nhậ trong quản lí thông tin cá nhân
$(window).ready(function() {
    // Lấy tổng tiền khi web load xong
    $.get('index.php', { path: 'product', action: 'total' }, function(data) {
        $('#total').html(parseFloat(data).toLocaleString(window.document.documentElement.lang) + " VNĐ");
    });
})