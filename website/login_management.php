<?php

    require_once("db.php");

    /*  Remeber to make compulsory th efilling of th form, bog when nothing's written)  */
    if (isset($_POST['user_name'])) {
        $SQL_command = "SELECT * FROM Users WHERE user_name=?";

        $response = query_database($SQL_command, $_POST['user_name']);
        $flag = 1;

        /* Very simple authentification here, to be changed with SQL functions that let search in database */

        while (($data = $response->fetch()) && ($flag == 1)) {
            echo "User Name (form) : " . $_POST['user_name'] . "</br>";
            echo "Password (form) : " . $_POST['password'] . "</br>";
            echo "User Name (BDD) : " . $data['user_name'] . "</br>";
            echo "Password (BDD) : " . $data['salt'] . "</br>";

            if (($data['user_name'] == $_POST['user_name']) && ($data['salt'] == $_POST['password'])) {
                echo "Login success";
                $flag = 0;
            }
            print ("<script> window.location.href = 'index.php';</script>");
        }
    } else {

    }

    echo "Login failed";
    print ("<script> window.location.href = 'form_failed.php';</script>");
?>