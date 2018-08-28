
<?php
require_once('auth.php');
require_once('variables.php');

// connection
$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');

if (isset($_POST['submit'])){
    $empID = $_POST['id'];
    $empPhoto = $_POST['photo'];
    @unlink($_POST['photo']);
    $query = "DELETE FROM special WHERE id = $empID";
    $result = mysqli_query($dbconnection, $query) or die ('query failed');

    // redirect
    //
    //
    // Need to add in an actual URL to this page
    header("Location: index.php");

    exit;
}


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
                <h1>Employee has been deleted</h1>
                <a href="admin.php" class="btn btn-primary">Home</a>
<?php

$id = $_GET['id'];

require_once('variables.php');
$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');

// delete
$query = "DELETE FROM special WHERE id = '$id'";
$result = mysqli_query($dbconnection, $query) or die ('query failed');


// close
mysqli_close($dbconnection);
?>

            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

</body>
</html>