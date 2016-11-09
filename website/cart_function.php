<?php

    function print_add_button ($item_id) {

        echo $item_id;

        print ("<form action='index.php' method='POST'>   <!-- changer pour un truc current page -->
                    <input type='hidden' name='item_id' value='$item_id'>
                    <button type='submit' class='btn btn-default'>
                        <span class='glyphicon glyphicon-shopping-cart'> </span> Add to Cart
                    </button>
                </form>");

    }

?>






