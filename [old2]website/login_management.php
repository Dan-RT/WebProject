
<link rel="stylesheet" href="CSS/navbar.css"/>
<link href="CSS/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php

    include("navbar.php");
    require_once("db.php");


    //we test if we login or logout
    if ($_POST["choice_login"] == "login") {

        /*  Remember to make compulsory the filling of th form, bog when nothing's written  */
        if (isset($_POST['user_name'])) {
            $SQL_command = "SELECT * FROM Users WHERE user_name=?";

            $response = query_database($SQL_command, $_POST['user_name']);
            $flag = 1;

            /* Very simple authentification here, to be changed with SQL functions that let search in database */

            while (($data = $response->fetch()) && ($flag == 1)) {
                /*
                echo "User Name (form) : " . $_POST['user_name'] . "</br>";
                echo "Password (form) : " . $_POST['password'] . "</br>";
                echo "User Name (BDD) : " . $data['user_name'] . "</br>";
                echo "Salt (BDD) : " . $data['salt'] . "</br>";
                echo "Encrypted passcode (BDD) : " . $data['hashcode'] . "</br>";
                */

                $encrypted_pw = crypt($_POST['password'], $data['salt']);

                //echo "Encrypted passcode (Site) : " . $encrypted_pw . "</br>";

                if (($data['user_name'] == $_POST['user_name']) && ($data['hashcode'] == $encrypted_pw)) {
                    $_SESSION['user'] = $_POST['user_name'];
                    $_SESSION['logged_in'] = 1;
                    //echo "Login success";
                    $flag = 0;
                    if($_POST["payment"] == 1) {
                        print ("<script> window.location.href = 'cart.php';</script>");
                    } else {
                        print ("<script> window.location.href = 'index.php';</script>");
                    }
                }
            }
        }
        print ("<script> 
                    alert('Login failed, information false');
                    window.location.href = 'form.php';
                </script>");

    } else if ($_POST["choice_login"] == "logout") {
        session_destroy();
        session_start();
        print ("<script> window.location.href = 'index.php';</script>");
    }

?>











