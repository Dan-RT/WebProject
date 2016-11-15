<?php


    function validate_insertion ($Brand, $Product, $Price, $Volume, $Proof, $Color, $Country, $Picture, $Website, $id = null) {

        if (!isset($Brand) || !isset($Product) || !isset($Price) || !isset($Volume)
            || !isset($Proof) || !isset($Color) || !isset($Country)
            || !isset($Picture) || !isset($Website) ) {
?>
            <script>
                alert("Missing items isset");
                window.location.href = "add%20new%20beer.php";
            </script>
<?php
            return 0;
        }
        if ($Brand == "" || $Product == "" || $Price == "" || $Volume == "" || $Proof = "" || $Color == "" || $Country == "" || $Picture == "" || $Website == "") {
?>
            <script>
                alert("Missing items ");
                window.location.href = "add%20new%20beer.php";
            </script>
<?php
            return 0;
        }

        if ($id != null) {
            if(!is_int($id)) {
                ?>
                <script>
                    alert("Wrong type id");
                    window.location.href = "add%20new%20beer.php";
                </script>
                <?php
                return 0;
            }
        }

        if ((is_string($Brand) == false) OR (is_string($Product) == false) OR (is_string($Color) == false) OR (is_string($Country) == false) OR (is_string($Picture) == false) OR (is_string($Website) == false)) {
?>
            <script>
                alert("wrong string type");
                window.location.href = "add%20new%20beer.php";
            </script>
<?php
            return 0;
        } elseif (is_double($Price) == false OR is_double($Volume) == false OR is_double($Proof) == false) {
?>
            <script>
                alert("wrong double type");
                window.location.href = "add%20new%20beer.php";
            </script>
<?php
            return 0;
        }


        return 1;
    }







?>