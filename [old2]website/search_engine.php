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

        //echo $_POST["search"];
        $reponse = query_database("SELECT * FROM Beers WHERE brand LIKE '%$_POST[search]%' ORDER BY id");

        if (isset($reponse)) {
?>
            <div class="container-fullwidth container-fluid">
			    <div class="row">
                  <?php include("overview_beer.php");?>
                </div>
            </div>
<?php
        } else {
            //We don't enter here :(
?>

            <div class="col-lg-offset-1 col-sm-4 beer_overview">
                <div class="row">

                    <div class="col-sm-12">
                        <h3>Beer Not found !</h3>
                    </div>

                </div>
            </div>

<?php
        }


        include("footer.php");
?>

    </body>
</html>

