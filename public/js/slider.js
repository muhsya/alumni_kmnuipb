(function (window, document, $) {
    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        prevArrow: $('#prev'),
        nextArrow: $('#next')
    });
})(window, document, jQuery);
