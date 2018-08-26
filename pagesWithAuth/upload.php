<?php
// auth
require_once('auth.php');

$name = $_GET['name'];
$expertise = $_GET['expertise'];
$phone = $_GET['phone'];
$email = $_GET['email'];
$bio = $_GET['bio'];
$photo = $_GET['photo'];


// EXTENSION BROKEN
$path = $_FILES['photo']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);

echo $ext;

$filename = $name.time() .'.'. $ext;
echo $filename;
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
    require_once('variables.php');
    $dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');
    // query
    $query = "INSERT INTO special (name, expertise, phone, email, bio, photo) VALUES ('$name','$expertise','$phone','$email','$bio','$filename')";
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
    echo '<a href="submit.php" class="btn btn-primary"> Please try again</a>';
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
<?php
include_once('navBar.php');
?>

<body>
<h1>Posted to the database!</h1>
<p>Thank you for submitting your information.<p>

<?php
echo $name;
echo '<img src="'.$filepath.$filename.'" alt="photo" />';

?>

</body>
</html>