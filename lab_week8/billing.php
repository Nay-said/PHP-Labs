<html>
<head>
    <title>Billing</title>
</head>
<body>
</body>
<?php 
        include("includes/db.php");
        include("includes/functions.php");

?>
        
        
		<center>
	   <h1 style="display:none" id="thank">thank you </h1>
       <h1>
			Billing Info
	   </h1>
	   <div>
		Order Total:<?php echo $_SESSION["total_price"];?>
		<br>
		<hr>
	   </div>
        
            Your name : <input type="text" name="name" id="name" /><br><br>
            Address : <input type="text" name="address" /><br><br>
			Email : <input type="text" name="email" /><br><br>
			phone : <input type="text" name="phone" /><br><br>
			
			<input type="button" value="Place Order" id="submitBtn">
			</center>
			
			<script>
			document.getElementById('submitBtn').onclick = function(){
						submit();
					}
            function submit()
            {
				//alert(1333);
				var name = document.getElementById("name").value;
                document.getElementById("thank").style.display="block";
				
				
				document.getElementById("thank").innerHTML = "Thank you " +name;
				
				return false;
            }
        </script>
</html>