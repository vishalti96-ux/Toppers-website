<?php
$showAlert = false;
// $exists =false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

include 'partials/_dbconn.php';
$name= $_POST["name"];
$dob= $_POST["dob"];
$phone= $_POST["phone"];
$courseid= $_POST["courseid"];
$username = $_POST["username"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
$file= $_FILES["pic"];

$filename= $file['name'];
$filepath= $file['tmp_name'];
$fileerror= $file['error'];

if ($fileerror == 0) {
  $destfile = 'upload/'.$filename;
  move_uploaded_file($filepath,$destfile);
}

// CHECK WHETHER THIS USERNAME EXISTS;
$existSql = "SELECT * FROM `vtdb` WHERE username = '$username'";
$result = mysqli_query($conn, $existSql);
$numExistRows = mysqli_num_rows($result);
   if($numExistRows > 0){
            // $exists = true;
            $showError = "User already exist";
          }
    else{
      // $exists = false;
            if (($password == $cpassword)) {
                                                    // $hash= password_hash($password,PASSWORD_DEFAULT);
                                                    $sql = "INSERT INTO `vtdb` ( `name`,`dob`,`phone`,`courseid`, `username`, `password`,`pic`, `Date`) VALUES ( '$name', '$dob', '$phone','$courseid', '$username', '$password' ,'$destfile', current_timestamp())";
                                                    $result = mysqli_query($conn, $sql);
                                            }
                     if ($result) {
                                    $showAlert = true; 
                                  }
                                                
                      else{
                            $showError = "Password Do Not Matched Try Again";
                          }
          }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <title>SignUP</title>
  </head>
  <body>
   <?php
   require 'partials/_nav.php'
   ?>
   
    <?php 
        if ($showAlert){
            echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Successfull!</strong> Your account is now created and you can login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
        if ($showError){
            echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '.$showError.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
    ?>
<div class="container">
    <h1 class= "text-center" >Signup to our Website</h1>

    <form action="signup.php" method= "POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name"  aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="dob" class="form-label">Date of Birth</label>
      <input type="date" class="form-control" id="dob" name="dob"  aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Mobile NO</label>
      <input type="phone" class="form-control" id="phone" name="phone"  aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="courseid" class="form-label">Course Id</label>
      <input type="number" class="form-control" id="courseid" name="courseid"  aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">Basic-1,CCC-2,AdvanceExcel-3,O Level-4,Auto Cad-5,Tally-6,DTP-7,Typing-8,Internet-9,English Speaking-10</div>
    </div>

  <div class="mb-3">
      <label for="username" class="form-label">Create User Name</label>
      <input type="text" class="form-control" id="username" name="username"  maxlength= 11 aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">Maximum Length is 11</div>
    
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name= "password">
  </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
    <div id="emailHelp" class="form-text">Make sure to type the same password </div>
  </div>
  <div class="mb-3">
    <label for="pic" class="form-label">Photo</label>
    <input type="file" class="form-control" id="pic" name="pic">
  </div>
  <!-- <div class="g-recaptcha" data-sitekey="6LcO79YdAAAAALaL9GiZ_9R87hceS6vjj8BwsfxZ" style="margin:10px 395px;" ></div> -->
  <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
  </form>

</div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>