<?php

	class Product {
		private $Brand;
	    private $Product;
	    private $Price;
	    private $Volume;
	    private $Proof;
	    private $Color;
		private $Country;
	    private $Picture;
	    private $Type;
	    private $Website;

	    public function __construct () {
	    	$this->Brand = NULL;
	    	$this->Product = NULL;
		    $this->Price = NULL;
		    $this->Volume = NULL;
		    $this->Proof = NULL;
		    $this->Color = NULL;
			$this->Country = NULL;
		    $this->Picture = NULL;
		    $this->Type = NULL;		     
		    $this->Website = NULL;
	    }

	   	public function create_table () {
	   	}

	   	public function insert_record ($Brand, $Product, $Price, $Volume, $Proof, $Color, $Country, $Picture, $Type, $Website) {

	   		insert_product($Brand, $Product, $Price, $Volume, $Proof, $Color, $Country, $Picture, $Type, $Website);
			echo "TEST";
	   	}

         
	   	public function read_record () {


			$SQL_command = "SELECT * FROM Beers WHERE id=23";
			$response = query_database($SQL_command);

	   		while ($donnees = $response->fetch()) {
	   			echo $donnees['Brand'] .'<br />';
			    echo $donnees['Product'] .'<br />';
			    echo $donnees['Price'] .'<br />';
			    echo $donnees['Volume'] .'<br />';
			    echo $donnees['Proof'] .'<br />';
			    echo $donnees['Color'] .'<br />';
			    echo $donnees['Picture_path'] .'<br />';
			    echo $donnees['Type'] .'<br />';
			    echo $donnees['Website'] .'<br />';
			    echo $donnees['Date'] .'<br />';
	   		}

	   	}

	   	public function update_record () {

	   	}
	   	
	   	public function delete_record () {

	   	}

	}
?>
