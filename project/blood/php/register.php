<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Welcome to our website</title>
</head>
<body>
  
    <nav>
        <!-- logo -->
        <h2 class="logo"><img width="100px" height="110px" src="../project/blood/img/RokterEmoji_2.png">Blood<span>iOS</span></h2>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="#about">About</a></li>
        </ul>

    </nav>
    <div class="container">
     <h1>Welcome to Blood Donation Camp</h1>
     <p>Enter your details for registration</p>
     <form  method="post" enctype="multipart/form-data">
        <input type="text" name="username" id="username" placeholder="Enter your username" required>
        <input type="password" name="password" id="password" placeholder="Enter your password" required>
        <input type="text" name="name" id="name" placeholder="Enter your name" required>
        <input type="text" name="registration_number" id="registration_number" placeholder="Enter your registration number" required>
        <input type="text" name="roll_number" id="roll_number" placeholder="Enter your roll number" required>
        <input type="text" name="department" id="department" placeholder="Enter your department" required>
        <input type="text" name="hall" id="hall" placeholder="Enter your hall name" required>
        <input type="text" name="gender" id="gender" placeholder="Enter your gender" required>
        <input type="text" name="phone_number" id="phone_number" placeholder="Enter your phone number" required>
        <input type="email" name="email" id="email" placeholder="Enter your email" required>
        <input name="date" id="date" placeholder="Last donate date" onfocus="(this.type='date')" required>
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
     <input type="file" name="file" id="file" required>
        <textarea name="diseases" id="diseases" cols="30" rows="10" placeholder="Enter if you have any diseases(if not say none)"></textarea>
        <button class="btn">Register</button>
     </form>
    </div>
    <footer>
        <p><a class="sample-page" href="bloodios.com">Blood<span>ios</span></a></p>
        <p>Blood for life. Donate blood, by providing us your information.<br>Your simple help can save a life.</p>
        <div class="social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-dribbble"></i></a>
        </div>
        <p class="end">CopyRight By Bloodios</p>
    </footer>
</body>
</html>
<?php
if(isset($_POST['name'])){
$server="bloodios.com";
$username="bloodios";
$password="SXd).4hbT9kJ16";  
$database="bloodios_bloodios";  
$con = mysqli_connect($server,$username,$password,$database);
if(!$con)echo $con->error();
 $files=$_FILES['file'];
 $filename=$files['name'];
 $fileerror=$files['error'];
 $filetmp=$files['tmp_name'];
 $fileext=explode('.',$filename);
 $filecheck=strtolower(end($fileext));
 $fileextstored=array('jpg','png','jpeg');
 if(in_array($filecheck,$fileextstored))
 {
     $destinationfile='upload/'.$filename;
     move_uploaded_file($filetmp,$destinationfile);
 }
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
$sql="SELECT * FROM `donar` WHERE username='$username'";
$result=mysqli_query($con,$sql);
$row=mysqli_num_rows($result);
if($row!=0)echo '<script> alert("This is username is not available ");</script>';
else {


$sql="INSERT INTO `donar`(`username`, `password`, `name`, `department_name`, `registration_number`, `roll_number`, `hall_name`, `gender`, `phone_number`, `email`, `last_donate`, `diseases`,`blood_group`,`image`) VALUES ('$username','$password','$name','$department','$registration_number','$roll_number','$hall','$gender','$phone_number','$email','$date','$diseases','$blood_group','$destinationfile');";
 $res=mysqli_query($con,$sql);
 if($res){
echo '<script> alert("Sucessfully inserted");</script>';
echo '<script> location.href= "user.php";</script>';
}
else echo $con->error;

}
$con->close();
}
?>
