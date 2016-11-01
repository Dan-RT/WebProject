<html>
	<head>
		<meta charset="utf-8" />
		<title>Beer'spot - Formulaire</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="registration.css"/>
		<link rel="stylesheet" href="navbar.css"/>
		<link rel="stylesheet" href="form.css"/>
		<link rel="stylesheet" href="radio.css"/>
	</head>

	<body>

		<?php include("navbar.php"); ?>


		<div class="container-fullwidth container-fluid registration_section">

			<div class="row registration_inside_1">
				<div class="col-lg-offset-4 col-sm-4 registration_inside_1">

						<div class="row registration_inside">
							
							<form action="index.html" method="POST">
						        <p>
						        	<label><input class="input-lg form-control" type="text" name="first_name" placeholder="First name"/></label>
					        	</p>
						        <p>
						        	<label><input class="input-lg form-control" type="text" name="surname" placeholder="Surname"/></label>
						    	<p>

						    	<p>
						        	<label><input class="input-lg form-control" type="email" name="email" placeholder="Email"/></label>
						    	<p>

						    	<p>
							        <label><input class="input-lg form-control" type="password" name="mdp" placeholder="Choose a password"/></label>
							    <p>	

							    <p>
							        <label><input class="input-lg form-control" type="password" name="mdp" placeholder="Repeat your password"/></label>
							    <p>	


							    <div class="radio">
									<input class="radio" id="male" type="radio" name="radio" value="male">
									<label class="radio_gender" for="male">Male</label>
									<input class="radio" id="female" type="radio" name="radio" value="female">
									<label class="radio_gender" for="female">Female</label>
								</div>	




						    	<button type="submit" class="btn_submit btn btn-lg btn-default" value="Enter">
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