<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="SpaceX, Muhammad Sutan Juansyah, Rocket"
    />
    <meta name="author" content="Muhammad Sutan Juansyah" />
    <link rel="icon" type="image/x-icon" href="img/spacexxx.ico" />
    <link rel="Shortcut Icon" type="image/ico" href="img/spacexxx.ico" />

    <title>SpaceX - MSJ</title>
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/script.js" defer></script>
  </head>
  <body>
    <div id="overlay"></div>
    <div id="mobile-menu" class="mobile-main-menu">
      <ul>
        <li><a href="#">Mission</a></li>
        <li><a href="#">Launches</a></li>
        <li><a href="#">Careers</a></li>
        <li><a href="#">Updates</a></li>
        <li><a href="#">Shop</a></li>

        <li class="mobile-only"><a href="falcon9.html">Falcon 9</a></li>
        <li class="mobile-only">
          <a href="falcon-heavy.html">Falcon Heavy</a>
        </li>
        <li class="mobile-only"><a href="dragon.html">Dragon</a></li>
        <li class="mobile-only"><a href="#">Human SpaceFlight</a></li>
        <li class="mobile-only"><a href="#">RideShare</a></li>
        <li class="mobile-only"><a href="#">Starlink</a></li>
      </ul>
    </div>

    <header class="main-header">
      <div class="logo">
        <a href="index.html">
          <img src="img/logo.png" alt="SpaceX" />
        </a>
      </div>
      <nav class="desktop-main-menu">
        <ul>
          <li><a href="falcon9.html">Falcon 9</a></li>
          <li><a href="falcon-heavy.html">Falcon Heavy</a></li>
          <li><a href="dragon.html">Dragon</a></li>
          <li><a href="#">Human SpaceFlight</a></li>
          <li><a href="#">RideShare</a></li>
          <li><a href="#">Starlink</a></li>
          <li ><a href="#">Shop</a></li>
        </ul>
      </nav>
      <!-- <div class="shop-link">
        <a href="#">Shop</a>
      </div> -->
    </header>

    <button id="menu-btn" class="hamburger" type="button">
      <span class="hamburger-top"></span>
      <span class="hamburger-middle"></span>
      <span class="hamburger-bottom"></span>
    </button>

    <!-- Hamburger Menu -->

    <!-- Section A -->
    <section class="section-a">
      <div class="section-inner">
        <h4>Upcoming Launch</h4>
        <h2>USSF-52 MISSION</h2>
        <a href="#" class="btn">
          <div class="hover"></div>
          <span>Watch</span>
        </a>
      </div>

      <div class="scroll-arrow">
        <svg width="30px" height="20px" aria-label="more content below">
          <path
            fill="none"
            stroke="#ffffff"
            stroke-width="2px"
            d="M2.000,5.000 L15.000,18.000 L28.000,5.000 "
          ></path>
        </svg>
      </div>
    </section>

    <!-- Section B -->
    <section class="section-b">
      <video
        aria-hidden="true"
        data-content-video="true"
        poster="https://sxcontent9668.azureedge.us/cms-assets/assets/Flight_2_Web_Crop_fbebdf1cd4.jpg"
        muted=""
        playsinline=""
        loop=""
        autoplay=""
      >
        <source
          type="video/mp4"
          src="https://sxcontent9668.azureedge.us/cms-assets/assets/OTF_2_Launch_Checkpoint_Slo_Mo_1920_1080_4ef903451e.mp4"
        />
      </video>
      <div class="section-inner">
        <h4>Recent Launch</h4>
        <h2>Starship's Second Flight Test</h2>
        <a href="#" class="btn">
          <div class="hover"></div>
          <span>Learn More</span>
        </a>
      </div>

      <div class="scroll-arrow">
        <svg width="30px" height="20px" aria-label="more content below">
          <path
            fill="none"
            stroke="#ffffff"
            stroke-width="2px"
            d="M2.000,5.000 L15.000,18.000 L28.000,5.000 "
          ></path>
        </svg>
      </div>
    </section>

    <!-- Section C -->
    <section class="section-c">
      <div class="section-inner">
        <h4>Recent Launch</h4>
        <h2>Starlink mission</h2>
        <a href="#" class="btn">
          <div class="hover"></div>
          <span>Learn More</span>
        </a>
      </div>

      <div class="scroll-arrow">
        <svg width="30px" height="20px" aria-label="more content below">
          <path
            fill="none"
            stroke="#ffffff"
            stroke-width="2px"
            d="M2.000,5.000 L15.000,18.000 L28.000,5.000 "
          ></path>
        </svg>
      </div>
    </section>

    <footer>
      <ul>
        <li>Spacex &copy; 2023</li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Youtube</a></li>
        <li><a href="#">Flick</a></li>
        <li><a href="#">Linkedin</a></li>
        <li><a href="#">Privacy</a></li>
        <li><a href="#">Suppliers</a></li>
      </ul>
    </footer>
  </body>
</html>
