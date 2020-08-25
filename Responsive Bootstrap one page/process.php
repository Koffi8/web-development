


<div class="col-md-6">


    <div id="contact-right">
        <h3>Contact us</h3>

   

        <form action="process.php " method="post">
 
            <input type="text" name="name" id="name" placeholder="Full-Name" class="form-control">
            <input type="text" name="email" id="email" placeholder="Email" class="form-control">
            <input type="text" name="phone" id="phone" placeholder="Phone-Number" class="form-control">
            <textarea rows="5" name="message" id="message" placeholder="message....." class="form-control"></textarea>

            <div id="send-btn">

                <input type="submit" name="submit" class="btn btn-success btn-lg" value="Send Message">
            </div>
        </form>



    </div>
</div>





<?php

//chect if the user has submited the form
//check for errors



$name = $_POST["name"];
$email = $_POST["email"];

$phone = $_POST["phone"];
$message = $_POST["message"];
$missingName ='<p><strong>Please enter you name !</strong></p>';
$missingEmail = '<p><strong>Please enter you Email address!</strong></p>';
$missingMessage ='<p><strong>Please enter you message</strong></p>';
$invalidEmail ='<p><strong>Please enter a valid email address!</strong></p>';

if($_POST["submit"]){
    if(!$name){
        $errors.= $missingName;
    }else{
        $name = filter_var($name,FILTER_SANITIZE_STRING);
    }
    if(!$email){
        $errors .= $missingEmail;
    }else{
        $email = filter_var($email,FILTER_SANITIZE_EMAIL);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors .=$invalidEmail;
        }
    }
    if(!$message){
        $errors.= $missingMessage;
    }else{
        $message = filter_var($message, FILTER_SANITIZE_STRING);
    }
    if(!$phone){
        $errors .= '<p>Please enter your phone number'; 
   
    }
    
    if($errors){
        $resultMessage = '<div class="alert alert-danger">'.$errors.'</div>';
        echo $resultMessage;
    }
}

?>




