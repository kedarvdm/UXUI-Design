<?php
	if(isset($_SESSION))
	{
		session_destroy();
	}
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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/toolkit-inverse.css" rel="stylesheet">
	
	<link href="css/sellhub.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-inverse">
	  <i class="fa fa-scribd" aria-hidden="true"></i><span class="logo">ellHub</span>
	  <ul class="nav navbar-nav pull-xs-right">
		<li><a class="nav-item nav-link disabled" data-toggle="tooltip" title="Coming Soon!!" href="#">About Us</a></li>
	  </ul>
	</nav>

    <div class="container">
	  <!-- Three columns of text below the carousel -->
      <div class="row">
			<div class="jumbotron bg-inverse col-sm-4 col-md-offset-4 text-xs-center">
				<h3 class="text-danger">You have been logged out!!!</h3>
				<h4>Login again!!</h4>
				<h3><i class="fa fa-arrow-circle-down text-info" aria-hidden="true"></i></h3>
				<h2><a class="text-info" href="index.php"><i class="fa fa-scribd" aria-hidden="true"></i><span class="logo">ellHub.com</span></a></h2>
			</div>
      </div><!-- /.row -->
	  </div><!-- /.container -->

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
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
