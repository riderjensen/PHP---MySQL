
<?php

if( isset($_GET['id'])){

    $id = $_GET['id'];
    require_once('variables.php');
    $dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');
// build query
$query = "SELECT * FROM movies WHERE id=$id";

// send to database
$result = mysqli_query($dbconnection, $query) or die ('query failed');

$found = mysqli_fetch_array($result);
// close collection
mysqli_close($dbconnection);   
}


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
<div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                 <form action="update2.php" method="GET" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="subject">Title</label>
                        <input type="text" name="title" value="<?php echo $found['title'] ?>" class="form-control" id="subject" placeholder="Title">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="movierating" id="rating1" value="G">
                        <label class="form-check-label" for="rating1">G</label>
                    </div>
					<div class="form-check">
                        <input class="form-check-input" type="radio" name="movierating" id="rating2" value="PG">
                        <label class="form-check-label" for="rating2">PG</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="movierating" id="rating3" value="PG-13">
                        <label class="form-check-label" for="rating3">PG-13</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="movierating" id="rating4" value="R">
                        <label class="form-check-label" for="rating4">R</label>
                    </div>
                    <div class="form-group">
                            <label for="textfieldInput">Description</label>
                            <input type="text" name="decription" class="form-control" value="<?php echo $found['description'] ?>" id="textfieldInput" placeholder="Description">
                        </div>
                        <input name="id" value="<?php echo $found['id'] ?>" type="hidden">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


</body>
</html>