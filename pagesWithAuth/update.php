<<<<<<< Updated upstream

<?php

if( isset($_GET['id'])){

    $id = $_GET['id'];
    require_once('variables.php');
    $dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');
// build query
$query = "SELECT * FROM special WHERE id=$id";

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
                        <label for="subject">Name</label>
                        <input type="text" name="name" value="<?php echo $found['name'] ?>" class="form-control" id="subject">
                    </div>
                    <div class="form-group">
                        <label for="textfieldInput">Expertise</label>
                        <input type="text" name="expertise" class="form-control" value="<?php echo $found['expertise'] ?>" id="textfieldInput">
                    </div>
                    <div class="form-group">
                            <label for="textfieldInput">Phone</label>
                            <input type="text" name="phone" class="form-control" value="<?php echo $found['phone'] ?>" id="textfieldInput">
                        </div>
                        <div class="form-group">
                                <label for="textfieldInput">Email</label>
                                <input type="text" name="email" class="form-control" value="<?php echo $found['email'] ?>" id="textfieldInput">
                            </div>
                            <div class="form-group">
                                <label for="textfieldInput">Bio</label>
                                <input type="text" name="bio" class="form-control" value="<?php echo $found['bio'] ?>" id="textfieldInput">
                            </div>
                            <input name="id" value="<?php echo $found['id'] ?>" type="hidden">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


</body>
=======

<?php

if( isset($_GET['id'])){

    $id = $_GET['id'];
    require_once('variables.php');
    $dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');
// build query
$query = "SELECT * FROM special WHERE id=$id";

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
                        <label for="subject">Name</label>
                        <input type="text" name="name" value="<?php echo $found['name'] ?>" class="form-control" id="subject">
                    </div>
                    <div class="form-group">
                        <label for="textfieldInput">Expertise</label>
                        <input type="text" name="expertise" class="form-control" value="<?php echo $found['expertise'] ?>" id="textfieldInput">
                    </div>
                    <div class="form-group">
                            <label for="textfieldInput">Phone</label>
                            <input type="text" name="phone" class="form-control" value="<?php echo $found['phone'] ?>" id="textfieldInput">
                        </div>
                        <div class="form-group">
                                <label for="textfieldInput">Email</label>
                                <input type="text" name="email" class="form-control" value="<?php echo $found['email'] ?>" id="textfieldInput">
                            </div>
                            <div class="form-group">
                                <label for="textfieldInput">Bio</label>
                                <input type="text" name="bio" class="form-control" value="<?php echo $found['bio'] ?>" id="textfieldInput">
                            </div>
                            <input name="id" value="<?php echo $found['id'] ?>" type="hidden">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


</body>
>>>>>>> Stashed changes
</html>