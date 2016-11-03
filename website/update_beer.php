<html>
<head>
    <meta charset="utf-8" />
    <title>Update existing Beer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/navbar.css"/>
    <link rel="stylesheet" href="CSS/radio.css"/>
    <link rel="stylesheet" href="CSS/add new beer.css"/>
</head>

<body>

<?php include("navbar.php"); ?>

<div class="container-fullwidth container-fluid form_section">
    <div class="row">
        <div class="col-lg-offset-1 col-sm-4 details_db">
            <h2>Choose your product by giving its ID</h2>
            <?php
                require_once("db.php");
                $reponse = query_database('SELECT * FROM Beers');

                while ($donnees = $reponse->fetch()) {
                    echo $donnees['id'] . '<br />';
                    echo $donnees['Brand'] . '<br />';
                    echo $donnees['Product'] . '<br />';
                    echo $donnees['Price'] . '<br />';
                    echo $donnees['Volume'] . '<br />';
                    echo $donnees['Proof'] . '<br />';
                    echo $donnees['Color'] . '<br />';
                    echo $donnees['Picture_path'] . '<br />';
                    echo $donnees['Type'] . '<br />';
                    echo $donnees['Website'] . '<br />';
                    echo $donnees['Date'] . '<br /><br /><br />';
                }

            ?>


        </div>

        <div class="col-lg-offset-1 col-sm-4 form_inside_1">

            <div class="row form_inside_1">

                <form class="form_inside" action="database_management.php" method="POST">

                    <h3>UPDATING BEER</h3>

                    <input type="hidden" name="choice_db" value="udpate_beer">

                    <p>
                        <label><input class="input-lg form-control" type="text" name="id" placeholder="ID"/></label>
                    </p>

                    <p>
                        <label><input class="input-lg form-control" type="text" name="brand" placeholder="Brand"/></label>
                    </p>
                    <p>
                        <label><input class="input-lg form-control" type="text" name="product" placeholder="Product"/></label>
                    <p>

                    <p>
                        <label><input class="input-lg form-control" type="text" name="price" placeholder="Price"/></label>
                    <p>

                    <p>
                        <label><input class="input-lg form-control" type="text" name="volume" placeholder="Volume"/></label>
                    <p>

                    <p>
                        <label><input class="input-lg form-control" type="text" name="proof" placeholder="Proof"/></label>
                    <p>

                    <p>
                        <label><input class="input-lg form-control" type="text" name="color" placeholder="Color"/></label>
                    <p>

                    <p>
                        <label><input class="input-lg form-control" type="text" name="country" placeholder="Country"/></label>
                    <p>

                    <p>
                        <label><input class="input-lg form-control" type="text" name="picture_path" placeholder="Picture Name"/></label>
                    <p>

                    <p>
                        <label><input class="input-lg form-control" type="text" name="website" placeholder="Website"/></label>
                    <p>

                    <div class="radio">
                        <input id="can" type="radio" name="type" value="can">
                        <label for="can">Can</label>
                        <input id="bottle" type="radio" name="type" value="bottle">
                        <label for="bottle">Bottle</label>
                        <input id="draught" type="radio" name="type" value="draught">
                        <label for="draught">Draught</label>
                    </div>

                    <button style="margin-top: 3vh;" type="submit" class="btn_enter btn btn-lg btn-default" value="Enter">
                        <span class="glyphicon glyphicon-ok"></span> Enter
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>


<?php include("footer.php"); ?>

</body>
</html>