<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="profile.css">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile </title>
        <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="preconnect" href="https://fonts.gstatic.com">

            <link rel="stylesheet" type='text/css' href="profile.css">
    
    </head>
<body>
    <div class="container">
        <nav>
            <!-- logo -->
            <h2 class="logo"><img width="100px" height="110px" src="RokterEmoji_2.png">BLOOD<span>IOS </span></h2>

            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="index.html"><button class="btn">Log Out</button></a></li>
            </ul>
            
        </nav>
        <form  method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center sidebar">
                    <img src="<?php echo $_SESSION["image"];?>" class="rounded-circle" >
                    <input type="file" name="file" id="file" value="<?php echo $_SESSION["image"];?>">
                    <div class="mt-3">
                        <h3> <?php echo $_SESSION["name"];?></h3>
                        
                    </div>
                </div>
                <div class="col-md-8 mt-1">
                    <div class="card-mb-3 content">
                        <h1 class="m-3 pt-3">About</h1>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h4>Full Name</h4>
                                </div>
                                <div class="col-md-9 text-secondary">
                                <input type="text" name="name" value="<?php echo $_SESSION["name"];?>">
                                   
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h4>Department Name</h4>
                                </div>
                                <div class="col-md-9 text-secondary">
                                <input type="text" name="department" value="<?php echo $_SESSION["department_name"];?>">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h4>E-mail</h4>
                                </div>
                                <div class="col-md-9 text-secondary">
                                <input type="text" name="email" value="<?php echo $_SESSION["email"];?>">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h4>Blood group</h4>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <select name="blood_group" placeholder="none">
        <option value="<?php echo $_SESSION["blood_group"];?>"> <?php echo $_SESSION["blood_group"];?></option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
                        </select>
                               
</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h4>Phone number</h4>
                                </div>
                                <div class="col-md-9 text-secondary">
                                <input type="text" name="phone_number" value=" <?php echo $_SESSION["phone_number"];?>">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h4>Address</h4>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    savar,dhaka
                                </div>
                            </div>

                        </div>
                    </div>
                    <hr>
                
                    <div class="card mb-3 content">
                        <h1 class="m-3">blood donation information</h1>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h4>last time of donation </h4>
                                </div>
                                <div class="col-md-9 text-secondary">
                                <input type="date" name="last_donate" value="<?php echo $_SESSION["last_donate"];?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button>update</button>
</form>
        </div>
    </div>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
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
$username=$_SESSION["username"];
//if(!isset($_SESSION["username"]))echo '<script> alert("Username ok ");</script//>';
$password=$_SESSION["password"];
$name=$_POST['name'];
$_SESSION['name']=$name;
//$registration_number=$_POST['registration_number'];
//$roll_number=$_POST['roll_number'];
$department=$_POST['department'];
$_SESSION['department_name']=$department;
//$hall=$_POST['hall'];
//$gender=$_POST['gender'];
$phone_number=$_POST['phone_number'];
$_SESSION['phone_number']=$phone_number;
$email=$_POST['email'];
$_SESSION['email']=$email;
$date=$_POST['last_donate'];
$_SESSION['last_donate']=$date;
$blood_group=$_POST['blood_group'];
$_SESSION['blood_group']=$blood_group;
if($filename!="")
$_SESSION["image"]=$destinationfile;
//$diseases=$_POST['diseases'];

$sql="SELECT * FROM `donar` WHERE `username`='" . $_SESSION["username"] . "';";
$result=mysqli_query($con,$sql);
$row=mysqli_num_rows($result);
if($row==0)echo '<script> alert("This is username is not available ");</script>';
if($filename!=""){
$sql="UPDATE  `donar` set `name`='$name',`department_name`='$department',`phone_number`='$phone_number',`last_donate`='$date',`email`='$email',`image`='$destinationfile',`blood_group`='$blood_group' WHERE username='$username'";
 $res=mysqli_query($con,$sql);
 if($res){
//echo '<script> alert("Sucessfully updated");</script>';
echo '<script> location.href= "profile.php";</script>';
}
else echo $con->error;
}
else 
{
    $sql="UPDATE  `donar` set `name`='$name',`department_name`='$department',`phone_number`='$phone_number',`last_donate`='$date',`email`='$email',`blood_group`='$blood_group' WHERE username='$username'";
 $res=mysqli_query($con,$sql);
 //echo '<script> alert("This is username is not available ");</script>';
 if($res){
//echo '<script> alert("Sucessfully updated");</script>';
echo '<script> location.href= "profile.php";</script>';
}
else echo $con->error;
}
 

}


?>