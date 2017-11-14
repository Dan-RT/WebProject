<?php
	require_once("cart_function.php");

	while ($donnees = $reponse->fetch()) {

		//include("modale.php");
?>

		<div class="col-sm-4 beer_overview" >
			<div class="row">
				<div class="col-sm-7">
					<?php echo '<img class="beer_pic" src="Pictures/' . $donnees['Picture_path'] . '" />'; ?>
				</div>
				<ul class="col-sm-5 detail_beer">
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

				<!--	<a href="#" style="background-color: #D85C48; color : white" class="btn btn_details" data-toggle="modal"
					   data-target="#myModal<?php //echo $donnees['id']; ?>"> -->

					<form action="details_beer.php" method="post">
						<input type='hidden' name='id' value="<?php echo $donnees['id']  ?>">
						<input type='hidden' name='Brand' value="<?php echo $donnees['Brand']  ?>">
						<input type='hidden' name='Product' value="<?php echo $donnees['Product'] ?>">
						<input type='hidden' name='Price' value="<?php echo $donnees['Price']  ?>">
						<input type='hidden' name='Volume' value="<?php echo $donnees['Volume'] ?>">
						<input type='hidden' name='Proof' value="<?php echo $donnees['Proof'] ?>">
						<input type='hidden' name='Color' value="<?php echo $donnees['Color'] ?>">
						<input type='hidden' name='Country' value="<?php echo $donnees['Country'] ?>">
						<input type='hidden' name='Picture_path' value="<?php echo $donnees['Picture_path'] ?>">
						<input type='hidden' name='Website' value="<?php echo $donnees['Website'] ?>">

						<button style="background-color: #D85C48; color: white;margin-top: 2vh " type='submit' class='btn btn_details icon_detail btn'>
							<span class='glyphicon glyphicon-list'></span>
							More Details
						</button>
					</form>
				</ul>
			</div>
		</div>

<?php
		//include("modale.php");
	}
	$reponse->closeCursor();
?>






































