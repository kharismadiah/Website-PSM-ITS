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
    <img src="Assets/Logo PSM ITS.png" alt="Logo" style="width:30%">
    <h1 class="w3-xxlarge w3-animate-zoom"><span class="w3-hide-small">Paduan Suara Mahasiswa ITS</span></h1>
  </div>
  <style>
    body,h1 {font-family: "aramis", aramis}
  </style>
</header>

<!-- Content -->
<div class="w3-content w3-padding" style="max-width:1564px">
  <!-- Testimonial -->
  <div class="w3-container w3-padding-32" id="Testimonials">
    <h3 class="w3-border-bottom w3-center w3-border-light-grey w3-padding-12">TESTIMONIALS</h3>
  </div>
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="Assets/dfdfdfdf.jpg" alt="John" style="width:100%">
      <h3>John Doe</h3>
      <p class="w3-opacity">CEO and Founder</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="Assets/dfdfdfdf.jpg" alt="Jane" style="width:100%">
      <h3>Jane Doe</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="Assets/dfdfdfdf.jpg" alt="Mike" style="width:100%">
      <h3>Mike Ross</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="Assets/dfdfdfdf.jpg" alt="Dan" style="width:100%">
      <h3>Dan Star</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
    </div>
  </div>
  <!-- Feedback -->
  <div class="w3-container w3-padding-32 w3-center" id="feedback">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-12">FEEDBACK</h3>
    <p>Let's get in touch and talk about your suggestions for our improvements.</p>
    <form action="form.asp" target="_blank">
      <input class="w3-input w3-center" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section w3-center" type="text" placeholder="Email" required name="Email">
      <input class="w3-input w3-section w3-center" type="text" placeholder="Subject" required name="Subject">
      <input class="w3-input w3-section w3-center" type="text" placeholder="Suggestions" required name="Suggestions">
      <button class="w3-btn w3-section w3-center" type="submit">
        <i class="fa fa-paper-plane"></i> SEND SUGGESTIONS
      </button>
    </form>
  </div>
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
