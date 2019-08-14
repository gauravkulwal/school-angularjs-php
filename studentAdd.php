<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <title></title>
    <!-- Latest compiled and minified CSS -->
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>
    <body style= "background-color: #1abc9c;">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand text-center" style="color:red;font-weight:bold;" href="#">Madhav Vidhya Mandir</a>
    </div>
    <ul class="nav navbar-nav">
     
      <li class="active"><a href="studentAdd.php">Add student data</a></li>
      <li class=""><a href="studentfee.php">fee</a></li>
      <li class=""><a href="facultysalary.php">faculty salary</a></li>
      <li class="active"><a href="seestudent.php">student information</a></li>




    
    </ul>
   
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href="adminlogout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
    </ul>
  </div>
</nav> 

<div class="container">
      <div class="row">
      <h3>Student Enrolment Form</h3>
      </div>
      <form action="studentAddValidation.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
      <label >Class</label><select name="class" id="" class="form-control">
      <option value="6">6th</option>
      <option value="7">7th</option>
      <option value="8">8th</option>
      <option value="9">9th</option>
      <option value="10">10th</option>
      </select>
      </div>
      <div class="form-group">
      <label for="">Student Roll-Number:</label>
      <input type="text" name="roll" class="form-control"> 
      </div>
      <div class="form-group">
      <label for="">Student Name:</label>
      <input type="text" name="st_name" class="form-control"> 
      </div>
      <div class="form-group">
      <label for="">Father Name:</label>
      <input type="text" name="st_fathername" class="form-control"> 
      </div>
      <div class="form-group">
      <label for="">Address:</label>
      <input type="text" name="st_address" class="form-control"> 
      </div>
      <div class="form-group">
      <label for="">Mobile:</label>
      <input type="text" name="st_mobile" class="form-control"> 
      </div>
      <div class="form-group">
      <label for="">Student Image:</label>
      <input type="File" name="st_image" class="form-control"> 
      </div>
     
      <button name="studentdatasubmit">Submit</button>
      </form>
      
      </div>
    </body>
</html>
