<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="icon" href="favicon.ico">
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width", initial-scale=1.0>
     <meta http-equiv="X-UA-Compatible" content="ie-edge">
     <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="assets/css/style.css">

     <title>Dog Breed Identifier | Home</title>
</head>
<body>
    <section class="header">
        <nav>
            <div class="logo">
                <h4><a href="index.php">Dog Breed Identifier</a></h4>
            </div>
            <ul class ="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="scan.php">Scan</a></li>
                <li><a href="tutorial.html">Tutorial</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </section>
    <div class="textbox">
        <h1>Know Your Pets More.</h1>
        <p>Blabllablablabla balb alb alba lbalbalbalbabab<br>make sure you buy what you need.</p>
        <a href="#learn-more">
            <button class="main-button">LEARN MORE</button>
        </a>
        <a href="scan.php">
            <button class="main-button">SCAN NOW</button>   
        </a>
        
    </div>
    <div class="large-container" id="learn-more">
      <h1 id="learn-more-header">LEARN MORE ABOUT YOUR DOG HERE</h1>
      <div id="learn-more-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
      <div id=video-container>
        <video autoplay muted loop onclick="this.paused? this.play() : this.pause()" id="main-video">
          <source src="assets/videos/test.webm">
          Your browser does not support the video tag.
        </video>
      </div>
      <div id="learn-more-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
      <br>
      <br>
    </div>
    <footer>
        <div class="footer-box">
            <div class="footer-content">
                <h3>Developed by the University of Lincoln TSE Group 19</h3>
                <p>Sib, Wlad, Matt, Deacon, Dan, Danielle</p>
                </div>
            </div>
        </div>
    </footer>
</body>
    <script src="assets/scripts/bar.js"></script>
    <script src="assets/scripts/animation.js"></script>
</html>