<?php

	require_once("cart_function.php");

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


	<div class="col-lg-offset-2 col-lg-3 col-sm-12 beer_overview" data-toggle="modal"
		 data-target="#myModal<?php echo $i; ?>">
		<div class="col-sm-12 col-lg-6">
			<?php echo '<img class="beer_pic" src="Pictures/' . $donnees['Picture_path'] . '" />'; ?>
		</div>

		<ul class="col-sm-12 col-lg-6  detail_beer">
			<li><?php echo $donnees['Brand'] . " " . $donnees['Product']; ?></li>
			<li><?php echo $donnees['Price'] . " $"; ?></li>
			<li><?php echo $donnees['Volume'] . " L"; ?></li>
			<?php
			if($choice == 1) {
				print_add_button($donnees['id'], $quantity);
			} elseif ($choice == 2) {
				print_plus_button($donnees['id'], $quantity, $donnees['Price']);
			}
			?>
			<a href="#" style="background-color: #D85C48; color : white" class="btn btn_details">
				<span class="glyphicon glyphicon-list icon_detail"></span>More Details
			</a>
		</ul>

	</div>




		<?php
		//include("modale.php");
	}

	$reponse->closeCursor();

?>






































