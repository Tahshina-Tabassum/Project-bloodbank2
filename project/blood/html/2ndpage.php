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
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/2nd page.css">
</head>
<body>
    
    <div class="content">
    <h1>2nd page</h1>
    <p>
        blah blah blah
    </p>
    <div class="button">
        
       <div><button type="button" class="btn1">urgent </button></div>
        
        <div><button type="button" class="btn2">need blood</button></div>
       
        <div><button type="button" class="btn3">donate blood </button></div>

    </div>
</body>
</html>