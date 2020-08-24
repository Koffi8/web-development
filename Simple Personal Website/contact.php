<?php require_once("include/DB.php");?>
<?php require_once("include/sessions.php");?>
<?php require_once("include/Functions.php");?>

<?php 

if(isset($_POST["Submit"])){
     global $Connection;
  //$PostId = isset($_GET["User_id"]);
//     $PostIDFromURL = $_GET['id'];
//    $_SESSION["User_id"]= $_GET["User_id"];
    
    date_default_timezone_set("Africa/Accra");
$currentTime = time();
//$DateTime = strftime("%y-%m-%d %H:%M:%S",$currentTime);
$DateTime = strftime("%B-%d-%Y %H:%M:%S",$currentTime);
$DateTime;
    
   $Name = mysqli_real_escape_string($Connection,$_POST["Name"]);
   $Number = mysqli_real_escape_string($Connection,$_POST["Number"]);
   
   $Email = mysqli_real_escape_string($Connection,$_POST["Email"]);
   $Message = mysqli_real_escape_string($Connection,$_POST["Message"]);
   
    


    if(empty($Name) || empty($Email) || empty($Comment)){
       
       
      
        
    }elseif(empty($_POST["Name"])){
            
   $Name=filter_var($_POST["Name"], FILTER_SANITIZE_STRING);
    
        
    }elseif(empty($_POST["Email"])){
        
    $Email = filter_var($_POST["Email"], FILTER_SANITIZE_EMAIL);
    if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
      
    }
       
    
    }elseif($Message){
    
    $Message=filter_var($_POST["Message"], FILTER_SANITIZE_STRING);
    
    }else{
        
    exit;
}
    

global $Connection;
    
    date_default_timezone_set("Africa/Accra");
$currentTime = time();
//$DateTime = strftime("%y-%m-%d %H:%M:%S",$currentTime);
$DateTime = strftime("%B-%d-%Y %H:%M:%S",$currentTime);
$DateTime;
   
   
    $Query = "INSERT into contact_me (date,name,email,message) VALUES ('$DateTime','$Name','$Email','$Message')";
    $Execute = mysqli_query($Connection,$Query);
      
    if($Execute){
        
        // Set content-type for sending HTML email
$Headers = "MIME-Version: 1.0" . "\r\n";
$Headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
       
        
     $Number  = $_POST["Number"]; 
    $DateTime =$_POST["date"];
    $Name = $_POST["Name"];
	
	$Email = $_POST["Email"];
	$Message = $_POST["Message"];
        
     $toEmail = "mawuli@yawomessie.com";
	$Headers = "From:". $DateTime." " . $Name . " ".$Number."  <". $Email .">\r\n";
	if(mail($toEmail, $Message,  $Headers)) {
	     $_SESSION["SuccessMessage"] = "Your contact information is received successfully.Will hear from me soon.";
	   
        // Redirect_to("success.php");
     
    }else{
        
        $_SESSION["ErrorMessage"] = "Your contact information is  not sent.Please try it again.";
        
       //Redirect_to("fail.php");
    } 
}
}

?>






<!DOCTYPE html>
<html>

<head>
    <title>Web development,Wed design, Contact me on +233542996109</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?
        family=PT+Sans+Narrow&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style/home.css">
    <link rel="stylesheet" href="style/navbar.css">







    <style>
        .section-imag img {
            height: 480px;
            width: auto;
            margin-left: 40px;
            margin-right: 40px;
            border-radius: 15px;



        }

        .section-heading-text-about {

            text-align: center;
        }


        .nav li {


            margin-right: 20px;
            padding: 5px 4px;
        }

        .nav li:hover {
            border-bottom: 4px solid orangered;
            font-weight: bolder;
            cursor: pointer;
        }


        article h1 {
            margin-top: 10%;

        }


        .logo {
            height: 45px;
            padding-bottom: 5px;



        }


        .col-12 {
            background-color: #6666ff;

            border-radius: 15px;
            margin-top: 10%;
            padding: 40px;
            color: white;
            font-size: 20px;
        }

    </style>






</head>

<body>
    <div id="bodyBackground">
        <img src="img/bgimg.jpg">
    </div>

    <nav class="navbar navbar-inverse " style="color: white;" id="navbar">

        <div id="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="img/logo1.png"><img src="img/logo1.png" class="logo"></a>
                <button style="background-color: blue;margin-bottom: 4px;" type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">

                    <h4>Menu</h4>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li><a href="aboutme.html">About Me</a></li>
                    <li><a class="mymenu" href="index.html">Home</a></li>


                    <li><a href="apps.html">Apps Portfolio</a></li>
                    <li><a href="french.html">Learn French</a></li>





                </ul>


            </div>

        </div>

    </nav>

    <div class="container-fluid " id="mainhome">


        <div class="row">
            <!-- start left side column-->
            <aside class="col-sm-4">

                <div class="range-listhome">

                    <a href="img/black.jpg">
                        <img src="img/black.jpg" class="img-fluid img-thumbnail" alt="Responsive image" id="blackimg">

                    </a>

                </div>
            </aside>
            <!-- end left side columend-->
            <!--start of midle container-->
            <section class="col-sm-8">
                <articlehome>

                    <!--Create promisse section showing carrousel slider-->
                    <div id="promise" class="container-fluid">

                        <div class="carousel slide" id="myCarousel" data-ride="carousel">

                            <div class="carousel-inner">



                                <div class="item active">
                                    <img src="img/white.jpg">


                                    <div class="carousel-caption">
                                        <h2>Please scroll down to check whether your message is sent or not.</h2>
                                        <h3>Thanks for contacting me.From here you can still check my apps if you haven't yet.</h3>
                                    </div>

                                </div>




                            </div>


                        </div>



                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>

                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>

                        </a>

                    </div>

                </articlehome>


            </section>
            <!-- end of midle container-->
            <!--start of right side bar-->

            <!--end of ride side bar-->
        </div>


    </div>
    <hr>
    <!--starting-->
    <div class="container-fluid">
        <div class="row">

            <!-- end left side columend-->
            <!--start of midle container-->
            <section class="col-sm-10">
                <article>


                    <div class="row">
                        <div class="section-heading-text-about">
                            <h2>Thanks for your message</h2>

                        </div>



                        <aside class="col-sm-4">

                            <div class="range-listhomeprofile">

                                <a href="wasatch-range.html">
                                    <img src="img/profile.jpg" class="img-fluid img-thumbnail" alt="Responsive image" id="blackimg" style="height: 350px;">

                                </a>

                            </div>
                        </aside>



                        <section class="col-sm-8 aboutme">


                            <div class="row">
                                <div class=" col-12 " id="contactinfo">
                                    <a href="./index.html">
                                        <div class="btn btn-success btn-lg" style="margin-bottom:20px;">back Home</div>
                                    </a>
                                    <br>

                                    <?php echo Message(); ?>
                                    <?php echo SuccessMessage(); ?>


                                </div>

                            </div>




                        </section>


                    </div>

                </article>

                <article>


                </article>










            </section>
            <!-- end of midle container-->
            <!--start of right side bar-->
            <aside class="col-sm-2 sports-icon-list" data-aos="zoom-in-right" data-aos-delay="500">
                <h2 style="text-align:justify-all;">My Apps</h2>
                <a href="downhill.html">
                    <img src="img/seraphin.jpg" alt="" />

                </a>
                <hr>
                <h4>Simple Calculator App</h4>
                <h5>Get it on Amazon App Store</h5>
                <h5>Name:Calculator</h5>
                <a href="apps.html">

                    <img src="img/Calculator.png" alt="Simple Calculator App" />

                </a>
                <hr>
                <a href="apps.html">


                </a>
                <hr>
                <a href="cross-country.html">


                </a>
                <hr>
                <a href="biathlon.html">


                </a>
            </aside>
            <!--end of ride side bar-->
        </div>

    </div>

    <br><br><br><br><br><br>

    <footer class="copyright">

        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

        <p style="font-size:14px;">Designed By | Mawuli | &copy;2019 ---All right reserved || +233 542996109</p>
        <p style="font-size:14px;">This site is used for only business and learning purposes. makeitcount.com has all the rights.No one is allow copy other than<br>
            &trade; yawomessie.com &trade; Skillshare &hearts;</p>


    </footer>


    <script src="typer/backToTop.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/navbar.js"></script>

</body>

</html>
