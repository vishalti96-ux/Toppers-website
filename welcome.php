<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true ){
  header("location: officelogin.php");
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
    <link rel="stylesheet" href="partials/w3.css">
    <link rel="stylesheet" href="partials/laystyle.css">
    <link rel="stylesheet" href="partials/w.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" media="screen and (max-width: 1140px)" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" media="screen and (max-width: 1140px)" href="partials/smallscreen.css">
    <style>

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
    width: 28%;
    margin-left: 10%;
}

.ubgvt{
    background-color: indigo;
    margin: 5px;
    font-size: 35px;
    color: white;
    margin-top: 5px;
}
.controls_Head{
    background-color: indigo;
    font-size: 35px;
    color: white;
    margin-top: 5px;
    text-align:center;
}
#controls{
    display: flex;
    /* justify-content: center; */
    /* align-items: center; */
    flex-wrap: wrap;
    
}
.controls-1{
    
    background-color:red;
    color: white;
    font-size: 2em;
    padding: 5px;
    margin: 5px;
    width: 435px;
    text-align: center;
}
.controls-2{
    
    background-color:green;
    color: white;
    font-size: 2em;
    padding: 5px;
    margin: 5px;
    width: 435px;
    text-align: center;
}
.controls-3{
    
    background-color:blue;
    color: white;
    font-size: 2em;
    padding: 5px;
    margin: 5px;
    width: 435px;
    text-align: center;
}
a{
    text-decoration: none;
    color: white;
    /* padding: 0 35px; */
}
a:hover{
    background-color: white;
    color: black;
}
table{
    width:100%

}
#line1{
    font-size: 1em;
    background-color: indigo;
    color: white;

}
.wg{
    margin-left:60px;
}
@media (max-width:1010px){
    .wg{
        margin-left:2px;
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
    <div class="controls_Head">APPLY</div>
   
    <div id="controls">
       <div class="controls-1"> <a href="https://student.nielit.gov.in/">CCC</a> </div>
       <div class="controls-2"><a href="https://student.nielit.gov.in/">O'LEVEL</a></div>
       <div class="controls-3"><a href="https://forms.gle/mcBEPqZ6jwUjKXnn8">OTHERS</a></div>
       
   </div>
   
    <div class="controls_Head">CERTIFICATES</div>
   
    <div id="controls">
       <div class="controls-1"><a href="https://certificate.nielit.gov.in/">CCC</a></div>
       <div class="controls-2"> <a href="https://certificate.nielit.gov.in/">O'LEVEL</a> </div>
       <div class="controls-3"><a href="https://forms.gle/WsRLMc9a6UYKLfbb7">OTHERS</a> </div>
       
   </div>

    <div class="controls_Head">ORGANIZATION</div>
   
    <div id="controls">
       <div class="controls-1"><a href="all_students.php">ALL STUDENTS</a></div>
       <div class="controls-2"> <a href="all_queries.php">QUERIES</a> </div>
       <div class="controls-3"><a href="index.php">LOG OUT</a> </div>
       
   </div>
   
   <div class="w3-card w3-blue w3-col l5 m12 wg w3-hover-shadow">
       <h1 class="w3-center">Topper's Fees Structure</h1>
       <ul>
           <li>Basic- 1500/- Rs.</li>
           <li>internet- 1000/- Rs.</li>
           <li>Typing- 500/Month- Rs.</li>
           <li>Advance Excel- 1000/- Rs.</li>
           <li>Tally- 2500/- Rs.</li>
           <li>Auto Cad- 3500/- Rs.</li>
           <li>DTP- 3500/- Rs.</li>
           <li>CCC- 3500/- Rs.</li>
           <li>C Programming- 3000/- Rs.</li>
           <li>Web Designing- 10000/- Rs.</li>
           <li>O Level- 16500/- Rs.</li>
           <li>English Speaking- 3000/- Rs.</li>
       </ul>
       <p>For any information Contact Us.</p>
   </div>
   <div class="w3-card w3-green w3-col l5 m12 wg w3-hover-shadow">
       <h1 class= "w3-center">Subharti Fees Structure</h1>
       <ul>
           <li>B.A.- 8000/Yr</li>
           <li>B.Lib- 17000/Yr</li>
           <li>B.B.A.- 15000/Yr</li>
           <li>B.Com- 10000/Yr</li>
           <li>B.Com(HON)- 13000/Yr</li>
           <li>B.A. (JMC)- 15000/Yr</li>
           <li>M.A. (EDU)- 17400/Yr</li>
           <li>M.A. (OTHER)- 13000/Yr</li>
           <li>M.A. (BUDDHIST)- 16000/Yr</li>
           <li>M.Lib - 17000/Yr</li>
           <li>M.B.A. - 23000/Yr</li>
           <li>M.Com - 13000/Yr</li>
           <li>M.A. (JMC) - 17000/Yr</li>
       </ul>
       <P>Total Fees= Reg Fees (1500) + Exam Fees (1500) + Both Sem. Fees.</P>
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