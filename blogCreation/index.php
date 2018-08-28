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
            <div class="col-md-2"></div>
            <div class="col-md-8">

<?php

require_once('variables.php');
$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');
// build query
$query = "SELECT * FROM blog WHERE approved=1";

// send to database
$result = mysqli_query($dbconnection, $query) or die ('query failed');

while($found = mysqli_fetch_array($result)) {

    echo'<h3>'.$found['name'].'</h3>';
    echo '<h4>';
    echo $found['topic'];
    echo '</h4>';
    echo '<p>';
    echo $found['comment'].'<br>'.$found['date'];
    echo '</p>';
}
// close collection
mysqli_close($dbconnection);

?>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

</body>
</html>