<?php
	require("../config.php");
	$categoryId=0;
	if(isset($_GET["categoryId"]))
	{
		$categoryId=$_GET["categoryId"];
	}
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
		<li><a type="button" class="nav-item nav-link" data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a></li>
	  </ul>
	</nav>
	
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog bg-inverse" role="document">
		<div class="modal-content">
		  <div class="modal-header bg-inverse">
			<div class="col-sm-9">
				<h4 class="modal-title text-warning" id="myModalLabel">Your Shopping Cart</h4>
			</div>
			<div class="col-sm-3">
				<button type="button" class="btn btn-lg btn-warning" data-dismiss="modal" aria-label="Close">Continue Shopping
				  <span aria-hidden="true"><i class="fa fa-times text-danger" aria-hidden="true"></i></span>
				</button>
			</div>
		  </div>
		  <div class="modal-body bg-inverse">
			<?php
				if(isset($_SESSION["products"]))
				{
					$total = 0;
					echo '<div class="jumbotron bg-inverse">';
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
					echo '<p><strong>Total : '.$currency.$total.'</strong> </p>';
					echo '<div>';
					echo '<p><a href="buy.checkout.php" class="btn btn-lg btn-warning btn-block" rel="tooltip" role="button">Check-out!</a></p>';
					echo '</div>';
				}else{
					echo 'Your Cart is empty';
				}
			?>
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
				<div class="row bottomline">
					<form action="buy.browse.php" method="get">
						<div class="col-sm-4 form-group">
							<div class="input-group">
							  <div class="input-group-btn">
								<button type="button" class="btn btn-warning btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-filter" aria-hidden="true"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right">
									<?php
											$query = " 
											SELECT 
												id, name
											FROM categories ";
											
											$resultSet = $db->query($query, MYSQLI_STORE_RESULT);
											while ($row = $resultSet->fetch_assoc())
											{
												echo '<li><button type="button" class="dropdown-item" name="'.$row['name'].'" onclick="autopopulate(this.name)">'.$row['name'].'</button></li>';
											}
									?>								
								</div>
							  </div>
							  <input type="text" id="searchcategory" name="searchedcategory" class="form-control autocomplete" aria-label="Text input" placeholder="Search Category">
							</div>
						</div>
					
						<div class="col-sm-8  form-group">
							<div class="input-group">
							  <input type="text" id="searchproduct" name="searchedproduct" class="form-control autocomplete" aria-label="Text input" placeholder="Search Product" required>
							  <div class="input-group-btn">
								<button type="submit" class="btn btn-warning btn-lg" aria-haspopup="true" aria-expanded="false">
								  <i class="fa fa-search fa-fw" aria-hidden="true"></i>
								</button>
							  </div>
							</div>
						</div>
					</form>
				</div>
				<h3 class="">Top Brands</h3>
				<div class="row bottomline topline">
				<?php
						$query = " 
						SELECT p.id as id, p.title as title, p.rating as rating, p.price as price, pi.imagepath as imagepath
						FROM trending t inner join product p
						inner join product_images pi on pi.productid= t.productid
						WHERE t.productid=p.id;";
						
					$resultSet = mysqli_query($db,$query);  
					if($resultSet)
					{
						while ($row = mysqli_fetch_assoc($resultSet))
						{
							echo '<div class="col-sm-3">';
							echo '	<div class="card">';
							echo '	  <a href="buy.viewproduct.php?productid='.$row['id'].'"><img class="card-img-top" src="'.$row['imagepath'].'" style="height: 180px; width: 100%; display: block;" data-holder-rendered="true"></a>';
							echo '	  <div class="card-block">';
							echo '		<h4 class="card-title text-danger">'.$row['title'].'</h4>';
							echo '	  </div>';
							echo '	  <ul class="list-group list-group-flush">';
							echo '		<li class="list-group-item">';
							for ($x = 0; $x < $row['rating']; $x++) {
								echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
							} 
							echo '		</li>';
							echo '		<li class="list-group-item"><p class="text-danger">$'.$row['price'].'</p></li>';
							echo '	  </ul>';
							echo '	  <div class="card-block">';
							echo '		<a href="cart_update.php?type=add&productid='.$row['id'].'&return_url='.$current_url.'" class="btn btn-warning" data-toggle="tooltip" title="Add To Cart"><i class="fa fa-cart-arrow-down fa-lg" aria-hidden="true"></i></a>';
							echo '		<a href="buy.viewproduct.php?productid='.$row['id'].'" class="btn btn-warning"  data-toggle="tooltip" title="View Product"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>';
							echo '	  </div>';
							echo '	</div>';
							echo '</div>';
						}
					}
				?>
				</div>
				<h3>Top Trends</h3>
				<div class="row topline bottomline">
					<?php
						$query = " 
						SELECT p.id as id, p.title as title, p.rating as rating, p.price as price, pi.imagepath as imagepath
						FROM popular t inner join product p
						inner join product_images pi on pi.productid= t.productid
						WHERE t.productid=p.id;";
						
					$resultSet = mysqli_query($db,$query);  
					if($resultSet)
					{
						while ($row = mysqli_fetch_assoc($resultSet))
						{
							echo '<div class="col-sm-3">';
							echo '	<div class="card">';
							echo '	  <a href="buy.viewproduct.php?productid='.$row['id'].'"><img class="card-img-top" src="'.$row['imagepath'].'" style="height: 180px; width: 100%; display: block;" data-holder-rendered="true"></a>';
							echo '	  <div class="card-block">';
							echo '		<h4 class="card-title text-danger">'.$row['title'].'</h4>';
							echo '	  </div>';
							echo '	  <ul class="list-group list-group-flush">';
							echo '		<li class="list-group-item">';
							for ($x = 0; $x < $row['rating']; $x++) {
								echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
							} 
							echo '		</li>';
							echo '		<li class="list-group-item"><p class="text-danger">$'.$row['price'].'</p></li>';
							echo '	  </ul>';
							echo '	  <div class="card-block">';
							echo '		<a href="cart_update.php?type=add&productid='.$row['id'].'&return_url='.$current_url.'" class="btn btn-warning" data-toggle="tooltip" title="Add To Cart"><i class="fa fa-cart-arrow-down fa-lg" aria-hidden="true"></i></a>';
							echo '		<a href="buy.viewproduct.php?productid='.$row['id'].'" class="btn btn-warning"   data-toggle="tooltip" title="View Product"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>';
							echo '	  </div>';
							echo '	</div>';
							echo '</div>';
						}
					}
				?>
				</div>
			</div>
			<div class="col-sm-2 text-xs-center">
				<ul class="nav nav-pills nav-stacked">
				  <li class="nav-item"><h3><span class="text-warning">Top Categories<span></h3></li>
				  <?php
						$query = " 
						SELECT 
							id, name
						FROM categories
						LIMIT 5";
						
						$resultSet = $db->query($query, MYSQLI_STORE_RESULT);
						while ($row = $resultSet->fetch_assoc())
						{
							echo '<li class="nav-item">';
							echo '	<a class="nav-link" href="buy.browse.php?searchedproduct=&searchedcategory='.$row["name"].'">'.$row["name"].'</a>';
							echo '</li>';
						}
				?>
				</ul>
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
	<script>
		$(document).ready(function(e){
			$("#searchcategory").keyup(function (e) {
				var x = $(this).val();
				$.ajax({
					type:'GET',
					url:'../search/search.categories.php',
					data: 'searchtext='+x,
					success: function(response){
						var json_obj = $.parseJSON(response);//parse JSON
						var retrieved_data = new Array();
						for (var i in json_obj) 
						{
							retrieved_data.push(json_obj[i].name);
						}
						
						$("#searchcategory").autocomplete({
							source: retrieved_data
						});
					}
				});
			});
		});
		
		$(document).ready(function(e){
			$("#searchproduct").keyup(function (e) {
					var x = $(this).val();
					$.ajax({
						type:'GET',
						url:'../search/search.producttype.php',
						data: 'searchtext='+x,
						success: function(response){
							var json_obj = $.parseJSON(response);//parse JSON
							var retrieved_data = new Array();
							for (var i in json_obj) 
							{
								retrieved_data.push(json_obj[i].type);
							}
							$("#searchproduct").autocomplete({
								source: retrieved_data
							});
						}
					});
				});
			});
	</script>
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
