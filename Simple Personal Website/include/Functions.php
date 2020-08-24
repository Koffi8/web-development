<?php require_once("include/DB.php");?>
<?php require_once("include/sessions.php");?>
 

 <?php 

 function Redirect_to($New_Location){
     header ("Location:".$New_Location);
     exit;
 }



?>