<?php
  $fname = $_POST['first_name'];
  $lname = $_POST['last_name'];
  $email = $_POST['email'];
  $phone = $_POST['telephone'];
  $message = $_POST['comments'];
  $from = 'noreply@expandnwa.com'; 
  $to = 'urbcat99@gmail.com'; 
  $subject = 'Message from Your Website';
  
  $body = 
  "From: $fname $lname \n 
  E-Mail: $email\n 
  Phone Number: $phone\n
  Dear, $toname\n
  Message:\n $message";
  
  
  $emailto = 'urbcat99@gmail.com';// change this
  $toname = 'Mike and Katherine';
  $emailfrom = 'noreply@expandnwa.com';// change this
  $fromname = $fname . " " . $lname;
  $subject = 'New Email From Your Website';
  $messagebody = $body;
  $headers = 
  'Return-Path: ' . $emailfrom . "\r\n" . 
  'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" . 
  'X-Priority: 3' . "\r\n" . 
  'X-Mailer: PHP ' . phpversion() .  "\r\n" . 
  'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
  'MIME-Version: 1.0' . "\r\n" . 
  'Content-Transfer-Encoding: 8bit' . "\r\n" . 
  'Content-Type: text/plain; charset=UTF-8' . "\r\n";
  $params = '-f ' . $emailfrom;
  $test = mail($emailto, $subject, $messagebody, $headers, $params);
  // $test should be TRUE if the mail function is called correctly


  //THIS TELLS THE WEBISTE TO NOT REDIRECT
  if(isset($_SERVER['HTTP_REFERER'])){
    header("Location: " . $_SERVER['HTTP_REFERER']);    
    } else {
    echo "An Error";
  }
?>