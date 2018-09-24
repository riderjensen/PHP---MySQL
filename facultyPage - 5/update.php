
<?php

if( isset($_GET['id'])){

    $id = $_GET['id'];


// connection
$dbconnection = mysqli_connect('localhost','riderjen_3760usr','Ilikecheese3!','riderjen_3760test') or die ('connection failed');
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
<div class="container">
    
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="update2.php" method="GET" enctype="multipart/form-data">
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
                            <input type="text" name="department" class="form-control" value="<?php echo $found['dept'] ?>" id="textfieldInput">
                        </div>
                        <div class="form-group">
                                <label for="textfieldInput">Phone Number</label>
                                <input type="text" name="phone" class="form-control" value="<?php echo $found['phone'] ?>" id="textfieldInput">
                            </div>
                            <input name="id" value="<?php echo $found['id']; ?>" type="hidden">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>