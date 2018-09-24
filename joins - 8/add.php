<?php
$message = '';
require_once('variables.php');
// connection
$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');
$query = "SELECT * FROM race";
$resultRace = mysqli_query($dbconnection, $query) or die ('query failed');

$query = "SELECT * FROM raids";
$resultRaids = mysqli_query($dbconnection, $query) or die ('query failed');



//after submit form
if (isset($_GET['submit'])){
	$name = $_GET['charName'];
	$gender = $_GET['gender'];
	$level = $_GET['level'];
	$race = $_GET['race'];
	$raids = $_GET['raid'];
	$query = "INSERT INTO guy (name, level, gender, race) VALUES ('$name', '$level', '$gender', '$race')";
	$result = mysqli_query($dbconnection, $query) or die ('query failed');

	// this needs to add raids to something
	//id the user just added
	$recentID = mysqli_insert_id($dbconnection);
	
	// loop through the array that contains all the raids selected
	foreach($_GET['raid'] as $raidInst) {
		$query = "INSERT INTO raids (user, com) VALUES ('$recentID', '$raidInst')";
		$result = mysqli_query($dbconnection, $query) or die ('query failed');

	};
	echo 'User added to the database. <a class="btn btn-primary" href="index.php">Home</a>';
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
                        <label for="charName">Character Name</label>
                        <input type="text" name="charName" class="form-control" id="charName" placeholder="Name">
					</div>
					<div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="radio1" value="1" checked>
                        <label class="form-check-label" for="radio1">Male</label>
                    </div>
					<div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="radio2" value="2">
                        <label class="form-check-label" for="radio2">Female</label>
                    </div>
                    <div class="form-group">
                        <label for="level">Level</label>
                        <input type="text" name="level" class="form-control" id="level" placeholder="Level">
                    </div>
                    <div class="form-group">
						<label for="raceSelect">Race</label>
                        <select class="form-control" id="raceSelect" name="race">
						<?php
						while($row = mysqli_fetch_array($resultRace)){
							echo '<option value="'.$row['raceid'].'">'.$row['raceType'].'</option>';
						};
						?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="expCheck">Raids Completed</label>							

							<br><label><input value="lfr" name="raid[]" type="checkbox">  LFR</label>
							<br><label><input value="normal" name="raid[]" type="checkbox">  Normal</label>
							<br><label><input value="heroic" name="raid[]" type="checkbox">  Heroic</label>
							<br><label><input value="mythic" name="raid[]" type="checkbox">  Mythic</label>
                        </select>
                    </div>

 
                    <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>

</body>
</html>