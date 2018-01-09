<?php
// define variables and set to empty values
$nameErr = $emailErr = $messageErr = "";
$name = $email = $message = "";

$to = $subject = $emailBody = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["message"])) {
    $messageErr = "Message is required";
  } else {
    $message = test_input($_POST["message"]);
    $message = wordwrap($message,70);
  }
  
  $to = "marina.stvoric1@gmail.com";
  $subject = "Email from Immobilien website";
  $emailBody = $name . " " . $email . " Message: " . $message;
  mail($to, $subject, $emailBody);
  header("Location: ./contact-form-submit.php");
    
}


?>