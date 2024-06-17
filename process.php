<?php
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'fuzesasa1@gmail.com';
    $subject = 'Message from Join Us form';
    $body = "First Name: $firstName\nLast Name: $lastName\nEmail: $email\nMessage: $message";

    mail($to, $subject, $body);
    echo "Message sent successfully!";
    header('Location: thanky.html');
  exit;
  }
?>