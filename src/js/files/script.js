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