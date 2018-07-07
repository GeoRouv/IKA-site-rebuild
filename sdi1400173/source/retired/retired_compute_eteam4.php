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
	padding: 0px 5px;
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
	padding: 10px 30px;
	background-color: #3367b2;
	border: 0;
	color: #FFF;
	cursor: pointer;
	border-radius: 4px;
	margin-left: 10px;
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
		  <a href="./retired_services.php" style="background-color:#333; color:#ffffff">Συνταξιούχοι</a>
		  <a href="../utility/under_construction.php" style="background-color:#333; color:#ffffff">Εργοδότες</a>
		  <a href="../utility/under_construction.php" style="background-color:#333; color:#ffffff">Οφειλέτες</a>
		  <a href="../utility/under_construction.php" style="background-color:#333; color:#ffffff">Φορείς</a>
		  <a href="../utility/under_construction.php" style="background-color:#333; color:#ffffff">Κατ'Οίκον Φροντίδα</a>
		  <a href="../utility/under_construction.php" style="background-color:#333; color:#ffffff">Αναπηρία</a>
		  <a href="../utility/under_construction.php" style="background-color:#333; color:#ffffff">Ανεργία</a>
		  <a href="../utility/under_construction.php" style="background-color:#333; color:#ffffff">Θάνατος Οικογενειακού Μέλους</a>		 			  
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
	<a href="./retired_services.php" style="float:left; margin-bottom: 20px; text-decoration: none;" >&nbsp>Συνταξιούχοι</a>
	<a href="./retired_compute.php" style="float:left; margin-bottom: 20px; text-decoration: none;" >&nbsp>Υπολογισμός Ποσού Σύνταξης</a>
	<a href="./pension.php" style="float:left; margin-bottom: 20px; text-decoration: none;" >&nbsp>Σύνταξη Θανάτου</a>	

     <!-- main content (Slider sto CSS)-->
    <section id="slider" class="clear">
      <figure>
        <figcaption style="height:1800px">
			  <h2><b>Υπολογισμός Σύνταξης</b></h2>							  								
			<table class="demo-table">
				<tr>
					<td width=541>
								<table class="demo-table">
									<tr>
										<td>
											<table class="demo-table">

												<tr><td colspan="2" align="center"><b>ΥΠΟΛΟΓΙΣΜΟΣ ΒΑΣΙΚΟΥ ΠΟΣΟΥ ΣΥΝΤΑΞΗΣ</b></td></tr>
												<tr>
													<td colspan="2"	align="center">ΕTEAM σύνταξη ΘΑΝΑΤΟΥ ΣΥΝΤΑΞΙΟΥΧΟΥ</td>
												</tr>

												<tr>
												<td class="ntextsm" align="center"><b>Κατώτατο Όριο Ποσού Σύνταξης: 97.24 &euro;</b></td>
												</tr>

												<tr>
													<td colspan="2">
													<b>Πρόσθετες Πληροφορίες:</b><br>																																	
													<br>Το βασικό ποσό της σύνταξης που λάμβανε ο/η θανών/-ούσα συνταξιούχος κατά την ημερομηνία του θανάτου μεταβιβάζεται στα μέλη της οικογένειάς του/της που αναγνωρίζονται ως δικαιοδόχα από τον κύριο φορέα, ανάλογα με το ποσοστό που ορίζεται για κάθε μέλος από τη νομοθεσία του κύριου φορέα.<br>
													<br>Στην περίπτωση που το βασικό ποσό σύνταξης του θανόντα είναι μικρότερο απ' το κατώτατο όριο, τότε καταβάλλεται στους δικαιούχους το κατώτατο όριο, ανάλογα με το ποσοστό τους.<br>
													Εάν οι δικαιούχοι λαμβάνουν και δεύτερη επικουρική σύνταξη, τότε καταβάλλεται το οργανικό ποσό σύνταξης.<br>
													<br>Ειδικότερα για τους/τις χήρους/-ες, το ποσό της σύνταξής της/του θανούσης/-όντα που τους αναλογεί, διαμορφώνεται όχι μόνο από το ποσοστό τους (όπως αυτό ορίζεται από τη νομοθεσία του εκάστοτε φορέα κύριας ασφάλισης), αλλά και από την συνδρομή ή όχι κάποιων περιοριστικών παραγόντων που αναλύονται στον ακόλουθο πίνακα:

			  <table class="demo-table">
					<tr>
						<td>
						  <table class="demo-table">
								<tr>
									<td width="24%" align="center"><b>ΘΑΝΩΝ/-ΟΥΣΑ</b></td>
									<td width="24%" align="center"><b>ΧΗΡΟΣ/-Α</b></td>
									<td width="16%" align="center"><b>Α΄ ΤΡΙΕΤΙΑ</b></td>
									<td width="16%" align="center"><b>ΜΕΤΑ ΤΗΝ Α΄ΤΡΙΕΤΙΑ</b></td>
									<td width="20%" align="center"><b>ΜΕΤΑ ΤΗ ΣΥΜΠΛΗΡΩΣΗ ΤΟΥ 65ου ΕΤΟΥΣ</b></td>
								</tr>
								<tr>
									<td align="center">Συνταξιούχος από εργασία στο Δημόσιο ή ευρύτερο δημόσιο</td>
									<td align="center">Εργαζόμενος/-η στο Δημόσιο ή ευρύτερο δημόσιο τομέα</td>
									<td align="center">30% x ποσοστό κύριου φορέα</td>
									<td align="center">30% x ποσοστό κύριου φορέα</td>
									<td align="center">30% x ποσοστό κύριου φορέα</td>
								</tr>
								<tr>
									<td align="center">Συνταξιούχος από εργασία στο Δημόσιο ή ευρύτερο δημόσιο</td>
									<td align="center">Συντ/χος Δημοσίου ή ευρύτερου δημόσιου τομέα</td>
									<td align="center">ποσοστό κύριου φορέα</td>
									<td align="center">50% x ποσοστό κύριου φορέα</td>
									<td align="center">70% x ποσοστό κύριου φορέα</td>
								</tr>
								<tr>
									<td align="center">Συνταξιούχος ιδιωτικού τομέα</td>
									<td align="center">Εργαζόμενος/-η στο Δημόσιο ή ευρύτερο δημόσιο τομέα</td>
									<td align="center">ποσοστό κύριου φορέα</td>
									<td align="center">50% x ποσοστό κύριου φορέα</td>
									<td align="center">70% x ποσοστό κύριου φορέα</td>
								</tr>
								<tr>
									<td align="center">Συνταξιούχος ιδιωτικού τομέα</td>
									<td align="center">Συντ/χος Δημοσίου ή ευρύτερου δημόσιου τομέα</td>
									<td align="center">ποσοστό κύριου φορέα</td>
									<td align="center">50% x ποσοστό κύριου φορέα</td>
									<td align="center">70% x ποσοστό κύριου φορέα</td>
								</tr>
								<tr>
									<td align="center">Συνταξιούχος ιδιωτικού τομέα</td>
									<td align="center">Εργαζόμενος/-η ιδιωτικού τομέα</td>
									<td align="center">ποσοστό κύριου φορέα</td>
									<td align="center">50% x ποσοστό κύριου φορέα</td>
									<td align="center">70% x ποσοστό κύριου φορέα</td>
								</tr>
								<tr>
									<td align="center">Συνταξιούχος ιδιωτικού τομέα</td>
									<td align="center">Δεν εργάζεται ούτε συνταξιοδοτείται</td>
									<td align="center">ποσοστό κύριου φορέα</td>
									<td align="center">ποσοστό κύριου φορέα</td>
									<td align="center">ποσοστό κύριου φορέα</td>
								</tr>
								<tr>
									<td align="center">Συνταξιούχος από εργασία στο Δημόσιο ή ευρύτερο δημόσιο</td>
									<td align="center">Δεν εργάζεται ούτε συνταξιοδοτείται</td>
									<td align="center">ποσοστό κύριου φορέα</td>
									<td align="center">ποσοστό κύριου φορέα</td>
									<td align="center">ποσοστό κύριου φορέα</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<br>
				Αν υπάρχουν άλλα δικαιοδόχα μέλη, το ποσό της σύνταξης που καταβάλλεται μειωμένο στον(ην) χήρο(α) επιμερίζεται κατά ίσα μέρη σ' αυτά.<br><br>
															<b>Σημείωση:</b><br>
															Από τους παραπάνω περιορισμούς εξαιρούνται:
															<ul>
																<li>Όσοι λαμβάνουν σύνταξη ως παθόντες από τρομοκρατικές ενέργειες (είτε εξ' ιδίου δικαιώματος, είτε λόγω θανάτου).
																<li>Όσοι λαμβάνουν εξ' ιδίου δικαιώματος πολεμική σύνταξη
																<li>Όσοι λαμβάνουν σύνταξη απ' τον ΟΓΑ ή ασφαλίζονται στον ΟΓΑ
															</ul>

													
													</td>
												</tr>


							</table>

										</td>
									</tr>
								</table>
						</form>
					</td>
				</tr>
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
			<p class="fl_right">><a href="../utility/navigator.php">Sitemap</a></p>
	<p class="fl_right">><a href="../utility/FAQ.php">FAQ &nbsp &nbsp</a></p>
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

