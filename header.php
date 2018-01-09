<!DOCTYPE html>
<html>
<head>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://use.fontawesome.com/b936fcc211.js"></script>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Immobilien</title>
</head>
<body>
	<div class="container-fluid">

		<header>
			<div id="logo">
				
				<h1 class="text-center logo"><a href="index.php"><img src="images/building.png" style="height: 80px; width: 100px;"></a> I<span class="mm">mm</span>obilien</h1>
			</div>
			<nav class="mynavigation">
				<ul class="nav justify-content-end">
					<li class="nav-item"><a class="nav-link" href="index.php">STARTSEITE</a></li>
					<li class="nav-item"><a class="nav-link" href="immobilienseite.php">IMMOBILIENSEITE</a></li>
					<li class="nav-item"><a class="nav-link" href="uberuns.php">UBER UNS</a></li>
					<li class="nav-item"><a class="nav-link" href="contact.php">KONTAKT</a></li>
				</ul>
			</nav>
			<h2 class="mobile-menu text-center">MENU</h2>
			<nav class="mobile-nav text-center">
				<ul class="nav flex-column mobile-ul">
					<li class="nav-item"><a class="nav-link" href="index.php">STARTSEITE</a></li>
					<li class="nav-item"><a class="nav-link" href="immobilienseite.php">IMMOBILIENSEITE</a></li>
					<li class="nav-item"><a class="nav-link" href="uberuns.php">UBER UNS</a></li>
					<li class="nav-item"><a class="nav-link" href="contact.php">KONTAKT</a></li>
				</ul>
			</nav>
		</header>

		<script type="text/javascript">
			$(document).ready(function(){

				// active link
	  			var path = window.location.pathname.split("/").pop();
	  			if (path == ' ') {
	  				path = 'index.php';
	  			}
	  			var target = $('.nav-link[href="' + path + '"]');
	  			target.addClass('active');

	  			//toggle mobile nav
	  			$(".mobile-menu").click(function(){
				    $(".mobile-nav").toggle();
				  });
  			});
  		</script>