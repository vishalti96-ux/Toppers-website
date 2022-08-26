<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true ){
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toppers</title>
    <link rel="stylesheet" href="partials/laystyle.css">
    <link rel="stylesheet" href="partials/w.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" media="screen and (max-width: 1140px)" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" media="screen and (max-width: 1140px)" href="partials/smallscreen.css">
    <style>
       .card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 0.25rem;
    margin: auto;
}
.card-img, .card-img-top {
    border-top-left-radius: calc(0.25rem - 1px);
    border-top-right-radius: calc(0.25rem - 1px);
    width: 132px;
    height: 170px;
    margin: auto;
}
.card-body {
    flex: 1 1 auto;
    padding: 1rem 1rem;
    margin: auto;
}
.card-title {
    /* margin-bottom: 0.5px; */
    text-align: center;
    font-size: 20px;
}
p {
    margin-top: 0;
    /* margin-bottom: 1rem; */
}
.btn-primary {
    color: #fff;
    background-color: #0d6efd;
    border-color: #0d6efd;
    padding: 10px;
    
}
.hbgvt{
    
    color: white;
    margin-top: 5px;
    font-size: 20px;
    display: inline-block;
    width: 60%
}
.hbgvt strong{
    font-size:30px;
}
.sbgvt{
    color: white;
    display: inline-block;
    width: 24%;
    margin-left: 15%;
}

.ubgvt{
    background-color: indigo;
    margin: 5px;
    font-size: 35px;
    color: white;
    margin-top: 5px;
}
@media (max-width:1010px){
    .btn{
        width: 255px;
        margin-bottom:5px;
        
    }
}
</style>

</head>
<body>
    <header>
    <?php
   require 'partials/_wnav.php'
   
   ?>
   

<!--     
    <div class="container">
      <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">Welcome- <?php echo $_SESSION['username'] ?></h4>
          <p>Hey how are you doing? Welcome to Topper's. You are logged in as <?php echo $_SESSION['username'] ?></p>
          <hr>
          <p class="mb-0">Whenever you need to, be sure to logout! click on logout.</p>
      </div>
    </div> -->

    <div class="layvt1 headervt">
            <div class="centervt1 hbgvt"> <strong>Toppers Computer Education Society</strong> <br>Bulandshahr,Uttar Pradesh,Pin: 203001
        </div>
            <div class="centervt1 sbgvt">Reg.by: U.P.Government:- R.No.I-49596(M)&nbsp;&nbsp;&nbsp;&nbsp; Reg.by: Delhi (Doeacc):- R.No.- 88001092 </div>
        </div>
    </header>



   <?php
   include 'partials/_dbconn.php';
   $uname= $_SESSION['username'];
   $selectquery = "SELECT * FROM `vtdb` WHERE username = '$uname'";
   $query= mysqli_query($conn,$selectquery);
   $result = mysqli_fetch_array($query);
   $name= $result['name'];
   $cid= $result['courseid'];
   $dob= $result['dob'];
   $pic= $result['pic'];
   
   ?>
   
   <div class="card" style="width: 18rem;">
  <img src="<?php echo "$pic";?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Name: <?php echo "$name";?></h5>
    <h5 class="card-title">Date of Birth: <?php echo "$dob";?></h5>
    <?php
    $squery = "SELECT * FROM `vids` WHERE courseid = '$cid'";
    $query = mysqli_query($conn,$squery);
    $res= mysqli_fetch_array($query);
    $vlink= $res['vlink'];
    $course= $res['course'];
    ?>
    <h5 class="card-title">Course: <?php echo "$course";?></h5>
    <a href="partials/vmodal.php" class="btn btn-primary">Join Online Class</a>
    <a href="<?php echo "$vlink";?>" class="btn btn-primary">Join Live Class</a>
    
  </div>
</div>
 </div>
 <div class="vt">
   <div class="cvt-header">
          SUBHARTI UNIVERSITY
   </div>
   <div class="cvt-body">
      <div class="cvt-title">
          DISTANCE LEARNING
      </div>
      <div class="cvt-text">
            <ul>
              <li>M.C.A.</li>
              <li>M.B.A.</li>
              <li>M.A.</li>
              <li>M.COM.</li>
            </ul>
            <P>ONLINE VERIFICATION / STUDENT LOGIN</P>
            <P>VALID IN ALL GOVERNMENT JOBS</P>
      </div>
   </div>
 </div>
 <div class="vt">
   <div class="cvt-header">
          SUBHARTI UNIVERSITY
   </div>
   <div class="cvt-body">
      <div class="cvt-title">
          DISTANCE LEARNING
      </div>
      <div class="cvt-text">
            <ul>
              <li>P.G.D.C.A.</li>
              <li>B.Lib.</li>
              <li>M.Lib.</li>
              <li>BJMC.</li>
            </ul>
            <P>ONLINE VERIFICATION / STUDENT LOGIN</P>
            <P>VALID IN ALL GOVERNMENT JOBS</P>
      </div>
   </div>
 </div>
 
 <div class="vt">
   <div class="cvt-header">
SUBHARTI UNIVERSITY
   </div>
   <div class="cvt-body">
      <div class="cvt-title">
          DISTANCE LEARNING
      </div>
      <div class="cvt-text">
            <ul>
              <li>B.A.</li>
              <li>B.B.A.</li>
              <li>B.C.A.</li>
              <li>B.B.A.</li>
              <li>B.COM.</li>
            </ul>
            <P>ONLINE VERIFICATION / STUDENT LOGIN</P>
            <P>VALID IN ALL GOVERNMENT JOBS</P>
      </div>
   </div>
 </div>


    <div class="lay2vt mbvt" id="b4vt">
        <div class="centervt ubgvt">User</div>
        <div class="centervt ubgvt"><?php echo $_SESSION['username'] ?></div>
        <div class="uservt">
            <a href="index.php"> LOG OUT</a>
        </div>
        <!-- <div class="uservt">
           <a href="#"> SIGN UP</a>
        </div> -->
    </div>
    <div class="lay2vt" id="b5vt">
                <div class="centervt ubgvt">CERTIFICATE</div>
        <div class="navvt">
           <a href="https://certificate.nielit.gov.in/">CCC</a>  
        </div>
        <div class="navvt">
            <a href="https://certificate.nielit.gov.in/">O'LEVEL</a> 
        </div>
        <div class="navvt">
           <a href="https://forms.gle/WsRLMc9a6UYKLfbb7">OTHERS</a>  
        </div>
        <div class="centervt ubgvt">ADMIT CARD</div>
        <div class="navvt">
           <a href="https://student.nielit.gov.in/">CCC</a>  
        </div>
        <div class="navvt">
            <a href="https://student.nielit.gov.in/">O'LEVEL</a> 
        </div>
        <div class="centervt ubgvt">PRACTICE SET</div>
        <div class="navvt">
           <a href="ccc/main.html">CCC</a>  
        </div>
        <div class="navvt">
            <a href="M1-R5/main.html">M1-R5</a> 
        </div>
        <div class="navvt">
            <a href="M2-R5/main.html">M2-R5</a> 
        </div>
        
        <div class="navvt">
            <a href="M3-R5/main.html">M3-R5</a> 
        </div>
        <div class="navvt">
            <a href="M4-R5/main.html">M4-R5</a> 
        </div>

    </div>
    <footer class="centervt">
       <div>All copyright &copy; Toppers Computer Institute reserved here!</div> 
    </footer>
   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   <!-- Option 2: Separate Popper and Bootstrap JS -->
   <!--
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   -->
    <!-- Optional JavaScript; choose one of the two! -->

    
  </body>
</html>