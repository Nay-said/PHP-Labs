<?php
$result = null;
error_reporting(0);
include('database.php');
if($_POST['key']){
    $key = $_POST['key'];
    $con = mysqli_connect("localhost",$username,$password,$database);

    $query ="select * from users where name like '%$key%' or surname like '%$key%'";
    $result = mysqli_query($con,$query);
}

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Address Book</title>
</head>
<body>
    <table border="4" style='display:<?php echo $_POST['key']==null? "none" : "block" ?>'>
        <tr>
            <th>
                id
            </th>
            <th>
                surname
            </th>
            <th>
                name
            </th>
            <th>
                nickname
            </th>
            <th>
                address
            </th>
            <th>
                number
            </th>
            <th>
                email
            </th>
            <th>
                info
            </th>
        </tr>
        <?php
        while($row=mysqli_fetch_array($result)){
            print "<tr><td> {$row['id']}</td> <td>{$row['surname']}</td> <td>{$row['name']}</td><td>{$row['nickname']}</td><td>{$row['address']}</td><td>{$row['number']} </td> <td> {$row['email']}</td><td>{$row['info']}</td></tr>";
        }
        ?>
    </table>

    <form action="search.php" method="post">
        Name or surname: <br /><input type="text" name="key" /><br />
        <br /><input type="submit" name="action" value="search">
    </form>

    <a href="index.php">Main Menu</a>
</body>
</html>
