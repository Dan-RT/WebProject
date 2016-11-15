<script>
	function validateForm() {
		var x = document.forms["form"]["user_name"].value;
		if (x == null || x == "") {
			alert("All fields must be filled out");
			return false;
		}
		x = document.forms["form"]["password"].value;
		if (x == null || x == "") {
			alert("All fields must be filled out");
			return false;
		}
	}
</script>


<html>
	<head>
		<meta charset="utf-8" />
		<title>BEER'SPOT - Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link href="CSS/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="CSS/form.css"/>
		<link rel="stylesheet" href="CSS/navbar.css"/>
	</head>

	<body>

		<?php include("navbar.php"); ?>

		<div class="container-fullwidth container-fluid form_section">
			<div class="row">
				<div class="col-lg-offset-4 col-sm-4 form_inside_1">
					<div class="row form_inside">
						<form name="form" action="login_management.php" method="POST" onsubmit="return validateForm()">
						<?php if($_POST["payment"] == 1) {	?>
							<input type='hidden' name='payment' value=1>
						<?php } ?>
							<input type="hidden" name="choice_login" value="login">
							<p>
								<label><input class="input-lg form-control" name="user_name" placeholder="User Name"/></label>
							</p>

							<p>
								<label><input type="password" class="input-lg form-control" name="password" placeholder="Password"/></label>
							<p>

							<button type="submit" class="btn_enter btn btn-lg btn-default" value="Enter">
								<span class="glyphicon glyphicon-ok"></span> Enter
							</button>
							<p><a href="registration.php">Create your account</a></p>
						</form>
					</div>
			    </div>
			</div>

	    </div>

		<?php include("footer.php"); ?>

	</body>
</html>