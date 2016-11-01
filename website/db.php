<?php

    function query_database($SQLCommand) {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=BEER\'SPOT;charset=utf8', 'root', 'root');
            $reponse = $bdd->query($SQLCommand);  
            //echo $SQLCommand;      
            //$reponse->closeCursor();

            /*print("<br><br>");
            print_r ($reponse);
            print("<br><br>");

            */

            if ($reponse != NULL) {
                return $reponse;
            }
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

    }


    function insert_product ($Brand, $Product, $Price, $Volume, $Proof, $Color, $Country, $Picture, $Type, $Website) {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=BEER\'SPOT;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }


        $req = $bdd->prepare('INSERT INTO Beers (Brand, Product, Price, Volume, Proof, Color, Country, Picture_path, Website) 
        VALUES(:Brand, :Product, :Price, :Volume, :Proof, :Color, :Country, :Picture_path, :Website)');
        $req->execute(array('Brand' => $Brand,
                            'Product' => $Product,
                            'Price' => $Price,
                            'Volume' => $Volume,
                            'Proof' => $Proof,
                            'Color' => $Color,
                            'Country' => $Country,
                            'Picture_path' => $Picture,
                            'Website' => $Website));

        $response->closeCursor();

    }

    function retrieve_products () {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=BEER\'SPOT;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $reponse = $bdd->query('SELECT * FROM Beers');
        if ($reponse != NULL) {
            return $reponse;
        }

    }
?>

