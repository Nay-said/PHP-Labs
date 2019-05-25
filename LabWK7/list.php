<!DOCTYPE HTML>
<html>
<head>
    <title>Address Book</title>
</head>
<body>
    <table border="3">
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

        error_reporting(0);
        include('database.php');
        $con = mysqli_connect("localhost",$username,$password,$database);

        $query ="select * from users";
        $result = mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result)){
            print "<tr><td> {$row['id']}</td> <td>{$row['surname']}</td> <td>{$row['name']}</td><td>{$row['nickname']}</td><td>{$row['address']}</td><td>{$row['number']} </td> <td> {$row['email']}</td><td>{$row['info']}</td></tr>";
        }
        ?>
    </table>

    <br /><br />
    <a href="search.php">search</a> <br/><br/>
    <a href="add.php">add</a> <br/><br/>
    <a href="delete.php">delete</a> <br/><br/>
    <a href="index.php">Main Menu</a> <br/><br/>
</body>
</html>






















