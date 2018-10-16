$(window).ready(function() {
    $('#add-cate').attr("disabled", "disabled");
    $('.name-cata').change(function() {
        if ($('.name-cata').val() != '') {
            $('#add-cate').removeAttr('disabled')
        }
    })
    $('.select-all').on('click', function() {
        $(".chb-cata").prop("checked", true)
    })
    $('.no-select-all').on('click', function() {
        $(".chb-cata").prop("checked", false)
    })
    $('input[type=file]').change(function() {
        var src = this.files[0].name
        $('#imageShow').attr('src', 'tmp/' + src);
    });

    $.get('admin.php', { path: 'product', action: 'paging', page: 1 }, function(data) {
        $("#listproduct").html(data);
    });

    $("#pagination_product li").on('click', function() {
        $("#pagination_product li").removeClass('active');
        $(this).addClass('active');
        $.get('admin.php', { path: 'product', action: 'paging', page: $(this).find('button').text() }, function(data) {
            $("#listproduct").html(data);
        });
    })
})


