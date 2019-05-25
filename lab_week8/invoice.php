<html>
<head>
    <title>Shopping Cart</title>
</head>
<body>
</body>
<?php 
        include("includes/db.php");
        include("includes/functions.php");
		var_dump($_SESSION['cart']);
		var_dump($_REQUEST['name']);
		var_dump($_REQUEST['address']);
		var_dump($_REQUEST['phone']);
		var_dump($_REQUEST['email']);
		//$result=mysqli_query($conn,"select * from products")or die("select * from products"."<br/><br/>" .mysqli_error());

?>

       <h1>
			Thank you 
	   </h1>
	   <div>
		
	   </div>
  

</html>