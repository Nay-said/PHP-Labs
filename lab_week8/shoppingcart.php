<html>
<head>
    <title>Shopping Cart</title>
</head>
<body>
</body>
<?php 
        include("includes/db.php");
        include("includes/functions.php");

        if(isset($_REQUEST['command']))
        {
            $command=$_REQUEST['command'];
            if($command=='delete'&& $_REQUEST['pid']>0)
            {
                remove_product($_REQUEST['pid']);
            }
            else if($command=='clear'){
  
                unset($_SESSION['cart']);
            }
            else if($command=='update')
            {
                $max=count($_SESSION['cart']);
                for($i=0;$i<$max;$i++){
                    $pid=$_SESSION['cart'][$i]['productid'];
                    $q=intval($_REQUEST['product'.$pid]);
                    if($q>0 && $q<=999)
                    {
                        $_SESSION['cart'][$i]['qty']=$q;
                    }
                }
            }
        }
?>
        
        <script language="javascript">
            function del(pid)
            {
               if(confirm("Do you really mean to delete this item?"))
               {
                    document.form1.command.value="delete";
                    document.form1.pid.value=pid;
                    document.form1.submit();
               }     
            }
            function clear_cart()
            {
                if(confirm("This will empty your shopping cart, continue?"))
                {
                    document.form1.command.value="clear";
                    document.form1.submit();
                }
            }
            function update_cart()
            {
                document.form1.command.value="update";
                document.form1.submit();
            }
        </script>
       
        <form name="form1" method="post">
            <input type="hidden" name="pid"/>
            <input type="hidden" name="command"/>
            <div style="padding-bottom: 10px">
               <h1 align="center">Your Shopping Cart</h1> 
               <input type="button" value="Continue Shopping" onclick="window.location='products.php'"/>
            </div>
            <table border="0" cellpadding="5px" cellspacing="1px" style="font-family:Verdana,Geneva,sans-serif; font-size:11px; background-color:#E1E1E1 " width="100%">
                <?php 
                    if(isset($_SESSION["cart"])&&is_array($_SESSION["cart"]))
                    {
                        echo'
                            <tr bgcolor="#FFFFFF" style="font-weight:bold">
                            <td>Serial</td>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Qty</td>
                            <td>Amount</td>
                            <td>Options</td>
                        </tr>';

                        $max=count($_SESSION['cart']);
						//var_dump($max);
                        $sum=0;
                        for($i=0;$i<$max;$i++)
                        {
                            $pid=$_SESSION['cart'][$i]["productid"];
							//var_dump($pid);
                            $q=$_SESSION["cart"][$i]["qty"];
                            $result=mysqli_query($conn,"select name from products where productid=$pid")or die("select name from products where productid=$pid"."<br/><br/>".mysqli_error());
                            $row=mysqli_fetch_array($result);
							$pname = $row["name"];
							if($q==0){
								continue;
							}
							$result=mysqli_query($conn,"select price from products where productid=$pid")or die("select name from products where productid=$pid"."<br/><br/>".mysqli_error());
							$row=mysqli_fetch_assoc($result);

                            $product_price=$row['price'];
                            $amount=$product_price*$q;
                            $sum+=$amount;
                            ?>
                            <tr bgcolor="#FFFFFF">
                                <td><?php echo $i+1 ?></td>
                                <td><?php echo $pname ?></td>
                                <td><?php echo $product_price?></td>
                                <td><input type="text" name="product<?php echo $pid ?>"value="<?php echo $q ?>"maxlength="3" size="2"/> </td>
                                <td>$<?php echo $amount;?></td>
                                <td><a href="javascript:del(<?php echo $pid ?>)">Remove</a> </td>
                            </tr>
                            <?php 
                        }
						
						$_SESSION["total_price"] = $sum;
                        ?>
                        <tr>
                            <td><b>Order Total:$<?php echo $sum;?></b></td>
                            <td colspan="5" align="right">
                                <input type="button" value="Clear Cart" onclick="clear_cart()">
                                <input type="button" value="Update Cart" onclick="update_cart()">
                                <input type="button" value="Place Order" onclick="window.location='billing.php'">
                            </td>
                        </tr>
                        <?php
                    }
                        else
                        {
                            echo"
                                <tr bgcolor='#FFFFFF'>
                                <td>There are no items in your shopping cart!</td>
                                </tr>";
                        }
                        ?>

            </table>
        </form>

</html>