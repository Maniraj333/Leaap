
 <?php
 $name= $_post['name'];
 $visitor_email= $_post['email'];
  $message = $_post['message'];
 
 $email_form= 'maniraj6soundararajan@gmail.com';
 
 $email_subject = 'New Form Submission';
 
 $email_body= "User Name: $name.\n".
              "User Email: $visitor-email.\n".
			  "User Message: $message.\n";
			  
			  
$to = 'maniraj6143@gmail.com';		

  $headers = "Form: $email_from \r\n";	  
  
  $headers = "Reply-To: $visitor_email \r\n";
  
  mail($to,$email_subject,$email_body,$headers);
  
  header("Loction:contact.html");
 ?>