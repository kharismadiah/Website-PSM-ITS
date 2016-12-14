<html>
<title>Paduan Suara Mahasiswa ITS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://several-icons/css/fontello.css">
<body>

<!-- Tulisan PSM pojok kiri atas & Menu di atas -->
<div class="w3-top">
  <ul class="w3-navbar w3-white w3-wide w3-padding-8 w3-card-2">
    <li class="w3-row-padding">
	  <img class="logo-image" src="Assets/logoKecil.jpg">
    </li>
    <li class="w3-right w3-hide-small">
      <a href="home.php" class="w3-left">Home</a>
      <a href="articles.php" class="w3-left">Articles</a>
      <a href="gallery.php" class="w3-left">Gallery</a>
      <a href="timeline.php" class="w3-left">Timeline</a>
      <a href="merchandise.php" class="w3-left">Merchandise</a>
      <a href="reservation.php" class="w3-left">Reservation</a>
      <a href="aboutUs.php" class="w3-left">About Us</a>
    </li>
    <style>
      body,a {font-family: "aramis", aramis}
    </style>
  </ul>
</div> 

<!-- Landing Page -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="background-image" src="Assets/body1.png"  width="100%" height="100%">
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
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-12"><font size="5">Reserve what you want to reserve here.</font></h3>
  </div>

<!-- Reservation Form Section -->
<div class="w3-container w3-center" id="feedback">
    <p><font size="5">Pemesanan Tiket Konser</font></p>
    <font size="4">
	<form method="post" action="mailto:Psmits.itsstudentchoir@gmail.com" enctype="text/plain">
      <input class="w3-input w3-center" type="text" placeholder="Nama Lengkap" required name="Nama Lengkap">
      <input class="w3-input w3-section w3-center" type="text" placeholder="Alamat" required name="Alamat">
      <input class="w3-input w3-section w3-center" type="text" placeholder="Email" required name="Email">
      <input class="w3-input w3-section w3-center" type="text" placeholder="Jumlah Tiket" required name="Jumlah Tiket">
      <p><font size="4">Jenis Tiket :
	  <br>
		  <input type="radio" name="jenis" value="gold"> Gold
		  <input type="radio" name="jenis" value="silver"> Silver
		  <input type="radio" name="jenis" value="bronze"> Bronze
	  </font>
	  </p>
	  <p><font size="4">Contact person Pemesanan Tiket Konser :<br>+6283854234856 (Afif)<br>+6282299604258 (Orchid)</font></p>
      <button class="w3-btn w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> PESAN
      </button>
    </form>
	</font>
</div>

<div class="w3-container w3-center" id="feedback">
    <p><font size="5">Pemesanan Jasa</font></p>
	<!-- Data diri User -->
	<font size="4">
    <form method="post" action="mailto:Psmits.itsstudentchoir@gmail.com" enctype="text/plain">
      <input class="w3-input w3-center" type="text" placeholder="Nama Lengkap" required name="Nama Lengkap">
      <input class="w3-input w3-section w3-center" type="text" placeholder="Alamat" required name="Alamat">
      <input class="w3-input w3-section w3-center" type="text" placeholder="Email" required name="Email">
    <!-- Pilihan jasa -->
	  <form action="">
	  <p><font size="4">Service :
	  <br>
		  <input type="checkbox" name="service" value="dirigen"> Dirigen
		  <input type="checkbox" name="service" value="vocal group"> Vocal Group*
		  <input type="checkbox" name="service" value="choir"> Choir
		  <p>*maximum 6 person</p>
      </font>
      </p>
    </form>
	  <!-- Gender -->
	  <form action="">
	  <p><font size="4">Gender :
	  <br>
		  <input type="radio" name="gender" value="male only"> Male only
		  <input type="radio" name="gender" value="female only"> Female only
		  <input type="radio" name="gender" value="male & female"> Male & Female
	  </font>
	  </p>
    </form>
    <!-- Pengiring -->
	  <form action="">
	  <p><font size="4">Pengiring :
	  <br>
		  <input type="checkbox" name="accompaniment" value="keyboard"> Keyboard  
		  <input type="checkbox" name="accompaniment" value="guitar"> Guitar
	  </font>
	  </p>
    </form>
    <!-- Pilihan lagu -->
	<form action="">
	  <p><font size="4">Lagu :
	  <br>
		  <input type="checkbox" name="gender" value="male"> Indonesia Raya
		  <input type="checkbox" name="gender" value="female"> When I Fall In Love
		  <input type="checkbox" name="gender" value="male"> Astaga
		  <input type="checkbox" name="gender" value="female"> We Are The Champions
		  <input type="checkbox" name="gender" value="male"> Ma Rencong Rencong
		  <input type="checkbox" name="gender" value="female"> Luk Luk Lumbu
		  <input type="checkbox" name="gender" value="male"> Tardigadingdangdo
		  <input type="checkbox" name="gender" value="female"> Bungong Jeumpa
		  <input type="checkbox" name="gender" value="male"> Anoman Obong
		  <br>
		  <input type="checkbox" name="gender" value="female"> Sik Sik Sibatumanikam
		  <input type="checkbox" name="gender" value="male"> Lenggang Surabaya
		  <input type="checkbox" name="gender" value="female"> Rek Ayo Rek
		  <input type="checkbox" name="gender" value="male"> Semanggi Surabaya
		  <input type="checkbox" name="gender" value="female"> Surabaya
		  <input type="checkbox" name="gender" value="male"> Rosas Pandan
		  <input type="checkbox" name="gender" value="female"> Janger
		  <input type="checkbox" name="gender" value="female"> Congratulations
		  <input type="checkbox" name="gender" value="male"> This Marriage
		  <input type="checkbox" name="gender" value="female"> Cing Cangkeling
		  <br>
		  <input type="checkbox" name="gender" value="male"> Ahtoy Porosh
		  <input type="checkbox" name="gender" value="female"> Nyon Nyon
		  <input type="checkbox" name="gender" value="male"> Just The Way You Are
		  <input type="checkbox" name="gender" value="female"> Flashlight
		  <input type="checkbox" name="gender" value="female"> Roar
		  <input type="checkbox" name="gender" value="male"> When You Believe
		  <input type="checkbox" name="gender" value="female"> Reflection		  
	  </font>
	  </p>
    </form>
    <!-- Pilihan kostum, trdpt beberapa foto kostum tsb -->
	<form action="">
		<div class="w3-content w3-padding" style="max-width:1564px">
		    <div class="w3-row-padding w3-margin-center">
		      <div class="w3-container" id="dress">
			  	<p>
				<font size="4">Dress :
			  </div>
			  <div class="w3-row-padding">
					<div class="w3-col m3 w3-margin-bottom">
						<img src="Assets/kostum1.png" alt="House" style="width:100%">
						<p>
						<input type="radio" name="gender" value="male only"> Kostum 1
						</p>
					</div>
					<div class="w3-col m3 w3-margin-bottom">
						<img src="Assets/kostum2.png" alt="House" style="width:100%">
						<p>
						<input type="radio" name="gender" value="male only"> Kostum 2
						</p>
					</div>
					<div class="w3-col m3 w3-margin-bottom">
						<img src="Assets/kostum3.png" alt="House" style="width:100%">
						<p>
						<input type="radio" name="gender" value="male only"> Kostum 3
						</p>
					</div>
					<div class="w3-col m3 w3-margin-bottom">
						<img src="Assets/kostum4.png" alt="House" style="width:100%">
						<p>
						<input type="radio" name="gender" value="male only"> Kostum 4
						</p>
					</div>
					<div class="w3-col m3 w3-margin-bottom">
						<img src="Assets/kostum5.png" alt="House" style="width:100%">
						<p>
						<input type="radio" name="gender" value="male only"> Kostum 5
						</p>
					</div>
					<div class="w3-col m3 w3-margin-bottom">
						<img src="Assets/kostum6.png" alt="House" style="width:100%">
						<p>
						<input type="radio" name="gender" value="male only"> Kostum 6
						</p>
					</div>
					<div class="w3-col m3 w3-margin-bottom">
						<img src="Assets/kostum7.png" alt="House" style="width:100%">
						<p>
						<input type="radio" name="gender" value="male only"> Kostum 7
						</p>
					</div>
					<div class="w3-col m3 w3-margin-bottom">
						<img src="Assets/kostum8.png" alt="House" style="width:100%">
						<p>
						<input type="radio" name="gender" value="male only"> Kostum 8
						</p>
					</div>
			  </div>
				</font>
				</p>
			</div>
		</div>
    </form>
	<!-- Tempat pelaksanaan acara -->
    <font size="4"><input class="w3-input w3-section w3-center" type="text" placeholder="Lokasi Acara" required name="Lokasi Acara"></font>
    <!-- Tanggal & waktu pelaksanaan acara -->
	  <form action="action_page.php">
		  Waktu Pelaksanaan Acara :
	  <input type="datetime-local" name="date&time">
	  </form>
    <p><font size="4">Contact person Pemesanan Jasa :<br>+6283854234856 (Afif)<br>+6282299604258 (Orchid)</font></p>
    <button class="w3-btn w3-section" type="submit">
      <i class="fa fa-paper-plane"></i> PESAN
    </button>
	</font>
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
