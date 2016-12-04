<html>
<title>W3.CSS Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://several-icons/css/fontello.css">
<body>

<!-- Tulisan PSM pojok kiri atas & Menu di atas -->
<div class="w3-top">
  <ul class="w3-navbar w3-white w3-wide w3-padding-8 w3-card-2">
    <li>
      <a href="home.php" class="w3-margin-left"><b>PSM ITS</b></a>
    </li>
    <li class="w3-right w3-hide-small">
      <a href="home.php" class="w3-left">Home</a>
      <a href="aboutUs.php" class="w3-left">About Us</a>
      <a href="timeline.php" class="w3-left">Timeline</a>
      <a href="articles.php" class="w3-left">Articles</a>
      <a href="gallery.php" class="w3-left">Gallery</a>
      <a href="merchandise.php" class="w3-left">Merchandise</a>
      <a href="reservation.php" class="w3-left">Reservation</a>
      <a href="contact.php" class="w3-left w3-margin-right">Contact</a>
    </li>
    <style>
      body,a {font-family: "aramis", aramis}
    </style>
  </ul>
</div>  

<!-- Landing Page -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="background-image" src="Assets/body.jpg"  width="100%" height="100%">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-animate-zoom"><span class="w3-border w3-border-black w3-padding">PSM</span> <span class="w3-hide-small">Gallery</span></h1>
  </div>
  <style>
    body,h1 {font-family: "aramis", aramis}
  </style>
</header>

<!-- Content -->
<div class="w3-content w3-padding" style="max-width:1564px">
  <div class="w3-container w3-padding-32 w3-center" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-12">Let's explore our world.</h3>
  </div>
  <style>
    .mySlides {display:none}
    .w3-left, .w3-right, .w3-badge {cursor:pointer}
    .w3-badge {height:13px;width:13px;padding:0}
  </style>

<body>
  <div class="w3-content w3-display-container" style="max-width:800px">
    <img class="mySlides" src="Assets/dfdfdfdf.jpg" style="width:100%">
    <img class="mySlides" src="Assets/dfdfdfdf.jpg" style="width:100%">
    <img class="mySlides" src="Assets/dfdfdfdf.jpg" style="width:100%">
    <div class="w3-center w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
      <div class="w3-left w3-padding-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
      <div class="w3-right w3-padding-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    </div>
  </div>
  <script>
    var slideIndex = 1;
    showDivs(slideIndex);
    function plusDivs(n) {
      showDivs(slideIndex += n);
    }
    function currentDiv(n) {
      showDivs(slideIndex = n); 
    }
    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
      }
      x[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " w3-white";
    }
  </script>
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-12"></h3>
  </div>
</body>
</div>
  
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <a href="#" class="w3-btn w3-padding w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <a href="https://www.facebook.com/itsstudentchoir"><i class="fa fa-facebook-official w3-hover-text-indigo"></i></a>
    <a href="https://instagram.com/itschoir"><i class="fa fa-instagram w3-hover-text-purple"></i></a>
    <a href="https://twitter.com/itschoir"><i class="fa fa-twitter w3-hover-text-light-blue" ></i></a>
	<i class="fa fa-line-messenger w3-hover-text-purple"></i>
  </div>
  <p>LINE : <a href="http://line.me/ti/p/~ozp3651p" title="Line PSM ITS" target="_blank" class="w3-hover-text-green">ozp3651p</a></p>
</footer>  
  
</body>
</html>
