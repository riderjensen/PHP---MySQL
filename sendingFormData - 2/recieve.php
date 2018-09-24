<?php
$email = $_GET['email'];
$password = $_GET['password'];
$drinks = $_GET['drinks'];
$toes = $_GET['toes'];
$radio = $_GET['exampleRadios'];

// Build the email
$email = 'riderjensen@gmail.com';
$to = 'riderjensen@gmail.com';
$subject = 'Form Submission';
$msg = "New Sign Up: $email has submitted a sign up with password: $password. They have $toes toes and they are a $radio. And will be having $drinks drinks. ";

mail($to, $subject, $msg, 'FROM:'.$email);
?>

<h1>Thank you for your submission</h1>
<p>We have sent your information to our administrator.</p>