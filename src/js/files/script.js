// Підключення функціоналу "Чертоги Фрілансера"
import { isMobile } from "./functions.js";
// Підключення списку активних модулів
import { flsModules } from "./modules.js";
import "./form_validation.js";

// document.getElementById("select_btn").onclick = function () {
//   document.getElementById("lang").classList.add("active");
// };

//GSAP====================================================================================================
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger.js";
import { MotionPathPlugin } from "gsap/MotionPathPlugin.js";
import { CustomEase } from "gsap/CustomEase.js";
import { ScrollToPlugin } from "gsap/ScrollToPlugin.js";

gsap.registerPlugin(ScrollTrigger, ScrollToPlugin, CustomEase);
ScrollTrigger.config({ignoreMobileResize: true});

const productTl = gsap.timeline({
  scrollTrigger: {
    trigger: ".products__container",
    start: "top center",
    end: "+=25%",
  },
});

productTl.fromTo(
  ".heading__span-1",
  { opacity: 0, y: 200, x: -300, rotate: 16 },
  { opacity: 1, y: 0, x: 0, rotate: 0, duration: 0.3 }
);
productTl.fromTo(
  ".heading__span-2",
  { opacity: 0, y: 200, x: 300, rotate: -16 },
  { opacity: 1, y: 0, x: 0, rotate: 0, duration: 0.3 }
);

if(document.querySelector('.madein__sticker')) {
  let mm = gsap.matchMedia(),
  breakPoint = 768;

  mm.add(
    {
      isDesktop: `(min-width: ${breakPoint}px)`,
      isMobile: `(max-width: ${breakPoint - 1}px)`,
      reduceMotion: "(prefers-reduced-motion: reduce)",
    },
    (context) => {
      let { isDesktop, isMobile } = context.conditions;

      if (isDesktop) {
        const madeinTL = gsap.timeline({
          scrollTrigger: {
            trigger: ".madein__illustration",
            start: "top 20%",
            end: "+=30%",
          },
        });
        madeinTL.from(".madein__sticker", {
          transformOrigin: "left center",
          xPercent: -161,
          yPercent: -105,
          rotationY: 90,
          stagger: 1,
          duration: 1.8,
          ease: CustomEase.create(
            "custom",
            "M0,0 C0.083,0.294 -0.04,1 0.286,1 0.49,1 0.752,1 1,1 "
          ),
        });
      }

      if (isMobile) {
        const madeinTL = gsap.timeline({
          scrollTrigger: {
            trigger: ".madein__illustration",
            start: "top 55%",
            end: "+=30%",
            // markers: true,
          },
        });
        madeinTL.from(".madein__sticker", {
          transformOrigin: "left center",
          xPercent: -161,
          yPercent: -105,
          rotationY: 90,
          stagger: 1,
          duration: 1.8,
          ease: CustomEase.create(
            "custom",
            "M0,0 C0.083,0.294 -0.04,1 0.286,1 0.49,1 0.752,1 1,1 "
          ),
        });

      }
    }
  );
}



const madeinTlHero = gsap.timeline({
  scrollTrigger: {
    trigger: ".hero__wraper",
    start: "top center",
    end: "+=30%",
    //  markers: true
  },
});

madeinTlHero.from(".hero__heading", { opacity: 0, x: -400, duration: 0.3 });
madeinTlHero.from(".hero__text", { opacity: 0, x: 400, duration: 0.3 });

//=========== Social lincks animation ================
gsap.registerPlugin(MotionPathPlugin);

if(document.querySelector('.social__hand')) {
  let mm = gsap.matchMedia(),
  breakPoint = 768;

  mm.add(
    {
      isDesktop: `(min-width: ${breakPoint}px)`,
      smallLaptop: `(max-width: 1460px)`,
      bigTablet: `(max-width: 1130px)`,
      isMobile: `(max-width: ${breakPoint - 1}px)`,
      reduceMotion: "(prefers-reduced-motion: reduce)",
    },
    (context) => {
      let { smallLaptop, bigTablet, isMobile } = context.conditions;

      const hendTL = gsap.timeline({ repeat: -1, repeatDelay: 1 });
      let hend_x = 179;
      let hend_y = -81;
      let shadow_x = 254;
      let shadow_y = 128;
      

      if (smallLaptop) {
         shadow_x = 234;
         shadow_y = -110;
      }

      if (bigTablet) {
        hend_x = 191;
        hend_y = -142;
        shadow_x = 268;
        shadow_y = -417;
      }

      if (isMobile) {
        hend_x = 130;
        hend_y = -79;
        shadow_x = 166;
        shadow_y = -440;
      }

       hendTL
        .to(".social__hand", {
          x: `${hend_x}%`,
          y: `${hend_y}%`,
          duration: 2.5,
          ease: "bounce.out",
          delay: 1,
        })
        .to(
          ".social__shadow",
          {
            x: `${shadow_x}%`,
            y: `${shadow_y}%`,
            scale: 0.4,
            duration: 2.5,
            ease: "bounce.out",
            delay: 1,
          },
          "-=3.5"
        )
        .to(".social__hand", {
          x: "0",
          y: "0",
          duration: 1.5,
          delay: 1,
        })
        .to(
          ".social__shadow",
          {
            x: "0",
            y: "0",
            scale: 1,
            duration: 1.5,
            delay: 1,
          },
          "-=2.5"
        );
    }
  );
}


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
            height: "45px",
            backgroundColor: "white",
            duration: 1.3,
            ease: CustomEase.create(
              "custom",
              "M0,0 C0.14,0 0.242,0.438 0.272,0.561 0.313,0.728 0.354,0.963 0.362,1 0.37,0.985 0.43,0.914 0.514,0.914 0.63,0.914 0.626,0.92 0.644,0.93 0.723,0.974 0.719,0.981 0.726,0.998 0.788,0.914 0.84,0.936 0.859,0.95 0.878,0.964 0.897,0.985 0.911,0.998 0.922,0.994 0.939,0.984 0.954,0.984 0.969,0.984 1,1 1,1 "
            ),
          })
          .to(".menu__link", { opacity: 1, duration: 0.3 }, "-=0.55");

        closeTl.to(".menu__link", { opacity: 0, duration: 0.3 }).to(".menu", {
          width: "51px",
          height: "34px",
          backgroundColor: "transparent",
          duration: 0.3,
        });
      }

      if (isMobile) {
        openTl
          .to(".menu", {
            width: "100%",
            height: "auto",
            duration: 0.5,
            ease: CustomEase.create(
              "custom",
              "M0,0 C0.14,0 0.242,0.438 0.272,0.561 0.313,0.728 0.354,0.963 0.362,1 0.37,0.985 0.43,0.914 0.514,0.914 0.63,0.914 0.626,0.92 0.644,0.93 0.723,0.974 0.719,0.981 0.726,0.998 0.788,0.914 0.84,0.936 0.859,0.95 0.878,0.964 0.897,0.985 0.911,0.998 0.922,0.994 0.939,0.984 0.954,0.984 0.969,0.984 1,1 1,1 "
            ),
          })
          .to(".menu__link", { opacity: 1, duration: 0.4 }, "-=0.55")
          .to(".header__lang", { opacity: 1, duration: 0.4 });

        closeTl
          .to(".header__lang", { opacity: 0, duration: 0.4 })
          .to(".menu__link", { opacity: 0, duration: 0.4 }, "-=0.5")
          .to(".menu", {
            width: "54px",
            height: "46px",
            duration: 0.4,
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
        openMenu.to(".lang", { height: "auto", duration: 0.6 });
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
  if (document.querySelector(".madein__slider")) {
    // Вказуємо склас потрібного слайдера
    // Створюємо слайдер
    new Swiper(".madein__slider", {
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
          slidesPerView: 1.5,
          spaceBetween: 7,
        },
        480: {
          slidesPerView: 2.5,
          spaceBetween: 7,
        },
        768: {
          slidesPerView: 3.5,
          spaceBetween: 16,
        },
        1268: {
          slidesPerView: 3.5,
          spaceBetween: 20,
        },
      },

      // Події
      on: {
        // init() {
        //   this.el.addEventListener("mouseenter", () => {
        //     this.autoplay.stop();
        //   });
        //   this.el.addEventListener("mouseleave", () => {
        //     this.autoplay.start();
        //   });
        // },
      },
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
          spaceBetween: 20,
          slidesPerView: "3",
          centeredSlides: true,
        },

        960: {
          spaceBetween: 26,
          slidesPerView: "3.5",
          centeredSlides: true,
        },

        1130: {
          spaceBetween: 40,
          slidesPerView: "3.5",
          centeredSlides: true,
        },

        1466: {
          spaceBetween: 60,
          slidesPerView: "3.5",
          centeredSlides: true,
        },
      },

      // Події
      on: {
        // init() {
        //   this.el.addEventListener("mouseenter", () => {
        //     this.autoplay.stop();
        //   });
        //   this.el.addEventListener("mouseleave", () => {
        //     this.autoplay.start();
        //   });
        // },
      },
    });
  }
}

initSliders();

//==================About animation ======================================================
//about__scene_1
if (document.querySelector(".about__scene_1")) {
  let mm = gsap.matchMedia(),
  breakPoint = 768;

  mm.add(
    {
      isDesktop: `(min-width: ${breakPoint}px)`,
      isMobile: `(max-width: ${breakPoint - 1}px)`,
      reduceMotion: "(prefers-reduced-motion: reduce)",
    },
    (context) => {
      let { isDesktop, isMobile } = context.conditions;

      if (isDesktop) {
        const Scene_1 = gsap.timeline({
          scrollTrigger: {
            trigger: ".about__scene_1",
            start: "center center",
            end: "+=100%",
            // markers: true
          },
        });
        
        Scene_1.to('body', {overflow: 'hidden', duration: 0}).from(".about__scene_1 .row_1", {
          y: 200,
          opacity: 0,
          rotate: 16,
          duration: 0.4,
          ease: "power3.out",
        })
          .from(".about__scene_1 .row_2", {
            y: 200,
            opacity: 0,
            rotate: -16,
            duration: 0.4,
            ease: "power3.out",
          })
          .from(".about__scene_1 .row_2 img", {
            y: 200,
            x: 100,
            opacity: 0,
            duration: 0.4,
            ease: "back.out(1.7)",
          })
          .to('body', {overflow: 'auto', duration: 0.1})
          .from(".about__scene_1 .row_3", {
            y: 200,
            opacity: 0,
            rotate: 16,
            duration: 0.4,
            ease: "power3.out",
          });
      }

      if (isMobile) {
        const Scene_1 = gsap.timeline({
          scrollTrigger: {
            trigger: ".about__scene_1",
            start: "top 60%",
            end: "+=100%",
            // markers: true
          },
        });
        
        Scene_1.to('body', {overflow: 'hidden', duration: 0})
        .from(".about__scene_1 .row_1", {
          y: 200,
          opacity: 0,
          rotate: 16,
          duration: 0.4,
          ease: "power3.out",
        })
          .from(".about__scene_1 .row_2", {
            y: 200,
            opacity: 0,
            rotate: -16,
            duration: 0.4,
            ease: "power3.out",
          })
          .from(".about__scene_1 .row_2 img", {
            y: 200,
            x: 100,
            opacity: 0,
            duration: 0.4,
            ease: "back.out(1.7)",
          })
          .to('body', {overflow: 'auto', duration: 0.1})
          .from(".about__scene_1 .row_3", {
            y: 200,
            opacity: 0,
            rotate: 16,
            duration: 0.4,
            ease: "power3.out",
          });
      }
    }
  );
}


//about__scene_2
if (document.querySelector(".about__scene_2")) {
  let mm = gsap.matchMedia(),
  breakPoint = 768;

  mm.add(
    {
      isDesktop: `(min-width: ${breakPoint}px)`,
      isMobile: `(max-width: ${breakPoint - 1}px)`,
      reduceMotion: "(prefers-reduced-motion: reduce)",
    },
    (context) => {
      let { isDesktop, isMobile } = context.conditions;

      if (isDesktop) {
        const Scene_2 = gsap.timeline({
          scrollTrigger: {
            trigger: ".about__scene_2",
            start: "top 35%",
            end: "+=40%",
            // markers: true
          },
        });
        
        Scene_2.to('body', {overflow: 'hidden', duration: 0}).from(".about__scene_2 .row_1", {
          y: 200,
          opacity: 0,
          rotate: 16,
          duration: 0.4,
          ease: "power3.out",
          immediateRender: true,
        })
          .from(".about__scene_2 .row_2", {
            y: 200,
            opacity: 0,
            rotate: -16,
            duration: 0.4,
            ease: "power3.out",
            immediateRender: true,
          })
          .to('body', {overflow: 'auto', duration: 0.1})
          .from(".about__scene_2 .row_3", {
            y: 200,
            opacity: 0,
            rotate: 16,
            duration: 0.4,
            ease: "power3.out",
            immediateRender: true,
          })
          .from(".about__scene_2 .row_4", {
            y: 200,
            opacity: 0,
            rotate: -16,
            duration: 0.4,
            ease: "power3.out",
          })
          .from(".about__scene_2 .row_4 img", {
            y: -200,
            x: -100,
            opacity: 0,
            duration: 0.4,
            ease: "back.out(1.7)",
          })
          .from(".about__scene_2 .row_8", {
            y: 200,
            opacity: 0,
            rotate: 16,
            duration: 0.4,
            ease: "power3.out",
          })
          .from(".about__scene_2 .row_6", {
            y: 200,
            opacity: 0,
            rotate: -16,
            duration: 0.4,
            ease: "power3.out",
            immediateRender: true,
          })
          .from(".about__scene_2 .row_6 img", {
            y: 200,
            x: -100,
            opacity: 0,
            duration: 0.4,
            ease: "back.out(1.7)",
            immediateRender: true,
          });
      }

      if (isMobile) {
        const Scene_2 = gsap.timeline({
          scrollTrigger: {
            trigger: ".about__scene_2",
            start: "top 63%",
            end: "+=80",
            // markers: true
          },
        });
        
        Scene_2.to('body', {overflow: 'hidden', duration: 0})
        .from(".about__scene_2 .row_1", {
          y: 200,
          opacity: 0,
          rotate: 16,
          duration: 0.4,
          ease: "power3.out",
          immediateRender: true,
        })
          .from(".about__scene_2 .row_2", {
            y: 200,
            opacity: 0,
            rotate: -16,
            duration: 0.4,
            ease: "power3.out",
            immediateRender: true,
          })
          .from(".about__scene_2 .row_3", {
            y: 200,
            opacity: 0,
            rotate: 16,
            duration: 0.4,
            ease: "power3.out",
            immediateRender: true,
          })
          .to('body', {overflow: 'auto', duration: 0.1})
          .from(".about__scene_2 .row_4", {
            y: 200,
            opacity: 0,
            rotate: -16,
            duration: 0.4,
            ease: "power3.out",
          })
          .from(".about__scene_2 .row_4 img", {
            y: -200,
            x: -100,
            opacity: 0,
            duration: 0.4,
            ease: "back.out(1.7)",
          })
          .from(".about__scene_2 .row_8", {
            y: 200,
            opacity: 0,
            rotate: 16,
            duration: 0.4,
            ease: "power3.out",
          })
          .from(".about__scene_2 .row_6", {
            y: 200,
            opacity: 0,
            rotate: -16,
            duration: 0.4,
            ease: "power3.out",
            immediateRender: true,
          })
          .from(".about__scene_2 .row_6 img", {
            y: 200,
            x: -100,
            opacity: 0,
            duration: 0.4,
            ease: "back.out(1.7)",
            immediateRender: true,
          });
      }
    }
  );
}


//about__scene_3
if (document.querySelector(".about__scene_3")) {
  let mm = gsap.matchMedia(),
  breakPoint = 768;

  mm.add(
    {
      isDesktop: `(min-width: ${breakPoint}px)`,
      isMobile: `(max-width: ${breakPoint - 1}px)`,
      reduceMotion: "(prefers-reduced-motion: reduce)",
    },
    (context) => {
      let { isDesktop, isMobile } = context.conditions;

      if (isDesktop) {
        const Scene_3 = gsap.timeline({
          scrollTrigger: {
            trigger: ".about__scene_3",
            start: "top 30%",
            end: "+=30%",
            // markers: true
          },
        });

        Scene_3.to('body', {overflow: 'hidden', duration: 0})
        document.querySelectorAll(".about__scene_3 p").forEach((row, i) => {
          let deg = 16;
          if (i % 2 == 0) {
            deg = -16;
          }

          if(i == 2) {
            Scene_3.to('body', {overflow: 'auto', duration: 0.2})
          }
          
          Scene_3.from(row, {
            y: 200,
            opacity: 0,
            rotate: deg,
            duration: 0.4,
            ease: "power3.out",
          });
        });
        Scene_3.from(".row_5", {
          y: 200,
          opacity: 0,
          duration: 0.4,
          ease: "back.out(1.7)",
        });
      }

      if (isMobile) {
        const Scene_3 = gsap.timeline({
          scrollTrigger: {
            trigger: ".about__scene_3",
            start: "top 60%",
            end: "+=30%",
            // markers: true
          },
        });
        Scene_3.to('body', {overflow: 'hidden', duration: 0});
        document.querySelectorAll(".about__scene_3 p").forEach((row, i) => {
          let deg = 16;
          if (i % 2 == 0) {
            deg = -16;
          }
          
          Scene_3.from(row, {
            y: 200,
            opacity: 0,
            rotate: deg,
            duration: 0.4,
            ease: "power3.out",
          });
        });
        Scene_3.to('body', {overflow: 'auto', duration: 0})
        Scene_3.from(".row_5", {
          y: 200,
          opacity: 0,
          duration: 0.4,
          ease: "back.out(1.7)",
        });
      }
    }
  );
}


//about__scene_4
if (document.querySelector(".about__scene_4")) {
  let mm = gsap.matchMedia(),
  breakPoint = 768;

  mm.add(
    {
      isDesktop: `(min-width: ${breakPoint}px)`,
      isMobile: `(max-width: ${breakPoint - 1}px)`,
      reduceMotion: "(prefers-reduced-motion: reduce)",
    },
    (context) => {
      let { isDesktop, isMobile } = context.conditions;

      if (isDesktop) {
        const Scene_4 = gsap.timeline({
          scrollTrigger: {
            trigger: ".about__scene_4",
            start: "top 40%",
            end: "+=30%",
            // markers: true
          },
        });
        Scene_4.to('body', {overflow: 'hidden', duration: 0}).from(".about__scene_4 .row_1", {
          y: 200,
          opacity: 0,
          rotate: 16,
          duration: 0.4,
          ease: "power3.out",
        })
          .from(".about__scene_4 .row_1 img", {
            y: 200,
            x: 200,
            opacity: 0,
            duration: 0.4,
            ease: "back.out(1.7)",
          })
          .from(".about__scene_4 .row_2", {
            y: 200,
            opacity: 0,
            rotate: -16,
            duration: 0.4,
            ease: "power3.out",
          })
          .to('body', {overflow: 'auto', duration: 0.1})
          .from(".about__scene_4 .row_3", {
            y: 200,
            opacity: 0,
            rotate: 16,
            duration: 0.4,
            ease: "power3.out",
          })
          .from(".about__scene_4 .row_4", {
            y: 200,
            opacity: 0,
            rotate: -16,
            duration: 0.4,
            ease: "power3.out",
          })
          .from(".about__scene_4 .row_6", {
            y: 200,
            opacity: 0,
            rotate: 16,
            duration: 0.4,
            ease: "power3.out",
          });
      }

      if (isMobile) {
        const Scene_4 = gsap.timeline({
          scrollTrigger: {
            trigger: ".about__scene_4",
            start: "top 60%",
            end: "+=30%",
            // markers: true
          },
        });
        Scene_4.to('body', {overflow: 'hidden', duration: 0})
        .from(".about__scene_4 .row_1", {
          y: 200,
          opacity: 0,
          rotate: 16,
          duration: 0.4,
          ease: "power3.out",
        })
          .from(".about__scene_4 .row_1 img", {
            y: 200,
            x: 200,
            opacity: 0,
            duration: 0.4,
            ease: "back.out(1.7)",
          })
          .from(".about__scene_4 .row_2", {
            y: 200,
            opacity: 0,
            rotate: -16,
            duration: 0.4,
            ease: "power3.out",
          })
          .from(".about__scene_4 .row_3", {
            y: 200,
            opacity: 0,
            rotate: 16,
            duration: 0.4,
            ease: "power3.out",
          })
          .to('body', {overflow: 'auto', duration: 0.1})
          .from(".about__scene_4 .row_4", {
            y: 200,
            opacity: 0,
            rotate: -16,
            duration: 0.4,
            ease: "power3.out",
          })
          .from(".about__scene_4 .row_6", {
            y: 200,
            opacity: 0,
            rotate: 16,
            duration: 0.4,
            ease: "power3.out",
          });
      }
    }
  );
}


//about__scene_5
if (document.querySelector(".about__scene_5")) {
  let mm = gsap.matchMedia(),
  breakPoint = 768;

  mm.add(
    {
      isDesktop: `(min-width: ${breakPoint}px)`,
      isMobile: `(max-width: ${breakPoint - 1}px)`,
      reduceMotion: "(prefers-reduced-motion: reduce)",
    },
    (context) => {
      let { isDesktop, isMobile } = context.conditions;

      if (isDesktop) {
        const Scene_5 = gsap.timeline({
          scrollTrigger: {
            trigger: ".about__scene_5",
            start: "top 38%",
            end: "+=60%",
            // markers: true
          },
        });
        
        Scene_5.to('body', {overflow: 'hidden', duration: 0}).from(".about__scene_5 .row_1", {
          y: 200,
          opacity: 0,
          rotate: 16,
          duration: 0.4,
          ease: "back.out(1.7)",
        });
        document.querySelectorAll(".advanteges__item").forEach((item, i) => { 
          if(i == 2) 
          {
            Scene_5.to('body', {overflow: 'auto', duration: 0.1})
          }     
          Scene_5.from(item, { y: 200, opacity: 0, duration: 0.4, ease: "power3.out" });
        });
      }

      if (isMobile) {
        const Scene_5 = gsap.timeline({
          scrollTrigger: {
            trigger: ".about__scene_5",
            start: "top 54%",
            end: "+=60%",
            // markers: true
          },
        });
        
        Scene_5.to('body', {overflow: 'hidden', duration: 0})
        .from(".about__scene_5 .row_1", {
          y: 200,
          opacity: 0,
          rotate: 16,
          duration: 0.4,
          ease: "back.out(1.7)",
        });
        document.querySelectorAll(".advanteges__item").forEach((item, i) => {
          if( i == 2) {
            Scene_5.to('body', {overflow: 'auto', duration: 0.1})
          }
        
          Scene_5.from(item, { y: 200, opacity: 0, duration: 0.4, ease: "power3.out" });
        });
      }
    }
  );
}




const arrowsBtn = document.querySelector(".about__download-btn span i");
const spanBtn = document.querySelector(".about__download-btn span");
let arrowPos = -20;

let bgPos = 0;
function changeImg(progress) {
  const img = document.querySelector(".about__bagel-sprite");

  if (progress % 2 === 0) {
    bgPos = bgPos - 564;
  }
  console.log(bgPos);
  img.style.backgroundPositionY = `${bgPos}px`;
}

if (document.querySelector(".about__bagel")) {
  let mm = gsap.matchMedia(),
    breakPoint = 768;

  mm.add(
    {
      isDesktop: `(min-width: 1461px)`,
      isMobile: `(max-width: ${breakPoint}px)`,
      isLaptop: `(max-width: 1460px)`,
      isTablet: `(max-width: 1130px)`,
      reduceMotion: "(prefers-reduced-motion: reduce)",
    },
    (context) => {
      let { isDesktop, isMobile, isLaptop, isTablet } = context.conditions;
      const contentHeight =
        document.querySelector(".about__content").offsetHeight;
      let frameCount = 57;
      let sh = -32170;
      let coef = 0.85;
      let pin = true;
      let start = 20;

      if (isDesktop) {
        coef = 0.85;
        sh = -26424;
      }

      if (isLaptop) {
        coef = 0.88;
        sh = -19528;
      }

      if (isTablet) {
        coef = 0.88;
        sh = -12867;

        arrowPos = -38;
      }

      if (isMobile) {
        pin = false;
        sh = -17236;
        coef = 0.3;
        start = 85
      }

      const bagel = gsap.timeline({
        scrollTrigger: {
          trigger: ".about__bagel",
          start: `top ${start}%`,
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

      bagel.to(".about__bagel-sprite", {
        backgroundPositionY: () => sh,
        ease: "steps(" + frameCount + ")",
        immediateRender: true,
      });
    }
  );
}

let animation = gsap.to(arrowsBtn, {
  paused: true,
  backgroundPosition: `50% ${arrowPos}%`,
  ease: "elastic.out(1, 0.3)",
  duration: 2,
});

spanBtn.addEventListener("mouseenter", () => animation.play());
spanBtn.addEventListener("mouseleave", () => animation.reverse());
//==================End About animation ======================================================

//====================Прокрутка до блоку==========================//
//.scroll-arrow
const upBtnTl = gsap.timeline({ repeat: -1, repeatDelay: 0.6 });
upBtnTl.to(".scroll-arrow", {
  y: "-18%",
  duration: 0.4,
  ease: "bounce.out",
  delay: 2,
});

const cooperationTl = gsap.timeline({
  scrollTrigger: {
    trigger: ".cooperation",
    start: "top center",
    end: "+=30%",
    // markers: true
  },
});

cooperationTl.from(".cooperation__heading", {
  y: 200,
  opacity: 0,
  rotate: 16,
  duration: 0.4,
  ease: "power3.out",
});

cooperationTl.from(".cooperation__text", {
  transformOrigin: "left center",
  xPercent: -161,
  yPercent: -105,
  rotationY: 90,
  stagger: 1,
  duration: 1.8,
  ease: CustomEase.create(
    "custom",
    "M0,0 C0.083,0.294 -0.04,1 0.286,1 0.49,1 0.752,1 1,1 "
  ),
});

const orderForm = document.querySelector(".order");

document.addEventListener("click", (event) => {
  if (!orderForm.contains(event.target)) {
    orderForm.classList.remove("active-form");
  } else {
    orderForm.classList.add("active-form");
  }
});

const showProdutsBtn = document.querySelector(".products-show-btn");
if (showProdutsBtn) {
  showProdutsBtn.addEventListener("click", function () {
    let show = parseInt(showProdutsBtn.getAttribute("data-showed"));
    // console.log(show);
    setTimeout(()=> {
    document
      .querySelector(".all-assortment")
      .classList.toggle("_show-assortment");

      if (!show) {
        showProdutsBtn.querySelector("span").innerText = "Приховати";
        showProdutsBtn.setAttribute("data-showed", "1");
      } else {
        showProdutsBtn.querySelector("span").innerText = "Подивитись ще";
          gsap.to(window, {duration: 2, scrollTo: ".products__container"});
        showProdutsBtn.setAttribute("data-showed", "0");
      }
    
    }, 1000)
  });
}

const images = document.querySelectorAll(".parallax-image");

document.addEventListener("mousemove", (e) => {
  const { clientX, clientY } = e;

  images.forEach((image, index) => {
    const xPos = (window.innerWidth / 2 - clientX) / 10;
    const yPos = (window.innerHeight / 2 - clientY) / 10;

    switch (index) {
      case 0:
        image.style.transform = `translate(${xPos}px, ${yPos}px)`;
        break;
      case 1:
        image.style.transform = `translate(${xPos * 1}px, ${yPos * 0.4}px)`;
        break;
      case 2:
        image.style.transform = `translate(${xPos * 0.5}px, ${yPos * 0.2}px)`;
        break;
      case 3:
        image.style.transform = `translate(${xPos * 0.3}px, ${yPos * 0.8}px)`;
        break;
      case 4:
        image.style.transform = `translate(${xPos * 0.6}px, ${yPos * 0.9}px)`;
        break;
      case 5:
        image.style.transform = `translate(${xPos * 0.5}px, ${yPos * 0.5}px)`;
        break;
    }
  });
});

document.addEventListener("afterPopupOpen", function (e) {
  // Попап
  const currentPopup = e.detail.popup;

  setTimeout(() => {
    document
      .querySelector(".popup__content")
      .scrollIntoView({ block: "start", behavior: "smooth" });
  }, 300);
});

let cards = document.getElementsByClassName("offer__slide"),
  transforms = [
    { x: 0, y: 0, z: 0, scale: 1, opacity: 1, pos: "center" },
    { x: "-100%", y: "80px", z: "-50px", scale: 0.8, pos: "left" },
    {
      x: "100%",
      y: "80px",
      z: "-50px",
      scale: 0.8,
      pos: "right",
    },
  ];

[...cards].forEach((card, index) => {
  card.dataset.pos = transforms[index].pos;
});

let nextTransform = function (x) {
  if (x >= cards.length - 1) {
    x = 0;
  } else {
    x++;
  }
  return x;
};

let previousTransform = function (x) {
  if (x <= 0) {
    x = cards.length - 1;
  } else {
    x--;
  }
  return x;
};

function next() {
  for (let i = 0; i < cards.length; i++) {
    const { x, y, z, scale, pos } = transforms[nextTransform(i)];
    const currentCard = cards[i];

    currentCard.style.transform = `translate3d(${x}, ${y}, ${z}) scale(${scale})`;
    currentCard.dataset.pos = pos;
  }
  transforms.push(transforms.shift());
}

function previous() {
  for (let i = 0; i < cards.length; i++) {
    const { x, y, z, scale, pos } = transforms[previousTransform(i)];
    const currentCard = cards[i];

    currentCard.style.transform = `translate3d(${x}, ${y}, ${z}) scale(${scale})`;
    currentCard.dataset.pos = pos;
  }
  transforms.unshift(transforms.pop());
}

const carousel = document.getElementById("carousel");
carousel.addEventListener("click", (e) => {
  const card = e.target.closest(".offer__slide");

  if (!card) {
    return;
  }

  if (card.dataset.pos === "left") {
    previous();
  }

  if (card.dataset.pos === "right") {
    next();
  }
});

const prevBtn = document.getElementById("prevButton");
const nextBtn = document.getElementById("nextButton");
nextBtn.addEventListener("click", () => {
  next();
});
prevBtn.addEventListener("click", () => {
  previous();
});


const marks = document.querySelectorAll('.btn');
if(marks){
  marks.forEach(item => {
    let cirkle = item.querySelector('mark i');
    
    item.addEventListener("click", () => {

      let animation = gsap.timeline();

      animation.to(cirkle, {opacity: 0.4, duration: 0.15,})
        .to(cirkle, {width: "80px", height: "80px", opacity: 0.6, duration: 0.15})
        .to(cirkle, {width: "140px", height: "140px", opacity: 0.8, duration: 0.15})
        .to(cirkle, {width: "400px", height: "400px", opacity: 1, duration: 0.2});
     
        setTimeout(()=> {
          animation.reverse();
        }, 2000);
    });
  })
}

