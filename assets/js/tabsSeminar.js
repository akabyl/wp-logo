// const tabsBtnsSem = document.querySelectorAll('[data-tab]');
// const tabsProductsSem = document.querySelectorAll('[data-tab-value]');

// if (tabsBtnsSem) {

// 	for (let btn of tabsBtnsSem) {
// 		btn.addEventListener('click', function () {
// 			// Убираем активные классы у всех кнопок
// 			for (let btn of tabsBtns) {
// 				btn.classList.remove('tab-controls__btn--active');
// 			}

// 			// Добавляем активный класс к текущей кнопке
// 			this.classList.add('tab-controls__btn--active');

// 			// Отобразить нужные товары и скрыть не нужные
// 			for (let product of tabsProductsSem) {
// 				// Проверка на отображение всех слайдов
// 				if (this.dataset.tab === 'all') {
// 					product.classList.remove('none');
// 				} else {
// 					if (product.dataset.tabValue === this.dataset.tab) {
// 						product.classList.remove('none');
// 					} else {
// 						product.classList.add('none');

// 					}
// 				}
// 			}

// 			// Update Swiper
// 			seminarsSwiper.update();
// 		});
// 	}

// }
