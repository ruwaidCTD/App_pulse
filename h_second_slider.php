<!-- <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
            overflow: hidden;
        }

        .slider {
            height: 100px;
            width: 100%;
            overflow: hidden;
            position: relative;
            cursor: grab;
            background: #fff;
        }

        .slide-track {
            display: flex;
            gap: 0;
            transition: transform 0.1s ease;
        }

        .slide {
            flex: 0 0 250px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .slide img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .slider:active {
            cursor: grabbing;
        }
    </style>
</head>
<body>
    <div class="slider" id="slider">
        <div class="slide-track" id="slide-track">
            <div class="slide"><img src="static/mobilappDailyAwards-43b3f639a1935d16be8627e564436cf0.webp" alt=""></div>
            <div class="slide"><img src="static/serviceHand-f61a8928865c5791fcb14f7d22ba9430.webp" alt=""></div>
            <div class="slide"><img src="static/Stephen-Bradley-d947f8ac17ae9e8c78ed2819fe4e5f69.webp" alt=""></div>
            <div class="slide"><img src="static/requestConsultant-14c0ff3cb7f412ea2553c9b16d37828c.webp" alt=""></div>
        </div>
    </div>
    <script>
        const slider = document.getElementById('slider');
        const slideTrack = document.getElementById('slide-track');

        let isDragging = false;
        let startX;
        let currentTranslate = 0;
        let prevTranslate = 0;
        let animationID;

        // Duplicate slides for seamless infinite scroll
        const slides = Array.from(slideTrack.children);
        slideTrack.append(...slides.map(slide => slide.cloneNode(true)));
        slideTrack.prepend(...slides.map(slide => slide.cloneNode(true)));

        // Update slideTrack width
        const slideWidth = slides[0].offsetWidth;
        slideTrack.style.transform = `translateX(-${slides.length * slideWidth}px)`;

        slider.addEventListener('mousedown', (e) => {
            isDragging = true;
            startX = e.clientX;
            prevTranslate = currentTranslate;
            cancelAnimationFrame(animationID);
        });

        window.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            const currentX = e.clientX;
            const delta = currentX - startX;
            currentTranslate = prevTranslate + delta;
            slideTrack.style.transform = `translateX(${currentTranslate}px)`;
        });

        window.addEventListener('mouseup', () => {
            isDragging = false;
            const totalSlides = slides.length * 2;
            const trackWidth = totalSlides * slideWidth;
            const maxTranslate = -(trackWidth - slider.offsetWidth);

            if (currentTranslate > -slideWidth * slides.length) {
                currentTranslate -= trackWidth / 2;
            }
            if (currentTranslate < maxTranslate + slideWidth * slides.length) {
                currentTranslate += trackWidth / 2;
            }

            slideTrack.style.transform = `translateX(${currentTranslate}px)`;
            startAnimation();
        });

        const startAnimation = () => {
            animationID = requestAnimationFrame(() => {
                currentTranslate -= 1;
                slideTrack.style.transform = `translateX(${currentTranslate}px)`;

                const totalSlides = slides.length * 2;
                const trackWidth = totalSlides * slideWidth;
                const maxTranslate = -(trackWidth - slider.offsetWidth);

                if (currentTranslate > -slideWidth * slides.length) {
                    currentTranslate -= trackWidth / 2;
                }
                if (currentTranslate < maxTranslate + slideWidth * slides.length) {
                    currentTranslate += trackWidth / 2;
                }

                startAnimation();
            });
        };

        startAnimation();
    </script> -->
	<style>
  .swiper-container {
    width: 100%;
    height: 50vh; /* Adjusted for height */
    margin: 60px 0; /* margin top and bottom */
  }

  .swiper-container-free-mode > .swiper-wrapper {
    transition-timing-function: linear;
  }

  .swiper-slide {
    overflow: hidden;
    background-position: center center;
    background-size: cover;
    height: 100%; /* Ensure slide fills container height */
  }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="swiper-container swiper-container-free-mode">
  <div class="swiper-wrapper">
    <div class="swiper-slide" style="background-image:url(data:image/jpeg;base64,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)">
    </div>
    <div class="swiper-slide" style="background-image:url(https://www.google.com/imgres?q=image&imgurl=https%3A%2F%2Fgratisography.com%2Fwp-content%2Fuploads%2F2024%2F10%2Fgratisography-cool-cat-800x525.jpg&imgrefurl=https%3A%2F%2Fgratisography.com%2F&docid=YAe2I9AqIHgndM&tbnid=JTZXQS5iqyP2NM&vet=12ahUKEwjLn8aY7fOKAxUXQ6QEHTZlKTcQM3oECFIQAA..i&w=800&h=525&hcb=2&itg=1&ved=2ahUKEwjLn8aY7fOKAxUXQ6QEHTZlKTcQM3oECFIQAA)">
    </div>
    <div class="swiper-slide" style="background-image:url(https://www.google.com/imgres?q=image&imgurl=https%3A%2F%2Fletsenhance.io%2Fstatic%2F8f5e523ee6b2479e26ecc91b9c25261e%2F1015f%2FMainAfter.jpg&imgrefurl=https%3A%2F%2Fletsenhance.io%2F&docid=-t22bY2ix3gHaM&tbnid=tYmxDgFq4MrkJM&vet=12ahUKEwjLn8aY7fOKAxUXQ6QEHTZlKTcQM3oECBUQAA..i&w=1280&h=720&hcb=2&ved=2ahUKEwjLn8aY7fOKAxUXQ6QEHTZlKTcQM3oECBUQAA)">
    </div>
    <div class="swiper-slide" style="background-image:url(https://pp.userapi.com/c412624/v412624691/4136/_da_uAA6ha8.jpg)">
    </div>
    <div class="swiper-slide" style="background-image:url(https://pp.userapi.com/c637331/v637331691/48f5f/spHnV42iYVw.jpg)">
    </div>
    <div class="swiper-slide" style="background-image:url(https://pp.userapi.com/c837139/v837139407/67f52/fFqjq4U2mEk.jpg)">
    </div>
    <div class="swiper-slide" style="background-image:url(https://pp.userapi.com/c836139/v836139003/63ce1/QThPx7qPzvU.jpg)">
    </div>
  </div>
</div>

<script>
  var swiperOptions = {
    loop: true,
    freeMode: true,
    autoplay: {
      delay: 3000, // Set autoplay delay (3 seconds)
      disableOnInteraction: false,
    },
    loopAddBlankSlides: true,
    cssMode: true,
    slidesPerView: 2,
    speed: 1000, // Adjusted speed for smoother transition
    grabCursor: true,
    loopAdditionalSlides: 2,
  };

  var swiper = new Swiper(".swiper-container", swiperOptions);
</script>
