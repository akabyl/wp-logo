const seminarsSlide = document.querySelector('.seminars__slider');
const specialistsSlide = document.querySelector('.specialists__slider');
const aboutSlide = document.querySelector('.about__swiper');
const casesSlide = document.querySelector('.cases-swiper');
const seminarsSwiper = document.querySelector('.seminars-swiper');
const rewiewsSwiper = document.querySelector('.rewiews-swiper');

if (seminarsSlide) {
	const swiper = new Swiper('.seminars__slider', {
		slidesPerView: 1,
		spaceBetween: 30,
		loop: true,
		navigation: {
			nextEl: '.button-next',
			prevEl: '.button-prev',
		},
		pagination: {
			el: '.swiper-pagination',
		},
		breakpoints: {
			769: {
				slidesPerView: 2,
			},
			992: {
				slidesPerView: 3,
				spaceBetween: 30,
			},
			1200: {
				slidesPerView: 2,
				spaceBetween: 40,
			},
			1521: {
				slidesPerView: 3,
			},
		},
	});
}
if (specialistsSlide) {
	const specialists = new Swiper('.specialists__slider', {
		slidesPerView: 1,
		spaceBetween: 30,
		loop: true,
		navigation: {
			nextEl: '.specialists-btn-next',
			prevEl: '.specialists-btn-prev',
		},
		pagination: {
			el: '.specialists__pagination',
		},
		breakpoints: {
			767: {
				slidesPerView: 2,
				spaceBetween: 40,
			},
		},
	});
}
if (aboutSlide) {
	const about = new Swiper('.about__swiper', {
		slidesPerView: 1,
		loop: true,

		pagination: {
			el: '.about-pagination',
		},

		navigation: {
			nextEl: '.about-button-next',
			prevEl: '.about-button-prev',
		},
	});
}
if (casesSlide) {
	const cases = new Swiper('.cases-swiper', {
		slidesPerView: 1,

		pagination: {
			el: '.cases-pagination',
		},

		navigation: {
			nextEl: '.cases-button-next',
			prevEl: '.cases-button-prev',
		},
	});
	const tabsBtns = document.querySelectorAll('[data-tab]');
	for (let btn of tabsBtns) {
		btn.addEventListener('click', function () {
			cases.update();
		});
	}
}
if (seminarsSwiper) {
	const seminarsSwiper = new Swiper('.seminars-swiper', {
		slidesPerView: 1,

		pagination: {
			el: '.seminars-slider__pagination',
		},

		navigation: {
			nextEl: '.seminars-slider-next',
			prevEl: '.seminars-slider-prev',
		},
		breakpoints: {
			767: {
				slidesPerView: 2,
				spaceBetween: 30,
			},
		},
	});
	const tabsBtnsSem = document.querySelectorAll('[data-tab]');
	for (let btn of tabsBtnsSem) {
		btn.addEventListener('click', function () {

			// Update Swiper
			seminarsSwiper.update();
		});
	}
}
if (rewiewsSwiper) {
	const rewiewsSwiper = new Swiper('.rewiews-swiper', {
		slidesPerView: 1,
		loop: true,
		pagination: {
			el: '.pagination-rew',
		},

		navigation: {
			nextEl: '.rewiews-slider-next',
			prevEl: '.rewiews-slider-prev',
		},
		breakpoints: {
			767: {
				slidesPerView: 2,
				spaceBetween: 30,
			},
		},
	});
	const tabsBtnsSem = document.querySelectorAll('[data-tab]');
	for (let btn of tabsBtnsSem) {
		btn.addEventListener('click', function () {

			// Update Swiper
			rewiewsSwiper.update();
		});
	}
}
document.addEventListener('DOMContentLoaded', function () {
	const menuToggle = document.querySelector('.header__menu');
	const menuCloseBtn = document.querySelector('.menu-close');
	const menu = document.querySelector('.menu');

	// Открыть меню при клике на header__menu
	menuToggle.addEventListener('click', function (event) {
		event.stopPropagation();
		menu.classList.add('menu-active');
	});

	// Закрыть меню при клике на menu-close
	menuCloseBtn.addEventListener('click', function () {
		menu.classList.remove('menu-active');
	});

	// Закрыть меню при клике вне меню, если меню открыто
	document.addEventListener('click', function (event) {
		if (
			!menu.contains(event.target) &&
			event.target !== menuToggle &&
			menu.classList.contains('menu-active')
		) {
			menu.classList.remove('menu-active');
		}
	});
});

const openModalBtn = document.getElementById('openModalBtn');
const modal = document.getElementById('myModal');
const closeModalBtn = document.getElementById('closeModalBtn');


if (openModalBtn) {
	openModalBtn.addEventListener('click', function (even) {
		even.stopPropagation();
		modal.style.display = 'block';
		document.body.classList.add('modal-active');
	});
}

if (closeModalBtn) {
	closeModalBtn.addEventListener('click', function () {
		modal.style.display = 'none';
		document.body.classList.remove('modal-active');
	});
}

if (modal) {
	modal.addEventListener('click', function (event) {
		event.stopPropagation();
	});
}

window.addEventListener('click', function (event) {
	if (event.target !== modal && modal) {
		modal.style.display = 'none';
		document.body.classList.remove('modal-active');
	} else {
		return false
	}
});
