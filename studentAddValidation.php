<?php
session_start();
$con=mysqli_connect("localhost","root","","school");

if(isset($_POST['studentdatasubmit'])){

    if($con){

       if(!empty($_POST['class'])&& !empty($_POST['roll'])&&!empty($_POST['st_name'])&& !empty($_POST['st_fathername'])&&!empty($_POST['st_address'])&&!empty($_POST['st_mobile']))
       {
         $class=$_POST['class'];
         $roll=$_POST['roll'];
         $name=$_POST['st_name'];
         $father=$_POST['st_fathername'];
         $address=$_POST['st_address'];
         $mobile=$_POST['st_mobile'];
         
      #   $image=addslashes(file_get_contents($_FILES['st_image']["tmp_name"]));
      $file=$_FILES['st_image'];
      //   print_r($file);
        // print_r($username);  
         $filename=$file['name'];
         $filetemp=$file['tmp_name'];
         $fileext=explode('.',$filename);
         $fileextlower=strtolower(end($fileext));
         $fileextarray=['jpg','png','jpeg'];
         if(in_array($fileextlower  ,$fileextarray)){
         
         $imagefolder='image/'.$filename;
         move_uploaded_file($filetemp, $imagefolder);
         $chopname=preg_replace('/\s+/', '', $name);
         $studentusername=$chopname."@madhav";
         
         $studentpassword=$class.$roll;
         $q="INSERT INTO `class`( `class`, `rollnumber`, `stname`, `stfname`, `address`, `mobile` ,`image`, `stuser`, 
         `stpass`) VALUES('$class','$roll','$name','$father','$address','$mobile','$imagefolder','$studentusername',
         '$studentpassword')";
          $result=mysqli_query($con, $q);
          if($result){
       // echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
          
 header('location:studentAdd.php');
       }
       else{
           echo 'sorry';
       }

    }
    else
    {
        echo "try ";
    }
}




}
}
?>