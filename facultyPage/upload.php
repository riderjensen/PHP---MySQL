<?php

$first = $_GET['firstName'];
$last = $_GET['lastName'];
$department = $_GET['department'];
$phone = $_GET['phone'];
$photo = $_GET['photo'];

$ext = pathinfo( $_FILES['photo']['name'], PATHINFO_EXTENSION);

$filename = $first. $last.time()'.'.$ext.'';
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
</html>