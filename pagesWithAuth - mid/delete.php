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
                <h1>Delete Employees</h1>
<?php

$id = $_GET['id'];

// connection
require_once('variables.php');
$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');
// build query
$query = "SELECT * FROM special WHERE id='$id'";

// send to database
$result = mysqli_query($dbconnection, $query) or die ('query failed');

while($row = mysqli_fetch_array($result)) {
    echo '<p>';
    echo $row['name'] .', '. $row['expertise'] .' - '. $row['phone'].' - '. $row['email'];
    echo '</p>';
    echo '<p>';
    echo $row['bio'];
    echo '</p>';
    echo '<p>';
    echo '<a href="delete2.php?id='.$id.'" class="btn btn-primary">Delete?</a>';
}

// close collection
mysqli_close($dbconnection);

?>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

</body>
</html>