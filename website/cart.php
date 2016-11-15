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

    if (isset($_POST['item_id'])) {
        $productToAdd = $_POST['item_id'];
        //$expiration = time() + (60*60*24*7);

        //Add cart item to session

        if (isset($_SESSION['cart_items'])) {
            //existing session variable
            if ($_POST['add_sub_item'] == 'add_item'){
                $cart_items = $_SESSION['cart_items'];
                $cart_items = "$cart_items,$productToAdd";
                $_SESSION['nb_items']++;

            } elseif ($_POST['add_sub_item'] == 'sub_item') {

                $cart_items = $_SESSION['cart_items'];
                $splitted_cart = split(",", $cart_items);
                $cart_items = null;

                //print_r($splitted_cart);

                $flag = 0;

                foreach($splitted_cart as $item_tmp) {
                    //echo "Post id = " . $_POST['item_id'] . "<br/>";
                    //echo "item testé = " . $item_tmp . "<br/>";
                    if ($cart_items) {
                        if ($item_tmp == $_POST['item_id'] && $flag == 0) {
                            $flag++;
                            //echo "egalité correcte <br/> <br/>";
                        } else {
                            $cart_items = "$cart_items,$item_tmp";
                            $_SESSION['nb_items']++;
                            //echo "egalité fausse <br/><br/>";
                        }
                    } else {
                        if ($item_tmp == $_POST['item_id'] && $flag == 0) {
                            $flag++;
                            //echo "new, egalité correcte <br/> <br/>";
                        } else {
                            $cart_items = "$item_tmp";
                            $_SESSION['nb_items'] = 1;
                            //echo "new, egalité fausse <br/><br/>";
                        }

                    }
                    //print_r($cart_items);
                }
            }

        } else {
            $cart_items = "$productToAdd";
            $_SESSION['nb_items'] = 1;
        }

        $_SESSION['cart_items'] = $cart_items;

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
			print ("<div class=\"container-fullwidth container-fluid\" style=\"min-height: 60vh;>
						<div class=\"row\">");
			foreach($cart as $key => $quantity) {
				//echo $key.' -->'.$item."\n<br/>";
				$reponse = query_database("SELECT * FROM Beers WHERE id=?", $key);

                $choice = 2;    //we can then choose what to display, add to cart button or + button
				include("overview_beer.php");
			}
			print_r("	</div>
					</div>");
    ?>
        <div class="container-fullwidth container-fluid">
            <div class="row">
                <div class="col-lg-offset-4 col-lg-4 payment_overview">
                    <?php total_price($cart_items); ?>
                    <div class="col-lg-12">
                        <div class="col-lg-offset-2 col-lg-2">
                    <?php if($_SESSION['logged_in'] == 1){ ?>
                            <a href="https://www.paypal.com">
                                <button type='submit' class="btn btn-primary btn-default">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Pay
                                </button>
                            </a>
                    <?php } else {  ?>
                            <form action='form.php' method='post'>
                                <input type='hidden' name='payment' value=1>
                                <button type='submit' class="btn btn-primary btn-default">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Pay
                                </button>
                            </form>
                    <?php }  ?>
                        </div>
                        <div class="col-lg-offset-2 col-lg-1">
                            <form action='cart.php' method='post'>
                                <input type='hidden' name='emptyCart' value='Empty Cart'>
                                <button type='submit' class="btn btn-primary btn-default">
                                    <span class="glyphicon glyphicon-trash"></span> Empty Cart
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php

		} else {
    ?>
        <div class="container-fullwidth container-fluid" style="min-height: 78vh;">
            <div class="row">
                <div style="margin-top: 33vh; text-align: center;" class="col-lg-offset-4 col-lg-4">
                    <h3>No product in shopping cart!</h3>
                </div>
            </div>
        </div>
    <?php
		}
    ?>

    <?php include("footer.php"); ?>
	</body>
</html>