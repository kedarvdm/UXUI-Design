<?php
	require("../config.php");
	$searchtext=$_GET['searchtext'];
	if(!empty($searchtext))
	{
		$query = " 
			SELECT p.id, p.title, p.rating, p.price
			FROM product p inner join trending t";
			
		$resultSet = mysqli_query($db,$query);  
		if($resultSet)
		{
			while ($row = mysqli_fetch_assoc($resultSet))
			{
				echo '<div class="col-sm-3">';
				echo '	<div class="card">';
				echo '	  <img class="card-img-top" data-src="holder.js/100px180/?text=Image cap" alt="Image cap [100%x180]" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22318%22%20height%3D%22180%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3C!--%0ASource%20URL%3A%20holder.js%2F100px180%2F%3Ftext%3DImage%20cap%0ACreated%20with%20Holder.js%202.8.2.%0ALearn%20more%20at%20http%3A%2F%2Fholderjs.com%0A(c)%202012-2015%20Ivan%20Malopinsky%20-%20http%3A%2F%2Fimsky.co%0A--%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%3C!%5BCDATA%5B%23holder_1556a796370%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%5D%5D%3E%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1556a796370%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%2F%3E%3Cg%3E%3Ctext%20x%3D%22110.5%22%20y%3D%2297.2%22%3EImage%20cap%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">';
				echo '	  <div class="card-block">';
				echo '		<h4 class="card-title text-danger">'.$row[title].'</h4>';
				echo '	  </div>';
				echo '	  <ul class="list-group list-group-flush">';
				echo '		<li class="list-group-item">';
				for ($x = 0; $x < $row[rating]; $x++) {
					echo '<i class="fa fa-star" aria-hidden="true"></i>';
				} 
				echo '		</li>';
				echo '		<li class="list-group-item">$'.$row[price].'</li>';
				echo '	  </ul>';
				echo '	  <div class="card-block">';
				echo '		<a href="#" class="btn btn-warning"><i class="fa fa-cart-arrow-down fa-lg" aria-hidden="true"></i></a>';
				echo '		<a href="#" class="btn btn-warning"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>';
				echo '	  </div>';
				echo '	</div>';
				echo '</div>';
			}
		}
	}
?>

					