<?php
error_reporting(0);
include('database.php');
if($_POST['action']){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $nickname = $_POST['nickname'];
    $address = $_POST['address'];
    $numbers = $_POST['numbers'];
    $email = $_POST['email'];
    $info = $_POST['info'];
    $con = mysqli_connect("localhost",$username,$password,$database);
    //mysql_select_db($con,$database) or die("unable");
    $query ="insert into users values(' ','".$name."','".$surname."','".$nickname."','".$address."','".$numbers."','".$email."','".$info."')";
    //var_dump($query);
    $result = mysqli_query($con,$query);
   // var_dump($result);
    header("Location:list.php");
}

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Address Book</title>
</head>
<body>
   <form action="add.php" method="post">
       Name:<br /> <input type="text" name="name" /><br />
       Surname:<br /> <input type="text" name="surname" /><br />
       Nickname:<br /> <input type="text" name="nickname" /><br />
       Address:<br /> <input type="text" name="address" /><br />
       Numbers:<br /> <input type="text" name="numbers" /><br />
       Email:<br /> <input type="text" name="email" /><br />
       Info:<br /> <textarea name="info" cols="15" rows="5"></textarea><br /><br />
       <input type="submit" name="action" value="Submit" />
   </form><br/>

    <a href="list.php" >List</a> <br/><br/> 
    <a href="search.php">search</a><br/><br/> 
    <a href="index.php" >Main Menu</a> 
</body>
</html>

























