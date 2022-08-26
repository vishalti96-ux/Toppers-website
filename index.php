<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
include 'partials/_dbconn.php';
$name = $_POST["name"];
$contactno = $_POST["contactno"];
$email = $_POST["email"];
$query = $_POST["query"];

$sql = "INSERT INTO `popup` ( `name`,`contactno`,`email`,`query`,`Date`) VALUES ( '$name', '$contactno', '$email','$query', current_timestamp())";
$result = mysqli_query($conn, $sql);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="we provide all computer courses like basic, tally ,typing, tally, advance excel,ccc, o level, c programming , web development, etc. ">
    <meta name="keywords" content="HTML, CSS, JavaScript,computer courses
computer courses list,
computer courses near me,
computer courses after 12th,computer courses online
computer courses free,
computer courses in hindi,computer courses basic,
computer courses after 10th,
computer courses after graduation,
computer courses after 12th commerce,
computer courses after 12th ,
computer courses after 12th science,
computer courses after bcom,
computer courses app,
ccc course in bulandshahr,
basic course in bulandshahr,
tally course in bulandshahr,
advance excel course in bulandshahr,
o level course in bulandshahr,
coding in bulandshahr,
learn coding in bulandshahr,
toppers in bulandshahr
toppers,
toppers computer ,
toppers computer institute,
toppers computer education society,
subharti university,
tci,
tci bulandshahr
">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="partials/laystyle.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" media="screen and (max-width: 1140px)" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" media="screen and (max-width: 1140px)" href="partials/smallscreen.css">
    <script src="https://kit.fontawesome.com/d4ff5aafa4.js" crossorigin="anonymous"></script>
<style>
    /* Styling For Popup */
    .popup {
        background-color: #ffffff;
        width: 420px;
        padding: 30px 40px;
        position: absolute;
        transform: translate(-50%, -50%);
        left: 50%;
        top: 50%;
        border-radius: 8px;
        font-family: "Poppins", sans-serif;
        display: none;
        text-align: center;
        z-index: 1;
    }

    #close {
        display: block;
        margin: 0 0 20px auto;
        background-color: transparent;
        font-size: 30px;
        color: #ffffff;
        background: #03549a;
        border-radius: 100%;
        width: 40px;
        height: 40px;
        border: none;
        outline: none;
        cursor: pointer;
    }

    .popup h2 {
        margin-top: -20px;
    }

    .popup p {
        font-size: 14px;
        text-align: justify;
        margin: 20px 0;
        line-height: 25px;
    }

    .popupa {
        display: block;
        width: 150px;
        position: relative;
        margin: 10px auto;
        text-align: center;
        background-color: #0f72e5;
        border-radius: 20px;
        color: #ffffff;
        text-decoration: none;
        padding: 8px 0;
        cursor: pointer;
    }
.pinput{
    margin: 5px;
    width: 200px;
    padding: 5px;
}
.pc{
    margin-left: 9px;
}
.pe{
    margin-left: 3px;
    
}
@media (max-width:800px){
    .popup{
        width:400px;
        margin: auto;
    }
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

</style>
</head>

<body>
<!-- For AutoMatic Popup Start -->
<div class="popup">
        <button id="close">&times;</button>
        <h2>Query-Form</h2>
      <form action="index.php" method= "POST">
      <i class="fa fa-user"></i>
      <input  class= "pinput" type="text" placeholder= "Enter Your Name" id="name" name="name"> <br>
      <i class="fa fa-mobile"></i>
      <input  class= "pinput pc" type="text" placeholder= "Enter Your Contact No." id="contactno" name="contactno"> <br>
      <i class="fa fa-envelope"></i>
      <input class= "pinput pe"  type="email" name="email" id="email" placeholder= "Enter Your Email Id">
      <br>
      <i class="fa fa-question-circle"></i>
      <input class= "pinput pq" type="text" name="query" id= "query" placeholder= "Ask Your Query Here">
      <br>
      <button class="popupa" value= "submit" >Submit</button>
      </form>
        <!-- <a class="popupa" href="#">Submit</a> -->
    </div>







    <header>
    <?php
   require 'partials/_nav.php'
   ?>


        <div class="layvt1 headervt">
            <div class="centervt1 hbgvt"> <strong>Toppers Computer Education Society</strong> <br>Bulandshahr,Uttar Pradesh,Pin: 203001
        </div>
            <div class="centervt1 sbgvt">Reg.by: U.P.Government:- R.No.I-49596(M)&nbsp;&nbsp;&nbsp;&nbsp; Reg.by: Delhi (Doeacc):- R.No.- 88001092 </div>
        </div>
    </header>

<div class="container">

    <div class="layvt" id="b1vt">
        <h1 class="center-bgvt">Notification</h1>
        <marquee behavior="scroll" direction="up" scrollamount="1" width="60%" height="30%">
            <strong> महत्वपूर्ण सूचना: </strong> आप सभी विद्यार्थियों को सूचित किया जाता है कि आप सभी अपना रजिस्ट्रेशन करें।
        </marquee>
    </div>
    <div class="layvt" id="b2vt">
        <h1 class="center-bgvt">Courses</h1>
        <marquee behavior="scroll" direction="up" scrollamount="3" width="100%" height="70%">
            <strong>CCC</strong>
            <ol>
                <li>Introduction to Computer</li>
                <li>Operating System</li>
                <li>Word Processing</li>
                <li>SpreadSheet</li>
                <li>Presentation</li>
                <li>Introduction of Internet,WWW and Web browser</li>
                <li>E-mail, Social Networking And E-Governance Services</li>
                <li>Digital Financial Tools and Application</li>
                <li>Overview of Futureskills & Cyber Security</li>
            </ol>
            <strong>O Level</strong>
            <ol>
                <li><strong>M1-R5: </strong>Information Technology Tools and Networks Basis</li>
                <li><strong>M2-R5: </strong>Web Designing & Publishing</li>
                <li><strong>M3-R5: </strong>Programming and Problem Solving through Python</li>
                <li><strong>M4-R5: </strong>Internet of Things and its Application</li>
                <li><strong>M5-R5: </strong>Practical based on M1-R5, M2-R5, M3-R5 and M4-R5</li>
                <li><strong>M6-R5: </strong>Project</li>
            </ol>
            <strong>ADVANCE TALLY WITH GST</strong>
            <ol>
                <li><strong> Account</strong></li>
                <ul>
                    <li>Accounting Introduction</li>
                    <li>Journal Entry</li>
                    <li>Ledger</li>
                    <li>Cash Books, Trial Balance</li>
                </ul>
                <li><strong>Accounting Features </strong></li>
                <ul>
                    <li>Billwise Details</li>
                    <li>Multi Currency</li>
                    <li>Cost Centers</li>
                    <li>Cost Categories</li>
                </ul>
                <li><strong>Inventory Features </strong></li>
                <ul>
                    <li>Stock Item</li>
                    <li>Stock Group</li>
                    <li>Stock Category</li>
                    <li>Godowns</li>
                    <li>Purchase/Sales Order</li>
                    <li>Manufacturing</li>
                    <li>Rejection Note, Credit/Debit Notes</li>
                    <li>Tracking Numbers</li>
                    <li>Invoicing</li>
                </ul>
                <li><strong> Taxation </strong></li>
                <ul>
                    <li>TDS</li>
                    <li>TCS</li>
                    <li>VAT & CST</li>
                    <li>EXCISE</li>
                    <li>SERVICE TAX</li>
                    <li>GST</li>
                </ul>
                <li><strong> Final Account </strong></li>
                <ul>
                    <li>Trading A/C</li>
                    <li>Profit & Loss A/C</li>
                    <li>Balance Sheet</li>
                </ul>
                <strong>BASIC (DCA OR M.S.OFFICE)</strong><br>
                <strong>INTERNET</strong><br>
                <strong>ADVANCE EXCEL</strong><br>
                <strong>DTP </strong><br>
                <strong>AUTOCAD (MECHANICAL & CIVILL )</strong><br>
                <strong>PROGRAMMING C </strong><br>
                <strong>PROGRAMMING C++ </strong><br>
                <strong>PYTHON</strong><br>
                <strong>HTML </strong><br>
                <strong>CSS </strong><br>
                <strong>JAVA</strong><br>
                <strong>JAVA SCRIPT</strong><br>



        </marquee>
    </div>
    <div class="layvt" id="b3vt">
        <h1 class="center-bgvt" >CONTACT DETAILS</h1>
        <marquee behavior="scroll" direction="up" width=70% height=50% scrollamount="1">

            <strong>CALL US   : </strong> 9456249298, 7417520910, 9456855256 <br>
            <strong>EMAIL US  : </strong> topperscollege@gmail.com<br>
            <!-- <strong>ADDRESS 1 : </strong> D.A.V. INTER COLLEGE, BULANDSHAHR <br> -->
            <!-- <strong>ADDRESS 2 : </strong> OPPOSITE TO D.A.V. FIELD, BULANDSHAHR <br> -->

            
        </marquee>
    </div>

    </div>
    <div class="lay2vt mbvt" id="b4vt">
        <div class="centervt  ubgvt">Users</div>
        <div class="uservt">
            <a href="login.php"> LOG IN</a>
        </div>
        <div class="uservt">
           <a href="signup.php"> SIGN UP</a>
        </div>
    </div>
    <div class="lay2vt" id="b5vt">
        <div class="centervt ubgvt">Syllabus</div>
        <div class="navvt">
           <a href="https://drive.google.com/file/d/194M-KqzQBwdE1yysqDIJeC-gspBng8aT/view?usp=sharing">CCC</a>  
        </div>
        <div class="navvt">
            <a href="https://drive.google.com/file/d/1sVq2LFLDKgHnC1k0klW2JmFW6AoDKFlJ/view?usp=sharing">O'LEVEL</a> 
        </div>
        <div class="navvt">
           <a href="https://drive.google.com/file/d/1_5li3qBF0ECzQnUywjsvh4hGLQiQMiYZ/view?usp=sharing">BASIC</a>  
        </div>
        <div class="navvt">
            <a href="https://drive.google.com/file/d/1nUzHRGe1-09iTQEnmF3tFOLZuzc-8qQa/view?usp=sharing">TALLY</a> 
        </div>
        <div class="navvt">
            <a href="#">ADVANCE EXCEL</a> 
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

   <!-- Script For Popup -->
   <script type="text/javascript">
    window.addEventListener("load", function() {
        setTimeout(
            function open(event) {
                document.querySelector(".popup").style.display = "block";
            },
            2000
        )
    });


    document.querySelector("#close").addEventListener("click", function() {
        document.querySelector(".popup").style.display = "none";
    });
    </script>
</body>

</html>