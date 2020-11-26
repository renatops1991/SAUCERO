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

    /** SHOW BTN BACK TO TOP */
    $(window).on('scroll', function () {
        var heightBanner = $('.__main_slide_show').outerHeight();

        if ($(this).scrollTop() > heightBanner) {
            $('.__btn_up_content').fadeIn();
        } else {
            $('.__btn_up_content').fadeOut();
        }
    });

    /** BTN CLICK BACK TO TOP */
    $('.j_back_to_top').on('click', function (event) {
        event.preventDefault();

        $('html, body').animate({
            'scrollTop': '0'
        });
    });

    /** SHOW MODAL INFO */
    $('.j_read_more').on('click', function (event) {
        event.preventDefault();
        var cover = $(this).data('img');
        var title = $(this).data('title');
        var price = $(this).data('price');
        var description = $(this).data('description');

        $('.j_modal_img').attr('src', '');
        $('.j_modal_title').text('');
        $('.j_price').text('');
        $('.j_description').text('');

        $('.__modal').fadeIn(400, function () {
            $('.j_modal_img').attr('src', cover);
            $('.j_modal_title').text(title);
            $('.j_price').text(price);
            $('.j_description').text(description);
        }).css({'display': 'flex'});
    });

    /** HIDDEN MODAL INFO */
    $('.j_close_modal').on('click', function (event) {
        event.preventDefault();
        $('.__modal').fadeOut();
    });

    $(window).on('keyup', function(event){
        if(event.key === 'Escape'){
            $('.__modal').fadeOut();
        }
    });

});