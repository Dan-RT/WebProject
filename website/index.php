<html>
	<head>
		
		<meta charset="utf-8" />
		<title>BEER'SPOT</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link href="CSS/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="CSS/index.css"/>
		<link rel="stylesheet" href="CSS/overview_beer.css"/>

	</head>

	<body>

		<?php
			include("navbar.php");
			require_once("db.php");
			require_once("product.php");

			/*
			$test = new Product();
			$test->read_record();
			$test->insert_record("TEST", "TEST", "TEST", "TEST", "TEST", "TEST", "TEST", "TEST", "TEST", "TEST");
			*/

		?>


		

		<div class="container-fullwidth container-fluid">
			<div class="row">
				<?php //include("overview_beer.php"); ?>
			</div>
		</div>
		
		<?php include("footer.php"); ?>

	</body>
</html>


