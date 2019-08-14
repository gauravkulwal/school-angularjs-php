<?php 
session_start();
$con=mysqli_connect("localhost","root","","school");
$user=$_POST['studentuser'];
$password=$_POST['studentpassword'];
$sel = mysqli_query($con,"select * from class where stuser='$user' && stpass='$password'");
$result=mysqli_num_rows($sel);
if($result >0){
   
    $row = mysqli_fetch_array($sel);
   //header('location:studentloginview.php');
}
else{
  $_SESSION["error"] = $error;
  
  header('location:studentlogin.php');
    
 
  echo '<h3>Invalid username or password</h3>';
   
}


//while ($row = mysqli_fetch_array($sel)) {
 //("id"=>$row['id'],"class"=>$row['class'],"rollnumber"=>$row['rollnumber'],"stname"=>$row['stname'],"stfname"=>$row['stfname'],"image"=>$row['image']);
 
//}

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title></title>
    <!-- Latest compiled and minified CSS -->
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
td{
 padding-left :5px;
 padding-right :5px;
}
.center{
  margin-left:40%;
}

</style>
    </head>
    <body style= "background-color: #1abc9c;">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand text-center" style="color:red;font-weight:bold;" href="#">Dear studnet</a>
    </div>
    <ul class="nav navbar-nav">
     
     <!-- <li class=""><a href="studentAdd.php">Add student data</a></li>
      <li class=""><a href="studentfee.php">fee</a></li>
      <li class=""><a href="facultysalary.php">faculty salary</a></li>
      <li class=""><a href="seestudent.php">student information</a></li>



-->
    
    </ul>
   
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href="adminlogout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
    </ul>
  </div>
</nav> 
<h1 class="text-center">Student Personal Information</h1>
<div class="container center">

<div >




<div class="card-deck" >
  <div class="card ">
    <div class="card-body text-center">
      <div class="card-text" >
     <table class="table table-bordered table-striped table-responsive">

     <tr>
     <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="<?php echo $row['image']?>" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1><?php echo $row['stname']?></h1> 
      <p>Roll Number = <?php echo $row['rollnumber']?></p> 
     
    </div>
    
  </div>
</div>
     </tr>
     <tr>
     <table class=" table-striped table-hover">
     <tr><td>Name</td>
     
     <td><?php echo $row['stname']?></td>
     </tr>
     <tr><td>Father</td>
     
     <td><?php echo $row['stfname']?></td>
     </tr>
     <tr><td>class</td>
     <td><?php echo $row['class']?></td>
     </tr>
     <tr><td>address</td>
     <td><?php echo $row['address']?></td>
     </tr>
     <tr><td>contact</td>
     <td><?php echo $row['mobile']?></td>
     </tr>
     <tr><td>username</td>
     <td><?php echo $row['stuser']?></td>
     </tr>
     <tr><td>password</td>
     <td><?php echo $row['stpass']?></td>
     </tr>
     </table>
     </tr>
     
     
     </table> 
      </div>
    </div>
  </div>
  </div>
     </div>
      
    </body>
</html>

