<?php

	require_once("cart_function.php");

	/* SELECT COUNT(*) FROM table
	$choice = 0;
	while ($choice < ) {
	$reponse = query_database('SELECT * FROM Beers ORDER BY id LIMIT 1 OFFSET $choice');
	 */

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

		<div class="col-lg-offset-1 col-sm-4 beer_overview" data-toggle="modal"
			 data-target="#myModal<?php echo $i; ?>">
			<div class="row">

				<div class="col-sm-7">

					<?php echo '<img class="beer_pic" src="Pictures/' . $donnees['Picture_path'] . '" />'; ?>

				</div>

				<ul class="col-sm-5 detail_beer">

					<li><?php echo $donnees['Brand'] . " " . $donnees['Product']; ?></li>
					<li><?php echo $donnees['Price'] . " $"; ?></li>
					<li><?php echo $donnees['Volume'] . " L"; ?></li>

					<?php print_add_button($donnees['id']); ?>

					<a href="#" style="background-color: #D85C48; color : white" class="btn btn_details"><span
							class="glyphicon glyphicon-list icon_detail"></span> More Details</a>
				</ul>

			</div>
		</div>

		<?php
		//include("modale.php");
	}

	$reponse->closeCursor();

?>






































