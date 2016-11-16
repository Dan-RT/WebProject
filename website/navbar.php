
<link rel="stylesheet" href="CSS/navbar.css"/>

<div class="container-fullwidth">

	<nav class="navbar" >
	    <div class="container-fluid">
		    <ul class="nav navbar-nav navbar-fixed-top">

		        <li class="active"> <a class="logo_site" href="index.php">BEER'SPOT</a> </li>

<?php

	session_start();

	if (!isset($_SESSION['logged_in'])) {
		echo "<li class='element_nav'><a href='form.php'>Login</a></li>";
	} elseif ($_SESSION['logged_in'] == 1 && $_SESSION['user'] == "admin") {
		echo "<li class='element_nav'><a href='admin.php'>Admin</a></li>";
	} else {
		echo "<li class='element_nav user_name'> " . $_SESSION['user'] . "</li>";
	}

		?>
		<li class='element_nav'><a href="index.php">Home</a></li>


<?php
	if ($_SESSION['nb_items'] > 0) {
		echo "<li class='element_nav'> <a href='cart.php'>Cart <h4 class='nb_item'>" . " (" . $_SESSION['nb_items'] . ")" . "</h4></a></li>";
	} else {
		echo "<li class='element_nav'> <a href='cart.php'>Cart <h4 class='nb_item'>" . " (0)" . "</h4></a></li>";
	}
?>
		<div class="navbar-form inline-form search_form">
			<form method="POST" style="margin-bottom: 0vh;" action="search_engine.php">

				<input type="search" name="search" class="input-sm form-control" placeholder="Brands">

				<button type="submit" class="btn_submit btn btn-sm btn-default" value="Enter">
					Search
				</button>
			</form>
		</div>
	<?php
	if (!isset($_SESSION['logged_in'])) {
		echo "<li type='hidden' class='extra_element'></li>";
	} else {

	?>
			<form method="POST" action="login_management.php" class="logout_button">
				<input type="hidden" name="choice_login" value="logout">

				<button type="submit" class="btn_submit btn btn-sm btn-default" value="Enter">
					Logout
				</button>
			</form>
		<?php
	}

?>
		    </ul>
	    </div>
	</nav>
</div>




