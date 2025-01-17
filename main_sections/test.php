<style>
  @import url('https://fonts.googleapis.com/css?family=Signika+Negative:300,400&display=swap');

body,
html {
  margin: 0;
  padding: 0;
  font-family: "Signika Negative", sans-serif; 
}

.scroller-test {
  height: 100vh;
}

section.header {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: white;
}

section.showcase {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: white;
}

section.footer {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: white;
}

/* section.header {
  background-color: #f5f5f5;
} */

section.showcase {
  justify-content: space-around;
  align-items: unset;
  height: 500vh;
}

/* section.footer {
  background-color: #f5f5f5;
} */

.version {
  position: absolute;
  height: 250px;
  width: 250px;
  left: calc(50vw - 125px);
  top: calc(50vh - 125px);
  background-color: transparent;
  color: lightgrey;
  display: flex;
  align-items: center;
  justify-content:center;
  font-size: 200px;
  z-index: 0;
}

.heading {
  color: grey;
  font-size: 30px;
  z-index: 1;
}

.text-wrap {
  position: relative;
  overflow: hidden;
  width: 450px;
  height: 100%;
}

.text-wrapper {
  position: relative;
  width: 100%;
  height: 100%;
}

.text {
  position: relative;
  width: 100%;  
  height: 100vh;
  font-size: 40px;
  text-transform: uppercase;
  font-weight: 900;
  text-align: center;
  background-color: white; 
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.text.blue {
  color: steelblue;
}

.text.red {
  color: red;
}

.text.green {
  color: green;
}

.text.orange {
  color: orange;
}

.text.purple {
  color: purple;
}

a {
  font-size: 25px;
  text-decoration: none;
  color: lightgrey;
}

a {
  transition: color 0.3s;
}

.heading a {
  font-size: unset;
}

a.greensock:hover {
  color: #88CE02;
}

a.easytiger:hover {
  color: #EB008A;
}

strong {
  color: green;
}

.heading span {
  display: block;
  margin-bottom: 15px;
} 

.image-wrap {
  border-radius: 5px;
}

.image-wrap {
  position: relative;
  overflow: hidden;
  width: 450px;
  height: 80vh;
  
  margin-top: 10vh;
}

.image {
  position: absolute;
  
  inset: 0%;

  width: 100%;
  height: 100%;
  
  background-position: 0px 0px;
  background-repeat: no-repeat;
}

.image.blue {
  background-image: url("https://picsum.photos/id/16/500/500");
}

.image.red {
  background-image: url("https://images.unsplash.com/photo-1519378058457-4c29a0a2efac?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=648&q=80");
}

.image.green {
  background-image: url("https://images.unsplash.com/photo-1536147116438-62679a5e01f2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80");
}

.image.orange {
  background-image: url("https://images.unsplash.com/photo-1582979512210-99b6a53386f9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80");
}

.side-image.purple,
.image.purple {
  background-image: url("https://images.unsplash.com/photo-1558350315-8aa00e8e4590?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80");
}
  </style>
<div class="scroller-test">

  <section class="header">
    
    <div class="version">V.2</div>
    
    <div class="heading">
      <span>
        <strong>Green</strong> is for <strong>GreenSock</strong>.
      </span>
      <span>
        <strong>Scroll</strong> is for <strong>ScrollTrigger</strong>.
      </span>
    </div>
  </section>

  <section class="showcase">

    <div class="text-wrap">    
      <div class="text-wrapper">
        <div class="text blue">Blue<br><a href="https://unsplash.com/@matthewwmcb" target="_blank" rel="noopener">Image Credit</a></div> 
        <div class="text red">Red<br><a href="https://unsplash.com/@tuannguyenminh" target="_blank" rel="noopener">Image Credit</a></div> 
        <div class="text green">Green<br><a href="https://unsplash.com/@ghog" target="_blank" rel="noopener">Image Credit</a></div> 
        <div class="text orange">Orange<br><a href="https://unsplash.com/@vinomamba24" target="_blank" rel="noopener">Image Credit</a></div> 
        <div class="text purple">Purple<br><a href="https://unsplash.com/@virussinside" target="_blank" rel="noopener">Image Credit</a></div> 
      </div>
    </div>

    <div class="image-wrap">
      <div class="image blue"></div> 
      <div class="image red"></div>
      <div class="image green"></div>
      <div class="image orange"></div> 
      <div class="image purple"></div> 
    </div>

  </section>

  <section class="footer">
    <div class="heading">
      <span>
        Fueled by <a class="greensock" href="https://greensock.com/docs/v3/Plugins/ScrollTrigger" target="_blank" rel="noopener">GSAP</a>              
      </span>

      <span>
        Inspired by <a class="easytiger" href="https://www.easytigerfilms.fr/en/actualites" target="_blank" rel="noopener">EasyTigerFilms</a>
      </span>
    </div>
  </section>

</div>