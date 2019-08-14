<?php
session_start();
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
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <title></title>
    <!-- Latest compiled and minified CSS -->
   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
      <div class="container">
      <div class="row">
    
      <h3>student login</h3>
      </div>
      <form action="studentvalidation.php" method="POST">
     
      <div class="form-group">
      <label for="">User Name</label>
      <input type="text" name="studentuser" class="form-control"> 
      </div>
      <div class="form-group">
      <label for="">Password</label>
      <input type="password" name="studentpassword" class="form-control"> 
      
      <div class="form-group">
      <label for="">Submt</label>
      <input type="submit" name="studentsubmit" value="submit" class="form-control"> 
      </div>
      <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>  
      </form>
      
      </div>
    
    </body>
</html>
<?php
    unset($_SESSION["error"]);
?>
