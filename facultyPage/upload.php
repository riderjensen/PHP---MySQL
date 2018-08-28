<<<<<<< Updated upstream
<?php

$first = $_GET['firstName'];
$last = $_GET['lastName'];
$department = $_GET['department'];
$phone = $_GET['phone'];
$photo = $_GET['photo'];

$ext = pathinfo( $_FILES['photo']['name'], PATHINFO_EXTENSION);

$filename = $first. $last.time().'.'.$ext.'';
$filepath =  'employees/';

// make photo path and name

$validImage = true;
// check missing image
if ($_FILES['photo']['size'] == 0) {
    echo 'No image selected';
    $validImage = false;
};

// check too large of a size
if ($_FILES['photo']['size'] > 204800) {
    echo 'File too large, please make it less than 200KB';
    $validImage = false;
};

// check file type
if ($_FILES['photo']['type'] == 'image/gif' || $_FILES['photo']['type'] == 'image/jpeg' || $_FILES['photo']['type'] == 'image/pjpeg' || $_FILES['photo']['type'] == 'image/png') {
    // correct file
    // connect
    $dbconnection = mysqli_connect('localhost','root','','test') or die ('connection failed');
    // query
    $query = "INSERT INTO simple_employee (first, last, department, phone, photo) VALUES ('$first','$last','$department','$phone','$filename')";
    // send to database
    $result = mysqli_query($dbconnection, $query) or die ('query failed');
    // end connection
    mysqli_close($dbconnection);

} else {
    // incorrect file
    echo 'Wrong file type, we support JPEG, GIF, and GIF';
    $validImage = false;
};

if($validImage == true) {
    $tmp_name = $_FILES['photo']['tmp_name'];
    move_uploaded_file($tmp_name, "$filepath$filename");
    @unlink($_FILES['photo']['tmp_name']);
} else {
    // try again
    echo '<a href="submit.html" class="btn btn-primary"> Please try again</a>';
};

?>

<!DOCTYPE html>
<html lang="en">
<style>
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
</head>

<body>
<h1>Posted to the database!</h1>
<p>Thank you for submitting your information.<p>

<?php
echo $first $last;
echo '<img src="'.$filepath.$filename.'" alt="photo" />';

?>

</body>
=======
<?php

$first = $_POST['firstName'];
$last = $_POST['lastName'];
$department = $_POST['department'];
$phone = $_POST['phone'];
$photo = $_POST['photo'];


$ext = pathinfo( $_FILES['photo']['name'], PATHINFO_EXTENSION);

$filename = $first. $last.time().'.'.$ext.'';
$filepath =  'employees/';

// make photo path and name

$validImage = true;
// check missing image
if ($_FILES['photo']['size'] == 0) {
    echo 'No image selected';
    $validImage = false;
};

// check too large of a size
if ($_FILES['photo']['size'] > 204800) {
    echo 'File too large, please make it less than 200KB';
    $validImage = false;
};

// check file type
if ($_FILES['photo']['type'] == 'image/gif' || $_FILES['photo']['type'] == 'image/jpeg' || $_FILES['photo']['type'] == 'image/pjpeg' || $_FILES['photo']['type'] == 'image/png') {
    // correct file
    // connect
    $dbconnection = mysqli_connect('localhost','riderjen_3760usr','Ilikecheese3!','riderjen_3760test') or die ('connection failed');
    // query

    $query = "INSERT INTO employee_simple (first, last, dept, phone, photo) VALUES ('$first','$last','$department','$phone','$filename')";
    // send to database
    $result = mysqli_query($dbconnection, $query) or die ('query failed');
    // end connection
    mysqli_close($dbconnection);

} else {
    // incorrect file
    echo 'Wrong file type, we support JPEG, GIF, and GIF';
    $validImage = false;
};

if($validImage == true) {
    $tmp_name = $_FILES['photo']['tmp_name'];
    move_uploaded_file($tmp_name, "$filepath$filename");
    @unlink($_FILES['photo']['tmp_name']);
} else {
    // try again
    echo '<a href="submit.html" class="btn btn-primary"> Please try again</a>';
};

?>

<!DOCTYPE html>
<html lang="en">
<style>
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Directory</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="submit.html">Submit New</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="delete.php">Delete</a>
                    </li>
                  </ul>
                </div>
              </nav>
<h1>Posted to the database!</h1>
<p>Thank you for submitting your information.<p>

<?php
echo $first;
echo '<img src="'.$filepath.$filename.'" alt="photo" />';

?>

</body>
>>>>>>> Stashed changes
</html>