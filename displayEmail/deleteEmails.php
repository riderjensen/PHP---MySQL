<<<<<<< Updated upstream
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>

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
        <a class="nav-link" href="#">Home</a>
      </li>
    </ul>
  </div>
</nav>


        <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <h1>Delete emails from the database</h1>
                            <form action="deleteEmails.php" method="GET" enctype="multipart/form-data">
                                
<?php

$dbconnection = mysqli_connect('localhost','riderjen_3760usr','Ilikecheese3!','riderjen_3760test') or die ('connection failed');

// delete the code
if (isset($_GET['submit'])) {
    foreach($_GET['emailArray'] as $deleteId){
        $myQuery = "DELETE FROM newsletter WHERE id=$deleteId";
        $result = mysqli_query($dbconnection, $myQuery) or die ('query failed');
    }; //end for each
}; // end if

// query and select all information from newsletter db
$query = "SELECT * FROM newsletter";

$result = mysqli_query($dbconnection, $query) or die ('query failed');

// display records
while($row = mysqli_fetch_array($result)) {
    echo '<label>';
    echo '<div class="form-group"><input type="checkbox" class="form-control" value="'.$row['id'].'" name="emailArray[]" /></div>';
    echo $row['first'] .' '. $row['last'] .' - '. $row['email'];
    echo '</label>';
}

// close it
mysqli_close($dbconnection);
?>


                                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                            </form>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
    
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>

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
        <a class="nav-link" href="#">Home</a>
      </li>
    </ul>
  </div>
</nav>


        <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <h1>Delete emails from the database</h1>
                            <form action="deleteEmails.php" method="GET" enctype="multipart/form-data">
                                
<?php

$dbconnection = mysqli_connect('localhost','riderjen_3760usr','Ilikecheese3!','riderjen_3760test') or die ('connection failed');

// delete the code
if (isset($_GET['submit'])) {
    foreach($_GET['emailArray'] as $deleteId){
        $myQuery = "DELETE FROM newsletter WHERE id=$deleteId";
        $result = mysqli_query($dbconnection, $myQuery) or die ('query failed');
    }; //end for each
}; // end if

// query and select all information from newsletter db
$query = "SELECT * FROM newsletter";

$result = mysqli_query($dbconnection, $query) or die ('query failed');

// display records
while($row = mysqli_fetch_array($result)) {
    echo '<label>';
    echo '<div class="form-group"><input type="checkbox" class="form-control" value="'.$row['id'].'" name="emailArray[]" /></div>';
    echo $row['first'] .' '. $row['last'] .' - '. $row['email'];
    echo '</label>';
}

// close it
mysqli_close($dbconnection);
?>


                                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                            </form>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
    
</body>
>>>>>>> Stashed changes
</html>