jQuery(function () {

    // FVスライダー
    jQuery('.p-fv-slider').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 1000,
        arrows: false,
        dots: true,
        fade: true,
        infinite: true,
    });

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

// 要素が画面に入ったらfade
const fadeTargets = document.querySelectorAll('.js-fadein');

const fadeObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('is-active');
    }
  });
});

fadeTargets.forEach((el) => {
  fadeObserver.observe(el);
});

// SPメニュー
const menuBtn = document.querySelector('.js-menu-btn');
const headerNav = document.querySelector('.l-header__nav');
const navList = document.querySelector('.l-header__nav-list');
const navItems = document.querySelectorAll('.l-header__nav-item');

menuBtn.addEventListener('click', () => {
    headerNav.classList.toggle('is-active');
});

// ナビ項目をクリックしたら閉じる
navItems.forEach((item) => {
    item.addEventListener('click', () => {
        headerNav.classList.remove('is-active');
    });
});

// ナビリスト以外をクリックしたら閉じる
headerNav.addEventListener('click', (e) => {
    if (!navList.contains(e.target)) {
        headerNav.classList.remove('is-active');
    }
});

// グロナビ関連
jQuery(function () {

	// グロナビクリック時
	jQuery('.l-header__nav-item').on('click', function () {
		jQuery('.l-header__nav-item').removeClass('is-active');
		jQuery(this).addClass('is-active');
	});

	// スクロール監視するセクション
	const elements = document.querySelectorAll('.c-scroll-point');

	// 現在画面内に入っているセクション
	const visibleSections = new Map();

	const elementObserver = new IntersectionObserver(
		function (entries) {

			entries.forEach(function (entry) {

				if (entry.isIntersecting) {
					visibleSections.set(entry.target.id, entry.target);
				} else {
					visibleSections.delete(entry.target.id);
				}

			});

			// 画面内にあるセクションがなければ何もしない
			if (visibleSections.size === 0) {
				return;
			}

			// 画面上部に一番近いセクションを取得
			const currentSection = [...visibleSections.values()]
				.sort(function (a, b) {
					return a.getBoundingClientRect().top - b.getBoundingClientRect().top;
				})[0];

			const id = currentSection.id;

			const target = $(`.nav__item-link[href="#${id}"]`);

			$('.nav__item-link').removeClass('is-active');
			target.addClass('is-active');

		},
		{
			// 画面上部から少し下を判定エリアにする
			rootMargin: '-20% 0px -60% 0px'
		}
	);

	// 監視開始
	elements.forEach(function (element) {
		elementObserver.observe(element);
	});

});