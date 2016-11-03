<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8" />
		<title>BEER'SPOT</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link href="CSS/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="CSS/index.css"/>
		<link rel="stylesheet" href="CSS/navbar.css"/>
		<link rel="stylesheet" href="CSS/overview_beer.css"/>
	</head>

	<body>

		<?php include("navbar.php"); ?>



		<div class="container-fullwidth container-fluid shopping_section">

			<div class="choice" > 
				<p>You choose :</p>
			</div>
			
			

			<div class="row" style="margin-top: 5vh;">
				<div class="col-lg-offset-1 col-sm-4 beer_overview" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">
					<div class="row">

				 		<div class="col-sm-7">
				 			<img class="beer_pic" src="Pictures/Grim_blonde.png" />
				        </div>

				        <ul class="col-sm-5 detail_beer">

				        	<li>Grimbergen Blonde</li>
				        	<li>3.00 $</li>
				        	<li>0.33L</li>
				        	<a href="#" class="btn "><span class="glyphicon glyphicon-list icon_detail"></span> More Details</a>
				        </ul>



				   	</div>
				   	
				</div>

				<div class="col-lg-offset-1 col-sm-4 beer_overview" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">
					<div class="row">

				 		<div class="col-sm-7">
				 			<img class="beer_pic" src="Pictures/Grim_blonde.png" />
				        </div>

				        <ul class="col-sm-5 detail_beer">

				        	<li>Grimbergen Blonde</li>
				        	<li>3.00 $</li>
				        	<li>0.33L</li>
				        	<a href="#" class="btn "><span class="glyphicon glyphicon-list icon_detail"></span> More Details</a>
				        </ul>



				   	</div>
				   	
				</div>

			</div>
			<div class="pay_button" > 
						<button type="submit" class="btn btn-lg btn-default" value="Enter">
				            <a href="index.php"><span class="glyphicon glyphicon-ok"></span> Pay</a>
				        </button>  
					</div>
			</div>


		
		<?php include("footer.php"); ?>

	</body>
</html>


