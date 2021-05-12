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
        <h1>Know Your Dog More.</h1>
        <p>Give your best friend the care they need<br>because they deserve it</p>
        <a href="#learn-more">
            <button class="main-button">LEARN MORE</button>
        </a>
        <a href="scan.php">
            <button class="main-button">SCAN NOW</button>   
        </a>
        
    </div>
    <div class="large-container" id="learn-more">
      <h1 id="learn-more-header">LEARN MORE ABOUT YOUR DOG</h1>
      <div id="learn-more-text">
        <p>The Dog Breed Idenditier is a simple web application that utilises machine learning to detect a dog breed from a given image. </p>
        <br>
        <p>The application provides you with information based on the dog provided to make sure you can give it the best care it needs.</p>
        <br>
        <p>You can learn how to use it <a href="tutorial.html">here</a></p>      
      </div>
      <div id=video-container>
        <!-- <video autoplay muted loop onclick="this.paused? this.play() : this.pause()" id="main-video">
          <source src="assets/videos/test.webm">
          Your browser does not support the video tag.
        </video> -->
        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/H4PSpR0p_sU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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