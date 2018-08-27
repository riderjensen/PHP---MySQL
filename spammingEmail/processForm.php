<?php


$email = $_GET['email'];
$firstName = $_GET['firstName'];
$lastName = $_GET['lastName'];

// connect

//$dbconnection = mysqli_connect('localhost','root','','test') or die ('connection failed');
$dbconnection = mysqli_connect('localhost','riderjen_3760usr','Ilikecheese3!','riderjen_3760test') or die ('connection failed');
// query
$query = "INSERT INTO newsletter (email, first, last) VALUES ('$email','$firstName','$lastName')";
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
<p>Thank you <?php echo $firstName;?> for submitting your form.<p>

</body>
</html>