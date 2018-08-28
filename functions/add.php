<?php
require_once('variables.php');
// connection
$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');


//after submit form
if (isset($_GET['submit'])){


	$first = $_GET['firstName'];
	$last = $_GET['lastName'];
	$submission = date("Y/m/d");
	$why = $_GET['why'];


	$query = "INSERT INTO angry (first, last, submission, why) VALUES ('$first', '$last', '$submission', '$why')";
	$result = mysqli_query($dbconnection, $query) or die ('query failed');

	echo 'Your anger has been added to the database. <a class="btn btn-primary" href="index.php">Home</a>';
	mysqli_close($dbconnection);
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

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
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
				<form action="add.php" method="GET" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" name="firstName" class="form-control" id="firstName" placeholder="First Name">
					</div>
					<div class="form-group">
                        <label for="firstName">Last Name</label>
                        <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last Name">
					</div>
					
                    <div class="form-group">
                        <label for="why">What are you angry about?</label>
                        <input type="text" name="why" class="form-control" id="why" placeholder="...">
                    </div>
 
                    <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>

</body>
</html>