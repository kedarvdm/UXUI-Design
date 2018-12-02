<?php
	require("../config.php");
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>SellHub</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/carousel.css" rel="stylesheet">
	
	<link href="../css/toolkit-inverse.css" rel="stylesheet">
	
	<link href="../css/sellhub.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/jquery-ui.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-inverse">
	  <a class="navbar-brand" href="../sellhub.home.php"><i class="fa fa-scribd" aria-hidden="true"></i><span class="logo">ellHub</span></a>
	  <ul class="nav navbar-nav pull-xs-right">
		<li><a class="nav-item nav-link" href="buy.home.php">Home</a></li>
		<li class="nav-item btn-group">
			<a class="dropdown-toggle nav-link" type="button" id="ServicesMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Services
			</a>
			<div class="dropdown-menu" aria-labelledby="ServicesMenu">
				<a class="dropdown-item bg-inverse disabled" type="button" data-toggle="tooltip" title="Coming Soon!!">Sell</a>
				<a class="dropdown-item bg-inverse" href="buy.home.php" type="button" data-toggle="tooltip" title="Buy!!">Buy</a>
				<a class="dropdown-item bg-inverse disabled"type="button" data-toggle="tooltip" title="Coming Soon!!">Trade</a>
			</div>
		</li>
		<li><a class="nav-item nav-link disabled" data-toggle="tooltip" title="Coming Soon!!">About Us</a></li>
		<li class="nav-item btn-group">
			<a class="dropdown-toggle nav-link" type="button" id="ProfileMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa fa-user fa-fw"></i> Profile
			</a>
			<div class="dropdown-menu bg-inverse" aria-labelledby="ProfileMenu">
				<a class="dropdown-item bg-inverse disabled" type="button" data-toggle="tooltip" title="Coming Soon!!">Personal Information</a>
				<a class="dropdown-item bg-inverse disabled" type="button" data-toggle="tooltip" title="Coming Soon!!">Manage Accounts</a>
				<a class="dropdown-item bg-inverse disabled" type="button" data-toggle="tooltip" title="Coming Soon!!">Manage Bio-metrics</a>
				<a class="dropdown-item bg-inverse disabled" type="button" data-toggle="tooltip" title="Coming Soon!!">Change Password</a>
				<a class="dropdown-item bg-inverse" href="../loggedout.php" type="button" data-toggle="tooltip" title="Sign Out">Sign Out</a>
			</div>
		</li>
	</ul>
	</nav>

	<!-- Modal -->
	<div class="modal fade bg-inverse" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header bg-warning">
			<h4 class="modal-title" id="myModalLabel">Payment Successfull!!</h4>
		  </div>
		  <div class="modal-body bg-inverse">
			<h3 class="modal-title text-warning">Thank you for your recent purchase!!!</h3>
			<h4 class="text-danger">Would you like to fill following survey??</h4>
			<div class="form-group row">
				<p>1) On a scale of 1 to 5 where 1 being lowest and 5 being highest, please rate to following,  
				<label for="inputEmail3" class="col-sm-4 form-control-label">Recent purchase experience:</label>
				<div class="col-sm-6">
					<br/>
				  <label class="radio-inline">
					  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> &nbsp;1
					</label>
					<label class="radio-inline">
					  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> &nbsp;2
					</label>
					<label class="radio-inline">
					  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> &nbsp;3
					</label>
					<label class="radio-inline">
					  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> &nbsp;4
					</label>
					<label class="radio-inline">
					  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> &nbsp;5
					</label>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-4 form-control-label">User interface:</label>
				<div class="col-sm-6">
					<label class="radio-inline">
					  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> &nbsp;1
					</label>
					<label class="radio-inline">
					  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> &nbsp;2
					</label>
					<label class="radio-inline">
					  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> &nbsp;3
					</label>
					<label class="radio-inline">
					  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> &nbsp;4
					</label>
					<label class="radio-inline">
					  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> &nbsp;5
					</label>
				</div>
			</div>
			<div class="form-group row">
				<p>2) Did you find what you were looking for?</p>
				<div class="col-sm-6">
					<label class="radio-inline">
					  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> &nbsp;&nbsp;&nbsp;Yes
					</label>
					<label class="radio-inline">
					  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> &nbsp;No
					</label>
				</div>
			</div>
			<div class="form-group row">
				<p>3) Do you have any suggestions for us?</p>
				<div class="col-sm-10">
					<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
				</div>
			</div>
			<div class="form-group row">
				<p>4) Would you like if SellHub contacts you via Email or Phone to know about your experiece?</p>
				<div class="col-sm-6">
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox1" value="option1"> &nbsp;&nbsp;&nbsp;Email
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox2" value="option2"> &nbsp;Phone
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox2" value="option2"> &nbsp;Not interested
					</label>
				</div>
			</div>
			<h3>Thank you for your time!!</h3>
		  </div>
		  <div class="modal-footer bg-inverse">
			<a class="btn btn-lg btn-warning" href="buy.home.php">Return to Buy</a>
			<button type="button" class="btn btn-lg btn-warning" role="button" data-toggle="modal" data-target="#myModal1">Submit</button>
		  </div>
		</div>
	  </div>
	</div>
	
	<div class="modal fade bg-inverse" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header bg-warning">
					<h4 class="modal-title" id="myModalLabel">Thanks!!</h4>
				</div>
				<div class="modal-body bg-inverse">
					<h2>Thank you for your response!!!</h2>
				</div>
				<div class="modal-footer bg-inverse">
					<a class="btn btn-warning" href="buy.home.php">Continue Browsing!!</a>
				</div>
			</div>
		</div>
	</div>
		  
	
	
	<div class="content container-fluid">
		<div class="row">
			<div class="col-sm-2 text-xs-center">
				<ul class="nav nav-pills nav-stacked">
				  <li class="nav-item">
					<h3><i class="fa fa-user" aria-hidden="true"></i> <span class="text-warning">Jon Snow</span></h3>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="buy.home.php" data-toggle="tooltip" title="Coming Soon!!"><i class="fa fa-home" aria-hidden="true"></i> Buy</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link disabled" data-toggle="tooltip" title="Coming Soon!!"><i class="fa fa-shopping-basket" aria-hidden="true"></i> My Orders</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link disabled" data-toggle="tooltip" title="Coming Soon!!"><i class="fa fa-user" aria-hidden="true"></i> My Account</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link disabled" data-toggle="tooltip" title="Coming Soon!!"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a>
				  </li>
				</ul>
			</div>
			
			<div class="col-sm-8">
				<div class="row">
				<?php
				if(isset($_SESSION["products"]))
				{
					$total = 0;
					echo '<div class="jumbotron bg-inverse">';
					echo '<h1 class="text-danger">Your Shopping Cart!!!</h1>';
					echo '<ul>';
					foreach ($_SESSION["products"] as $cart_itm)
					{
						echo '<li class="cart-itm">';
						echo '<h3>'.$cart_itm["name"].'<a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'" class="btn btn-danger pull-right" rel="tooltip" role="button"><i class="fa fa-trash" aria-hidden="true"></i></a></h3>';
						echo '<div class="p-price">Price :'.$currency.$cart_itm["price"].'</div>';
						echo '</li>';
						$subtotal = ($cart_itm["price"]);
						$total = ($total + $subtotal);
					}
					echo '</ul>';
					echo '</div>';
				}
				?>
				</div>
				<div class="row">
					<div class="jumbotron bg-inverse container text-xs-center">
						<?php
							if(isset($total))
							{
						?>
						<h2 class="text-warning">Please Pay <?php echo $currency.$total ?> !!</h2>
						<div class="col-sm-4">
							<div class="container">
								<h3 class="text-danger">&nbsp;&nbsp;Credit/Debit Card</h3>
								<div class="col-sm-12">
									<input type="text" class="form-control" value="Jon Snow" name="card-holder-name" id="card-holder-name" placeholder="Name On Card">
								</div>
								<div class="col-sm-12">
									<input type="text" class="form-control" value="1234 5678 1234 5678" name="card-number" id="card-number" placeholder="Debit/Credit Card Number">
								</div>
								<div class="col-sm-6">
									<div class="input-group">
										<input type="text" class="form-control" value="Dec" placeholder="Number" aria-describedby="basic-addon1">
										<span class="input-group-addon" id="basic-addon1">v</span>
									</div>
								</div>	
								<div class="col-sm-6">
									<div class="input-group">
										<input type="text" class="form-control" value="2016" placeholder="Year" aria-describedby="basic-addon1">
										<span class="input-group-addon" id="basic-addon1">v</span>
									</div>
								</div>
								<div class="col-sm-12">
									<input type="text" class="form-control" value="777" name="card-number" id="card-number" placeholder="CVV">
								</div>
								<div class="checkbox">
									<label>
										&nbsp;&nbsp;&nbsp;<input type="checkbox"> I agree.
									</label>
								</div>
								<button class="btn btn-lg btn-warning btn-block" rel="tooltip" role="button" data-toggle="modal" data-target="#myModal">Pay!!</a>
							</div>
						</div>
						<div class="col-sm-4">
							<h3 class="text-danger">PayPal</h3>
							<img src="../images/payment/paypal.jpg"></img>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<button class="btn btn-lg btn-warning btn-block" rel="tooltip" role="button" data-toggle="modal" data-target="#myModal">Pay!!</a>
						</div>
						<div class="col-sm-4">
							<h3 class="text-danger">Bio-metric OR NFC</h3>
							<div class="col-sm-12">
							<table style="width:100%">
							  <tr>
								<td><i class="fa fa-eye fa-4x" aria-hidden="true"></i></td>
								<td><i class="fa fa-hand-o-up  fa-4x" aria-hidden="true"></i></td>
								<td><i class="fa fa-mobile  fa-5x" aria-hidden="true"></i></td>
							  </tr>
							</table>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							</div>
							<button class="btn btn-lg btn-warning btn-block" rel="tooltip" role="button" data-toggle="modal" data-target="#myModal">Pay!!</a>
						</div>
						<?php
							}
							else
							{
								echo '<h3 class="text-danger">Oops, Looks like something went wrong!!</h3>';
								echo '<p>We apologize for inconvenience!!</p>';
								echo '<p>Please continue browsing </p><a class="btn btn-lg btn-warning" href="buy.home.php">Buy!!</a>';
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	  <!-- FOOTER -->
	<div class="container-fluid">
      <footer>
		<hr class="featurette-divider">
		<div class="col-sm-offset-1 col-sm-10 text-xs-center">
			<h2><i class="fa fa-scribd" aria-hidden="true"></i><span class="logo">ellHub.com</span></h2>
			<table width="90%" style="margin:auto">
				<tr class="text-xs-center">
					<td><a class="disabled" data-toggle="tooltip" title="Coming Soon!!">About Us</a></td>
					<td><a class="disabled" data-toggle="tooltip" title="Coming Soon!!">Careers</a></td>
					<td><a class="disabled" data-toggle="tooltip" title="Coming Soon!!">FAQ</a></td>
					<td><a class="disabled" data-toggle="tooltip" title="Coming Soon!!">Helpline</a></td>
					<td><a class="disabled" data-toggle="tooltip" title="Coming Soon!!">Contact Us</a></td>
					<td><a class="disabled" data-toggle="tooltip" title="Coming Soon!!">Privacy</a></td>
					<td><a class="disabled" data-toggle="tooltip" title="Coming Soon!!">Terms</a></td>
				</tr>
			</table>
			<br/>
			<table width="50%" style="margin:auto">
				<tr>
					<td><a class="disabled text-warning" data-toggle="tooltip" title="Google+ Coming Soon!!"><i class="fa fa-2x fa-google-plus-square" aria-hidden="true"></i></a></td>
					<td><a class="disabled text-primary" data-toggle="tooltip" title="Facebook Coming Soon!!"><i class="fa fa-2x fa-facebook-official" aria-hidden="true"></i></a></td>
					<td><a class="disabled text-info" data-toggle="tooltip" title="Twitter Coming Soon!!"><i class="fa fa-2x fa-twitter-square" aria-hidden="true"></i></a></td>
					<td><a class="disabled text-danger" data-toggle="tooltip" title="Email Coming Soon!!"><i class="fa fa-2x fa-envelope" aria-hidden="true"></i></a></td>
				</tr>
			</table>
			<br/>
			<p><strong>&copy; 2016 Company, Inc.</strong></p>
		</div>
      </footer>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
	<script src="../js/jquery-ui.js"></script>
	<script type="text/javascript">
		function autopopulate(txt)
		{
			$("#searchcategory").val(txt);
		}
	</script>
	<?php
	if (isset($_REQUEST['opencart']))
	{
		$opencart = $_GET["opencart"];
		if($opencart)
		{
			echo '<script type="text/javascript">';
			echo '	$(window).load(function(){';
			echo '		$("#myModal").modal("show");';
			echo '	});';
			echo '</script>';
		}
	}
	?>
  </body>
</html>
