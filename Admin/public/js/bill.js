// API BILL 
var Change = function(){
    $('.btnupdate').on('click', function(){
        var item = $(this).parents('tr');
        var idbill  = item.find('.id-bill').val();
        $.get('admin.php', { path: 'bill', action: 'updatebill', id: idbill}, function(data) {
            var text = item.find('.btn-status').text();
            if(text == 'Chưa giao'){

                item.find('.btn-status').removeClass('btn-warning');
                item.find('.btn-status').addClass('btn-success');
                item.find('.btn-status').text('Đã giao');
            }
            else{
                item.find('.btn-status').removeClass('btn-success');
                item.find('.btn-status').addClass('btn-warning');
                item.find('.btn-status').text('Chưa giao');
            }
        });
    })
}

$('window').ready(function(){


    $.get('admin.php', { path: 'bill', action: 'getBillLimit', page: 1 }, function(data) {
        $('.table-bill tbody').html(data);
    }).then(function(){
        Change();
    })

    

    $("#pagination_bill li").on('click', function() {
        $("#pagination_bill li").removeClass('active');
        $(this).addClass('active');
        $.get('admin.php', { path: 'bill', action: 'getBillLimit', page: $(this).find('button').text() }, function(data) {
            $('.table-bill tbody').html(data);
        }).then(function(){
            Change();
        });
    })

    $('#btn-find').on('click', function(){
        $.get('admin.php', { path: 'bill', action: 'getBillNotActive'}, function(data) {
            $('.table-bill tbody').html(data);
        }).then(function(){
            Change();
        })
    })

    $('#btn-show-all-bill').on('click', function(){
        $.get('admin.php', { path: 'bill', action: 'getBillLimit', page: 1} , function(data) {
            $('.table-bill tbody').html(data);
        }).then(function(){
            Change();
        })
    })
    
})
