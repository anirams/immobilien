<?php
	include "header.php";
?>

<div class="container">
	
		<div class="row immobilienseite">
			<div class="col-md-6 col-xs-12 text-center">
				<img src="images/interior1.jpg" id="img-interior" style="height: 250px; width: 300px;">
				<h2>Interior</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel lorem et neque cursus molestie. Nulla in arcu tellus. Suspendisse potenti. Quisque in viverra ante, sit amet dignissim lorem. </p>
			</div>
			<div class="col-md-6 col-xs-12 text-center">
				<img src="images/exterior7.jpg" id="img-exterior" style="height: 250px; width: 300px;">
				<h2>Exterior</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel lorem et neque cursus molestie. Nulla in arcu tellus. Suspendisse potenti. Quisque in viverra ante, sit amet dignissim lorem. </p>
			</div>
		</div>
	
</div>

<script>

	//exterior images slider 

	var images = ["images/exterior5.jpg", "images/exterior7.jpg", "images/exterior1.jpg"];

	var x = 0;

	setInterval(function() {
 
	  	if (x >= images.length) {
	  		x = 0; 
	  	}
	  	var rand = images[x];
	  	document.getElementById("img-exterior").src = rand;
	  	x++;
		}, 3000);

	//interior images slider

	var images2 = ["images/interior2.jpg", "images/interior3.jpg", "images/interior1.jpg", "images/interior4.jpg"];

	var y = 0;

	setInterval(function() {
 
	  	if (y >= images2.length) {
	  		y = 0; 
	  	}
	  	var rand2 = images2[y];
	  	document.getElementById("img-interior").src = rand2;
	  	y++;
		}, 3000);


</script>

<?php
	include "footer.php";
?>