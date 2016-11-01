<html>
	<head>
		<meta charset="utf-8" />
		<title>BEER'SPOT - Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="form.css"/>
		<link rel="stylesheet" href="navbar.css"/>
	</head>

	<body>

		<?php include("navbar.php"); ?>

		<div class="container-fullwidth container-fluid form_section">
			<div class="row">
				<div class="col-lg-offset-4 col-sm-4 form_inside_1">

						<div class="row form_inside">
								  
							
							<form action="index.html" method="POST">
						        <p>
						        	<label><input class="input-lg form-control" type="name" name="id" placeholder="Insert your email"/></label>
					        	</p>
						        <p>
						        	<label><input class="input-lg form-control" type="password" name="mdp" placeholder="Password"/></label>
						    	<p>

						    	<button type="submit" class="btn_submit btn btn-lg btn-default" value="Enter">
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