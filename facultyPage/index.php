<<<<<<< Updated upstream
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
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Menu</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Directory
            <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
    
            <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="#">Directory</a>
                            </li>
                <li class="nav-item">
                <a class="nav-link" href="submit.html">Submit Information</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="delete.php">Delete Employees</a>
                        </li>
                
            </ul>
            </div>
        </div>
        </nav>


<div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
<?php
$dbconnection = mysqli_connect('localhost','root','','test') or die ('connection failed');
$query = "SELECT * FROM employee_simple ORDER BY last ASC";

// send to database
$result = mysqli_query($dbconnection, $query) or die ('query failed');

while($row = mysqli_fetch_array($result)) {
    echo '<p>';
    echo $row['last'] .', '. $row['first'] .' - '. $row['department'];
    echo '<a href="update.php?id='.$row[id].'"> Update</a>';
    echo '</p>';
}

// close collection
mysqli_close($dbconnection);

?>
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
<title>Information Request</title>

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
<?php
$dbconnection = mysqli_connect('localhost','riderjen_3760usr','Ilikecheese3!','riderjen_3760test') or die ('connection failed');
$query = "SELECT * FROM employee_simple ORDER BY last ASC";

// send to database
$result = mysqli_query($dbconnection, $query) or die ('query failed');

while($row = mysqli_fetch_array($result)) {
    echo '<p>';
    echo $row['last'] .', '. $row['first'] .' - '. $row['department'];
    echo '<a href="update.php?id='.$row[id].'"> Update</a>';
    echo '<p>Department: '.$row['dept'].'</p>';
    echo '<p>Phone: '.$row['phone'].'</p>';
    echo '<img src="employees/'.$row['photo'].'"></img>';
    echo '</p>';
}

// close collection
mysqli_close($dbconnection);

?>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

</body>
>>>>>>> Stashed changes
</html>