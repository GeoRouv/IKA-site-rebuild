<?php 
	header("content-type: text/html;charset=utf-8");
    include('./utility/config.php');
	include('./utility/session.php');
?>

<html lang="en" dir="ltr" >

<head>
<title>Ασφαλιστικό Κέντρο Πολιτών</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="../styles/layout.css?ts=<?=time()?>&quot; />" type="text/css">
<style>
.container {
    position: relative;
    height:100px;
    left:100px;
    top:50px;
    width: 35%;
	padding:0px -100px;
}

.image {
  opacity: 0.70;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0.8;
  position: absolute;
  top: 150%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.container:hover .image {
  opacity: 0.15;
}

.container:hover .middle {
  opacity: 1;
}

.text{
  background-color: #210B61;
  font-size: 16px;
  padding: 15px 32px;
  width:150px;
  word-wrap: break-word;
  text-align:center;
}


</style>

<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>

<body>

<div class="wrapper row1">
  <header id="header" class="clear">
  
    <div id="hgroup">
      <h1><a href="./index.php">Α.Κ.Π.</a></h1>
      <h2>Ασφαλιστικό Κέντρο Πολιτών</h2>
    </div>
	
	<?php if (!isset ($login_session)) echo '<a href="./utility/login.php" style="float:right;  float:right;  margin:25px 70px; padding:-200px; text-decoration: underline;" >Σύνδεση</a>' ?>
	<?php if (!isset ($login_session)) echo '<a href="./utility/registration.php" style="float:right;  float:right;  margin:25px -180px; padding:0px; text-decoration: underline;" >Εγγραφή</a>' ?>


	<?php if (isset ($login_session)) echo '<a href="./utility/profile.php" style="float:right;  float:right;  margin:-10px 0px; padding:-200px; text-decoration: none;" >Καλωσορίσατε '.$login_session.'!</a>' ?>
	<?php if (isset ($login_session)) echo '<a href="./utility/profile.php" style="float:right;  float:right;  margin:25px 80px; padding:-200	px; text-decoration: underline;" >Προφίλ</a>' ?>
	<?php if (isset ($login_session)) echo '<a href="./utility/logout.php" style="float:right;  float:right;  margin:25px -205px; padding:0px; text-decoration: underline;" >Αποσύνδεση</a>' ?>

    <form action="#" method="post">
      <fieldset>
       <legend>Search:</legend>
        <input type="text" value="Αναζήτηση&hellip;" onFocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;">
        <input type="submit" id="sf_submit" value="Go">
      </fieldset>
    </form>
	
	<br><br><br><br><br>
	
	<div class="navbar">
	  <a href="./index.php" style="background-color:#333;">Αρχική</a>
	  <div class="dropdown">
		<button class="dropbtn" onclick="myFunction()">Υπηρεσίες
		  <i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-content" id="myDropdown">
		  <a href="./insured/insured_services.php" style="background-color:#333; color:#ffffff">Ασφαλισμένοι</a>
		  <a href="./retired/retired_services.php" style="background-color:#333; color:#ffffff">Συνταξιούχοι</a>
		  <a href="./utility/under_construction.php" style="background-color:#333; color:#ffffff">Εργοδότες</a>
		  <a href="./utility/under_construction.php" style="background-color:#333; color:#ffffff">Οφειλέτες</a>
		  <a href="./utility/under_construction.php" style="background-color:#333; color:#ffffff">Φορείς</a>
		  <a href="./utility/under_construction.php" style="background-color:#333; color:#ffffff">Κατ'Οίκον Φροντίδα</a>	
		  <a href="./utility/under_construction.php" style="background-color:#333; color:#ffffff">Αναπηρία</a>
		  <a href="./utility/under_construction.php" style="background-color:#333; color:#ffffff">Ανεργία</a>
		  <a href="./utility/under_construction.php" style="background-color:#333; color:#ffffff">Θάνατος Οικογενειακού Μέλους</a>
		</div>

	  </div> 
	  <a href="./shops.php" style="background-color:#333;">Καταστήματα</a>
	  <a href="./communication.php" style="background-color:#333;">Επικοινωνία</a>
	</div>

  </header>
</div>


<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
	<a href="index.php" style="float:left; margin-bottom: 20px; text-decoration: none;" >>Αρχική</a>
	

     <!-- main content (Slider sto CSS)-->
    <section id="slider" class="clear">
      <figure>
        <figcaption style="height:1450px;">
			<h2><b>Καλωσορίσατε στο Α.Κ.Π.</b></h2>
			
			</br>Για γρήγορη πρόσβαση στο κομμάτι που επιθυμείτε επιλέξτε από τις ακόλουθες κατηγορίες:
	
			<div class="container">
			  <img src="../images/young.jpg" alt="Avatar" class="image" style="width:100%">
			  <div class="middle">
				<div class="text">
					<a href="./insured/insured_services.php">Ασφαλισμένοι</a>
				</div>
				<br>
				<div style="background-color: rgba(88,88,88,0.9);" >
					&#8226;&nbsp<a href="./insured/insured_applications.php" style="color:#FF9900">Αίτηση Ασφάλισης Τέκνου</a></br><br>
					&#8226;&nbsp<a href="./insured/insured_documents.php" style="color:#FF9900">Βεβαίωση Ενσήμων</a><br><br>
					&#8226;&nbsp<a href="./insured/stamps.php" style="color:#FF9900">Υπολογισμός Ενσήμων</a>
				</div>
			  </div>

			</div>
			
			<div class="container" style="top:-250px; left:500px;">
			  <img src="../images/older_couple.jpg" alt="Avatar" class="image" style="width:100%">
			  <div class="middle" style="top:350%">
				<div class="text" >
					<a href="./retired/retired_services.php">Συνταξιούχοι</a>
				</div>
				<br>
				<div style="background-color: rgba(88,88,88,0.9);" >
					&#8226;&nbsp<a href="./retired/retired_applications.php" style="color:#FF9900">Αίτηση Συνταξιοδότησης</a></br><br>
					&#8226;&nbsp<a href="./retired/retired_documents.php" style="color:#FF9900">Βεβαίωση Σύνταξης</a><br><br>
					&#8226;&nbsp<a href="./retired/pension.php" style="color:#FF9900">Υπολογισμός Ποσού &nbsp&nbsp&nbspΣύνταξης</a>
				</div>
			  </div>
			</div>
			
			<div class="container" style="top:-220px; left:100px;">
			  <img src="../images/employer.jpg" alt="Avatar" class="image" style="width:100%">
			  <div class="middle" style="top:550%"><br><br><br>
				<div class="text" >
					<a href="./utility/under_construction.php">Εργοδότες</a>
				</div>
				<br>
				<div style="background-color: rgba(88,88,88,0.9);" >
					&#8226;&nbsp<a href="./utility/under_construction.php" style="color:#FF9900">Yποβολή ενσήμων από εργοδότη &nbsp&nbspγια εργαζόμενο</a></br><br>
					&#8226;&nbsp<a href="./utility/under_construction.php" style="color:#FF9900">Βεβαίωση Ασφαλιστικής &nbsp&nbspΕνημερώτητας</a><br><br>
					&#8226;&nbsp<a href="./utility/under_construction.php" style="color:#FF9900">Μαζική Ταυτοποίηση &nbsp&nbspΑσφαλισμένων</a>
				</div>				
			  </div>
			</div>
			
			<div class="container" style="top:-520px; left:500px;">
			  <img src="../images/ofiletes.jpg" alt="Avatar" class="image" style="width:100%">
			  <div class="middle" style="top:750%">
				<div class="text" >
					<a href="./utility/under_construction.php">Οφειλέτες</a>
				</div>
				<br>
				<div style="background-color: rgba(88,88,88,0.9);" >
					&#8226;&nbsp<a href="./utility/under_construction.php" style="color:#FF9900">Ρύθμιση Οφειλών</a></br><br>
					&#8226;&nbsp<a href="./utility/under_construction.php" style="color:#FF9900">Πιστοποίηση Οφειλέτη</a><br><br>
					&#8226;&nbsp<a href="./utility/under_construction.php" style="color:#FF9900">Υπολογισμός Δόσεων Ρύθμισης</a>
				</div>
			  </div>
			</div>
			
			<div class="container" style="top:-490px; left:100px;">
			  <img src="../images/foreis.jpg" alt="Avatar" class="image" style="width:100%">
			  <div class="middle" style="top:950%"><br>
				<div class="text" >
					<a href="./utility/under_construction.php">Φορείς</a>
				</div>
				<br>
				<div style="background-color: rgba(88,88,88,0.9);" >
					&#8226;&nbsp<a href="./utility/under_construction.php" style="color:#FF9900">Πιστοποίηση Φορέα(για την λήψη &nbsp&nbspασφαλιστικής ενημερώτητας)</a></br><br>
					&#8226;&nbsp<a href="./utility/under_construction.php" style="color:#FF9900">Βεβαίωση Ασφαλιστικής &nbsp&nbspΕνημερώτητας</a><br><br>
				</div>
			  </div>
			</div>
			
			<div class="container" style="top:-790px; left:500px;">
			  <img src="../images/old_care.jpg" alt="Avatar" class="image" style="width:100%">
			  <div class="middle" style="top:1150%"><br><br>
				<div class="text" >
					<a href="./utility/under_construction.php">Κατ'Οίκον Φροντίδα</a>
				</div>
				<br>
				<div style="background-color: rgba(88,88,88,0.9);" >
					&#8226;&nbsp<a href="./utility/under_construction.php" style="color:#FF9900">Αίτηση Συμμετοχής στο &nbsp&nbspΠρόγραμμα</a><br><br>
					&#8226;&nbsp<a href="./utility/under_construction.php" style="color:#FF9900">Πιστοποίηση Παρόχων για το &nbsp&nbspΠρόγραμμα</a><br><br>
					&#8226;&nbsp<a href="./utility/under_construction.php" style="color:#FF9900">Πληροφορίες</a>
				</div>
			  </div>
			</div>
			
			<div class="container" style="top:-760px; left:100px;">
			  <img src="../images/office.jpg" alt="Avatar" class="image" style="width:100%">
			  <div class="middle" style="top:1350%"><br>
				<div class="text" >
					<a href="./utility/under_construction.php">Ανεργία</a>
				</div>
				<br>
				<div style="background-color: rgba(88,88,88,0.9);" >
					&#8226;&nbsp<a href="./utility/under_construction.php" style="color:#FF9900">Αίτηση Επιδόματος Ανεργίας</a></br><br>
					&#8226;&nbsp<a href="./utility/under_construction.php" style="color:#FF9900">Ποσό Επιδόματος Ανεργίας</a><br><br>
				</div>
			  </div>
			</div>
			
			<div class="container" style="top:-1060px; left:500px;">
			  <img src="../images/wheel.jpg" alt="Avatar" class="image" style="width:100%">
			  <div class="middle" style="top:1550%"><br><br>
				<div class="text" >
					<a href="./utility/under_construction.php">Αναπηρία</a>
				</div>
				<br>
				<div style="background-color: rgba(88,88,88,0.9);" >
					&#8226;&nbsp<a href="./utility/under_construction.php" style="color:#FF9900">Αίτηση Αξιολόγησης Αναπηρίας</a><br><br>
					&#8226;&nbsp<a href="./utility/under_construction.php" style="color:#FF9900">Αίτηση Αναπηρικής Σύνταξης</a><br><br>
					&#8226;&nbsp<a href="./utility/under_construction.php" style="color:#FF9900">Εισηγητικός Φάκελος Παροχών Αναπηρίας</a>
				</div>
			  </div>
			</div>
			
			<br><br><br>
			
			
		  
			
				
				
          <!-- <footer class="more"><a href="#">Read More &raquo;</a></footer> -->

        </figcaption>
      </figure>
	  
    </section>
   

	
	
	
	
	
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <div id="homepage" class="last clear">
      <section class="one_quarter">
        <h2 class="title">Βρείτε μας στα Κοινωνικά Δίκτυα:</h2>
         <nav>
          <ul>
            <li><a href="http://www.facebook.com" target="_blank">Facebook</a></li>
            <li><a href="http://www.twitter.com" target="_blank">Twitter</a></li>
            <li class="last"><a href="http://www.skype.com" target="_blank">Skype(Με chatbot)</a></li>
          </ul>
        </nav>
      </section>
      <section class="one_quarter">
        <h2 class="title">Άλλοι σύνδεσμοι:</h2>
        <nav>
          <ul>
            <li><a href="http://www.efka.gov.gr/" target="_blank">Εθνικός Οργανισμός Παροχής Υπηρεσιών Υγείας(Ε.Ο.Π.Υ.Υ)</a></li>
            <li><a href="http://www.eopyy.gov.gr/Home/StartPage?a_HomePage=Index" target="_blank">Ενιαίος Φορέας Κοινωνικής Ασφάλισης(Ε.Φ.Κ.Α)</a></li>
            <li><a href="http://www.ypakp.gr/" target="_blank">Υπουργείο Εργασίας, Κοινωνικής Ασφάλισης κ' Κοινωνικής Αλληλεγγύης</a></li>
            <li><a href="https://diavgeia.gov.gr/" target="_blank">Υπουργείο Διοικητικής Ανασυγκρότησης(Πρόγραμμα "Διαύγεια")</a></li>
            <li class="last"><a href="http://www.kep.gov.gr/portal/page/portal/kep" target="_blank">Κέντρο Εξυπηρέτησης Πολιτών(Κ.Ε.Π)</a></li>
          </ul>
        </nav>
      </section>
      <section class="two_quarter lastbox">
        <h2 class="title">Σχετικά με εμάς:</h2>
        <img class="imgl" src="../images/about.jpg" width="130" height="130" alt="">
        <p>Το Ασφαλιστικό Κέντρο Πολιτών (Α.Κ.Π.) είναι ο κρατικός φορέας κύριας ασφάλισης στην Ελλάδα που δημιουργήθηκε το 1934. Επί σειρά ετών ήταν και είναι ένας από τους κύριους ασφαλιστικούς φορείς, ενώ για πολλές δεκαετίες διέθετε το δικό του δίκτυο μονάδων παροχής υπηρεσιών υγείας, το οποίο συγχωνεύθηκε στο Εθνικό Σύστημα Υγείας (ΕΣΥ) και τον Εθνικό Οργανισμό Παροχής Υπηρεσιών Υγείας (ΕΟΠΥΥ).</p>
      </section>
    </div>
    <!-- / content body -->
  </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">EAM - Di crew</a></p>
	<p class="fl_right">><a href="./utility/navigator.php">Sitemap</a></p>
	<p class="fl_right">><a href="./utility/FAQ.php">FAQ &nbsp &nbsp</a></p>
	
  </footer>
</div>



<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>
</html>
