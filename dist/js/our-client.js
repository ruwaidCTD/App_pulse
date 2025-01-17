// document.addEventListener("DOMContentLoaded", function () {
//   gsap.registerPlugin(ScrollTrigger);

//   gsap.utils.toArray(".single-review").forEach((review, index) => {
//     gsap.fromTo(
//       review,
//       { opacity: 0, y: 50 },
//       {
//         opacity: 1,
//         y: 0,
//         duration: 1,
//         ease: "power2.out",
//         scrollTrigger: {
//           trigger: review,
//           start: "top 80%",
//           end: "top 50%",
//           toggleActions: "play none none none",
//         },
//         delay: index * 0.2, // Optional stagger effect
//       }
//     );
//   });
// });



document.addEventListener("DOMContentLoaded", function () {
  gsap.registerPlugin(ScrollTrigger);

  // Select all review items inside the #testimonials section
  gsap.utils.toArray("#testimonials .single-review").forEach((review, index) => {
    gsap.from(review, {
    //   opacity: 0.2,
      scale: 0.7,        // Start the element scaled down to 80%
      y: 50,             // Start the element 50px lower than its final position
      duration: 1.2,
      ease: "power2.out",
      scrollTrigger: {
        trigger: review,  // Trigger the animation on each review
        start: "top 80%",  // Start when the top of the review reaches 80% of the viewport height
        end: "top 50%",    // End when the top of the review reaches 50% of the viewport height
        scrub: true,       // Scrub animation with scroll
        toggleActions: "play none none none", // Play animation on scroll
        once: true,        // Ensure animation runs only once per element
      //  markers: true,     // Add markers for debugging
      },
      delay: index * 0.2, // Stagger animation for each review
    });
  });
});


