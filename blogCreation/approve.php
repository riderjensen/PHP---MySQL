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
<?php

    require_once('auth.php');

    $id = $_GET['id'];
    require_once('variables.php');
    $dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');

    $query = "UPDATE blog SET approved='1'WHERE id='$id'";

    // send to database
    $result = mysqli_query($dbconnection, $query) or die ('query failed');
    mysqli_close($dbconnection);   

    require_once('navBar.php');
    echo "Item has been approved.";
    echo '<br><a class="btn btn-primary" href="admin.php">Admin Page</a>';
    


?>