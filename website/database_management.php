
<!DOCTYPE html>
<html>
    <head>
        <title>Database Management</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <p>TEST</p>

        <?php

            require_once("db.php");
            insert_product($_POST['brand'],$_POST['product'],$_POST['price'], $_POST['volume'],$_POST['proof'],$_POST['color'],$_POST['country'],$_POST['picture_path'], $_POST['type'], $_POST['website']);
         ?>
         <script>
            window.location.href = "index.php";
         </script>

    </body>
</html>