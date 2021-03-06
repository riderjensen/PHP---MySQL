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
require_once('variables.php');
$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');
$query = "SELECT * FROM special";

// send to database
$result = mysqli_query($dbconnection, $query) or die ('query failed');

while($row = mysqli_fetch_array($result)) {
	echo '<div class="card">';
	echo '<div class="card-body">';
	echo '<img style="width: 100px;" src="employees/'.$row['pic'].'"></img>';
    echo '<p>';
    echo $row['name'] .', '. $row['expertise'] .' - '. $row['phone'].' - <a href="email.php?email='. $row['email'] .'">'. $row['email'] .'</a>';
    echo '</p>';
    echo '<p>';
    echo $row['bio'];
	echo '</p>';
	echo '</div>';
	echo '</div>';
	echo '<br>';
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