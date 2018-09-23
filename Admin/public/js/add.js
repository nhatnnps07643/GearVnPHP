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

})