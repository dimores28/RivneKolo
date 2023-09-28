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


gsap.fromTo(".heading__span-1", {opacity: 0, x: -300},{opacity: 1, x: 0, duration: 0.6});
gsap.fromTo(".heading__span-2", {opacity: 0, x: 300}, {opacity: 1, x: 0, duration: 0.6});


const button = document.querySelector(".menu__icon");
let active = false;

const openTl = gsap.timeline({ paused: true });
const closeTl = gsap.timeline({ paused: true });

openTl.to('.menu', {width: '100%', backgroundColor: "white", duration: 0.6})
      .to('.menu__link', {opacity: 1, duration: 0.6});


closeTl.to('.menu__link', {opacity: 0, duration: 1})
       .to('.menu', {width: '52px', backgroundColor: "transparent", duration: 1})


button.addEventListener("click", () => {
   if (!active) openTl.seek(0).play();
   else closeTl.seek(0).play();

   active = !active;
})