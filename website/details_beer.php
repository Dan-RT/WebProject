
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>BEER'SPOT</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="CSS/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="CSS/index.css"/>
        <link rel="stylesheet" href="CSS/overview_beer.css"/>
    </head>

    <body>


    <?php
        include("navbar.php");
        require_once("db.php");
        require_once("cart_function.php");
    ?>

    <div style="min-height: 60vh;min-height: 78vh;" class="container-fullwidth container-fluid">
        <div class="row">
            <div style="margin-left: 25vw; margin-top: 10vh;" class="col-lg-offset-4 col-lg-6 beer_overview" >
                <div class="col-sm-7">
                    <?php echo '<img class="beer_pic" src="Pictures/' . $_POST['Picture_path'] . '" />'; ?>
                </div>
                <ul class="col-sm-5 detail_beer">
                    <li><?php echo "Brand : " . $_POST['Brand'] . " " . $_POST['Product']; ?></li>
                    <li><?php echo "Brand : " . $_POST['Price'] . " $"; ?></li>
                    <li><?php echo "Volume : " . $_POST['Volume'] . " L"; ?></li>
                    <li><?php echo "Proof : " . $_POST['Proof']; ?></li>
                    <li><?php echo "Color : " . $_POST['Color']; ?></li>
                    <li><?php echo "Country : " . $_POST['Country']; ?></li>
                    <li>Learn More :
                        <a href="<?php echo $_POST['Website']; ?>"><?php echo $_POST['Website']; ?></a>
                    </li>
                    <?php print_add_button($_POST[id]); ?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-offset-4">
                <div class="col-lg-offset-2">
                    <a href="index.php" class="btn btn-default"><span class="glyphicon glyphicon-home"></span> Home Page</a>
                </div>
            </div>
        </div>


    </div>


    <?php include("footer.php"); ?>

    </body>
</html>


