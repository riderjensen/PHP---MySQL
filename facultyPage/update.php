
<?php

if( isset($_GET['id'])){

    $id = $_GET['id'];


// build query
$query = "SELECT * FROM employee_simple WHERE id=$id";

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

<body>
<div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="update.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="subject">First Name</label>
                        <input type="text" name="firstName" value="<?php echo $found['first'] ?>" class="form-control" id="subject">
                    </div>
                    <div class="form-group">
                        <label for="textfieldInput">Last Name</label>
                        <input type="text" name="lastName" class="form-control" value="<?php echo $found['last'] ?>" id="textfieldInput">
                    </div>
                    <div class="form-group">
                            <label for="textfieldInput">Department</label>
                            <input type="text" name="department" class="form-control" value="<?php echo $found['department'] ?>" id="textfieldInput">
                        </div>
                        <div class="form-group">
                                <label for="textfieldInput">Phone Number</label>
                                <input type="text" name="phone" class="form-control" value="<?php echo $found['phone'] ?>" id="textfieldInput">
                            </div>
                            <input name="id" value="<?php $found['id'] ?>" type="hidden">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
<?php

if(isset($_POST['id'])){

}

$id = $_POST['id'];

$first = $_GET['firstName'];
    $last = $_GET['lastName'];
    $department = $_GET['department'];
    $phone = $_GET['phone'];

    $dbconnection = mysqli_connect('localhost','root','','test') or die ('connection failed');
    $query = "UPDATE employee_simple SET first='$first', last='$last', department='$department', phone='$phone' WHERE id='$id'";

    // send to database
    $result = mysqli_query($dbconnection, $query) or die ('query failed');
    mysqli_close($dbconnection);


?>

</body>
</html>