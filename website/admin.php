<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>BEER'SPOT - Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="CSS/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="CSS/form.css"/>
    </head>

    <body>

    <?php include("navbar.php"); ?>

    <div style="min-height: 46vh;" class="container-fullwidth container-fluid admin_section">
        <div class="row">
            <div class="col-lg-offset-4 col-sm-4 admin_inside_1">
                <div class="row">
                    <a class="admin_links" href="add%20new%20beer.php">ADD A NEW BEER</a>
                </div>
                <div class="row">
                    <a class="admin_links" href="update_beer.php">UPDATE A BEER</a>
                </div>
                <div class="row">
                    <a class="admin_links" href="delete_beer.php">DELETE A BEER</a>
                </div>
                <div class="row">
                    <a class="admin_links" href="delete_user.php">DELETE A USER</a>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>

    </body>
</html>