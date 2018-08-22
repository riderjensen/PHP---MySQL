<?php
$email = $_GET['email'];
$password = $_GET['password'];
$drinks = $_GET['drinks'];
$toes = $_GET['toes'];
$radio = $_GET['exampleRadios'];

// connect
$dbconnection = mysqli_connect('localhost','riderjen_3760usr','****','riderjen_3760test') or die ('connection failed');
// query
$query = "INSERT INTO email_requests (email, password, drinks, toes, gender) VALUES ('$email','$password','$drinks','$toes','$radio')";
// send to database
$result = mysqli_query($dbconnection, $query) or die ('query failed');
// end connection
mysqli_close($dbconnection);
?>

<!DOCTYPE html>
<html lang="en">
<style>
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
</head>

<body>
<h1>Posted to the database!</h1>
<p>We will be in contact shortly<p>

</body>
</html>