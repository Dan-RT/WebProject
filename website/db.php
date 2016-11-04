<?php

    function query_database($SQLCommand, $var = null) {

        if (!$var) {

            try {
                $bdd = new PDO('mysql:host=localhost;dbname=BEER\'SPOT;charset=utf8', 'root', 'root');
                $reponse = $bdd->query($SQLCommand);

                /*  check for existing id   */

    /*
        $data = $reponse;

        if ($data->fetch() != null) {
            return $reponse;
        } else {
            return null;
        }

        if ($reponse != null) {
            return $reponse;
        } else {
            return null;
        }
    */          return $reponse;
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }

        } else {

            try {
                $bdd = new PDO('mysql:host=localhost;dbname=BEER\'SPOT;charset=utf8', 'root', 'root');

                $reponse = $bdd->prepare($SQLCommand);
                $reponse->execute(array($var));



                return $reponse;

                /*
                $data = $reponse;

                if ($data->fetch() != null) {
                    return $reponse;
                } else {
                    echo "TEST";
                    return null;
                }
                */

            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
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

        $req->closeCursor();

    }

    function update_products ($id, $Brand, $Product, $Price, $Volume, $Proof, $Color, $Country, $Picture, $Type, $Website) {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=BEER\'SPOT;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }


        echo "ID : " . $id . '<br />';
        echo "Brand : " . $Brand . '<br />';
        echo "Product : " . $Product . '<br />';
        echo "Price : " . $Price . "$" . '<br />';
        echo "Volume : " . $Volume . "L". '<br />';
        echo "Proof : " . $Proof . '<br />';
        echo "Color : " . $Color . '<br />';
        echo "Picture path : " . $Picture . '<br />';
        echo "Type : " . $Type . '<br />';
        echo "Website : " . $Website . '<br />';


        //$req = $bdd->prepare('UPDATE Beers SET Brand = :Brand WHERE id = :id');

        $req = $bdd->prepare('UPDATE Beers SET  Brand = :Brand, 
                                                Product = :Product, 
                                                Price = :Price, 
                                                Volume = :Volume, 
                                                Proof = :Proof, 
                                                Color = :Color, 
                                                Country = :Country, 
                                                Picture_path = :Picture_path, 
                                                Website = :Website 
                                                WHERE id = :id');

        $req->execute(array('Brand' => $Brand,
                            'Product' => $Product,
                            'Price' => $Price,
                            'Volume' => $Volume,
                            'Proof' => $Proof,
                            'Color' => $Color,
                            'Country' => $Country,
                            'Picture_path' => $Picture,
                            'Website' => $Website,
                            'id' => $id));

        $req->closeCursor();
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

