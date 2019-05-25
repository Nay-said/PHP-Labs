<html>
    <head>
        <title>Data Entry</title>
</head>

<body>
    <?php
    $username="root";
    $password="";
    $database="studatabase";

    $id=$_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $bdate=$_POST['bdate'];

    $con=mysqli_connect("localhost",$username,$password);
    mysqli_select_db ($con,$database)or die("unable to select database");

	$query ="insert into studatabase values(\"$id\",\"$fname\",\"$lname\",\"$bdate\")";
	mysqli_query($con,$query);
	
    $query ="SELECT * FROM studatabase";
	
    $result= mysqli_query($con,$query);

    echo"<b><center>Database Output</center></b><br><br>";

    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $firstname=$row['fName'];
        $lastname=$row['lName'];
        $bdate=$row['bDate'];

        echo"<b>ID:$id</b><br>First Name:$firstname<br>Last Name:$lastname<br>Date of Birth:$bdate<br/><hr><br/>";
    }

    mysqli_close($con);

    echo'<b>Data sucessfully entered! All result are shown above<br><a href="studentForm.html">Main Data Entry Page</b>'
    ?>

    </body>
    </html>