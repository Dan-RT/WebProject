<?php
	session_start();
?>

<script>
	/* This function comes from : http://stackoverflow.com/questions/10590973/check-if-input-is-float-or-integer  */

	function getType(input) {
		var m = (/[\d]+(\.[\d]+)?/).exec(input);
		if (m) {
			// Check if there is a decimal place
			if (m[1]) { return 'float'; }
			else { return 'int'; }
		}
		return 'string';
	}

	function validateForm() {

		var x = document.forms["form"]["brand"].value;
		if (x == null || x == "") {
			alert("All fields must be filled out");
			return false;
		}
		if (getType(x) != "string") {
			alert("Brand field must be a string.");
			return false;
		}

		x = document.forms["form"]["product"].value;
		if (x == null || x == "") {
			alert("All fields must be filled out");
			return false;
		}
		if (getType(x) != "string") {
			alert("Product field must be a string.");
			return false;
		}

		x = document.forms["form"]["price"].value;
		if (x == null || x == "") {
			alert("All fields must be filled out");
			return false;
		}
		if (getType(x) === "string") {
				alert("Price field must be a number.");
			return false;
		}


		x = document.forms["form"]["volume"].value;
		if (x == null || x == "") {
			alert("All fields must be filled out");
			return false;
		}
		if (getType(x) === "string") {
			alert("Volume field must be a number.");
			return false;
		}

		x = document.forms["form"]["proof"].value;
		if (x == null || x == "") {
			alert("All fields must be filled out");
			return false;
		}
		if (getType(x) === "string") {
			alert("Proof field must be a number.");
			return false;
		}

		x = document.forms["form"]["color"].value;
		if (x == null || x == "") {
			alert("All fields must be filled out");
			return false;
		}
		if (getType(x) != "string") {
			alert("Form field must be a string.");
			return false;
		}

		x = document.forms["form"]["country"].value;
		if (x == null || x == "") {
			alert("All fields must be filled out");
			return false;
		}
		if (getType(x) != "string") {
			alert("Country field must be a string.");
			return false;
		}

		x = document.forms["form"]["picture_path"].value;
		if (x == null || x == "") {
			alert("All fields must be filled out");
			return false;
		}
		if (getType(x) != "string") {
			alert("Picture field must be a string.");
			return false;
		}

		x = document.forms["form"]["website"].value;
		if (x == null || x == "") {
			alert("All fields must be filled out");
			return false;
		}
		if (getType(x) != "string") {
			alert("Website field must be a string.");
			return false;
		}
	}

</script>


<html>
	<head>
		<meta charset="utf-8" />
		<title>Add new Beer</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link href="CSS/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="CSS/navbar.css"/>
		<link rel="stylesheet" href="CSS/radio.css"/>
		<link rel="stylesheet" href="CSS/add new beer.css"/>
	</head>

	<body>
		
		<?php include("navbar.php"); ?>

		<div class="container-fullwidth container-fluid form_section">
			<div class="row">
				<div class="col-lg-offset-4 col-sm-4 col_form form_inside_1">
					<div class="row form_inside_1">

						<form name="form" class="form_inside" action="database_management.php" method="POST" onsubmit="return validateForm()">

							<input type="hidden" name="choice_db" value="new_beer">

							<p>
								<label><input class="input-lg form-control" type="text" name="brand" placeholder="Brand" required autofocus/></label>
							</p>
							<p>
								<label><input class="input-lg form-control" type="text" name="product" placeholder="Product" required /></label>
							</p>

							<p>
								<label><input class="input-lg form-control" type="text" name="price" placeholder="Price" required /></label>
							</p>

							<p>
								<label><input class="input-lg form-control" type="text" name="volume" placeholder="Volume" required /></label>
							</p>

							<p>
								<label><input class="input-lg form-control" type="text" name="proof" placeholder="Proof" required /></label>
							</p>

							<p>
								<label><input class="input-lg form-control" type="text" name="color" placeholder="Color" required/></label>
							</p>

							<p>
								<label><input class="input-lg form-control" type="text" name="country" placeholder="Country" required/></label>
							</p>

							<p>
								<label><input class="input-lg form-control" type="text" name="picture_path" placeholder="Picture Name" required /></label>
							</p>

							<p>
								<label><input class="input-lg form-control" type="text" name="website" placeholder="Website" required/></label>
							</p>

							<!--
							<div class="radio">
								<input id="can" type="radio" name="type" value="can">
								<label for="can">Can</label>
								<input id="bottle" type="radio" name="type" value="bottle">
								<label for="bottle">Bottle</label>
								<input id="draught" type="radio" name="type" value="draught">
								<label for="draught">Draught</label>
							</div>
							-->

							<a href="update_beer.php">Update an existing beer</a>

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