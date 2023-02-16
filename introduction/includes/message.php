<?php

if (isset($_POST['submit'])) {
  
  $name = "name: " . $_POST['name'] . "<br>";
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = "message: " . $_POST['message'];
  $myemail = "mehdi.0.saadi@gmail.com";

  if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    header("Location: ../index.php?error:emptyfields");
    exit();
  } else {
    mail($myemail, $subject, "$name $message", "From: $email");
    header("Location: ../index.php?success:messagesent");
    exit();
  }

} else {
  header("Location: ../index.php?error:accessforbidden");
  exit();
}
