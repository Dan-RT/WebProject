
<script>
	function samePassword() {

		var password_1 = document.getElementById("password").value;
		var password_2 = document.getElementById("confirm_password").value;

		if(password_1 == password_2) {
			return true;
		} else {
			return false;
		}
	}

	function validateForm() {
		var x = document.forms["form"]["user_name"].value;
		if (x == null || x == "") {
			alert("All fields must be filled out");
			return false;
		}
		var x = document.forms["form"]["email"].value;
		if (x == null || x == "") {
			alert("All fields must be filled out");
			return false;
		}
		var x = document.forms["form"]["password"].value;
		if (x == null || x == "") {
			alert("All fields must be filled out");
			return false;
		}
		var x = document.forms["form"]["confirm_password"].value;
		if (x == null || x == "") {
			alert("All fields must be filled out");
			return false;
		}
		if(!samePassword()) {
			alert("Please enter the same password twice.");
			return false;
		}
	}

</script>



<html>
	<head>
		<meta charset="utf-8" />
		<title>Beer'spot - Formulaire</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link href="CSS/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="CSS/registration.css"/>
		<link rel="stylesheet" href="CSS/navbar.css"/>
		<link rel="stylesheet" href="CSS/form.css"/>
		<link rel="stylesheet" href="CSS/radio.css"/>
	</head>

	<body>

		<?php include("navbar.php"); ?>


		<div class="container-fullwidth container-fluid registration_section">

			<div class="row registration_inside_1">
				<div class="col-lg-offset-4 col-sm-4 registration_inside_1">

						<div class="row registration_inside">
							
							<form name="form" action="database_management.php" method="POST" onsubmit="return validateForm()">

								<input type="hidden" name="choice_db" value="new_user">
						        <p>
						        	<label><input class="input-lg form-control" type="text" name="user_name" placeholder="User name"/></label>
					        	</p>

						    	<p>
						        	<label><input class="input-lg form-control" type="email" name="email" placeholder="Email"/></label>
						    	<p>

						    	<p>
							        <label><input id="password" class="input-lg form-control" type="password" name="password" placeholder="Choose a password"/></label>
							    <p>	

							    <p>
							        <label><input id="confirm_password" class="input-lg form-control" type="password" name="confirm_password" placeholder="Repeat your password"/></label>
							    <p>	

	<!--
							    <div class="radio">
									<input class="radio" id="male" type="radio" name="radio" value="male">
									<label class="radio_gender" for="male">Male</label>
									<input class="radio" id="female" type="radio" name="radio" value="female">
									<label class="radio_gender" for="female">Female</label>
								</div>	
	-->
						    	<button type="submit" class="btn_enter btn btn-lg btn-default" value="Enter">
						            <span class="glyphicon glyphicon-ok"></span> Enter
						        </button>  

						    </form>	  
						   
					    </div>
			    </div>
			</div>
	    </div>
		
		<?php include("footer.php"); ?>

	</body>
</html>