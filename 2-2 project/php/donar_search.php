<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="doner_search.css">
</head>
<body>  

<?php
  
$server="bloodios.com";
$username="bloodios";
$password="SXd).4hbT9kJ16";  
$database="bloodios_bloodios";  
$con = mysqli_connect($server,$username,$password,$database);
//echo '<script>alert("Wait for donors Aproval")</script>';
if(!$con)echo $con->error();
//echo '<script>alert("Wait for donors Aproval")</script>';
$username=$_SESSION['username'];
$date_now = date("Y-m-d");
$sql="SELECT * FROM `blood_requests` WHERE  username='$username' and recieve_date>='$date_now';";
$res=mysqli_query($con,$sql);
$count=mysqli_num_rows($res);
if($count==0)
{
     echo '<script>alert("You have no request pending")</script>';
}
if($count>0){
while($rows=mysqli_fetch_assoc($res))
{
  ?>
  <h4> <font color="White">For <?php echo $rows['recieve_date']; ?> : </font></h4><br>
  <?php
$request_id=$rows['request_id'];
$sql1="SELECT * FROM `Acceptance` WHERE  request_id='$request_id';";
    $res1=mysqli_query($con,$sql1);
    
      $count1=mysqli_num_rows($res1);
      if($count1==0)
      {
          echo '<script>alert("Wait for donors Aproval")</script>';
          echo '<script> location.href= "profile.php";</script>';
      }
      
if($count1>0){
while($rows1=mysqli_fetch_assoc($res1)){
$d_username=$rows1['donor_username'];
$sql2="SELECT * FROM `donar` WHERE  username='$d_username';";
    $res2=mysqli_query($con,$sql2);
    
      $count2=mysqli_num_rows($res2);
     // if($count2==0){echo '<script>alert("NO BLOOD DONAR FOUND")</script>';}
       if($count2>0){
          $rows2=mysqli_fetch_assoc($res2);
      
          $name=$rows2['name'];
          $department=$rows2['department_name'];
          $Email=$rows2['email'];
          $phone_no=$rows2['phone_number'];
          $blood_group=$rows2['blood_group'];
          $last_donate=$rows2['last_donate'];
          $now = time(); // or your date as well
          $your_date = strtotime($last_donate);
          $datediff = ceil(($now - $your_date)/86400);
          ?>
          
              <br>
              <br>
           </tr> 
           <div class="container">
                                         <div class="card-body">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                        <img src="<?php echo $rows2["image"];?>" alt=""height=170 width=170>
                                                        </div>
                                                        <div class="col-md-8">
                                                          <h6>Name : <?php echo $name;?></h6>
                                                          <h6>Department : <?php echo $department;?></h6>
                                                          <h6>Email: <?php echo $Email;?></h6>
                                                          <h6>Phone No: <?php echo $phone_no;?></h6>
                                                          <h6>Blood Group: <?php echo $blood_group;?></h6>
                                                          <h6>Last Donate Date: <?php echo $last_donate;?></h6>
                                                          <h6>Number of days after giving blood: <?php echo $datediff;?></h6>
                                                          <h6>Status: <?php
                                                          if($datediff>=120){echo "Eligble";}
                                                          else{ echo "Not eligble";}?></h6>


                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                          
                                                    </div>
                                                  </div></div>


           <?php
          }
        }
    }
}
}
          ?>