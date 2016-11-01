
<link rel="stylesheet" href="navbar.css"/>

<div class="container-fullwidth">

	<nav class="navbar" >
	    <div class="container-fluid">
		    <ul class="nav navbar-nav navbar-fixed-top">

		        <li class="active"> <a class="logo_site" href="index.php">BEER'SPOT</a> </li>
		        <li class="first_element_nav" > <a href="index.php">Home</a> </li>
		        <li> <a href="form.php">Your Account</a> </li>
		        <li> <a href="cart.php">Cart</a> </li>
		        <li> <a href="add new beer.php">Add a Beer</a> </li>

		        <form class="navbar-form navbar-right inline-form" style="margin-right: 5vw;">
			        <div class="form-group">


						<form  method="POST" action="search_engine.php">

							<input type="search" name="search" class="input-sm form-control" placeholder="Bottom up">


							<button type="submit" class="btn_submit btn btn-sm btn-default" value="Enter">
								<span class="btn-xs btn-default"></span> Search
							</button>

						</form>

					</div>
		        </form>

		    </ul>
	    </div>
	</nav>
</div>




