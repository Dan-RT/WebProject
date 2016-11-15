<?php
	$cart_items = null;

	if (isset($_POST['item_id'])) {
		$productToAdd = $_POST['item_id'];
		$expiration = time() + (60*60*24*7);

		//Add cart item to cookie

        if (isset($_SESSION['cart_items'])) {
            //existing session variable
            $cart_items = $_SESSION['cart_items'];
            $cart_items = "$cart_items,$productToAdd";
            $_SESSION['nb_items']++;
        } else {
            $cart_items = "$productToAdd";
            $_SESSION['nb_items'] = 1;
        }

        $_SESSION['cart_items'] = $cart_items;

        print("<script> window.location.href = \"index.php\"; </script>");
	}

?>

<!DOCTYPE html>
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

		<div style="min-height: 60vh;" class="container-fullwidth container-fluid">
			<div class="row">
				<?php

					if (isset($_POST['item_id'])) {
						echo $_COOKIE['cart_items'];
					}
					$reponse = query_database('SELECT * FROM Beers');
					$choice = 1;
					include("overview_beer.php");
				?>
			</div>
		</div>

		<?php include("footer.php"); ?>

	</body>
</html>


