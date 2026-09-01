jQuery(function () {
    // スライダー01
    jQuery('.js-slider_01').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '10%',
        arrows: true,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000,
        dotsClass: "slide-dots",

        customPaging: function (slider, i) {
            return `
                <button class="slide-dot is-active"></button>
                <svg viewBox="0 0 22 22" class="circle_timer">
                    <circle cx="11" cy="11" r="6"></circle>
                </svg>
            `;
        }
    });

    // ギャラリー
    // isotope
    jQuery('.c-gallery__grid').isotope({
        itemSelector: '.c-gallery__item',
        layoutMode: 'fitRows'
    });
    jQuery('.c-gallery__filter-btn').on('click', function() {
        var filterValue = jQuery(this).attr('data-filter');
        // Isotopeのフィルター
        jQuery('.c-gallery__grid').isotope({
            filter: filterValue
        });
        // active切り替え
        jQuery('.c-gallery__filter-btn').removeClass('is-active');
        jQuery(this).addClass('is-active');
    });
});