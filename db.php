<?php

    require_once("db_validate_functions.php");

    function query_database($SQLCommand, $var = null) {

        if (!$var) {
            try {
                $bdd = new PDO('mysql:host=localhost;dbname=BEER\'SPOT;charset=utf8', 'root', 'root');
                $reponse = $bdd->query($SQLCommand);

                /*  check for existing id   */
            return $reponse;
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        } else {
            try {
                $bdd = new PDO('mysql:host=localhost;dbname=BEER\'SPOT;charset=utf8', 'root', 'root');

                $reponse = $bdd->prepare($SQLCommand);
                $reponse->execute(array($var));

                return $reponse;
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

        $validation = 1; //validate_insertion($Brand, $Product, $Price, $Volume, $Proof, $Color, $Country, $Picture, $Type, $Website);

        if ($validation == 1) {
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
        } elseif ($validation == 0) {
            die('Error : Missing items.');
        } elseif ($validation == -1) {
            die('Error : Wrong type.');
        }
    }



    function update_products ($id, $Brand, $Product, $Price, $Volume, $Proof, $Color, $Country, $Picture, $Type, $Website) {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=BEER\'SPOT;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
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

    function insert_user ($user_name, $email, $password) {

        require_once("mail.php");
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=BEER\'SPOT;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $salt = mcrypt_create_iv(32, MCRYPT_DEV_URANDOM);
        $encrypted_pw = crypt($password, $salt);

        echo $salt . "</br>";
        echo $encrypted_pw . "</br>";


        $req = $bdd->prepare('INSERT INTO Users (user_name, email, salt, hashcode) 
                    VALUES(:user_name, :email, :salt, :encrypted_pw)');
        $req->execute(array('user_name' => $user_name,
                            'email' => $email,
                            'salt' => $salt,
                            'encrypted_pw' => $encrypted_pw));

        $text ="Welcome $user_name ! Thank's for joing us.</br></br>Remember :</br>if beer is not the answer, you are probably asking the wrong question.</br></br>Sincerely,</br></br>Beer'Spot";
        $send = send_email($email, "Welcome", "Welcome in Beer'Spot !", $text);


        $req->closeCursor();

        return $send;


    }

?>


