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
import { MotionPathPlugin } from "gsap/MotionPathPlugin.js";
import { CustomEase } from "gsap/CustomEase.js";

gsap.registerPlugin(ScrollTrigger);

const productTl = gsap.timeline({
   scrollTrigger: {
     trigger: ".products__container",
     start: "top center",
     end: "+=25%",
   }
 });

 productTl.fromTo(".heading__span-1", {opacity: 0, y: 200, x: -300, rotate: 16},{opacity: 1, y: 0, x: 0, rotate: 0, duration: 0.6});
 productTl.fromTo(".heading__span-2", {opacity: 0, y: 200, x: 300, rotate: -16}, {opacity: 1, y: 0, x: 0, rotate: 0, duration: 0.6});

 gsap.registerPlugin(CustomEase);
const madeinTL = gsap.timeline({
  scrollTrigger: {
    trigger: ".madein__illustration",
    start: "top 20%",
    end: "+=30%",
    //   scrub: 1,
    //   pin: true,
      // markers: true
  },
});
//translate(-161%, -105%) rotateY(95deg)
madeinTL.from(".madein__sticker", {
  transformOrigin: "left center",
  xPercent: -161,
  yPercent: -105, 
  rotationY: 90,
  stagger: 1,
  duration: 1.8,
  ease: CustomEase.create("custom", "M0,0 C0.083,0.294 -0.04,1 0.286,1 0.49,1 0.752,1 1,1 ")
});



const madeinTlHero = gsap.timeline({
  scrollTrigger: {
    trigger: ".hero__wraper",
    start: "top center",
    end: "+=30%",
	//  markers: true
  },
});

madeinTlHero.from(".hero__heading", { opacity: 0, x: -400 });
madeinTlHero.from(".hero__text", { opacity: 0, x: 400 });

//=========== Social lincks animation ================
gsap.registerPlugin(MotionPathPlugin);

const hendTL = gsap.timeline({ repeat: -1, repeatDelay: 1 });
//  hendTL.yoyo( true );
hendTL
	.to(".social__hand", { x: "115%", y: "-19%", duration: 2.5, ease: "bounce.out", delay: 1 })
	.to(
	".social__shadow",
	{ x: "180%", y: "235%", scale: 0.4, duration: 2.5 , ease: "bounce.out", delay: 1},
	"-=3.5"
	);

	let path1 = [
		//1
		{x: "27%", y: "20%"},
		//2
		// {x: "56%", y: "45%"},
		//3
		{x: "115%", y: "-19%"},
	];

	let path2 = [
		//1
		{x: "49%", y: "456%"},
		//2
		// {x: "119%", y: "980%"},
		//3
		{x: "180%", y: "235%"},
	];

	const scaledPath1 = path1.map(({ x, y }) => {
		return {
			 x: x,
			 y: y 
		}
   });
	const scaledPath2 = path2.map(({ x, y }) => {
		return {
			 x: x,
			 y: y 
		}
   });

	// hendTL.to(".social__hand", { 
	// 	motionPath: {path: scaledPath1, align: 'self', alignOrigin: [0.5, 0.5]},
	// 	duration: 3, 
	// 	ease: "elastic.out(1, 0.3)", 
	// 	delay: 1 })
	// 	.to(".social__shadow",{ 
	// 		motionPath: {path: scaledPath2, align: 'self', alignOrigin: [0.5, 0.5]}, 
	// 		scale: 0.4, 
	// 		duration: 3 , 
	// 		ease: "elastic.out(1, 0.3)", 
	// 		delay: 1},
	// 		"-=4"
	// 	);
//=========== End Social lincks animation ================

//Animate menu ===========================================

if (document.querySelector(".menu")) {
  let mm = gsap.matchMedia(),
    breakPoint = 768;

  const button = document.querySelector(".menu__icon");
  let active = false;

  const openTl = gsap.timeline({ paused: true });
  const closeTl = gsap.timeline({ paused: true });

  mm.add(
    {
      isDesktop: `(min-width: ${breakPoint}px)`,
      isMobile: `(max-width: ${breakPoint - 1}px)`,
      reduceMotion: "(prefers-reduced-motion: reduce)",
    },
    (context) => {
      let { isDesktop, isMobile } = context.conditions;

      if (isDesktop) {
        openTl
          .to(".menu", {
            width: "100%",
            backgroundColor: "white",
            duration: 1.3,
				ease: "bounce.out"
          })
          .to(".menu__link", { opacity: 1, duration: 0.3 }, "-=0.55");

        closeTl.to(".menu__link", { opacity: 0, duration: 0.3 }).to(".menu", {
          width: "51px",
          backgroundColor: "transparent",
          duration: 0.3,
        });
      }

      if (isMobile) {
        openTl
          .to(".menu", { width: "100%", height: "auto", duration: 0.6, ease: "bounce.out" })
          .to(".menu__link", { opacity: 1, duration: 0.3 }, "-=0.65")
          .to(".header__lang", { opacity: 1, duration: 0.3 });

        closeTl
          .to(".header__lang", { opacity: 0, duration: 0.3 })
          .to(".menu__link", { opacity: 0, duration: 0.3 }, "-=0.4")
          .to(".menu", {
            width: "54px",
            height: "46px",
            duration: 0.3,
          });
      }
    }
  );

  button.addEventListener("click", () => {
    if (!active) openTl.seek(0).play();
    else closeTl.seek(0).play();

    active = !active;
  });
}

//Animate language ===========================================
if (document.querySelector(".header__lang")) {
  let mm = gsap.matchMedia(),
    breakPoint = 768;

  const openButton = document.querySelector(".lang");
  let activeMenu = false;

  const openMenu = gsap.timeline({ paused: true });
  const closeMenu = gsap.timeline({ paused: true });

  mm.add(
    {
      isDesktop: `(min-width: ${breakPoint}px)`,
      isMobile: `(max-width: ${breakPoint - 1}px)`,
      reduceMotion: "(prefers-reduced-motion: reduce)",
    },
    (context) => {
      let { isDesktop, isMobile } = context.conditions;

      if (isDesktop) {
        openMenu.to(".lang", { height: "210px", duration: 0.6 });
        closeMenu.to(".lang", { height: "45px", duration: 0.6, delay: 0.4 });
      }

      if (isMobile) {
      }
    }
  );

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
				delay: 0,
				// Закончить на последнем слайде
				stopOnLastSlide: false,
				// Отключить после ручного переключения
				disableOnInteraction: true,
			 },

			 // швидкість
  			speed: 3200,
			 
			// Брейкпоінти
			breakpoints: {
				340: {
					slidesPerView: 1.5,
					spaceBetween: 8,
				},
				768: {
					slidesPerView: 2.5,
					spaceBetween: 16,
				},
				1268: {
					slidesPerView: 3.5,
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
			 delay: 0,
			 // Закончить на последнем слайде
			 stopOnLastSlide: false,
			 // Отключить после ручного переключения
			 disableOnInteraction: true,
		  },
  
		  // швидкість
		  speed: 3200,
  
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
		//   roundLengths: true,
		  loop: true,
		  effect: 'coverflow',
		  coverflowEffect: {
			rotate: 0,
			stretch: 0,
			depth: 100,
			modifier: 1,
			slideShadows : false,
		 },
		 
		//   loopedSlides: 1,
		//   initialSlide: 1,
		  slideToClickedSlide: true,

		  // Navigation arrows
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},

		  breakpoints: {
			340: {
				spaceBetween: 16,
				slidesPerView: "auto",
				centeredSlides: true,
			 },
			 768: {
				spaceBetween: 30,
				slidesPerView: "2",
				centeredSlides: true,
			 },
			 1268: {
				spaceBetween: 30,
				slidesPerView: "3",
				centeredSlides: true,
			 },
		  }
		});
	}
}

initSliders();

//==================About animation ======================================================
//about__scene_1
const Scene_1 = gsap.timeline({
	scrollTrigger: {
		trigger: ".about__scene_1",
		start: "center center",
		end: "+=100%",
	},
});

Scene_1.from('.about__scene_1 .row_1', {y: 200, opacity: 0, rotate: 16, duration: 0.4, ease: "power3.out"})
		.from('.about__scene_1 .row_2', {y: 200, opacity: 0, rotate: -16, duration: 0.4, ease: "power3.out"})
		.from('.about__scene_1 .row_2 img', {y: 200, x: 100, opacity: 0, duration: 0.4, ease: "back.out(1.7)"})
		.from('.about__scene_1 .row_3', {y: 200, opacity: 0, rotate: 16, duration: 0.4, ease: "power3.out"});



const Scene_2 = gsap.timeline({
	scrollTrigger: {
		trigger: ".about__scene_2",
		start: "top center",
		end: "+=40%",
		// markers: true
	},
});

Scene_2.from('.about__scene_2 .row_1', {y: 200, opacity: 0, rotate: 16, duration: 0.4, ease: "power3.out"})
		 .from('.about__scene_2 .row_2', {y: 200, opacity: 0, rotate: -16, duration: 0.4, ease: "power3.out"})
		 .from('.about__scene_2 .row_3', {y: 200, opacity: 0, rotate: 16, duration: 0.4, ease: "power3.out"})
		 .from('.about__scene_2 .row_4', {y: 200, opacity: 0, rotate: -16, duration: 0.4, ease: "power3.out"})
		 .from('.about__scene_2 .row_4 img', {y: -200, x: -100, opacity: 0, duration: 0.4, ease: "back.out(1.7)"})
		 .from('.about__scene_2 .row_5', {y: 200, opacity: 0, rotate: 16, duration: 0.4, ease: "power3.out"})
		 .from('.about__scene_2 .row_6', {y: 200, opacity: 0, rotate: -16, duration: 0.4, ease: "power3.out"})
		 .from('.about__scene_2 .row_6 img', {y: 200, x: -100, opacity: 0, duration: 0.4, ease: "back.out(1.7)"});



const Scene_3 = gsap.timeline({
	scrollTrigger: {
		trigger: ".about__scene_3",
		start: "top center",
		end: "+=30%",
		// markers: true
	},
});

document.querySelectorAll(".about__scene_3 p").forEach((row, i) => {  
	let deg = 16;
	if (i % 2 == 0) {
		deg = -16;
	}
	Scene_3.from(row, {y: 200, opacity: 0, rotate: deg, duration: 0.4, ease: "power3.out"})
});

Scene_3.from('.row_5', {y: 200, opacity: 0, duration: 0.4, ease: "back.out(1.7)"});


const Scene_4 = gsap.timeline({
	scrollTrigger: {
		trigger: ".about__scene_4",
		start: "top center",
		end: "+=30%",
		// markers: true
	},
});
Scene_4.from('.about__scene_4 .row_1', {y: 200, opacity: 0, rotate: 16, duration: 0.4, ease: "power3.out"})
		 .from('.about__scene_4 .row_1 img', {y: 200, x: 200, opacity: 0, duration: 0.4, ease: "back.out(1.7)"})
		 .from('.about__scene_4 .row_2', {y: 200, opacity: 0, rotate: -16, duration: 0.4, ease: "power3.out"})
		 .from('.about__scene_4 .row_3', {y: 200, opacity: 0, rotate: 16, duration: 0.4, ease: "power3.out"})
		 .from('.about__scene_4 .row_4', {y: 200, opacity: 0, rotate: -16, duration: 0.4, ease: "power3.out"})
		 .from('.about__scene_4 .row_6', {y: 200, opacity: 0, rotate: 16, duration: 0.4, ease: "power3.out"});


const Scene_5 = gsap.timeline({
	scrollTrigger: {
		trigger: ".about__scene_5",
		start: "top center",
		end: "+=60%",
		// markers: true
	},
});

Scene_5.from('.about__scene_5 .row_1', {y: 200, opacity: 0, rotate: 16, duration: 0.4, ease: "back.out(1.7)"});
document.querySelectorAll(".advanteges__item").forEach((item) => {  
	Scene_5.from(item, {y: 200, opacity: 0, duration: 0.4, ease: "power3.out"})
});

const arrowsBtn = document.querySelector('.about__download-btn span i');
const spanBtn = document.querySelector('.about__download-btn span');
let animation = gsap.to(arrowsBtn, {
	paused: true,
	backgroundPosition: "50% -10%",
	ease: "elastic.out(1, 0.3)",
	duration: 1.2,
 });


let bgPos = 0;
function changeImg(progress) {
	const img = document.querySelector('.about__bagel-sprite');

	if(progress % 2 === 0) {
		bgPos = bgPos -564;
	}
	console.log(bgPos);
	img.style.backgroundPositionY = `${bgPos}px`;
}

if(document.querySelector('.about__bagel')) {
	let mm = gsap.matchMedia(),
	breakPoint = 768;
 
	mm.add({
 
	  isDesktop: `(min-width: ${breakPoint}px)`,
	  isMobile: `(max-width: ${breakPoint - 1}px)`,
	  isLaptop: `(max-width: 1302px)`,
	  isTablet: `(max-width: 960px)`,
	  reduceMotion: "(prefers-reduced-motion: reduce)"
 
	  }, (context) => {
 
	  let { isDesktop, isMobile, isLaptop, isTablet} = context.conditions;
	  const contentHeight = document.querySelector('.about__content').offsetHeight;
	  let frameCount = 56;
	  let sh = -31638;
	  let coef = 0.85;
	  let pin = true;



	  if(isDesktop) {
			coef = 0.85;
			sh = -31638;
			//32768
			// bagel.to('.about__bagel img', {rotation: 360, duration: 3});
	  }

	  if (isLaptop) {
			coef = 0.88;
			sh = -20804;
			// bagel.to('.about__bagel-sprite', {backgroundPositionY: () => -20804, ease: "steps(" + frameCount + ")",});
	  }

	  if(isTablet) {
			coef = 0.95;
			sh = -16428;
	  }

	  if(isMobile) {
			pin = false;
			sh = -13142;
			coef = 1;
	  }

	  const bagel =  gsap.timeline({
		scrollTrigger: {
			trigger: ".about__bagel",
			start: "top 20%",
			end: `+=${contentHeight * coef}`,
			scrub: true,
			pin: pin,
			invalidateOnRefresh: true,
			 onRefresh: () => {
				self.scroll(self.start);
			 },
			// markers: true
		},
	});

	bagel.to('.about__bagel-sprite', {backgroundPositionY: () => sh, ease: "steps(" + frameCount + ")",});
 
	//   if(isMobile) {
	// 		const bagel =  gsap.timeline({
	// 			scrollTrigger: {
	// 				trigger: ".about__bagel",
	// 				start: "top 10%",
	// 				end: `+=${contentHeight}`,
	// 				scrub: 1,
	// 				pin: false,
	// 				// markers: true
	// 			},
	// 		});
			
	// 		bagel.to('.about__bagel img', {rotation: 360, duration: 3});
	//   }
 
	}); 
 

 }

 spanBtn.addEventListener("mouseenter", () => animation.play());
 spanBtn.addEventListener("mouseleave", () => animation.reverse());
 //==================End About animation ====================================================== 


//====================Прокрутка до блоку==========================//
//.scroll-arrow
const upBtnTl = gsap.timeline({ repeat: -1, repeatDelay: 0.6 });
upBtnTl.to(".scroll-arrow", {y: "-18%", duration: 0.4, ease: "bounce.out", delay: 2});

const orderForm = document.querySelector(".order");

document.addEventListener("click", (event) => {
  if (!orderForm.contains(event.target)) {
    orderForm.classList.remove("active-form");
  } else {
    orderForm.classList.add("active-form");
  }
});

document.querySelector('.products-show-btn')?.addEventListener('click', function() {
	document.querySelector('.all-assortment').classList.toggle('_show-assortment')
});