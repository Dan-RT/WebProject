<?php
	session_start();
	$cart_item = null;

	if (isset($_SESSION['cart_items'])) {
		$cart_items = $_SESSION['cart_items'];
	} elseif (isset($_COOKIE['cart_items'])) {
		$cart_items = $_COOKIE['cart_items'];
	}

	if (isset($_POST['emptyCart'])) {
		$_SESSION['cart_items'] = null;
		$_SESSION['nb_items'] = null;
		setCookie('cart_items', null, -1);
		$cart_item = null;
		print("<script> window.location.href = \"cart.php\"; </script>");
	}
?>

<html>
	<head>
		<meta charset="utf-8" />
		<title>Shopping Cart</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="CSS/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="CSS/navbar.css"/>
		<link rel="stylesheet" href="CSS/overview_beer.css"/>
	</head>
	<body>

	<?php
		include("navbar.php");
		require_once("db.php");

		if (isset($cart_items)) {

			$splitted_cart = split(",", $cart_items);
			//print_r($splitted_cart);
			$cart = array();

			foreach($splitted_cart as $itemId) {
				if(array_key_exists($itemId, $cart)) {
					$cart[$itemId]++;
				} else {
					$cart[$itemId] = 1;
				}
			}
			//print_r($cart);
			print ("<div class=\"container-fullwidth container-fluid\">
							<div class=\"row\">");
			foreach($cart as $key => $item) {
				//echo $key.' -->'.$item."\n<br/>";
				$reponse = query_database("SELECT * FROM Beers WHERE id=?", $key);
				include("overview_beer.php");
				echo "Quantity : " . $item;
			}
			print_r("	</div>
					</div>");

			print("<form action='cart.php' method='post'>");
			print("<input type='submit' name='emptyCart' value='Empty Cart'>");
			print("</form>");

		} else {
			print("<h3>No product in shopping cart!</h3>");
		}

		print("<br><br>Continue <a href='product_page.php'>shopping</a>...");
	?>

	</body>
</html>