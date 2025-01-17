gsap.registerPlugin(ScrollTrigger);

let bodyScrollBar = Scrollbar.init(document.querySelector('.scroller-test'), {
  damping: 0.1,
  delegateTo: document,
  alwaysShowTracks: true,
});

ScrollTrigger.scrollerProxy(".scroller-test", {
  scrollTop(value) {
    if (arguments.length) {
      bodyScrollBar.scrollTop = value;
    }
    return bodyScrollBar.scrollTop;
  },
});

bodyScrollBar.addListener(ScrollTrigger.update);

gsap.set(".image", { zIndex: (i, target, targets) => targets.length - i });

var images = gsap.utils.toArray('.image:not(.purple)');

images.forEach((image, i) => {
   
   var nextImage = image.nextElementSibling;
  
   var imageTimeline = gsap.timeline({
     
     scrollTrigger: {
       
       trigger: "section.showcase",
       scroller: ".scroller-test",
       
       start: () => "top -" + (window.innerHeight * i),       
       end: () => "+=" + window.innerHeight,
       
       scrub: true,
       invalidateOnRefresh: true, 
     }
     
   })

   imageTimeline
     .fromTo(image, { height: () => { return "100%" }, y: () => { return 0 } }, { height: () => { return "0%" }, y: () => { return -50 }, ease: "none" }, 0)
     .fromTo(nextImage, { y: () => { return 50 } }, { y: () => { return 0 }, ease: "none" }, 0)
   ;
});



ScrollTrigger.create({
  
      trigger: "section.showcase",
      scroller: ".scroller-test",

      start: () => "top top",
      end: () => "+=" + ((images.length) * window.innerHeight),

      pin: '.image-wrap', 
      anticipatePin: 1,
      
      invalidateOnRefresh: true,
  
});