<?php

$from = "lmorgans90@gmail.com";
$to = "lmorgans90@gmail.com";
$name = Trim(stripslashes ($_POST['name']));
$email = Trim(stripslashes ($_POST['emailAdd']));
$phone = Trim(stripslashes ($_POST['telephone']));
$subject = Trim(stripslashes ($_POST['subject']));
$message = Trim(stripslashes ($_POST['message']));


$body = "";
$body .="Name: ";
$body .=$name;
$body .="\n";
$body .="Email:";
$body .=$email;
$body .="\n";
$body .="Phone: ";
$body .=$phone;
$body .="\n";
$body .="Subject";
$body .=$subject;
$body .="\n";
$body .="Message:";
$body .=$message;
$body .="\n";



$sendMail = mail($to, $subject, $body, "From:<$from>");

?>

<html>
    <head>
        <style>
          
          
          body {
           background-color: #FAFAFA;
            font-family: Lucida grande;
    src:url(Fonts/Lucida%20grande.ttf);
            
          }
          
          #message {
            width: 500px;
            height: 300px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            border: 0.1px solid #5DADE2;
            border-radius: 5px;
            background-color: #F3F3F4;
            padding: 10px;
            box-shadow:  0 0 20px 0 #5DADE2;
            margin-top: 55px;
            
          }
          
          
      </style>
    </head>
    <body>
        <div id="message">
        
            <h1>Your message has been sent successfully.</h1>
            <p>You will be taken back to the home page in 5 seconds.</p>
        
        
        
        </div>
        
        <script type="text/javascript">
        
        
            setTimeout(function(){ 
                
                window.location = "http://accounting-com.stackstaging.com/"; }, 5000);
        
        </script>
        
        
        
    </body> 

  
</html>