<!DOCTYPE php>
<html>
    <head>
        <title>Product List</title>
    </head>
    <body>
        <?php
                include("includes/db.php");
                include("includes/functions.php");

                if(isset($_REQUEST['command']))
                {
                    if ($_REQUEST['command']=='add' && $_REQUEST['productid']>0)
                    {
                        $pid=$_REQUEST['productid'];
                        addtocart($pid,1);
						
                        header("location:shoppingcart.php");
                        exit();
                    }
                }
				
        ?>

        <script language="javascript">
            function addtocart(pid){
                document.form1.productid.value=pid;
                document.form1.command.value="add";
                document.form1.method="get";
                document.form1.submit();
            }
        </script>
        <form name="form1" method="get" action="products.php">
            <input type="hidden" name="productid" id="productid"/>
            <input type="hidden" name="command" value="add"/>
        </form>
        <div align="center">
            <h1 align="center">Product</h1>
            <table border="0" cellpadding="2px" width="600px">
                <?php
                    $result=mysqli_query($conn,"select * from products")or die("select * from products"."<br/><br/>" .mysqli_error());
                    
                    while($row=mysqli_fetch_assoc($result))
                    {
                ?>
                <tr>
                    <td><img src="<?php echo $row['picture']?>"/></td>
                    <td>
                        <b><?php echo $row['name']?></b><br/>
                        <?php echo $row['description']?><br/>
                        <big style="color:green"><?php echo $row['price']?></big><br/><br/>
                        <input type="button" value="Add to Cart" onclick="addtocart(<?php echo $row['productid']?>)"/>
                    </td>
                </tr>
               
                        <td colspan="2"><hr size="1"></td>
                    <?php }?>
                    </table>
                
        </div>
        <div align="center">
                <br>
                <a href="shoppingcart.php"><b>Your Shopping Details</b></a>
        </div>
    </body>
</html>