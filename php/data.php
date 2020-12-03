<?php
  $name=$_post['name'];
  $visitor_email=$_post['email'];
  $message=$_post['feedack'];

$email_from="croy09081993@gmail.com";

$email_subject="New form submission";

$email_from="User Name: $name.\n".
             "User E-mail: $visitor_email.\n".
             "User Feedback: $message.\n";

             $to = "croy09081993@gmail.com";

           $headers = "From: $email_from \r\n";   

           $headers = "Reply-To: $visitor_email \r\n"; 
    mail($to, $email_subject, $email_body, $headers);
    header("Location: index.html");

?>