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
				
							<form class="form_inside" action="database_management.php" method="POST">

								<input type="hidden" name="choice_db" value="new_beer">

								<p>
						        	<label><input class="input-lg form-control" type="text" name="brand" placeholder="Brand" required /></label>
					        	</p>
						        <p>
						        	<label><input class="input-lg form-control" type="text" name="product" placeholder="Product" required /></label>
						    	<p>

						    	<p>
						        	<label><input class="input-lg form-control" type="text" name="price" placeholder="Price" required /></label>
						    	<p>

						    	<p>
						        	<label><input class="input-lg form-control" type="text" name="volume" placeholder="Volume" required /></label>
						    	<p>

							    <p>
						        	<label><input class="input-lg form-control" type="text" name="proof" placeholder="Proof" required /></label>
						    	<p>

						    	<p>
						        	<label><input class="input-lg form-control" type="text" name="color" placeholder="Color" required/></label>
						    	<p>

						    	<p>
						        	<label><input class="input-lg form-control" type="text" name="country" placeholder="Country" required/></label>
						    	<p>

						    	<p>
						        	<label><input class="input-lg form-control" type="text" name="picture_path" placeholder="Picture Name" required /></label>
						    	<p>



						    	<p>
						        	<label><input class="input-lg form-control" type="text" name="website" placeholder="Website" required/></label>
						    	<p>

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