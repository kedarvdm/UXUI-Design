<?php
	if(!empty($_POST)){
    ini_set('display_errors', 'On');
	error_reporting(E_ALL | E_STRICT);
	require("config.php");
	
	$submitted_username = ''; 
         
        $query = " 
            SELECT 
                id, 
                email,
				firstname,
                password                 
            FROM users 
            WHERE 
                email = ?
        ";
	
        $stmt = $db->prepare($query);
        $stmt->bind_param('s', $_POST['inputEmail']);
        $stmt->execute();
        $stmt->bind_result($id,$email,$name,$pwd);
        $row=$stmt->fetch();
        $stmt->close();
		
		
        $login_ok = false; 
        $check_password = $_POST['password'];
         
        if($check_password === $pwd){
            $login_ok = true;
        } 
         
 
        if($login_ok){ 
            unset($row['password']); 
			$_SESSION['user'] = $name;
			$_SESSION['email'] = $email;
			$_SESSION['userid'] = $id;	
			
			header("Location: sellhub.home.php"); 
			 
        } 
        else{
			$submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8'); 		
            header("Location: loginfailed.php"); 
            die("Redirecting to: loginfailed.php"); 
        } 
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
			<div class="jumbotron bg-inverse col-sm-4 col-md-offset-4">
				<div class="row text-xs-center">
					<i class="fa fa-scribd fa-3x" aria-hidden="true"></i>
					<h2 class="form-signin-heading">Please sign in</h2>
				</div>
			<form class="form-signin" method="post">
				<label for="inputEmail" class="sr-only">Email address</label>
				<input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" value="password" required>
				</br>
				<button class="btn btn-lg btn-warning btn-block" type="submit">Sign in</button>
				</br>
				<div class="text-xs-right"> 
					<a class="nav-link disabled" data-toggle="tooltip" title="Coming Soon!!">Register</a>
				</div>
			</form>
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
