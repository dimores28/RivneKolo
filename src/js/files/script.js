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

