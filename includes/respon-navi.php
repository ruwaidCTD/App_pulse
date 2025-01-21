<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    background-color: #0e1034;
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

  .nav_menu.activated {
    display: block !important;
    transform: translateX(864px);
    transition: all ease-in-out 0.3s;
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
    color: #fff;
    text-decoration: none;
    position: relative;
    z-index: 9999999;
    font-size: 1.2rem;
}
















  /* 
  @media (max-width:1024px){

} */



  @media (max-width: 1024px) {
    header.header.absolute.inset-x-0 {
      display: none;
    }

    .logo-top img {
      width: 67%;
      filter: drop-shadow(2px 4px 6px black);
    }

    .res-nav_action {
      display: flex;
    }

    ul.sub-resp-menu h3 a {
      font-size: 1.2rem;
    }

    .res-nav_toggle {
      display: flex;
      position: absolute;
      right: 1rem;
      column-gap: 12px;
      align-items: center;
    }

    .res-nav_toggle.activated {
      display: flex;

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
      background-color: #fff;
      border-radius: 2px;
      transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .res-nav_toggle.activated .burger-res-line:nth-child(1) {
      transform: translateY(8px) rotate(45deg);
    }

    .res-nav_toggle.activated .burger-res-line:nth-child(2) {
      opacity: 0;
    }

    .res-nav_toggle.activated .burger-res-line:nth-child(3) {
      transform: translateY(-11px) rotate(-45deg);
    }

    nav.navigation ul.nav_menu {
      display: none !important;
    }

    .navigation {

      display: none;
    }
.main-logo{
  transition: all 0.3s ease-in;
}
    .nones{
      translate: 0% -146%;
      transition: all 0.3s ease-in;

}

    header.header-mine {

      height: 93px;
    }

    .nav-container {
      padding: 23px 5px 23px 5px;

    }

    .respons-menu-only .logo-top {
      display: flex;
      text-align: start;
      background-color: #0e1034;
      padding: 23px 5px 23px 15px;
    }

    .respons-menu-only {
      position: absolute;
      z-index: 50;
      cursor: pointer !important;
      display: block !important;
      top: 0;
      width: 100%;
      left: 0;
      height: 0;
    }

    li.respo-li {

      line-height: 3.2;
    }






    .resp-menu-ul {
      position: relative;
      right: 0 !important;
      width: 100%;
      z-index: 9999;
      background-color: #0e1034;
      transition: all 0.3s ease-in;
      /* opacity: 0; */
      translate: 0% 0;
      /* translate: 150% -130%; */
      /* height: 0vh; */

      opacity: 0;
    }


    .resp-menu-ul.activated {
      /* clip-path: circle(141.2% at 100% 0); */
      /* transition: all 0.4s ease-in; */
      /* opacity: 1; */
      /* display: block; */
      /* padding-bottom: 5rem;
        padding-right: 2rem; */
      /* transform: scale(3.5); */
      right: 0 !important;
      width: 100%;
      translate: 0% 0%;
      /* translate: 150% 0%; */
      /* height: 100vh; */
      padding-bottom: 5rem;
      transition: all 0.3s ease-in;
      opacity: 1;
      padding: 0 2rem 0;
      top: -1px;
    }

    /* .resp-menu-ul.activated {
  clip-path: circle(141.2% at 100% 0);
  transition: all 0.4s ease-in;
  transform: translateX(1) !important;
  opacity: 1;
  padding-bottom: 5rem;
  padding: 0 2rem 0;

} */








    .top-arrow-one {
      cursor: pointer !important;
      float: right;
      transform: scale(1.5) rotate(0deg);
      transition: all 0.4s ease-in;
      color: #fff;

    }

    .top-arrow-one.active {
      transform: scale(1.5) rotate(180deg);
      transition: all 0.4s ease-in;
      color: #f9c72d;

    }

    .top-arrow-tw {
      cursor: pointer !important;
      float: right;
      transform: scale(1.5) rotate(0deg);
      transition: all 0.4s ease-in;
      color: #fff;

    }

    .top-arrow-tw.active {
      transform: scale(1.5) rotate(180deg);
      transition: all 0.4s ease-in;
      color: #f9c72d;

    }

    .top-arrow-tws {
      cursor: pointer !important;
      float: right;
      transform: scale(1.5) rotate(0deg);
      transition: all 0.4s ease-in;
      color: #fff;

    }

    .top-arrow-tws.active {
      transform: scale(1.5) rotate(180deg);
      transition: all 0.4s ease-in;
      color: #f9c72d;

    }

    ul.sub-resp-menu {
      top: 0;
      position: relative;
      z-index: 999;
      overflow: hidden;
      display: none;
    }

    ul.sub-resp-menu.active {
      top: 0;
      position: relative;
      z-index: 999;
      overflow: hidden;
      display: block;
      /* background-color: #f9f9f9; */
    }

    /* li.respo-li:last-child {
  margin-top: 31px;
  display: inline-block;
} */

    /* ul.sub-resp-menu li.respo-li:last-child {
  margin-top: 0;
  display: inline-block;
} */

    /* li.sub-resp-li a.sub-nav-link {
      text-decoration: underline;
    } */


    .modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    justify-content: center;
    align-items: center;
    z-index: 999;
    padding-top: 8rem;
  }
    section.hero>div {
      z-index: 5 !important;
    }

    .close-modal {

      padding: 0;

    }

    .modal-box h2 {

      font-size: 1.9rem;
      line-height: 2rem;
    }

    ul.compnay-sub-res{
      display:none;
    }
    ul.compnay-sub-res.active{
      display:block;
    }

    ul.compnay-sub-ress{
      display:none;
    }
    ul.compnay-sub-ress.active{
      display:block;
    }
    li.respo-li {
    display: none;
}
li.respo-li.active {
        display: block;
        border-bottom: solid 1px #f63f31;
    }
li.respo-li.active i.fa-solid {
        font-size: 8px;
        margin-top: 20px;
    }

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

  @media (max-width:991.99px) {


.resp-menu-ul {
        width: 100%;
        translate: 0% 0%;
        height: 0;
    }
    .resp-menu-ul.active {
        width: 100%;
        translate: 0% 0%;
        padding-top: 2rem;
        height: auto;
    }
    li.respo-li.active h3 {
    margin: 16px 0 0 0;
    line-height: 0 !important;
    font-weight: bold;
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

  @media (max-width:767px) {}

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<header class="header-mine">
  <div class="nav-container">

    <nav class="respons-menu-only" id="respo-menu">
      <div class="logo-top"> <a href="index.php"><img src="./dist/images/AppPulseLogo-white.svg" class="main-logo"></a>
        <div class="res-nav_action">
          <button class="header-module--buttonChange--18e23 h-9 px-5 bg-white text-black rounded-full 
        font-bold text-sm open-btns open-modal">
            <span>Get in Touch</span>
            <span>Get in Touch</span></button>
            
          <div class="res-nav_toggle" id="nav_toggle">

            <div class="burger-res" id="burger-res">
              <span class="burger-res-line"></span>
              <span class="burger-res-line"></span>
              <span class="burger-res-line"></span>
            </div>
          </div>
        </div>
      </div>
      <ul class="resp-menu-ul">
    
        <img src="./dist/images/AppPulseLogo-white.svg" class="mb-4 res-logo">
        <li class="respo-li mine-res"><a href="services.php" class="nav-link-res">Services
          </a>
          <i class="fa-solid fa-chevron-up top-arrow-one"></i>
          <!-- <ion-icon name="chevron-down-outline" role="img" class="top-arrow mds hydrateds"
            aria-label="chevron down outline" style="opacity: 1; color:white;"></ion-icon> -->
          <ul class="sub-resp-menu">
            <h3><a class="font-extrabold text-sm text-white   menu_links leading-[44px]"
                href="mobile-app-development.php">Mobile Application</a></h3>
            <li class="respo-li sub-resp-li"><a href="javascript:void;" class="nav-link-res sub-nav-link">iOS
                App Development</a></li>
            <li class="respo-li sub-resp-li">
              <a href="javascript:void;" class="nav-link-res sub-nav-link">Android App Development</a></li>
            <li class="respo-li sub-resp-li"><a href="javascript:void;" class="nav-link-res sub-nav-link">Ecommerce App
                Development</a></li>
            <h3><a class="font-extrabold text-sm text-white  menu_links leading-[44px]"
                href="mobile-app-development.php">
                Game Development</a></h3>
            <li class="respo-li sub-resp-li"><a href="javascript:void;" class="nav-link-res sub-nav-link">Unity Game
                Development</a></li>
            <li class="respo-li sub-resp-li"><a href="javascript:void;" class="nav-link-res sub-nav-link"></a></li>
            <h3><a class="font-extrabold text-sm text-white  menu_links leading-[44px]"
                href="blockchain-development.php">Blockchain Development</a></h3>
            <li class="respo-li sub-resp-li"><a href="javascript:void;" class="nav-link-res sub-nav-link">
                Web3 Development</a></li>
            <h3><a class="font-extrabold text-sm text-white  menu_links leading-[44px]" href="mo">Web and
                MVP</a></h3>

            <li class="respo-li sub-resp-li"><a href="javascript:void;" class="nav-link-res sub-nav-link">
              MVP Development</a></li>
            <li class="respo-li sub-resp-li"><a href="javascript:void;" class="nav-link-res sub-nav-link">
              Website Development</a></li>

          </ul>
          </a>
        </li>
        <li class="respo-li"><a href="#portfolio-section" class="nav-link-res">Portfolio</a></li>
        <li class="respo-li"><a href="javascript:void;" class="nav-link-res">Why App pulse</a></li>
        <li class="respo-li"><a href="javascript:void;" class="nav-link-res">Company</a>
        <i class="fa-solid fa-chevron-up top-arrow-tw"></i>
          <ul class="compnay-sub-res">
          <h3><a class="font-extrabold text-sm text-white menu_links leading-[44px]"
          href="blockchain-development.php">About</a></h3>
            <li class="respo-li sub-resp-li">
              <a href="javascript:void;" class="nav-link-res sub-nav-link">Process</a></li>
            <li class="respo-li sub-resp-li">
              <a href="javascript:void;" class="nav-link-res sub-nav-link">Manifesto</a></li>
          </ul>
        </li>
        <li class="respo-li"><a href="javascript:void;" class="nav-link-res">Contact</a></li>
        <!-- <li class="respo-li"><a href="javascript:void;" class="nav-link-res">Company</a>
        <i class="fa-solid fa-chevron-up top-arrow-tws"></i>
          <ul class="compnay-sub-ress">
          <h3><a class="font-extrabold text-sm text-white pb-[25px] menu_links leading-[44px]"
          href="blockchain-development.php">About</a></h3>
            <li class="respo-li sub-resp-li">
              <a href="javascript:void;" class="nav-link-res sub-nav-link">Process</a></li>
            <li class="respo-li sub-resp-li">
              <a href="javascript:void;" class="nav-link-res sub-nav-link">Manifesto</a></li>
          </ul>
        </li> -->

      </ul>
    </nav>

  </div>
</header>


<script>
  $(document).ready(function () {
    $(".res-nav_toggle").click(function () {
   
      $(".resp-menu-ul").toggleClass("activated");
      $("li.respo-li").toggleClass("active");
      
      $(".res-nav_toggle").toggleClass("activated");
    

      
    });

      $(".res-nav_toggle").click(function(){
        $("img.main-logo").toggleClass("nones");
     
      });
   
 });


  $(document).ready(function () {
    $("i.top-arrow-one").click(function () {
      $("i.top-arrow-one").toggleClass("active");
      $(".sub-resp-menu").toggleClass("active");
    });
  });



  $(document).ready(function () {
    $("i.top-arrow-tw").click(function () {
      $("i.top-arrow-tw").toggleClass("active");
      $("ul.compnay-sub-res").toggleClass("active");
    });
  });


  // $(document).ready(function () {
  //   $("i.top-arrow-tws").click(function () {
  //     $("i.top-arrow-tws").toggleClass("active");
  //     $("ul.compnay-sub-ress").toggleClass("active");
  //   });
  // });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>