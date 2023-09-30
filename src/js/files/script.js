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

gsap.fromTo(
  ".heading__span-1",
  { opacity: 0, x: -300 },
  { opacity: 1, x: 0, duration: 0.6 }
);
gsap.fromTo(
  ".heading__span-2",
  { opacity: 0, x: 300 },
  { opacity: 1, x: 0, duration: 0.6 }
);

const madeinTL = gsap.timeline({
  scrollTrigger: {
    trigger: ".madein__illustration",
    start: "top top",
    end: "+=30%",
    //   scrub: 1,
    //   pin: true,
    //   markers: true
  },
});

madeinTL.from(".madein__sticker", {
  transformOrigin: "right center",
  rotationY: 90,
  stagger: 1,
});

const madeinTlHero = gsap.timeline({
  scrollTrigger: {
    trigger: "hero__wraper",
    start: "center center",
    end: "+=100%",
  },
});

madeinTlHero.from(".hero__heading", { opacity: 0, x: -400 });
madeinTlHero.from(".hero__text", { opacity: 0, x: 400 });

const hendTL = gsap.timeline({ repeat: -1, yoyo: true });
//  hendTL.yoyo( true );
hendTL
  .to(".social__hand", { x: "115%", y: "-19%", duration: 1 })
  .to(
    ".social__shadow",
    { x: "180%", y: "235%", scale: 0.4, duration: 1 },
    "-=1"
  );

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
            width: "90%",
            backgroundColor: "white",
            duration: 0.6,
          })
          .to(".menu__link", { opacity: 1, duration: 0.4, delay: 0.3 });

        closeTl.to(".menu__link", { opacity: 0, duration: 0.4 }).to(".menu", {
          width: "51px",
          backgroundColor: "transparent",
          duration: 0.6,
          delay: 0.4,
        });
      }

      if (isMobile) {
        openTl
          .to(".menu", { width: "300px", height: "auto", duration: 0.6 })
          .to(".menu__link", { opacity: 1, duration: 0.4, delay: 0.3 })
          .to(".header__lang", { opacity: 1, duration: 0.3, delay: 0.1 });

        closeTl
          .to(".header__lang", { opacity: 0, duration: 0.3 })
          .to(".menu__link", { opacity: 0, duration: 0.4 })
          .to(".menu", {
            width: "51px",
            height: "45px",
            duration: 0.6,
            delay: 0.4,
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

let ticker = document.querySelector(".ticker__container"),
  list = document.querySelector(".ticker__row"),
  clone = list.cloneNode(true);

ticker.append(clone);
