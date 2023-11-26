let tl = gsap.timeline({ defaults: { ease: "power4.inOut", duration: 2 } });
let tl2 = gsap.timeline({defaults: {duration: 2, delay:1}})
let flagPoles = CSSRulePlugin.getRule(".hero-section:before");

// Animation of the Landing Page || Here Text || Navigation

tl.to('h1', { 'clip-path': 'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)', opacity: 1, y: 0, duration: 2.2 })
tl.to('.form', { 'clip-path': 'polygon(0% 105%, 100% 100%, 100% 0%, 0% 0%)', opacity: 1, y: 0 }, "-=2")
tl.to('nav', { opacity: 1 }, "-=1")

tl.to('h1', { 'clip-path': 'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)', opacity: 1, y: 0, duration: 2.2 })


// Smooth Scroll
// Commented out confilcting in the DOM and Session

// const lenis = new Lenis()

// lenis.on('scroll', (e) => {
//     console.log(e)
// })

// function raf(time) {
//     lenis.raf(time)
//     requestAnimationFrame(raf)
// }

// requestAnimationFrame(raf)



// Scroll Animation for Sections
gsap.registerPlugin(ScrollTrigger);

const sections = document.querySelectorAll('.animate-section');

sections.forEach(section => {
gsap.to(section, {
    scrollTrigger: {
    trigger: section,
    start: 'top 35%', // Change the start position as needed
    toggleActions: 'play none none reverse', // Stops animation when scrolling up
    onEnter: () => {
        section.classList.add('animate');
    },
    onLeaveBack: () => {
        section.classList.remove('animate');
    }
    }
});
});


 // Open Delete account function
 const modal = document.getElementById("open-confirmation");
 const openModalBtn = document.getElementById("open-delete");
 const closeModalBtn = document.getElementById("cancel"); // Changed the reference to the cancel button
 
 openModalBtn.addEventListener("click", function() {
   modal.classList.add("show");


 });
 
 closeModalBtn.addEventListener("click", function() {
   modal.classList.remove("show");
 });
 
 window.addEventListener("click", function(event) {
   if (event.target === modal) {
     modal.classList.remove("show");
   }
 });
 


