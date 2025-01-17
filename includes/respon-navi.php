
<style>
    .logo-top {
  text-align: center;
}

.logo-top img {
  width: 67%;
}

.nav-container {
  max-width: 124rem;
  margin: 0 auto;
  padding: 0 1rem;
}

header.header-mine {
  padding: 0;

  width: 100%;
}

.navigation {
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 7rem;
  column-gap: 0rem;
}

.nav_list {
  display: inline-block;
  gap: 2rem;
  align-items: center;
  margin: 0 1.5rem;
}

.nav_action {
  display: flex;
  align-items: center;
  gap: 1rem;
  display: none;
}

.nav_link {
  display: flex;
  justify-content: center;
  gap: 1rem;
  font-weight: 500;
  color: #fff;
  text-decoration: none;
  align-items: center;
}

.nav_link:hover {
  color: #f9c72d;
  transition: all ease-in-out 0.3s;
}

.lets {
  background-color: #f9c72d;
  color: #000;
  padding: 10px 0;
}

.lets:hover {
  background-color: #fff;
  color: #000;
  transition: all ease-in-out 0.4s;
}

.lets marquee {
  line-height: 1;
}

.lets marquee i {
  margin-right: 16px;
}

.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.8);
  display: none;
  justify-content: center;
  align-items: center;
  z-index: 999;
}

.modal-box-lets {
  background: #16171a;
  border-radius: 10px;
  text-align: center;
  transform: scale(0.5);
  opacity: 0;
}

.modls {
  padding: 20px;
}

.modal-box-lets h2 {
  margin: 0;
  color: #333;
}

.modal-box-lets p:hover {

  transform: scale(1);
}

.close-modal {
  margin-top: 20px;
  transition: all ease-in-out 0.3s;
  padding: 11px 19px;
  border: solid 1px #ffff;
  border-radius: 29px;
}

.close-modal:hover {
  background-color: #f9c72d;
  color: #000;
  border: solid 1px #f29220;
  transition: all ease-in-out 0.3s;
}

.gelatine {
  animation: gelatine 0.5s linear;
}

@keyframes gelatine {

  from,
  to {
    transform: scale(1, 1);
  }

  25% {
    transform: scale(0.9, 1.1);
  }

  50% {
    transform: scale(1.1, 0.9);
  }

  75% {
    transform: scale(0.95, 1.05);
  }
}

.modals-form {
  text-align: left;
}

.form-control-mine {
  display: block;
  width: 100%;
  padding: .375rem .75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #fff;
  background-color: #ffffff00;
  background-clip: padding-box;
  border-bottom: 1px solid #ced4da;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  border-radius: .25rem;
  transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
  border-right: 0;
  border-top: 0;
  border-left: 0;
  border-radius: 0;
}

input.form-control-mine:focus-visible {
  outline: 0;
  border-bottom: 1px solid #F29220;
  transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}

.res-nav_toggle {
  cursor: pointer;
  display: none;
}

.res-nav_toggle ion-icon {
  font-size: 3.5rem;
  color: #101828;
}

.drop-down {
  position: absolute;
  top: 6.5rem;
  left: 0;
  width: 100%;
  background: rgb(252, 253, 251);
  box-shadow: 0rem 0.2rem 0.5rem rgba(32, 7, 65, 0.14);
  clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
  transition: all 0.5s ease-in;
  border-bottom: solid 5px #f9c72d;
  z-index: 999;
}

.nav_list_menu:hover .drop-down {
  clip-path: polygon(0 0, 100% 0, 100% 102%, 0 102%);
}

.drop-down-inner {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
  gap: 1rem;
  padding: 2rem;
}

.nav_list_menu:hover ion-icon.md {
  transition: all 0.5s ease-in;
  transform: rotate(180deg);
}

.mine:hover ion-icon.md {
  transition: all 0.5s ease-in;
  transform: rotate(180deg);
}

.mine:hover .drop-down {
  clip-path: polygon(0 0, 100% 0, 100% 102%, 0 102%);
}

.item-list {
  display: flex;
  align-items: center;
  gap: 1rem;
  margin: 1.5rem 0;
}

.item-img {
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #F4EBFF;
}

.item-list {
  position: relative;
  z-index: 9;
}

.itemListInfo {
  position: relative;
  z-index: 10;
}

.itemListInfo:active {
  position: relative;
  z-index: 10;
}

.itemListInfo h4 {
  position: relative;
  z-index: 9999;
}

.itemListInfo a {
  position: relative;
  width: 100%;
  z-index: 9999;
  text-decoration: none;
  color: #16171A;
  transition: all 0.5s ease-in;
}

.itemListInfo a:hover {
  color: #f9c72d !important;
  transition: all 0.5s ease-in;
  border-bottom: solid 1px #f9c72d;
}

.drop-down-item h3.item-heading {
  font-size: 1.3rem;
  font-weight: 700;
  font-style: normal;
}

.itemListInfo a {
  font-size: 1rem;
  font-style: normal;
}

.itemListInfo h4 {
  font-size: 1.1rem;
  font-style: normal;
  font-weight: 800;
}

.nav_menu.active {
  display: block !important;
  transform: translateX(864px);
  transition: all ease-in-out 0.3s;
}


.letsbg {
  background-color: #f9c72d;
  color: #000;
  padding: 10px 0;
}

.nav_list a.letss i {
  margin-right: 8px;
}

.nav_list a.letss {
  display: inline-block;
  white-space: nowrap;
  animation: letslide 2s linear infinite;
}

@keyframes letslide {
  0% {
    transform: translateX(100%);
  }

  100% {
    transform: translateX(-100%);
  }
}

.letss:hover a {
  animation-play-state: paused;
}














.res-nav_action {
  align-items: center;
  gap: 1rem;
  display: none;
}
.respons-menu-only {
  display: none;
  top: 0;
}


li.respo-li {
  list-style: none;
  line-height: 2.2;
}

li.respo-li a {
  color: #000;
  text-decoration: none;
  position: relative;
  z-index: 9999999;
  /* display: block; */
}



























@media (max-width: 1008px) {

  .logo-top ul.nav_menu,
  .logo-top ul {
    padding-left: 0 !important;
  }

  .nav_list {

    margin: 0 1rem;
  }
}

@media (max-width: 908px) {

  .logo-top ul.nav_menu,
  .logo-top ul {
    padding-left: 0 !important;
  }

  .nav_list {
    margin: 0 0.9rem;
  }
}

@media (max-width: 908px) {
  .nav_list {
    margin: 0 0.7rem;
  }
}

@media (max-width: 799px) {
  .nav_list {
    margin: 0 0.9rem 0 0;
  }
}

@media (max-width: 770px) {
  .nav_list {
    margin: 0 0.6rem 0 0;
  }
}

@media (max-width:767px) {

  .logo-top img {
    width: 67%;
    filter: drop-shadow(2px 4px 6px black);
  }

  .res-nav_action {
    display: flex;
}

.res-nav_toggle {
  display: block;
  position: absolute;
  right: 1rem;
}
.burger-res {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  width: 30px;
  height: 25px;
  margin-left: 10px;
  cursor: pointer;
}

.burger-res-line {
  width: 100%;
  height: 4px;
  background-color: #333;
  border-radius: 2px;
  transition: transform 0.3s ease, opacity 0.3s ease;
}

.res-nav_toggle.active .burger-res-line:nth-child(1) {
  transform: translateY(8px) rotate(45deg);
}

.res-nav_toggle.active .burger-res-line:nth-child(2) {
  opacity: 0;
}

.res-nav_toggle.active .burger-res-line:nth-child(3) {
  transform: translateY(-11px) rotate(-45deg);
}


  /* .nav_action {
      display: block;}


    .nav_list {
      display: block;
      margin: 2rem 0;
      text-align: center;}
 
    .nav_link {
      padding: 0 2rem;
      display: flex;
      justify-content: space-between;
      color: #000;}
    .navigation {
      background-color: #ffffff00;}
   
   
      header.header-mine {
      left: -10px;}
    .nav_action {
      display: block;
      background-color: #fff;
      border-radius: 10px;}
    ul.nav_menu li:last-Child {
      display: inline-block;}

    .drop-down {
      top: 0;
      position: relative;
      clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
      box-shadow: none;
      height: 0;
      text-align: start;
      transition: all 0.5s ease-in;}
    .nav_list_menu:hover .drop-down {
      height: 100%;
      transition: all 0.5s ease-in;}
    .mine:hover .drop-down {
      height: 100%;
      transition: all 0.5s ease-in;}

    .drop-down {
      display: none; }

    .drop-down.active {
      display: block;    }
.lets {
  float: none;
   margin-bottom: 0px; 
  margin-left: 0rem; } */

  nav.navigation ul.nav_menu {
    display: none !important;
  }
  .navigation {

    display: none;
}



header.header-mine {
 
  height: 93px;
}
.nav-container {
  /* display: flex; */
  /* background-color: #fff; */
  /* position: absolute;
  width: 100%; */
  padding: 23px 5px 23px 5px;
  
}
.respons-menu-only .logo-top {
  display: flex;
  text-align: start;
  background-color: #fff;
  padding: 23px 5px 23px 15px;
}
.respons-menu-only {
  position: absolute;
  /* top: 21rem; */
  /* padding: 2rem; */
  z-index: 99;
  cursor: pointer !important;
  display: block;
  top: 0;
  /* padding: 23px 5px 23px 5px; */
  width: 100%;
  left: 0;
}


  .resp-menu-ul {
    position: relative;
    /* top: 1rem; */
    left: 0;
    width: 100%;
    z-index: 9999;
    background: rgb(252, 253, 251);
    clip-path: circle(3.0% at 100% 0);
    transform: translateX(0) !important;
    transition: all 0.4s ease-in;
    /* display: none; */
    opacity: 0;
    /* pointer-events: none; */
  }
  li.respo-li {

    line-height: 3.2;
}
  .resp-menu-ul.active {
    clip-path: circle(141.2% at 100% 0);
    transition: all 0.4s ease-in;
    transform: translateX(1) !important;
    opacity: 1;
    /* display: block; */
    padding-bottom: 5rem;
    padding-right: 2rem;
    }
  .top-arrow {
      cursor: pointer !important;
      float: right;
      transform: scale(1.5) rotate(0deg);
      transition: all 0.4s ease-in;
      
  }

  .top-arrow.active
 {  
    transform: scale(1.5) rotate(180deg);
    transition: all 0.4s ease-in;
    color: #f9c72d;
  
  }
  ul.sub-resp-menu {
    top: 0;
    position: relative;
    z-index: 999;
    overflow: hidden;
    display:none;
  }
  ul.sub-resp-menu.active {
    top: 0;
    position: relative;
    z-index: 999;
    overflow: hidden;
    display: block;
    background-color: #f9f9f9;
}
  li.respo-li:last-child {
    margin-top: 31px;
    display: inline-block;
}
ul.sub-resp-menu li.respo-li:last-child {
  margin-top: 0;
  display: inline-block;
}
li.sub-resp-li a.sub-nav-link {
  text-decoration: underline;
}
  /* ion-icon.top-arrow:active + ul.sub-resp-menu {
    display:block;
    transition: all 0.5s ease-in;
  }
  ion-icon.top-arrow:active + ul.sub-resp-menu li.sub-resp-li {
    display: block;
  } */
  /* header.header-mine {
        left: 0;
        background-color: #fff;} */
}
@media (max-width:365px) {
  .logo-img {
    width: 10rem;
  }
  .btn,
  .btn-primary {
    padding: 0.4rem 1rem;
  }
}
    </style>
<header class="header-mine">
  <div class="nav-container">
    <nav class="navigation ">
      <div class="logo-top"> <a href="index.php"><img src="assets/images/logo.png"></a></div>
      <ul class="nav_menu">
        <li class="nav_list">
          <a href="index.php" class="nav_link"><span>Home</span></a></li>
        <li class="nav_list nav_list_menu">
          <a href="about-us.php" class="nav_link"><span>About</span></a></li>
        <li class="nav_list nav_list_menu">
          <a href="our-process.php" class="nav_link"><span>Our Process</span></a></li>
 <li class="nav_list mine">
          <a href="services.php" class="nav_link">
            <span style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">Services</span>
            <ion-icon name="chevron-down-outline" role="img" class="md hydrated" aria-label="chevron down outline" style="opacity: 1;"></ion-icon>
          </a>
          <div class="drop-down">
            <div class="drop-down-inner">
              <div class="drop-down-item">
                <h3 class="item-heading">Brand</h3>
                <div class="item-list">
                  <div class="item-img"><img src="assets/images/chess.gif"></div>
                  <div class="itemListInfo">
                    <h4>Brand Strategies</h4>
                    <p><a href="brand-basics.php">Brand Basic</a></p>
                  </div>
                </div>
                <div class="item-list">
                  <div class="item-img"><img src="assets/images/management-consulting.gif"></div>
                  <div class="itemListInfo">
                    <h4>Brand Designs</h4>
                    <p><a href="brand-managment.php">Brand Design &amp; Management</a></p>
                  </div>
                </div>
              </div>
              <div class="drop-down-item">
                <h3 class="item-heading">Solutions</h3>
                <div class="item-list">
                  <div class="item-img"><img src="assets/images/world-creativity-and-innovation-day.gif"></div>
                  <div class="itemListInfo">
                    <h4>Customize</h4>
                    <p><a href="creative-solution.php">Creative Solutions and Illustrations</a></p>
                  </div>
                </div>
                <div class="item-list">
                  <div class="item-img">
                    <img src="assets/images/programmer.gif"></div>
                  <div class="itemListInfo">
                    <h4>Development</h4>
                    <p><a href="custom-web-solutions.php">Custom Web Development</a></p>
                  </div>
                </div>
                <div class="item-list">
                  <div class="item-img"><img src="assets/images/mobile.gif"></div>
                  <div class="itemListInfo">
                    <h4>Android &amp; IOS</h4>
                    <p><a href="mobileapp.php">Mobile App Development</a></p>
                  </div>
                </div>
              </div>
              <div class="drop-down-item">
                <h3 class="item-heading">Social Media</h3>
                <div class="item-list">
                  <div class="item-img"><img src="assets/images/social-media.gif"/></div>
                  <div class="itemListInfo">
                    <h4>Social Media Platforms</h4>
                    <p> <a href="marketing.php">Digital Marketing Strategies</a></p>
                  </div>
                </div>
                <div class="item-list">
                  <div class="item-img">
                    <img src="assets/images/light-bulb.gif"></div>
                  <div class="itemListInfo">
                    <h4>Ecommerce Consultancy</h4>
                    <p><a href="ecommerce-effects.php">Ecommerce Solutions</a></p>
                  </div>
                </div>
                <div class="item-list">
                  <div class="item-img"><img src="assets/images/application-store.gif"></div>
                  <div class="itemListInfo">
                    <h4>Ecommerce</h4>
                    <p><a href="ecommerce.php">Ecommerce website</a></p>
                  </div>
                </div>
                <div class="item-list">
                  <div class="item-img"><img src="assets/images/startup.gif"></div>
                  <div class="itemListInfo">
                    <h4>Boost Your Websites</h4>
                    <p><a href="seo.php">Search Engine Optimization(SEO)</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav_list"> <a href="blog.php" class="nav_link"> <span>Blog</span> </a> </li>
        <li class="nav_list">
          <div class="open-modal-apply">
            <a href="javascript:void;" class="lets">
              <marquee behavior=scroll direction="left" scrolldelay="200">
 <!-- <i class="fa-regular fa-envelope"></i> -->Apply Now</marquee></a> </div>
        </li>
      </ul>
    </nav>
    <nav class="respons-menu-only" id="respo-menu">
    <div class="logo-top"> <a href="index.php"><img src="assets/images/logo.png"></a>
    <div class="res-nav_action">
        <div class="res-nav_toggle" id="nav_toggle">
          <!-- <ion-icon name="menu-outline"></ion-icon> -->
          <div class="burger-res" id="burger-res">
            <span class="burger-res-line"></span>
            <span class="burger-res-line"></span>
            <span class="burger-res-line"></span>
          </div>
        </div>
      </div>
  </div>
<ul class="resp-menu-ul">
  <li class="respo-li"><a href="index.php" class="nav-link-res">Home</a></li>
  <li class="respo-li"><a href="about-us.php" class="nav-link-res">About</a></li>
  <li class="respo-li"><a href="our-process.php" class="nav-link-res">Our Process</a></li>
  <li class="respo-li mine-res"><a href="services.php" class="nav-link-res">Services
</a>    <ion-icon name="chevron-down-outline" role="img" class="top-arrow mds hydrateds" aria-label="chevron down outline" style="opacity: 1;"></ion-icon>
    <ul class="sub-resp-menu">
        <li class="respo-li sub-resp-li"><a href="brand-basics.php" class="nav-link-res sub-nav-link">Brand</a></li>
        <li class="respo-li sub-resp-li"><a href="brand-managment.php" class="nav-link-res sub-nav-link">Brand Design & Management</a></li>
        <li class="respo-li sub-resp-li"><a href="creative-solution.php" class="nav-link-res sub-nav-link">Creative Solutions and Illustrations</a></li>
        <li class="respo-li sub-resp-li"><a href="custom-web-solutions.php" class="nav-link-res sub-nav-link">Custom Web Development</a></li>
        <li class="respo-li sub-resp-li"><a href="mobileapp.php" class="nav-link-res sub-nav-link">Mobile App Development</a></li>
        <li class="respo-li sub-resp-li"><a href="marketing.php" class="nav-link-res sub-nav-link">Digital Marketing Strategies</a></li>
        <li class="respo-li sub-resp-li"><a href="ecommerce-effects.php" class="nav-link-res sub-nav-link">Ecommerce Solutions</a></li>
        <li class="respo-li sub-resp-li"><a href="ecommerce.php" class="nav-link-res sub-nav-link">Ecommerce website</a></li>
        <li class="respo-li sub-resp-li"><a href="seo.php" class="nav-link-res sub-nav-link">Search Engine Optimization(SEO)</a></li>
    </ul></a>  </li>
  <li class="respo-li"><a href="blog.php" class="nav-link-res">Blog</a></li>
  <li class="respo-li">  
    <div class="open-modal-apply">
            <a href="javascript:void;" class="lets">
              <marquee behavior=scroll direction="left" scrolldelay="200">
                Apply Now</marquee>
            </a> </div></li></ul>
      </nav>
  
  </div>
</header>
