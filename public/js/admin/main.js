$(document).ready(function () {
    $('#uploadFile').wrap('<div class="wrap"></div>');
    $('.wrap').prepend('<span>أضافة صورة<i fa fa-photo></i></span>');
    $('.wrap').append('<i class="fa fa-upload fa-lg"></i>');
    $('#uploadFile').change(function () {
        $(this).prev('span').text($(this).val());


    });
});