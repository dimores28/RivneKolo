// Підключення функціоналу "Чертоги Фрілансера"
import { isMobile } from "./functions.js";
// Підключення списку активних модулів
import { flsModules } from "./modules.js";

// document.getElementById("select_btn").onclick = function () {
//   document.getElementById("lang").classList.add("active");
// };


//GSAP====================================================================================================
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger.js";

gsap.registerPlugin(ScrollTrigger);


const productTl = gsap.timeline({
   scrollTrigger: {
     trigger: ".products__container",
     start: "top center",
     end: "+=25%",
   }
 });

 productTl.fromTo(".heading__span-1", {opacity: 0, x: -300},{opacity: 1, x: 0, duration: 0.6});
 productTl.fromTo(".heading__span-2", {opacity: 0, x: 300}, {opacity: 1, x: 0, duration: 0.6});

const madeinTL = gsap.timeline({
   scrollTrigger: {
     trigger: ".madein__illustration",
     start: "top top",
     end: "+=30%",
   //   scrub: 1,
   //   pin: true,
   //   markers: true
   }
 });

 madeinTL.from(".madein__sticker", { transformOrigin: "right center", rotationY: 90,  stagger: 1});

 const madeinTlHero = gsap.timeline({
  scrollTrigger: {
    trigger: ".hero__wraper",
    start: "center center",
    end: "+=100%",
  },
});

madeinTlHero.from(".hero__heading", { opacity: 0, x: -400, });
madeinTlHero.from(".hero__text", { opacity: 0, x: 400, });

 const hendTL = gsap.timeline({repeat: -1, yoyo: true});
//  hendTL.yoyo( true ); 
 hendTL.to('.social__hand', {x: "115%", y: "-19%", duration: 1})
       .to(".social__shadow", {x: "180%", y: "235%", scale: 0.4, duration: 1}, "-=1");

//Animate menu ===========================================

if(document.querySelector('.menu')) {
  let mm = gsap.matchMedia(),
  breakPoint = 768;

  const button = document.querySelector(".menu__icon");
  let active = false;

  const openTl = gsap.timeline({ paused: true });
  const closeTl = gsap.timeline({ paused: true });


  mm.add({

    isDesktop: `(min-width: ${breakPoint}px)`,
    isMobile: `(max-width: ${breakPoint - 1}px)`,
    reduceMotion: "(prefers-reduced-motion: reduce)"

    }, (context) => {

    let { isDesktop, isMobile } = context.conditions;

    if(isDesktop) {
      openTl.to(".menu", { width: "90%", backgroundColor: "white", duration: 0.6 })
      .to(".menu__link", { opacity: 1, duration: 0.4, delay: 0.3 });

      closeTl.to(".menu__link", { opacity: 0, duration: 0.4 })
            .to(".menu", { width: "51px", backgroundColor: "transparent", duration: 0.6, delay: 0.4,});
    }

    if(isMobile) {
      openTl.to(".menu", { width: "300px", height: "auto", duration: 0.6 })
      .to(".menu__link", { opacity: 1, duration: 0.4, delay: 0.3 })
      .to(".header__lang", { opacity: 1, duration: 0.3, delay: 0.1 });

      closeTl.to(".header__lang", { opacity: 0, duration: 0.3 })
             .to(".menu__link", { opacity: 0, duration: 0.4 })
             .to(".menu", { width: "51px", height: "45px", duration: 0.6, delay: 0.4,});
    }

  }); 


  button.addEventListener("click", () => {
    if (!active) openTl.seek(0).play();
    else closeTl.seek(0).play();
  
    active = !active;
  });
}



//Animate language ===========================================
if(document.querySelector('.header__lang')) {
  let mm = gsap.matchMedia(),
  breakPoint = 768;

  const openButton = document.querySelector(".lang");
  let activeMenu = false;

  const openMenu = gsap.timeline({ paused: true });
  const closeMenu = gsap.timeline({ paused: true });

  mm.add({

    isDesktop: `(min-width: ${breakPoint}px)`,
    isMobile: `(max-width: ${breakPoint - 1}px)`,
    reduceMotion: "(prefers-reduced-motion: reduce)"

    }, (context) => {

    let { isDesktop, isMobile } = context.conditions;

    if(isDesktop) {
      openMenu.to(".lang", { height: "210px", duration: 0.6 });
      closeMenu.to(".lang", { height: "45px", duration: 0.6,  delay: 0.4,});
    }

    if(isMobile) {

    }

  }); 

  openButton.addEventListener("click", () => {
    if (!activeMenu) openMenu.seek(0).play();
    else closeMenu.seek(0).play();
  
    activeMenu = !activeMenu;
  });
}

// Ініціалізація слайдерів
function initSliders() {
	// Список слайдерів
	// Перевіряємо, чи є слайдер на сторінці
	if (document.querySelector('.madein__slider')) { // Вказуємо склас потрібного слайдера
		// Створюємо слайдер
		new Swiper('.madein__slider', { // Вказуємо склас потрібного слайдера
			// modules: [Navigation, Autoplay],
			loop: true,

			autoplay: {
				// Пауза между прокруткой
				delay: 900,
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
	}

	if (document.querySelector(".instagram__slider")) {
		// Вказуємо склас потрібного слайдера
		// Створюємо слайдер
		new Swiper(".instagram__slider", {
		  // Вказуємо склас потрібного слайдера
		  // modules: [Navigation, Autoplay],
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
		  // modules: [Navigation, Autoplay],
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

initSliders();

//About animation ======================================================
//about__scene_1
const Scene_1 = gsap.timeline({
	scrollTrigger: {
		trigger: ".about__scene_1",
		start: "center center",
		end: "+=100%",
	},
});

Scene_1.from('.about__scene_1 .row_1', {y: 200, opacity: 0, duration: 0.4, ease: "power3.out"})
		.from('.about__scene_1 .row_2', {y: 200, opacity: 0, duration: 0.4, ease: "power3.out"})
		.from('.about__scene_1 .row_2 img', {y: 200, opacity: 0, duration: 0.4, ease: "back.out(1.7)"})
		.from('.about__scene_1 .row_3', {y: 200, opacity: 0, duration: 0.4, ease: "power3.out"});



const Scene_2 = gsap.timeline({
	scrollTrigger: {
		trigger: ".about__scene_2",
		start: "top center",
		end: "+=40%",
		// markers: true
	},
});

Scene_2.from('.about__scene_2 .row_1', {y: 200, opacity: 0, duration: 0.4, ease: "power3.out"})
		 .from('.about__scene_2 .row_2', {y: 200, opacity: 0, duration: 0.4, ease: "power3.out"})
		 .from('.about__scene_2 .row_3', {y: 200, opacity: 0, duration: 0.4, ease: "power3.out"})
		 .from('.about__scene_2 .row_4', {y: 200, opacity: 0, duration: 0.4, ease: "power3.out"})
		 .from('.about__scene_2 .row_4 img', {y: 200, opacity: 0, duration: 0.4, ease: "back.out(1.7)"})
		 .from('.about__scene_2 .row_5', {y: 200, opacity: 0, duration: 0.4, ease: "power3.out"})
		 .from('.about__scene_2 .row_6', {y: 200, opacity: 0, duration: 0.4, ease: "power3.out"})
		 .from('.about__scene_2 .row_6 img', {y: 200, opacity: 0, duration: 0.4, ease: "back.out(1.7)"});



const Scene_3 = gsap.timeline({
	scrollTrigger: {
		trigger: ".about__scene_3",
		start: "top center",
		end: "+=30%",
		// markers: true
	},
});

document.querySelectorAll(".about__scene_3 p").forEach((row) => {  
	Scene_3.from(row, {y: 200, opacity: 0, duration: 0.4, ease: "power3.out"})
});


const Scene_4 = gsap.timeline({
	scrollTrigger: {
		trigger: ".about__scene_4",
		start: "top center",
		end: "+=50%",
		// markers: true
	},
});
Scene_4.from('.about__scene_4 .row_1', {y: 200, opacity: 0, duration: 0.4, ease: "power3.out"})
		 .from('.about__scene_4 .row_1 img', {y: 200, opacity: 0, duration: 0.4, ease: "back.out(1.7)"})
		 .from('.about__scene_4 .row_2', {y: 200, opacity: 0, duration: 0.4, ease: "power3.out"})
		 .from('.about__scene_4 .row_3', {y: 200, opacity: 0, duration: 0.4, ease: "power3.out"})
		 .from('.about__scene_4 .row_4', {y: 200, opacity: 0, duration: 0.4, ease: "power3.out"})
		 .from('.about__scene_4 .row_5', {y: 200, opacity: 0, duration: 0.4, ease: "power3.out"});


const Scene_5 = gsap.timeline({
	scrollTrigger: {
		trigger: ".about__scene_5",
		start: "top center",
		end: "+=60%",
		// markers: true
	},
});

Scene_5.from('.about__scene_5 .row_1', {y: 200, opacity: 0, duration: 0.4, ease: "back.out(1.7)"});
document.querySelectorAll(".advanteges__item").forEach((item) => {  
	Scene_5.from(item, {y: 200, opacity: 0, duration: 0.4, ease: "power3.out"})
});


function changeImg(progress) {
	const img = document.querySelector('.about__bagel .bagel');
	let newImg = 'bagel';

	switch(progress) {
		case 0:  newImg = 'bagel'; break;
		case 1:  newImg = 'f2'; break;
		case 2:  newImg = 'f3'; break;
		case 3:  newImg = 'f4'; break;
		case 4:  newImg = 'f5'; break;
		case 5:  newImg = 'bagel'; break;
		case 6:  newImg = 'f2'; break;
		case 7:  newImg = 'f3'; break;
		case 8:  newImg = 'f4'; break;
		case 9:  newImg = 'f5'; break;
		case 10:  newImg = 'bagel'; break;

		default: newImg = 'bagel'; break;
	}

	img.style.backgroundImage = `url(../../img/about/${newImg}.png)`;

}

if(document.querySelector('.about__bagel')) {
	let mm = gsap.matchMedia(),
	breakPoint = 768;
 
	mm.add({
 
	  isDesktop: `(min-width: ${breakPoint}px)`,
	  isMobile: `(max-width: ${breakPoint - 1}px)`,
	  reduceMotion: "(prefers-reduced-motion: reduce)"
 
	  }, (context) => {
 
	  let { isDesktop, isMobile } = context.conditions;
	  const contentHeight = document.querySelector('.about__content').offsetHeight;
 
	  if(isDesktop) {
			
			const bagel =  gsap.timeline({
				scrollTrigger: {
					trigger: ".about__bagel",
					start: "top 20%",
					end: `+=${contentHeight * 0.7}`,
					scrub: 1,
					pin: true,
					// onUpdate: (self) => {
					// 	// Calculate the progress of the ScrollTrigger
					// 	const progress = self.progress.toFixed(1) * 10;
					// 	console.log(progress);
					// 	changeImg(progress);
					//  },
					// markers: true
				},
			});
			
			bagel.to('.about__bagel img', {rotation: 360, duration: 3});
	  }
 
	  if(isMobile) {
			const bagel =  gsap.timeline({
				scrollTrigger: {
					trigger: ".about__bagel",
					start: "top 10%",
					end: `+=${contentHeight}`,
					scrub: 1,
					pin: false,
					// markers: true
				},
			});
			
			bagel.to('.about__bagel img', {rotation: 360, duration: 3});
	  }
 
	}); 
 

 }
//end about animation ===================================================