(function (window, document, $) {
    var mainNav = $('.nav');
    var mainNavPosition = mainNav.offset().top;
    var windowScroll = $(window);
    var width = windowScroll.width();

    if (width < 480) {
        $('.arrow-multi').css('display', 'none');
    }

    windowScroll.scroll( function () {
        var top = $(this).scrollTop();
        if(top > mainNavPosition) {
            mainNav.addClass('fixed-nav');
        } else {
            mainNav.removeClass('fixed-nav');
        }
    })

    $('.search-button').click( function () {
        $('#search-form').submit();
    })

    var mobileButton = $('.nav-mobile-button');
    var bars = $('.bar');
    mobileButton.click( function () {
        mobileButton.toggleClass('open');
        bars.eq(0).toggleClass('close-1');
        bars.eq(1).toggleClass('close-2');
        bars.eq(2).toggleClass('close-3');

        mainNav.toggleClass('open');
    })

    $('.nav a').click( function (e) {
        var ref = $(this).attr('href');
        $('body').animate({
            scrollTop: $(ref).offset().top
        }, 500)
    });

    var toTop = $('.to-top i');
    toTop.click( function () {
        $('body').animate({
            scrollTop: 0
        }, 500)
    })
})(window, document, jQuery);
