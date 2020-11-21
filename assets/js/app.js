$(function () {
    $('.j_open_menu').click(function (event) {
        $(this).toggleClass('active');

        if ($(this).hasClass('active')) {
            $(this).animate({
                'right': '320px'
            }, 200);

            $('.__main_header_mobile').animate({
                'right': '0'
            });

        } else {
            $('.__main_header_mobile').animate({
                'right': '-100%'
            });

            $(this).animate({
                'right': '20px'
            }, 50);
        }
    });
});