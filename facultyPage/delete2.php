
<?php

// connection
$dbconnection = mysqli_connect('localhost','root','','test') or die ('connection failed');

if (isset($_POST['submit'])){
    $empID = $_POST['id'];
    $empPhoto = $_POST['photo'];
    @unlink($_POST['photo']);
    $query = "DELETE FROM employee_simple WHERE id = $empID";
    $result = mysqli_query($dbconnection, $query) or die ('query failed');

    // redirect
    //
    //
    // Need to add in an actual URL to this page
    header("Location: ");

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
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Menu</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
    
            <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="index.html">Directory</a>
                            </li>
                <li class="nav-item">
                <a class="nav-link" href="submit.html">Submit Information</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#">Delete Employees</a>
                        </li>
                
            </ul>
            </div>
        </div>
        </nav>


<div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1>Delete An Employee</h1>
<?php

$id = $_GET['id'];


// build query
$query = "SELECT * FROM employee_simple WHERE id=$id";

// send to database
$result = mysqli_query($dbconnection, $query) or die ('query failed');

$found = mysqli_fetch_array($result);

echo'<h2>'.$found['first'] .' '. $found['last'].'</h2>';
echo '<p>';
echo $found['dept'].'<br>'.$found['phone'];
echo '</p>';
// close collection
mysqli_close($dbconnection);

?>

<form action="delete2.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                    <input type="hidden" name="photo" value="employees/<?php $found['photo']?>">
                    <input type="hidden" name="id" value="<?php $found['id']?>">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Delete</button>
                    </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

</body>
</html>