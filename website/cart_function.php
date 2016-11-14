<?php


    function print_add_button ($item_id, $quantity) {

        //echo $item_id;

        print ("<form action='index.php' method='POST'>   <!-- changer pour un truc current page -->
                    <input type='hidden' name='item_id' value='$item_id'>
                    <button type='submit' class='btn btn-default'>
                        <span class='glyphicon glyphicon-shopping-cart'> </span>
                         Add to Cart
                    </button>
                </form>");

    }

    function print_plus_button ($item_id, $quantity) {
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
    }
?>






