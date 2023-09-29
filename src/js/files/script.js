// Підключення функціоналу "Чертоги Фрілансера"
import { isMobile } from "./functions.js";
// Підключення списку активних модулів
import { flsModules } from "./modules.js";

// document.getElementById("select_btn").onclick = function () {
//   let bodyLang = document.getElementById("lang");
//   if (bodyLang.classList.contains("active_menu")) {
//     bodyLang.classList.remove("active_menu");
//   } else {
//     bodyLang.classList.add("active_menu");
//   }
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
    end: "+=90%",
    // scrub: 1,
    // pin: true,
    // markers: true,
  },
});

madeinTlHero.from(".hero__heading", {
  opacity: 0,
  x: -400,
});

madeinTlHero.from(".hero__text", {
  opacity: 0,
  x: 400,
});

//GSAP====================================================================================================

const button = document.querySelector(".menu__icon");
let active = false;

const openTl = gsap.timeline({ paused: true });
const closeTl = gsap.timeline({ paused: true });

openTl
  .to(".menu", { width: "90%", backgroundColor: "white", duration: 0.6 })
  .to(".menu__link", { opacity: 1, duration: 0.4, delay: 0.3 });

closeTl.to(".menu__link", { opacity: 0, duration: 0.4 }).to(".menu", {
  width: "51px",
  backgroundColor: "transparent",
  duration: 0.6,
  delay: 0.4,
});

button.addEventListener("click", () => {
  if (!active) openTl.seek(0).play();
  else closeTl.seek(0).play();

  active = !active;
});

//GSAP====================================================================================================
const openButton = document.querySelector(".select_btn");
let activeMenu = false;

const openMenu = gsap.timeline({ paused: true });
const closeMenu = gsap.timeline({ paused: true });

openMenu.to(".lang", { height: "210px", duration: 0.6 });

closeMenu.to(".lang", {
  height: "45px",
  duration: 0.6,
  delay: 0.4,
});

openButton.addEventListener("click", () => {
  if (!activeMenu) openMenu.seek(0).play();
  else closeMenu.seek(0).play();

  activeMenu = !activeMenu;
});
