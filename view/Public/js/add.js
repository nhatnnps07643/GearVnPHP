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

// Xử lí phần detail Comment
$("#btnComment").on('click', function() {
    $.get('index.php', { path: 'product', action: 'comment', content: $('#contentComment').val(), hideID: $('#nameProduct').val() }, function(data) {
        $('#boxcomment').html(data);
        $('#contentComment').val('')
    });
});

//Xử lí profile 
$("#updatepass").on('click', function() {
    var idUser = $('#iduser').attr('iduser');
    var passOld = $('#password_old').val();
    var passNew = $('#password_new').val();
    var passNew_2 = $('#password_new_2').val();
    if (passNew == passNew_2 && passNew != '') {
        $.post('index.php', { path: 'user', action: 'update_user', id: idUser, password_old: passOld, password_new: passNew }, function(data) {
            if (data.success == true) {
                alert('Cập nhật mật khẩu thành công');
                $('#password_old').val('');
                $('#password_new').val('');
                $('#password_new_2').val('');
            }
        });
    } else {
        alert("Mật khẩu không trùng khớp");
    }

});



$(window).ready(function() {
    $("#cke_1_contents").css({
        height: '500px',
    })
})