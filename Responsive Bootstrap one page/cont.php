<!doctype html>
<html>
    <head>
        <title>Contact us</title>
    </head>
    <body>
        <div id="container">
            <div class="row">
                <div class="col-sm-offset-1 col-sm-10 contactForm">
                    
                    
                    
                    
                    <a class="btn btn-primary btn-lg btn-general btn-white" href="#" role="button">Send Message</a>
                    $errors.= $missingName;
                    
                    $errors.= $missingMessage;$errors .= $missingEmail;$errors = '<p>Please enter your phone number'; 
                </div>
            </div>
        </div>
    </body>
</html>
if($errors){<div class="col-md-6">
        $resultMessage = '<div class="alert alert-danger">'.$errors.'</div>';
        echo $resultMessage;
    }
    