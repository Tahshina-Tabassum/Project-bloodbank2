<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="patientdetails.css">
</head>

<body>
    <!-- nav bar -->
    <nav>
        <!-- logo -->
        <h2 class="logo"><img width="100px" height="110px" src="RokterEmoji_2.png">Blood<span>iOs</span></h2>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about">About</a></li>
        </ul>
    </nav>
    <div class="container1">
        <div class="row">
            <div class="col col1">
<form method="post">
                <h1 id="tform">Patient<span> Details</span></h1>
                <h3>Hospital Name<span>*</span></h3>
                <div>
                    <input class="first-last" type="text" name="hospital">
                    <br>
                    <br>
                </div>
                <h3>Blood Group<span>*</span></h3>
                <select class="custom-select blood-group" name="blood_group">
                    <option selected>Choose you blood group</option>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="O+">O+</option>
                    <option value="AB+">AB+</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="O-">O-</option>
                    <option value="AB-">AB-</option>
                </select>
                <br><br>
                <h3>Blood Receive Date<span>*</span></h3>
                <input class="date" type="date" name="date"><br><br>
                
                <h3>Blood Receive Date<span>*</span></h3>
                <input class="date" type="time" name="time"><br><br>
                <button class="btn">Reqest</button>
                <br>
                <br>
</form>

            </div>
            <!-- <div class="col">
                <div class="col2-padding">
                    We are trying our best to help people. We are the biggest blood supplier in the country.
                    In time of needs we come forward to fulfill your necessity.
                    <span>"Bloodios => Blood is yours"</span>
                </div>
                <h5 class="col2-writing">
                    <span>Recent Activities</span><br>
                    <a class="sample-page" href="index.html">Home Page</a><br>
                </h5>
            </div> -->
        </div>


    </div>
    <!-- <div class="map">
        <h1 id="map1">Ma<span>p</span><br>
            <h5>Lo<span>cat</span>ion</h5>
        </h1>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.232220507069!2d90.26766501478681!3d23.88138278452498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755e998704cc083%3A0x211b3c0bca672270!2sIIT%2C%20Math%20%26%20Statistics%2C%20IIT%20Bldg%20Rd%2C%20Savar%20Union!5e0!3m2!1sen!2sbd!4v1660997987257!5m2!1sen!2sbd"
            width="90%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div> -->

    <footer>
        <p><a class="sample-page" href="bloodios.com">Blood<span>ios</span></a></p>
        <p>Blood for life. Donate blood, by providing us your information.<br>Your simple help can save a life.</p>
        <div class="social">
            <a href="https://www.facebook.com/profile.php?id=100011125477463"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-dribbble"></i></a>
        </div>
        <p class="end">CopyRight By Bloodios</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>

</body>


</html>
<?php
$server="bloodios.com";
$username="bloodios";
$password="SXd).4hbT9kJ16";  
$database="bloodios_bloodios";  
$con = mysqli_connect($server,$username,$password,$database);

if($_SERVER["REQUEST_METHOD"] == "POST")
{
 //   header('location: profile.php');
   // echo "hi";
    $username=$_SESSION['username'];
   // $password=$_POST['password'];
    $blood_group=$_POST["blood_group"];
    $hospital=$_POST["hospital"];
    $date=$_POST["date"];
    $time=$_POST["time"];
    $sql="INSERT INTO `blood_requests`(`username`, `blood_group`, `statuss`, `hospital_name`, `recieve_date`, `recieve_time`) VALUES ('$username','$blood_group','1','$hospital','$date','$time');";
    $res=mysqli_query($con,$sql);
    if($res){
   echo '<script> alert("Sucessfully Requested");</script>';
   echo '<script> location.href= "profile.php";</script>';

   
        
    }
}
    ?>