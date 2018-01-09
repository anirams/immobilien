<?php
	include "header.php";
?>
<div class="container contact-container">
	
	<div class="row">
		<div class="col-md-8 col-xs-12">
			
			<form action="contact-process.php" method="post">
				<div class="form-group">
					<label for="form-name">Name: <span class="error">* <?php if(isset($nameErr)) { echo $nameErr; } ?></span><input type="text" name="name" class="form-control" id="form-name"></label>
				</div>
				<div class="form-group">
					<label for="form-email">Email: <span class="error">* <?php if(isset($emailErr)) { echo $emailErr; } ?></span><input type="email" name="email" class="form-control" id="form-email"></label>
				</div>
				<div class="form-group">
					<label for="form-message">Message: <span class="error">* <?php if(isset($messageErr)) { echo $messageErr; } ?></span><textarea class="form-control" id="form-message" rows="5"></textarea> </label>
				</div>
				<button type="submit" class="btn btn-primary">SUBMIT</button>
			</form>

		</div>

		<div class="col-md-4 col-xs-12">
			
			<div class="text-kontaktieren">
				<h2>Kontaktieren Sie uns:</h2>
    			<span class="footer-span"><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum Strasse</span>
				<span class="footer-span"><i class="fa fa-phone" aria-hidden="true"></i>Telefon nummer</span>
			</div>

		</div>
	</div>

</div>
<?php
	include "footer.php";
?>