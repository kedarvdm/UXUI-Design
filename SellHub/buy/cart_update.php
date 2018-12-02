<?php
require("../config.php");

//empty cart by distroying current session
if(isset($_GET["emptycart"]) && $_GET["emptycart"]==1)
{
	$return_url = base64_decode($_GET["return_url"]); //return url
	if(isset($_SESSION["products"]))
	{
		unset($_SESSION["products"]);
	}
	header('Location:'.$return_url);
}

//add item in shopping cart
if(isset($_GET["type"]) && $_GET["type"]=='add')
{
	$product_code 	= filter_var($_GET["productid"], FILTER_SANITIZE_STRING); //product code
	var_dump($product_code);
	if($_GET["return_url"])
	{
		$return_url 	= base64_decode($_GET["return_url"]); //return url
		if (strpos($return_url, '?') == FALSE)
		{
			$return_url = $return_url . "?opencart=true";
		}
		else
		{
			$return_url = $return_url . "&opencart=true";
		}
		
	}
	else
	{
		$return_url 	= "buy.home.php"; //return url
	}
	
	$query = "SELECT id,title,price FROM product WHERE id=".$product_code." LIMIT 1;";
	var_dump($query);
	$results = $db->query($query);
	$obj = $results->fetch_object();
	
	if ($results) { //we have the product info 
		
		//prepare array for the session variable
		$new_product = array(array('user'=>$_SESSION['user'],'name'=>$obj->title, 'code'=>$product_code, 'price'=>$obj->price));
		
		if(isset($_SESSION["products"])) //if we have the session
		{
			$found = false; //set found item to false
			
			foreach ($_SESSION["products"] as $cart_itm) //loop through session array
			{
				if($cart_itm['user']==$_SESSION['user'])
				{
					if($cart_itm["code"] == $product_code){ //the item exist in array
						$found = true;
					}else{
						//item doesn't exist in the list, just retrive old info and prepare array for session var
						$product[] = array('user'=>$_SESSION['user'],'name'=>$cart_itm["name"], 'code'=>$cart_itm["code"],'price'=>$cart_itm["price"]);
					}
				}
			}
			
			if($found == false) //we didn't find item in array
			{
				//add new user item in array
				$_SESSION["products"] = array_merge($product, $new_product);
			}else{
				//found user item in array list, and increased the quantity
				//$_SESSION["products"] = $product;
			}
			
		}else{
			//create a new session var if does not exist
			$_SESSION["products"] = $new_product;
		}
		
	}
	
	//redirect back to original page
	header('Location:'.$return_url);
}

//remove item from shopping cart
if(isset($_GET["removep"]) && isset($_GET["return_url"]) && isset($_SESSION["products"]))
{
	$product_code 	= $_GET["removep"]; //get the product code to remove
	$return_url 	= base64_decode($_GET["return_url"]); //get return url

	
	foreach ($_SESSION["products"] as $cart_itm) //loop through session array var
	{
		if($cart_itm["code"]!=$product_code){ //item does,t exist in the list
			$product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"],'price'=>$cart_itm["price"]);
		}
		
		//create a new product list for cart
		$_SESSION["products"] = $product;
	}
	
	//redirect back to original page
	header('Location:'.$return_url);
}
?>