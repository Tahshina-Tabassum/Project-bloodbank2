<?php
$server="localhost";
$username="root";
$password="";    
$con = mysqli_connect($server,$username,$password);
$username=$_POST['userid'];
$password=$_POST['pass'];
$sql="SELECT * FROM `blood_group`.`blood_donation` WHERE username='$username' and password='$password'";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0) {
    // output data of each row
    
      echo "Name: " . $result["name"]. " - Regitration Number: " . $result["registration_number"].  "<br>";
    
  } else {
    echo "0 results";
  }
  $con->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>