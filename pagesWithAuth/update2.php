<?php
require_once('auth.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Information Request</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
crossorigin="anonymous">
</head>
<body>
<?php
include_once('navBar.php');
?>


<div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1>Employee is updated</h1>
<?php

$id = $_GET['id'];


$name = $_GET['name'];
$expertise = $_GET['expertise'];
$phone = $_GET['phone'];
$email = $_GET['email'];
$bio = $_GET['bio']; 

require_once('variables.php');
$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');

// update
$query = "UPDATE special SET name='$name', expertise='$expertise', phone='$phone', email='$email', bio='$bio' WHERE id='$id'";
$result = mysqli_query($dbconnection, $query) or die ('query failed');



$queryNew = "SELECT * FROM special WHERE id='$id'";

// send to database
$result = mysqli_query($dbconnection, $queryNew) or die ('query failed');
while($row = mysqli_fetch_array($result)) {
    echo '<p>';
    echo $row['name'] .', '. $row['expertise'] .' - '. $row['phone'].' - '. $row['email'];
    echo '</p>';
    echo '<p>';
    echo $row['bio'];
    echo '</p>';
}

// close
mysqli_close($dbconnection);
?>
                </div>
            <div class="col-md-4"></div>
        </div>
    </div>


</body>
</html>