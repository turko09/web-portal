<?php

  //retrieve post values
  $fn=$_POST['firstname'];
   $ln=$_POST['lastname'];
    $email=$_POST['email'];
    $pass1=$_POST['p1'];
    $pass2=$_POST['p2'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
      $mobile=0;
      $verified=0;
       $blocked=0;
       $token="";
       $datecreated=date("Y-m-d h:i:s");
       $dateupdated=date("Y-m-d h:i:s");
       
       
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["pic"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["pic"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["pic"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
       
      
//Sql Instructions and Validations

if($pass1!=$pass2)
{
  echo"<script>window.alert('Password does not match try again');window.location='reg.php';</script>";
}
$ret=mysqli_query("SELECT email FROM passenger WHERE email LIKE '$email'")or die("Script error");
if(mysql_num_rows($ret)>0)
{
  echo"<script>window.alert('Email has already been used, try another email');window.location='reg.php';</script>";
}
else
{
  //Insert Query
}
?>
