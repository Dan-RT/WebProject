<?php
    function validate_insertion ($Brand, $Product, $Price, $Volume, $Proof, $Color, $Country, $Picture, $Type, $Website) {

        /*
        if (!isset($Brand) || !isset($Product) || !isset($Price) || !isset($Volume)
            || !isset($Proof) || !isset($Color) || !isset($Country)
            || !isset($Picture) || !isset($Website) ) {
            return 0;
        }
        if (!is_string($Brand) || !is_string($Product) || !is_double($Price)
            || !is_double($Volume) || !is_double($Proof) || !is_string($Color)
            || !is_string($Country) || !is_string($Picture) || !is_string($Website)) {
            return -1;
        }
        */
        echo $Price;
        if (is_double($Price)) {
            die('Double');
            //return -1;
        } else {
            die('Not double');
        }




        /*  var Type not tested */

        return 1;

    }





?>