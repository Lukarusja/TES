function navSlide() {
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".nav-links");
  const navLinks = document.querySelectorAll(".nav-links li");
  
  burger.addEventListener("click", () => {
      nav.classList.toggle("nav-active");
      navLinks.forEach((link, index) => {
          if (link.style.animation) {
              link.style.animation = ""
          } else {
              link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
          }
      });
      burger.classList.toggle("toggle");
  });
  
}

navSlide();



var videoPlayer = document.getElementById("videoPlayer");
var promoVideo = document.getElementById("promoVideo");

function stopVideo(){
    videoPlayer.style.display = "none"
    promoVideo.muted = true;
}

function playVideo(file){
    promoVideo.src = file;
    videoPlayer.style.display = "block";
}