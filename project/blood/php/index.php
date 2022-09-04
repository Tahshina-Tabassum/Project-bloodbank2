<?php
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";    
$con = mysqli_connect($server,$username,$password);
$username=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['name'];
$registration_number=$_POST['registration_number'];
$roll_number=$_POST['roll_number'];
$department=$_POST['department'];
$hall=$_POST['hall'];
$gender=$_POST['gender'];
$phone_number=$_POST['phone_number'];
$email=$_POST['email'];
$date=$_POST['date'];
$blood_group=$_POST['blood_group'];
$diseases=$_POST['diseases'];
$sql="SELECT * FROM `blood_group`.`blood_donation` WHERE username='$username'";
$result=mysqli_query($con,$sql);
$row=mysqli_num_rows($result);
if($row!=0)echo "This Username is not available . <br>";
else {
$sql="INSERT INTO `blood_group`.`blood_donation`(`username`, `password`, `name`, `registration_number`, `roll_number`, `department`, `hall_name`, `gender`, `phone_number`, `email`, `last_donate`,`blood_group`, `diseases`)
 VALUES ('$username','$password','$name','$registration_number','$roll_number','$department','$hall','$gender','$phone_number','$email','$date','$blood_group','$diseases');";
echo "Successfully Inserted";
}
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Welcome to our website</title>
</head>
<body>
  
    <div class="container">
     <h1>Welcome to Blood Donation Camp</h1>
     <p>Enter your details for registration</p>
     <form  method="post">
        <input type="text" name="username" id="username" placeholder="Enter your username">
        <input type="password" name="password" id="password" placeholder="Enter your password">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="registration_number" id="registration_number" placeholder="Enter your registration number">
        <input type="text" name="roll_number" id="roll_number" placeholder="Enter your roll number">
        <input type="text" name="department" id="department" placeholder="Enter your department">
        <input type="text" name="hall" id="hall" placeholder="Enter your hall name">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        <input type="text" name="phone_number" id="phone_number" placeholder="Enter your phone number">
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <input type="date" name="date" id="date" placeholder="Last date of blood donation">
        <label for="Blood Group">Choose your Blood Group:</label>
        <select id="blood_group" name="blood_group">
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
     </select>
        <textarea name="diseases" id="diseases" cols="30" rows="10" placeholder="Enter if you have any diseases(if not say none)"></textarea>
        <button class="btn">Register</button>
     </form>
    </div>
</body>
</html>
