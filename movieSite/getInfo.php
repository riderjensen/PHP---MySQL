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
                <h1>Directory</h1>
<?php

$id=$_GET['id'];

require_once('variables.php');
$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');
$query = "SELECT * FROM movies WHERE id=$id";

// send to database
$result = mysqli_query($dbconnection, $query) or die ('query failed');

while($row = mysqli_fetch_array($result)) {
    echo '<br><br><br>';
    echo '<img src="posters/'.$row['photo'].'"/>';
    echo '<p>';
    echo $row['title'] .' --- '. $row['rating'];
    echo '</p>';
    echo '<p>';
    echo $row['description'];
    echo '</p>';
    echo '<a class="btn btn-primary" href="submitComment.php?id='.$row['id'].'">Submit a Comment</a>';
}


?>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">

             <?php
                    $movieID = $_GET['id'];

                    require_once('variables.php');
                    $dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');
                    $query = "SELECT * from comments WHERE movieID=$movieID";
                    // send to database
                    $result = mysqli_query($dbconnection, $query) or die ('query failed');
                    echo '<ul>';
                    while($found = mysqli_fetch_array($result)) {

                        echo'<li>User: '.$found['userName'].' - Rating: '. $found['rating'].' - Comment: '.$found['text'].'</li>';

                    }
                    echo '</ul>';
                    // close collection
                    mysqli_close($dbconnection);
                ?>
            </div>
            <div class="col-md-2"></div>
            </div>

       
    </div>

</body>
</html>