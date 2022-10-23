<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin_profile.css">
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

            <link rel="stylesheet" type='text/css' href="admin_profile.css">
    
    </head>
<body>
    <div class="container">
        <nav>
            <!-- logo -->
            <h2 class="logo"><img width="100px" height="110px" src="RokterEmoji_2.png">BLOOD<span>IOS </span></h2>

            <ul>
                <li><a href="index.html">Home</a></li>
                <li><form action="POST">
                    <button class="btn-n">Log Out</button>
                    </form>
                    </li>
            </ul>
            
        </nav>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center sidebar">
                    <img src="<?php echo $_SESSION["image"];?>" class="rounded-circle" >
                    <div class="mt-3">
                        <h3> <?php echo $_SESSION["name"]?></h3>
                        <h4 class="search-text"><a href="donar_search.php">🔎Click for search</a></h4>
                        
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
                                <?php echo $_SESSION["name"]?>
                                   
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h4>Department Name</h4>
                                </div>
                                <div class="col-md-9 text-secondary">
                                <?php echo $_SESSION["department_name"]?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h4>E-mail</h4>
                                </div>
                                <div class="col-md-9 text-secondary">
                                <?php echo $_SESSION["email"]?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h4>Blood group</h4>
                                </div>
                                <div class="col-md-9 text-secondary">
                                <?php echo $_SESSION["blood_group"]?>
</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h4>Phone number</h4>
                                </div>
                                <div class="col-md-9 text-secondary">
                                <?php echo $_SESSION["phone_number"]?>
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
                                     <a href="update.php">
                                         <button class="btn">Update your information</button></a>
                                    <h4>last time of donation </h4>
                                </div>
                                <div class="col-md-9 text-secondary">
                                <?php echo $_SESSION["last_donate"]?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="req">
            <button class="btn">Accept Request</button></a>
            <button class="btn">Decline Request</button></a>

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
    session_destroy();
   echo '<script> location.href= "index.html";</script>';
}
?> 