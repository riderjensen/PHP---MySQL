<?php
require_once('protect.php');

$movieID = $_GET['id'];

require_once('variables.php');
$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');


//after posting
if (isset($_GET['submit'])){

	$newID = mysqli_real_escape_string($dbconnection, trim($_GET['movieID']));
	$text = mysqli_real_escape_string($dbconnection, trim($_GET['textfield']));
	$user = mysqli_real_escape_string($dbconnection, trim($_GET['userName']));
	$rating = mysqli_real_escape_string($dbconnection, trim($_GET['rating']));

    // $newID = $_GET['movieID'];
    // $text = $_GET['textfield'];
    // $user = $_GET['userName'];
    // $rating = $_GET['rating'];

	$query = "INSERT INTO comments (movieID, text, userName, rating) VALUES ('$newID','$text', '$user', '$rating')";
    // send to database
    $result = mysqli_query($dbconnection, $query) or die ('query failed');
    // end connection
    mysqli_close($dbconnection);
    echo 'Message is inserted. <a href="getInfo.php?id='.$newID.'">View Comments</a>';
    exit();
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
<?php
include_once('navBar.php');
?>


<div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1>Submit a Comment</h1>
                <form action="submitComment.php" method="GET" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="textfieldInput">Message</label>
                            <input type="textbox" name="textfield" class="form-control" id="textfieldInput" placeholder="Message" required>
                        </div>
                        <div class="form-group">
                            <label for="textfieldInput">Rating (1-5)</label>
                            <input type="textbox" name="rating" class="form-control" id="rating" placeholder="Message" required>
                        </div>
                        <input type="hidden" name="movieID" value="<?php echo $movieID; ?>">
                        <input type="hidden" name="userName" value="<?php echo $_COOKIE['username']; ?>">
                        <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

</body>
</html>