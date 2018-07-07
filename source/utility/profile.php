<?php
	include('./config.php');
    include('./session.php');
?>

<html lang="en" dir="ltr" >

<head>
<title>Ασφαλιστικό Κέντρο Πολιτών</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="/sdi1400173/styles/layout.css?ts=<?=time()?>&quot; />" type="text/css">
<style>
.error-message {
	padding: 7px 10px;
	background: #fff1f2;
	border: #ffd5da 1px solid;
	color: #d6001c;
	border-radius: 4px;
}
.success-message {
	padding: 7px 10px;
	background: #cae0c4;
	border: #c3d0b5 1px solid;
	color: #027506;
	border-radius: 4px;
}
.demo-table {
	background: #98A9BA;
	width: 100%;
	border-spacing: initial;
	margin: 15px 0px;
	word-break: normal;
	table-layout: auto;
	line-height: 1.8em;
	color: #333;
	border-radius: 10px;
	padding: 5px 5px;
}
.demo-table td{
	padding: 15px 0px;
	font-size:13px;
	text-align:left;
	}

.demoInputBox {
	padding: 10px 80px;
	border: #a9a9a9 1px solid;
	border-radius: 4px;
}
.btnRegister {
	padding: 10px 70px;
	background-color: #3367b2;
	border: 0;
	color: #FFF;
	cursor: pointer;
	border-radius: 4px;
	margin-left: -40px;
}
</style>
</head>

<body>

<div class="wrapper row1">
  <header id="header" class="clear">
  
    <div id="hgroup">
      <h1><a href="../index.php">Α.Κ.Π.</a></h1>
      <h2>Ασφαλιστικό Κέντρο Πολιτών</h2>
    </div>
	
	<?php if (!isset ($login_session)) echo '<a href="login.php" style="float:right;  float:right;  margin:25px 70px; padding:-200px; text-decoration: underline;" >Σύνδεση</a>' ?>
	<?php if (!isset ($login_session)) echo '<a href="registration.php" style="float:right;  float:right;  margin:25px -180px; padding:0px; text-decoration: underline;" >Εγγραφή</a>' ?>

	<?php if (isset ($login_session)) echo '<a href="profile.php" style="float:right;  float:right;  margin:-10px 0px; padding:-200px; text-decoration: none;" >Καλωσορίσατε '.$login_session.'!</a>' ?>
	<?php if (isset ($login_session)) echo '<a href="profile.php" style="float:right;  float:right;  margin:25px 80px; padding:-200	px; text-decoration: underline;" >Προφίλ</a>' ?>
	<?php if (isset ($login_session)) echo '<a href="logout.php" style="float:right;  float:right;  margin:25px -205px; padding:0px; text-decoration: underline;" >Αποσύνδεση</a>' ?>

    <form action="#" method="post">
      <fieldset>
       <legend>Search:</legend>
        <input type="text" value="Αναζήτηση&hellip;" onFocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;">
        <input type="submit" id="sf_submit" value="Go">
      </fieldset>
    </form>
	
	<br><br><br><br><br>
	
	<div class="navbar">
	  <a href="../index.php" style="background-color:#333;">Αρχική</a>
	  <div class="dropdown">
		<button class="dropbtn" onclick="myFunction()">Υπηρεσίες
		  <i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-content" id="myDropdown">
		  <a href="../insured/insured_services.php" style="background-color:#333; color:#ffffff">Ασφαλισμένοι</a>
		  <a href="../retired/retired_services.php" style="background-color:#333; color:#ffffff">Συνταξιούχοι</a>
		  <a href="./under_construction.php" style="background-color:#333; color:#ffffff">Εργοδότες</a>
		  <a href="./under_construction.php" style="background-color:#333; color:#ffffff">Οφειλέτες</a>
		  <a href="./under_construction.php" style="background-color:#333; color:#ffffff">Φορείς</a>
		  <a href="./under_construction.php" style="background-color:#333; color:#ffffff">Κατ'Οίκον Φροντίδα</a>
		  <a href="./under_construction.php" style="background-color:#333; color:#ffffff">Αναπηρία</a>
		  <a href="./under_construction.php" style="background-color:#333; color:#ffffff">Ανεργία</a>
		  <a href="./under_construction.php" style="background-color:#333; color:#ffffff">Θάνατος Οικογενειακού Μέλους</a>		 		  
		</div>
	  </div> 

	  <a href="../shops.php" style="background-color:#333;">Καταστήματα</a>
	  <a href="../communication.php" style="background-color:#333;">Επικοινωνία</a>
	</div>

  </header>
</div>


<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
	<a href="../index.php" style="float:left; margin-bottom: 20px; text-decoration: none;" >>Αρχική</a>
	<a href="./profile.php" style="float:left; margin-bottom: 20px; text-decoration: none;" >>Προφίλ</a>
	

     <!-- main content (Slider sto CSS)-->
    <section id="slider" class="clear">
      <figure>
        <figcaption style="height:940px;">
			<h2>Προφίλ</h2>			
			<table border="0" width="500" align="center" class="demo-table">									
				<?php

				$db->query("SET NAMES 'utf8'");
				$db->query("SET CHARACTER SET 'utf8'");
				
				// get the records from the database
				if ($result = $db->query("SELECT * FROM users WHERE username = '$login_session' "))
				{
					// display records if there are records to display
					if ($result->num_rows > 0)
					{

					
						$row = $result->fetch_object();
						
						// set up a row for each record
						echo "<tr>";
						echo "<td style="."padding-left:5px; font-size:13px; font-family:Georgia, Times, serif;".">Όνομα Χρήστη: </td>";
						echo "<td>" . $row->username . "<a href=".'./edit_profile.php'." style=".'color:black'."> &#9998;</a></td>";	
						echo "</tr>";
						
						echo "<tr>";
						echo "<td style="."padding-left:5px; font-size:13px; font-family:Georgia, Times, serif;".">Κωδικός: </td>";
						echo "<td >" . $row->password . "<a href=".'./edit_profile.php'." style=".'color:black'."> &#9998;</a></td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td style="."padding-left:5px; font-size:13px; font-family:Georgia, Times, serif;".">Όνομα: </td>";
						echo "<td>" . $row->name . "<a href=".'./edit_profile.php'." style=".'color:black'."> &#9998;</a></td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td style="."padding-left:5px; font-size:13px; font-family:Georgia, Times, serif;".">Επώνυμο: </td>";
						echo "<td>" . $row->surname . "<a href=".'./edit_profile.php'." style=".'color:black'."> &#9998;</a></td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td style="."padding-left:5px; font-size:13px; font-family:Georgia, Times, serif;".">Email: </td>";
						echo "<td>" . $row->email . "<a href=".'./edit_profile.php'." style=".'color:black'."> &#9998;</a></td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td style="."padding-left:5px; font-size:13px; font-family:Georgia, Times, serif;".">Φύλο: </td>";
						echo "<td>" . $row->gender . "<a href=".'./edit_profile.php'." style=".'color:black'."> &#9998;</a></td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td style="."padding-left:5px; font-size:13px; font-family:Georgia, Times, serif;".">Ημερομηνία Γέννησης: </td>";
						echo "<td>" . $row->birth . "<a href=".'./edit_profile.php'." style=".'color:black'."> &#9998;</a></td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td style="."padding-left:5px; font-size:13px; font-family:Georgia, Times, serif;".">Α.Φ.Μ: </td>";
						echo "<td>" . $row->AFM . "<a href=".'./edit_profile.php'." style=".'color:black'."> &#9998;</a></td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td style="."padding-left:5px; font-size:13px; font-family:Georgia, Times, serif;".">Α.Μ.Κ.Α: </td>";
						echo "<td>" . $row->AMKA . "<a href=".'./edit_profile.php'." style=".'color:black'."> &#9998;</a></td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td style="."padding-left:5px; font-size:13px; font-family:Georgia, Times, serif;".">Τηλέφωνο: </td>";
						echo "<td>" . $row->phone . "<a href=".'./edit_profile.php'." style=".'color:black'."> &#9998;</a></td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td style="."padding-left:5px; font-size:13px; font-family:Georgia, Times, serif;".">Πόλη: </td>";
						echo "<td>" . $row->city . "<a href=".'./edit_profile.php'." style=".'color:black'."> &#9998;</a></td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td style="."padding-left:5px; font-size:13px; font-family:Georgia, Times, serif;".">Περιοχή: </td>";
						echo "<td>" . $row->region . "<a href=".'./edit_profile.php'." style=".'color:black'."> &#9998;</a></td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td style="."padding-left:5px; font-size:13px; font-family:Georgia, Times, serif;".">Διεύθυνση: </td>";
						echo "<td>" . $row->address . "<a href=".'./edit_profile.php'." style=".'color:black'."> &#9998;</a></td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td style="."padding-left:5px; font-size:13px; font-family:Georgia, Times, serif;".">Τύπος Λογαριασμού: </td>";
						echo "<td>" . $row->group_type . "<a href=".'./edit_profile.php'." style=".'color:black'."> &#9998;</a></td>";
						echo "</tr>";
						
						
						echo "<tr>";
						echo "<td style="."padding-left:0px; font-size:13px; font-family:Georgia, Times, serif;"."><td>";
						echo '<form action="edit_profile.php" method="get">
						<button name="subject" type="submit" class="btnRegister" value="HTML" >Τροποποίηση Στοιχείων</button>
						</form> ';
						echo "</td></td>";
						echo "</tr>";
						
						
						echo "</tr>";
						

					
					}
					// if there are no records in the database, display an alert message
					else
					{
						echo "No results to display!";
					}
				}
				// show an error if there is an issue with the database query
				else
				{
					echo "Error: " . $db->error;
				}

				// close database connection
				$db->close();

				?>										
			</table>
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
        <img class="imgl" src="/sdi1400173/images/about.jpg" width="130" height="130" alt="hahah">
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



