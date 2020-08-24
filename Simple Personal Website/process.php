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
       
        
        
    $DateTime =$_POST["date"];
    $Name = $_POST["Name"];
	
	$Email = $_POST["Email"];
	$Message = $_POST["Message"];
        
     $toEmail = "mawuli@yawomessie.com";
	$mailHeaders = "From:". $DateTime." " . $Name . "  <". $Email .">\r\n";
      
    
  if(mail($toEmail, $Message,  $mailHeaders)) {
       
       $_SESSION["SuccessMessage"] = "Your contact information is received successfully.Will hear from me soon.";
        
       
	//Redirect_to('success.php');
     
	   
    }else{
     
       $_SESSION["ErrorMessage"] = "Your contact information is  not sent.Please try it again.";
      
        // Redirect_to(' fail.php');
    }  
    
    }
    
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.o">
    
    <title>Web development,Wed design,ecommerce design</title>
    <link rel="stylesheet" href="css2/bootstrap.min.css">
    <script src="js2/jquery-3.4.1.min.js"></script>
    <script src="js2/bootstrap.min.js"></script>


    <link rel="stylesheet" href="css2/publicstyles.css">
    <link rel="stylesheet" href="mainstyle/mainblogpage.css">


<style>
    
    .col-12{
    background-color:#6666ff;
   
        border-radius: 15px;
      margin-top: 10%;
        padding: 40px;
        color: white;
        font-size: 20px;
    } 
    
    
    
</style>




</head>

<body>




 <div class="container">
        <div class="row">
            <div class=" col-12 " id="contactinfo">
                <a href="./index.php">
                    <div class="btn btn-success btn-lg" style="margin-bottom:20px;">back Home</div>
                </a>
                <br>

               <?php echo Message(); 
                       ?>
                    <?php echo SuccessMessage(); ?>

               



            </div>

        </div>
    </div>











</body>

</html>
