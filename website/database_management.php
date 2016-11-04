
<!DOCTYPE html>
<html>
    <head>
        <title>Database Management</title>
        <meta charset="utf-8" />
    </head>
    <body>


        <?php
            require_once("db.php");

            if ($_POST["choice_db"] == "new_beer") {
                insert_product($_POST['brand'],$_POST['product'],$_POST['price'], $_POST['volume'],$_POST['proof'],$_POST['color'],$_POST['country'],$_POST['picture_path'], $_POST['type'], $_POST['website']);

            } elseif ($_POST["choice_db"] == "udpate_beer") {

                update_products($_POST['id'], $_POST['brand'],$_POST['product'],$_POST['price'], $_POST['volume'],$_POST['proof'],$_POST['color'],$_POST['country'],$_POST['picture_path'], $_POST['type'], $_POST['website']);
            }
            print("<script> window.location.href = \"index.php\"; </script>");
            ?>


    </body>
</html>