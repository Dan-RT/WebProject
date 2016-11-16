<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>BEER'SPOT</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="CSS/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="CSS/form.css"/>
    </head>

    <body>

<?php
        include("navbar.php");
        require_once("db.php");
        require_once("product.php");
?>
        <div class="container-fullwidth container-fluid">
            <div class="row">
                <div class="col-lg-offset-4 col-sm-4 form_inside_1">
                    <div class="col-lg-offset-4 col-sm-4 form_inside_1">
                        <div class="row form_inside">
                            <form  method="POST" action="login_management.php">

                                <input type="hidden" name="choice_login" value="logout">

                                <button type="submit" class="btn_submit btn btn-sm btn-default" value="Enter">
                                    <span class="btn-xs btn-default"></span> Logout
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php include("footer.php"); ?>

    </body>
</html>
