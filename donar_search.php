
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>  

        <center>
<form action=""method="POST">
<table>
<div class="form">
        <ul>
        <li>
            <h3>Search Donor.</h3>
        </li>
</ul>
 
				
                <tr>
                    <td><font size="5">Blood Group:</font></td>
                    <td><select name="blood_group">
                                <option>O+</option>
                                <option>A+</option>
                                <option>B+</option>
                                <option>AB+</option>
                                <option>O-</option>
                                <option>A-</option>
                                <option>B-</option>
                                <option>AB-</option>
                        </select></td>
                </tr>

				<tr>
                    <td></td>
                    <td><input type="submit" value="Search" name="submit" class="btn"></td>
                    
                </tr>
</div>

</table>
</form>
</center>

<?php
 if(isset($_POST['submit'])){ 

$blood_group=$_POST['blood_group'];
$sql="SELECT * FROM `donar` WHERE  blood_group='$blood_group'";
    $res=mysqli_query($con,$sql);
      $count=mysqli_num_rows($res);
       if($count>0){
      while($rows=mysqli_fetch_assoc($res))
      {
          $name=$rows['name'];
          $department=$rows['department_name'];
          $Email=$rows['email'];
          $phone_no=$rows['phone_number'];
          $blood_group=$rows['blood_group'];
          $last_donate=$rows['last_donate']
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
                                                        <img src="../image/people.webp" alt=""height=170 width=170>
                                                        </div>
                                                        <div class="col-md-8">
                                                          <h6>Name : <?php echo $name;?></h6>
                                                          <h6>Department : <?php echo $department;?></h6>
                                                          <h6>Email: <?php echo $Email;?></h6>
                                                          <h6>Phone No: <?php echo $phone_no;?></h6>
                                                          <h6>Blood Group: <?php echo $blood_group;?></h6>
                                                          <h6>Last Donate Date: <?php echo $last_donate;?></h6>


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
          ?>
