<?php


    function print_add_button ($item_id, $quantity = null) {

        //echo $item_id;

        print ("<form style='margin-top: 2vh;' action='index.php' method='POST'>   <!-- changer pour un truc current page -->
                    <input type='hidden' name='item_id' value='$item_id'>
                    <button type='submit' class='btn btn-default'>
                        <span class='glyphicon glyphicon-shopping-cart'> </span>
                         Add to Cart
                    </button>
                </form>");

    }

    function print_plus_button ($item_id, $quantity, $price) {
        //echo $item_id;

        print("<form action='cart.php' method='POST' class='add_sub_buttons'>   <!-- changer pour un truc current page -->
                    <input type='hidden' name='item_id' value='$item_id'>
                    <input type='hidden' name='add_sub_item' value='add_item'>
                    <button type='submit' class='btn btn-sm btn-default'>
                         <span class='glyphicon glyphicon-plus'></span>
                    </button>
               </form>
               <div class='quantity'>");

        echo $quantity;

        print("</div>
               <form action='cart.php' method='POST' class='add_sub_buttons'>   <!-- changer pour un truc current page -->
                    <input type='hidden' name='item_id' value='$item_id'>
                    <input type='hidden' name='add_sub_item' value='sub_item'>
                    <button type='submit' class='btn btn-sm btn-default'>
                         <span class='glyphicon glyphicon-minus'></span>
                    </button>
               </form>");

        print("<div class='row'>
                    <div style='margin-left: 1vw;'>");
        echo 'Product Price : ' . $quantity*$price . "$";
        print("     </div>
               </div>");
    }


    function total_price ($cart_items) {

        $splitted_cart = split(",", $cart_items);
        $total_price = 0;

        foreach($splitted_cart as $itemId) {
            $response = query_database("SELECT * FROM Beers WHERE id=?", $itemId);
            while ($data = $response->fetch()) {
                //echo $data["Brand"] . " " . $data["Product"] . " " . $data["Price"] . "$". "<br/>";
                $total_price = $total_price + $data["Price"];
            }
        }
        print("<div>Total Price :  $total_price $</div>");

    }

?>






