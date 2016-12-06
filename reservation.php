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
    <img src="Assets/logor.png" alt="Logo" style="width:40%">
    <h1 class="w3-xxlarge w3-animate-zoom"><span class="w3-hide-small">Reservation</span></h1>
  </div>
  <style>
    body,h1 {font-family: "aramis", aramis}
  </style>
</header>

<!-- Content -->
<div class="w3-content w3-padding" style="max-width:1564px">
  
<!-- Reserve Section -->
  <div class="w3-container w3-padding-32 w3-center" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-12">Reserve what you want to reserve here.</h3>
  </div>

<!-- Reservation Form Section -->
<div class="w3-container w3-center" id="feedback">
    <p>Ticket reservation</p>
    <form action="form.asp" target="_blank">
      <input class="w3-input w3-center" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section w3-center" type="text" placeholder="Address" required name="Address">
      <input class="w3-input w3-section w3-center" type="text" placeholder="Email" required name="Email">
      <input class="w3-input w3-section w3-center" type="text" placeholder="Number of tickets" required name="Number of tickets">
      <p>Contact person for ticket reservation :<br>+6283854234856 (Afif)<br>+6282299604258 (Orchid)</p>
      <button class="w3-btn w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> RESERVE
      </button>
    </form>
</div>

<div class="w3-container w3-center" id="feedback">
    <p>Service reservation</p>
	<!-- Data diri User -->
    <form action="form.asp" target="_blank">
      <input class="w3-input w3-center" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section w3-center" type="text" placeholder="Address" required name="Address">
      <input class="w3-input w3-section w3-center" type="text" placeholder="Email" required name="Email">
    <!-- Pilihan jasa -->
	  <form action="">
	  <p>Service :
	  <br>
		  <input type="checkbox" name="service" value="dirigen"> Dirigen
		  <input type="checkbox" name="service" value="vocal group"> Vocal Group*
		  <input type="checkbox" name="service" value="choir">Choir
		  <p>*maximum 6 person</p>
    </p>
    </form>
	  <!-- Gender -->
	  <form action="">
	  <p>Gender :
	  <br>
		  <input type="radio" name="gender" value="male only"> Male only
		  <input type="radio" name="gender" value="female only"> Female only
		  <input type="radio" name="gender" value="male & female"> Male & Female
	  </p>
    </form>
    <!-- Pengiring -->
	  <form action="">
	  <p>Accompaniment :
	  <br>
		  <input type="checkbox" name="accompaniment" value="keyboard"> Keyboard
		  <input type="checkbox" name="accompaniment" value="guitar"> Guitar
	  </p>
    </form>
    <!-- Pilihan lagu -->
	  <form action="">
	  <p>Song :
	  <br>
		  <input type="checkbox" name="gender" value="male"> Indonesia Raya
		  <input type="checkbox" name="gender" value="female"> Padamu Negeri
		  <input type="checkbox" name="gender" value="male"> Rayuan Pulau Kelapa
		  <input type="checkbox" name="gender" value="female"> Mengheningkan Cipta
	  </p>
    </form>
    <!-- Pilihan kostum, trdpt beberapa foto kostum tsb -->
	  <form action="">
		  <div class="w3-content" style="max-width:1564px">
		    <div class="w3-row-padding">
		      <div class="w3-container" id="dress">
			      <p>Dress :
		      </div>
		      <br>
		      <div class="w3-col l3 m6 w3-margin-bottom">
		        <img src="Assets/dfdfdfdf.jpg" alt="John" style="width:100%">
		        <input type="radio" name="gender" value="male only"> Orange & Purple<br>
		      </div>
		      <div class="w3-col l3 m6 w3-margin-bottom">
		        <img src="Assets/dfdfdfdf.jpg" alt="John" style="width:100%">
		        <input type="radio" name="gender" value="male only"> Black & Blue<br>
		      </div>
          <div class="w3-col l3 m6 w3-margin-bottom">
		        <img src="Assets/dfdfdfdf.jpg" alt="John" style="width:100%">
		        <input type="radio" name="gender" value="male only"> Black & Blue<br>
		      </div>
		      <div class="w3-col l3 m6 w3-margin-bottom">
		        <img src="Assets/dfdfdfdf.jpg" alt="John" style="width:100%">
		        <input type="radio" name="gender" value="male only"> Black & Blue<br>
		      </div>
	          </p>
	      </div>
	    </div>
    </form>
	  <!-- Tempat pelaksanaan acara -->
    <input class="w3-input w3-section w3-center" type="text" placeholder="Event's Location" required name="Event's Location">
    <!-- Tanggal & waktu pelaksanaan acara -->
	  <form action="action_page.php">
		  Organizing the Event :
	  <input type="datetime-local" name="date&time">
	  </form>
	  
    <p>Contact person for ticket reservation :<br>+6283854234856 (Afif)<br>+6282299604258 (Orchid)</p>
    <button class="w3-btn w3-section" type="submit">
      <i class="fa fa-paper-plane"></i> RESERVE
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
