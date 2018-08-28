<?php
require_once('protect.php');

$movieID = $_GET['id'];

require_once('variables.php');
$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');


//after posting
if (isset($_GET['submit'])){

    $newID = $_GET['movieID'];
    $text = $_GET['textfield'];

	$query = "INSERT INTO comments (movieID, text) VALUES ('$newID','$text')";
    // send to database
    $result = mysqli_query($dbconnection, $query) or die ('query failed');
    // end connection
    mysqli_close($dbconnection);
    echo 'Message is inserted. <a href="viewComments.php?id='.$newID.'">View Comments</a>';
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
                            <input type="textbox" name="textfield" class="form-control" id="textfieldInput" placeholder="Message">
                        </div>
                        <input type="hidden" name="movieID" value="<?php echo $movieID; ?>">
                        <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

</body>
</html>