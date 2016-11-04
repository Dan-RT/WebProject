<?php

 	$cart_items = null;

	if (isset($_POST['item_id'])) {
		$productToAdd = $_POST['item_id'];
		$expiration = time() + (60*60*24*7);

		//Add cart item to cookie
		if (isset($_COOKIE['cart_items'])) {
			//Existing cookie

			$cart_items = $_COOKIE['cart_items'];
			$cart_items = "$cart_items,$productToAdd";
			setcookie("nb_items", $_COOKIE['nb_items']+1, $expiration);

			/*	Reset cookies */
			//$cart_items = "";
			//setcookie("nb_items", 0, $expiration);

		} else {
			//Create cookie
			setcookie("nb_items", 0, $expiration);
			$cart_items = $productToAdd;
		}
		setcookie("cart_items", $cart_items, $expiration);

	}

	/*if (isset($_POST['productID'])) {

		$productToAdd = $_POST['productID'];
		$expiration = time() + (60 * 60 * 24 * 7);

		// Add cart item to cookie
		if (isset($_COOKIE['cart_item'])) {
			// Append to existing cookie
			$cart_items = $_COOKIE['cart_item'];
			$cart_items = "$cart_items,$productToAdd";
		} else {
			// Create cookie
			$cart_items = $productToAdd;
		}


		// Add cart item to session
		if (isset($_SESSION['cart_item'])) {
			$cart_items = $_SESSION['cart_item'];
			$cart_items = "$cart_items,$productToAdd";
		} else {
			$cart_items = "$productToAdd";
		}

		$_SESSION['cart_item'] = $cart_items;
		setcookie("cart_item", $cart_items, $expiration);


	}	*/

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

		<div class="container-fullwidth container-fluid">
			<div class="row">
				<?php
					if (isset($_POST['item_id'])) {
						echo $_COOKIE['cart_items'];
					}
					$reponse = query_database('SELECT * FROM Beers');
					include("overview_beer.php");
				?>
			</div>
		</div>

		<?php include("footer.php"); ?>

	</body>
</html>


