<?php
error_reporting(0);
include('database.php');
$con = mysqli_connect("localhost",$username,$password,$database);

$id = $_POST["id"];

$query ="delete from users where id=".$id;
$result = mysqli_query($con,$query);
if($_POST['action']){
    header("Location:list.php");
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Address Book</title>
</head>
<body>
<center>
    <form action="delete.php" method="post">
        id :<br /> <input type="text" name="id" />
        <input type="submit" name="action" value="submit"/>
    </form>

    <a href="index.php" >go back to Index</a>
</center>
</body>
</html>

























