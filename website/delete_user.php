
<script>
    function validateForm() {
        var x = document.forms["form"]["id"].value;
        if (x == null || x == "") {
            alert("All fields must be filled out");
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
                $reponse = query_database('SELECT * FROM Users');

                while ($donnees = $reponse->fetch()) {
                    echo "ID : " . $donnees['id'] . '<br />';
                    echo "User Name : " . $donnees['user_name'] . '<br />';
                }
                ?>
            </div>

            <div class="col-lg-offset-1 col-sm-4 col_form form_inside_1">

                <div class="row form_inside_1">

                    <form name="form" class="form_inside" action="database_management.php" method="POST" onsubmit="return validateForm()">

                        <h3>DELETING USER</h3>

                        <input type="hidden" name="choice_db" value="delete_user">

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