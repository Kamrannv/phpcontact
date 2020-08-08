<?php

if (isset($_POST['submit'])){

 $firstname = $_POST['firstname'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];



    $email_from ='kamranamazov@yahoo.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
    			  "User Email:  $visitor_email.\n".
    			  "User Message: $message.\n".
    			  "User Phone: $phone.\n";

  	$to = "kamrannamazov94@gmail.com";

  	$headers = "From: $email_from \r\n";
  	$headers .="Reply-To: $visitor_email \r\n";

  	mail($to,$email_subject; $email_body,$headers);

  	header("Location: index.php?mailsend");

}

   



?> 

