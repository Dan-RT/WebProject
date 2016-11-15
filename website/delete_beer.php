<script>

    /* This function comes from : http://stackoverflow.com/questions/10590973/check-if-input-is-float-or-integer  */

    function getType(input) {
        var m = (/[\d]+(\.[\d]+)?/).exec(input);
        if (m) {
            // Check if there is a decimal place
            if (m[1]) { return 'float'; }
            else { return 'int'; }
        }
        return 'string';
    }

    function validateForm() {
        var x = document.forms["form"]["id"].value;
        if (x == null || x == "") {
            alert("ID field must be filled out");
            return false;
        }
        if (getType(x) != "int") {
            alert("ID field must be a integer.");
            return false;
        }
    }
</script>

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
        <div class="col-lg-offset-1 col-sm-4 details_db_delete">
            <h4>Choose your product by giving its ID :</h4>
            <?php
            require_once("db.php");
            $reponse = query_database('SELECT * FROM Beers');

            while ($donnees = $reponse->fetch()) {
                echo "ID : " . $donnees['id'] . '<br />';
                echo "Brand : " . $donnees['Brand'] . '<br />';
                echo "Product : " . $donnees['Product'] . '<br />';
                echo "Price : " . $donnees['Price'] . "$" . '<br />';
                echo "Volume : " . $donnees['Volume'] . "L". '<br />';
                echo "Proof : " . $donnees['Proof'] . '<br />';
                echo "Color : " . $donnees['Color'] . '<br />';
                echo "Country : " . $donnees['Country'] . '<br />';
                echo "Picture path : " . $donnees['Picture_path'] . '<br />';
                echo "Website : " . $donnees['Website'] . '<br />';
                echo "Date : " . $donnees['Date'] . '<br /><br />';
            }
            ?>
        </div>

        <div class="col-lg-offset-1 col-sm-4 col_form form_inside_1">

            <div class="row form_inside_1">

                <form name="form" class="form_inside" action="database_management.php" method="POST" onsubmit="return validateForm()">

                    <h3>DELETING BEER</h3>

                    <input type="hidden" name="choice_db" value="delete_beer">

                    <p>
                        <label><input class="input-lg form-control" type="text" name="id" placeholder="ID" /></label>
                    </p>

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