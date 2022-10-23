<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type='text/css' href="request.css">
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
        <div class="request">
            <h4>Requests For blood</h4>
        </div>
        </div>
        <?php
           $server="bloodios.com";
       $username="bloodios";
$password="SXd).4hbT9kJ16";  
$database="bloodios_bloodios";  
$con = mysqli_connect($server,$username,$password,$database);

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $sql="SELECT * FROM `blood_request` WHERE statuss=1;";
    $res=mysqli_query($con,$sql);
    $count=mysqli_num_rows($res);
    if($count==0)
    {
        echo '<script> alert("NO BLOOD REQUEST");</script>';
        echo '<script> location.href="admin_profile.php";</script>';
    }
    else 
    {
        while($rows=mysqli_fetch_assoc($res))
        {
         $username=$rows['username'];
         $sql2="SELECT * FROM `donar` where username='$username';";
         $res2=mysqli_query($con,$sql2);
         $rows2=mysqli_fetch_assoc($res2);
         $name=$rows2['name'];
         $email=$rows2['email'];
         $phone_number=$rows2['phone_number'];
         $image=$rows2['image'];
         $blood_group=$rows['blood_group'];
         $hospital=$rows['hospital_name'];
         $date=$rows['recieve_date'];
         $time=$rows['recieve_time'];
         ?>




    

        <div class="container">
          <div class="card-body">
                <div class="row">
                          <div class="col-md-4">
          
                              <img src="<?php echo $image;?>" alt=""height=170 width=170>
                          
                          
                            </div>
                          

              
                          <div class="col-md-8">

                             <h6>Name : <?php echo $name;?></h6>
                             <h6>Hospital Name : <?php echo $hospital;?></h6>
                             <h6>Email: <?php echo $email;?></h6>
                             <h6>Phone No: <?php echo $phone_number;?></h6>
                             <h6>Blood Group Needed : <?php echo $blood_group;?></h6>
                             <h6>Blood Recieve Date: <?php echo $date;?></h6>
                             <h6>Blood Recieve Time: <?php echo $time;?></h6>
                           
                                    
                        </div>
                      </div>
                    </div>
                  </div>

<?php
        }
    }
}

