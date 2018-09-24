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
                <h1>Current Movies</h1>
<?php
require_once('variables.php');
$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');
$query = "SELECT * FROM movies";

// send to database
$result = mysqli_query($dbconnection, $query) or die ('query failed');

while($row = mysqli_fetch_array($result)) {

    echo '<br><br><br>';
    echo '<div class="card">';
	echo '<div class="card-body">';
    echo '<img style="float: left; max-width: 200px; margin: 30px;" src="posters/'.$row['photo'].'"/>';
    echo '<h3>';
    echo $row['title'];
    echo '</h3>';
    echo '<h5>';
    echo 'Rating: '. $row['rating'];
    echo '</h5>';
    echo '<p>';
    echo $row['description'];
    echo '</p>';
    echo '<p>';
    echo '<a class="btn btn-primary" href="getInfo.php?id='.$row['id'].'">View/Submit Comments</a>';
    echo '</p>';
    echo '</div>';
	echo '</div>';
    

	
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