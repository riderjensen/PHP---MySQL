<<<<<<< Updated upstream
<?php

require_once('auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Blog</title>

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
                <h1>Control Employees</h1>
                <?php
require_once('variables.php');
$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');
$query = "SELECT * FROM special";

// send to database
$result = mysqli_query($dbconnection, $query) or die ('query failed');
echo '<a class="btn btn-primary" href="submit.php">Submit New</a><br><br>';
while($row = mysqli_fetch_array($result)) {
    echo '<p>';
    echo $row['name'] .', '. $row['expertise'] .' - '. $row['phone'].' - '. $row['email'];
    echo '</p>';
    echo '<p>';
    echo '<a class="btn btn-primary" href="update.php?id='.$row['id'].'">Update</a>   ';
    echo '<a class="btn btn-primary" href="delete.php?id='.$row['id'].'">Delete</a>   ';
    
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
=======
<?php

require_once('auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Blog</title>

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
                <h1>Control Employees</h1>
                <?php
require_once('variables.php');
$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');
$query = "SELECT * FROM special";

// send to database
$result = mysqli_query($dbconnection, $query) or die ('query failed');
echo '<a class="btn btn-primary" href="submit.php">Submit New</a><br><br>';
while($row = mysqli_fetch_array($result)) {
    echo '<p>';
    echo $row['name'] .', '. $row['expertise'] .' - '. $row['phone'].' - '. $row['email'];
    echo '</p>';
    echo '<p>';
    echo '<a class="btn btn-primary" href="update.php?id='.$row['id'].'">Update</a>   ';
    echo '<a class="btn btn-primary" href="delete.php?id='.$row['id'].'">Delete</a>   ';
    
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
>>>>>>> Stashed changes
</html>