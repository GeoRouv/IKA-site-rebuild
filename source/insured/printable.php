<?php 
	header("content-type: text/html;charset=utf-8");
    include('../utility/config.php');
	include('../utility/session.php');
?>

<html lang="en" dir="ltr" >

<head>

<title>Ασφαλιστικό Κέντρο Πολιτών</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="/sdi1400173/styles/layout.css?ts=<?=time()?>&quot; />" type="text/css">
<script>
	function printDiv(divName) {
		 var printContents = document.getElementById(divName).innerHTML;
		 var originalContents = document.body.innerHTML;

		 document.body.innerHTML = printContents;

		 window.print();

		 document.body.innerHTML = originalContents;
	}
</script>

<style>
	body {
	  background: rgb(204,204,204); 
	}
	page{
	  background: white;
	  display: block;
	  margin: 20 auto;
	  margin-bottom: 0.5cm;
	  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
	}
	
	.subpage{
		padding: 1cm;
		border: 1px black solid;
		height: 267mm;
		outline: 1cm white solid;
	}

	
	page[size="A4"] {  
	  width: 21cm;
	  height: 29.7cm; 
	}
	page[size="A4"][layout="portrait"] {
	  width: 29.7cm;
	  height: 21cm;  
	}
	@media print {
	  body, page {
		margin: 0;
		box-shadow: 0;
	  }
	}
</style>



</head>

<body>
	<page size="A4">
	<div class="subpage">
		<div id="printableArea">
			  <h3 align="center">Βεβαίωση Ενσήμων</h3>
			  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo nisi et dictum porta. Sed eget luctus diam. Cras aliquet, nunc vel efficitur suscipit, ante libero facilisis mauris, at laoreet neque eros quis nunc. Aenean faucibus, neque sit amet sagittis euismod, lectus lacus mattis enim, in condimentum dui ante eget eros. Donec id diam finibus, luctus libero sed, congue sem. Nam ut ultrices eros, ut efficitur lectus. Aliquam eleifend tellus vitae mauris consectetur, sit amet sagittis felis fringilla. Cras erat urna, facilisis nec volutpat sagittis, vestibulum a augue. Vivamus maximus lectus in dui accumsan, a scelerisque eros ultrices. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.Phasellus semper nec neque et mollis. Aliquam dapibus diam ac sollicitudin maximus. Nam maximus aliquet suscipit. Sed gravida urna vel lacus facilisis, ac tempus magna porta. Suspendisse consectetur lorem eu euismod porta. Mauris congue maximus felis, sed consequat arcu tempus et. Nullam elit augue, elementum nec lectus at, pellentesque luctus turpis. Aliquam ac nulla at diam euismod dictum. Donec vel orci et purus elementum aliquam.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque ullamcorper eu turpis sed aliquam. Curabitur semper neque id odio dignissim malesuada. Phasellus vestibulum eleifend lacus, eget interdum libero mollis ac. Aenean luctus in ligula a venenatis. Fusce non turpis eget leo scelerisque aliquam id nec lorem. Donec a urna orci. Morbi dapibus molestie tincidunt.Quisque maximus nunc a nisi imperdiet, non placerat lectus tempor. Proin porttitor, lectus eget placerat congue, lacus mi accumsan augue, vel mattis ligula neque in purus. Donec pulvinar pulvinar dolor, at interdum nibh pulvinar eu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus et erat luctus enim dapibus laoreet in ut nisi. Aliquam eget vulputate orci. Maecenas non justo eget neque sagittis hendrerit ac et eros. Nam bibendum augue ut purus rutrum tristique. Aliquam erat volutpat. Ut eu enim et mauris aliquet fringilla a vel sapien. Duis dictum sagittis scelerisque. Maecenas eget ligula lacinia, fermentum ipsum eu, tristique elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
Nulla non placerat tortor. Mauris vel tellus ut libero laoreet malesuada et ut enim. In vulputate enim ut nisi finibus, eget consequat dolor placerat. Etiam ac libero accumsan tellus gravida suscipit. Sed id convallis dolor, non fermentum neque. Morbi id turpis finibus, tempus metus sed, egestas justo. Curabitur efficitur augue sit amet erat sodales, quis lacinia est tristique. Donec vitae sem vitae lorem efficitur imperdiet feugiat et justo. Duis consectetur ac arcu id consectetur. Nam semper ipsum nunc, ut consectetur tortor congue ac.</p>

			  <input type="button" onclick="printDiv('printableArea')" value="Εκτύπωση" style="margin:auto; display:block;" />
		</div>
	</div>

	
	</page>
	
	
</body>
</html>
