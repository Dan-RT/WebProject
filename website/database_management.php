
<!DOCTYPE html>
<html>
    <head>
        <title>Database Management</title>
        <meta charset="utf-8" />
    </head>
    <body>


        <?php
            require_once("db.php");

            switch ($_POST["choice_db"]) {
                case "new_beer" :
                    insert_product($_POST['brand'],$_POST['product'],$_POST['price'], $_POST['volume'],$_POST['proof'],$_POST['color'],$_POST['country'],$_POST['picture_path'], $_POST['type'], $_POST['website']);
                    break;
                case "udpate_beer" :
                    update_products($_POST['id'], $_POST['brand'],$_POST['product'],$_POST['price'], $_POST['volume'],$_POST['proof'],$_POST['color'],$_POST['country'],$_POST['picture_path'], $_POST['type'], $_POST['website']);
                    break;
                case "delete_beer" :
                    query_database("DELETE FROM Beers WHERE id=?", $_POST['id']);
                    print("<script> window.location.href = \"delete_beer.php\"; </script>");
                    break;
                case "new_user" :
                    insert_user($_POST['user_name'], $_POST['email'], $_POST['password']);
                    session_start();
                    $_SESSION['logged_in'] = 1;
                    $_SESSION['user'] = $_POST['user_name'];
                    break;
                case "delete_user" :
                    query_database("DELETE FROM Users WHERE id=?", $_POST['id']);
                    break;

                default :
                    query_database("DROP TABLE test");
                    break;

            }
/*
            if ($_POST["choice_db"] == "new_beer") {
                } elseif ($_POST["choice_db"] == "udpate_beer") {
                } elseif ($_POST["choice_db"] == "delete_beer") {
                } elseif ($_POST["choice_db"] == "new_user") {
                } else {

            }
*/
            print("<script> window.location.href = \"index.php\"; </script>");

        ?>

    </body>
</html>

