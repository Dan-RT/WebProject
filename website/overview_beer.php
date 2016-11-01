

<?php
	$reponse = query_database('SELECT * FROM Beers');


    while ($donnees = $reponse->fetch()) {
      /*
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
        */

?>



<div class="col-lg-offset-1 col-sm-4 beer_overview" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">
	<div class="row">

 		<div class="col-sm-7">
 			
 			<?php /*echo '<img class="beer_pic" src="'.$echo $donnees['Picture_path'].'.png" />';*/ ?>
 			<?php echo '<img class="beer_pic" src="'.$donnees['Picture_path'].'" />'; ?>

        </div>

        <ul class="col-sm-5 detail_beer">

        	<li><?php echo $donnees['Brand'] . " " . $donnees['Product'] ; ?></li>
        	<li><?php echo $donnees['Price'] . " $"; ?></li>
        	<li><?php echo $donnees['Volume'] . " L"; ?></li>
        	<a href="#" style="background-color: #D85C48; color : white;" class="btn "><span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</a>
        	<a href="#" class="btn "><span class="glyphicon glyphicon-list icon_detail"></span> More Details</a>
        </ul>

   	</div>
</div>


<!-- On envoie directement à la modale des variables php (données de la BDD) dans le code ci dessous, ex : dans la 1ère div -->

<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color:black;"><?php echo $i; ?></h4>
      </div>

      <div class="modal-body">

      		<div class="row">

		 		<div class="col-sm-5 beer_pic_details">
		 			
		 			<?php echo '<img class="" src="'.$donnees['Picture_path'].'" />'; ?>

		        </div>

		        <ul class="col-sm-7 full_detail_beer">

		        	<li>Brand : <?php echo $donnees['Brand'] . " " . $donnees['Product'] ; ?></li>
		        	<li>Price : <?php echo $donnees['Price'] . " $"; ?></li>
		        	<li>Volume : <?php echo $donnees['Volume'] . " L";?></li>
		        	<li>Proof : <?php echo $donnees['Proof'] . "°";?></li>
		        	<li>Color : <?php echo $donnees['Color']; ?></li>
		        	<li>Country : <?php echo $donnees['Country']; ?></li>
		        	<!-- Il manque le type-->
		        	<li>Website : <?php echo '<a href="'.$donnees['Website'].' ">'.$donnees['Website'].'</a>';?></li>
				   	
		        </ul>

		   	</div>



      		
        	
        	

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="#" style="background-color: #D85C48; color : white;" class="btn "><span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</a>
	  </div>

    </div>
  </div>
</div>


<?php
    }
    
	
  
	$reponse->closeCursor(); 

?>





