/*
Документація по роботі у шаблоні: 
Документація слайдера: https://swiperjs.com/
Сніппет(HTML): swiper
*/

// Підключаємо слайдер Swiper з node_modules
// При необхідності підключаємо додаткові модулі слайдера, вказуючи їх у {} через кому
// Приклад: { Navigation, Autoplay }
import Swiper from 'swiper';
import { Navigation, Autoplay } from 'swiper/modules';
/*
Основні модулі слайдера:
Navigation, Pagination, Autoplay, 
EffectFade, Lazy, Manipulation
Детальніше дивись https://swiperjs.com/
*/

// Стилі Swiper
// Базові стилі
import "../../scss/base/swiper.scss";
// Повний набір стилів з scss/libs/swiper.scss
// import "../../scss/libs/swiper.scss";
// Повний набір стилів з node_modules
// import 'swiper/css';

// Ініціалізація слайдерів
function initSliders() {
	// Список слайдерів
	// Перевіряємо, чи є слайдер на сторінці
	if (document.querySelector('.madein__slider')) { // Вказуємо склас потрібного слайдера
		// Створюємо слайдер
		new Swiper('.madein__slider', { // Вказуємо склас потрібного слайдера
			modules: [Navigation, Autoplay],
			loop: true,

			autoplay: {
				// Пауза между прокруткой
				delay: 500,
				// Закончить на последнем слайде
				stopOnLastSlide: false,
				// Отключить после ручного переключения
				disableOnInteraction: true,
			 },

			 // швидкість
  			speed: 800,
			 
			// Брейкпоінти
			breakpoints: {
				340: {
					slidesPerView: 1.5,
					spaceBetween: 8,
				},
				768: {
					slidesPerView: 1.5,
					spaceBetween: 16,
				},
				1268: {
					slidesPerView: 2.5,
					spaceBetween: 20,
				},
			},
			
			// Події
			on: {
				init() {
					this.el.addEventListener("mouseenter", () => {
					  this.autoplay.stop();
					});
			
					this.el.addEventListener("mouseleave", () => {
					  this.autoplay.start();
					});
				 },
			}
		});

		if (document.querySelector(".instagram__slider")) {
			// Вказуємо склас потрібного слайдера
			// Створюємо слайдер
			new Swiper(".instagram__slider", {
			  // Вказуємо склас потрібного слайдера
			  modules: [Navigation, Autoplay],
			  loop: true,
	  
			  autoplay: {
				 // Пауза между прокруткой
				 delay: 800,
				 // Закончить на последнем слайде
				 stopOnLastSlide: false,
				 // Отключить после ручного переключения
				 disableOnInteraction: true,
			  },
	  
			  // швидкість
			  speed: 800,
	  
			  // Брейкпоінти
			  breakpoints: {
				 340: {
					spaceBetween: 16,
					slidesPerView: "auto",
					centeredSlides: true,
				 },
	  
				 768: {
					spaceBetween: 30,
					slidesPerView: "auto",
					centeredSlides: true,
				 },
	  
				 1268: {
					spaceBetween: 60,
					slidesPerView: "3",
					centeredSlides: true,
				 },
			  },
	  
			  // Події
			  on: {
				 init() {
					this.el.addEventListener("mouseenter", () => {
					  this.autoplay.stop();
					});
	  
					this.el.addEventListener("mouseleave", () => {
					  this.autoplay.start();
					});
				 },
			  },
			});
		 }
	  
		 if (document.querySelector(".offer__slider")) {
			new Swiper(".offer__slider", {
			  modules: [Navigation, Autoplay],
			  spaceBetween: 30,
			  slidesPerView: 3,
			  centeredSlides: true,
			  roundLengths: true,
			  loop: true,
			  loopAdditionalSlides: 30,
			  slideToClickedSlide: true,
			});
		 }
	}
}
// Скролл на базі слайдера (за класом swiper scroll для оболонки слайдера)
function initSlidersScroll() {
	let sliderScrollItems = document.querySelectorAll('.swiper_scroll');
	if (sliderScrollItems.length > 0) {
		for (let index = 0; index < sliderScrollItems.length; index++) {
			const sliderScrollItem = sliderScrollItems[index];
			const sliderScrollBar = sliderScrollItem.querySelector('.swiper-scrollbar');
			const sliderScroll = new Swiper(sliderScrollItem, {
				observer: true,
				observeParents: true,
				direction: 'vertical',
				slidesPerView: 'auto',
				freeMode: {
					enabled: true,
				},
				scrollbar: {
					el: sliderScrollBar,
					draggable: true,
					snapOnRelease: false
				},
				mousewheel: {
					releaseOnEdges: true,
				},
			});
			sliderScroll.scrollbar.updateSize();
		}
	}
}

window.addEventListener("load", function (e) {
	// Запуск ініціалізації слайдерів
	initSliders();
	// Запуск ініціалізації скролла на базі слайдера (за класом swiper_scroll)
	//initSlidersScroll();
});