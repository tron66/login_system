<?php
if (isset($_POST['submit'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $message = $_POST['message'];
  $email = $_POST['email'];

  $to = "james@gmail.com";
  $subject = "My website contact form";
  $header = "From: ".$email;
  $txt = "You have recived an email from ".$firstname." ".$lastname.".\n\n".$message;

  mail($to, $subject, $txt, $header);
  header("Location: index.php?mailsent");
}
 ?>
