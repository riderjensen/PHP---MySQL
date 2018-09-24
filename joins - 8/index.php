<?php

$queryaddition = '';
if (isset($_GET[id])){
	$queryaddition = "WHERE race=$_GET[id]";
}

// query db and display all people 
require_once('variables.php');
$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');

$query = "SELECT * FROM guy INNER JOIN race ON (guy.race = race.raceid) $queryaddition";
$result = mysqli_query($dbconnection, $query) or die ('query failed');



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title></title>

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
				<h1>List of people</h1>
				<?php

				if(mysqli_num_rows($result) == 0) {
					echo '<p>No results were found.</p>';
				}
				while($row = mysqli_fetch_array($result)) {
					echo '<div class="card">';
					echo '<div class="card-body">';
					echo '<h4>Name: '.$row['name'].'</h4>';
					echo ($row['level'] < 50 ? '<h6>Level '.$row['level'].' noob!</h6>' : '<h4>Level '.$row['level'].' hero!</h4>');
					echo ($row['gender'] == 1 ? '<p>Gender: Male.</p>' : '<p>Gender: Female.</p>');
					echo '<p>'.$row['race'].'</p>';
					echo ($row['gender'] == 1 ? '<p>Possible raids he has completed:</p>' : '<p>Possible raids she has completed:</p>');
				
					$theid = $row['id'];
					echo '<ul>';
					$newQuery = "SELECT * FROM raids INNER JOIN guy ON (raids.user = guy.id) WHERE id=$theid";
					$newResult = mysqli_query($dbconnection, $newQuery) or die ('query failed');
					while($row2 = mysqli_fetch_array($newResult)) {
						echo '<li>'.$row2['com'].'</li>';
					}
					echo '</ul>';
					echo '</div>';
					echo '</div>';
					echo '<br>';
				}
				// close collection
				mysqli_close($dbconnection);	

				?>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>

</body>
</html>