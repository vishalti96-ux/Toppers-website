<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true ){
  header("location: login.php");
  exit;
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

    <title>LogIn</title>
<style>
@media (max-width:1010px){
 .wg{
             width: 100vw;
        }
    }
    </style>
  </head>
  <body>
  <?php
   require '_nav.php';
   include '_dbconn.php';
   $uname= $_SESSION['username'];
   $selectquery = "SELECT * FROM `vtdb` WHERE username = '$uname'";
   $query= mysqli_query($conn,$selectquery);
   $result = mysqli_fetch_array($query);
   $name= $result['name'];
   $cid= $result['courseid'];
   $dob= $result['dob'];
   $pic= $result['pic'];
   
   ?>
   <?php
   
   $squery = "SELECT * FROM `vids` WHERE courseid = '$cid'";
    $query = mysqli_query($conn,$squery);
    $res= mysqli_fetch_array($query);
    $vlink= $res['vlink'];
    
   ?>
   <iframe class="wg" width="560" height="315" style="margin:auto;" src="<?php echo "$vlink";?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
   </body>