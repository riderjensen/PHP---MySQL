<?php

$queryaddition = '';
if (isset($_GET[id])){
	$queryaddition = "WHERE race=$_GET[id]";
}

// query db and display all people 
require_once('variables.php');
$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');

$query = "SELECT * FROM angry ORDER BY submission ASC";
$result = mysqli_query($dbconnection, $query) or die ('query failed');

function convertMonth($monthInc) {
	switch($monthInc){
		case '01':
		$b = 'January';
		break;
		case '02':
		$b = 'Febuary';
		break;
		case '03':
		$b = 'March';
		break;
		case '04':
		$b = 'April';
		break;
		case '05':
		$b = 'May';
		break;
		case '06':
		$b = 'June';
		break;
		case '07':
		$b = 'July';
		break;
		case '08':
		$b = 'August';
		break;
		case '09':
		$b = 'September';
		break;
		case '10':
		$b = 'October';
		break;
		case '11':
		$b = 'November';
		break;
		case '12':
		$b = 'December';
		break;
	}
	return $b;
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
				<h1>Index</h1>
				<?php

				if(mysqli_num_rows($result) == 0) {
					echo '<p>No results were found.</p>';
				}
				while($row = mysqli_fetch_array($result)) {
					echo '<h4>'.$row['first'].' '.$row['last'].'</h4>';
					// echo ($row['level'] < 50 ? '<h4>Level '.$row['level'].' noob!</h4>' : '<h4>Level '.$row['level'].' hero!</h4>');
					// echo ($row['gender'] == 1 ? '<p>Gender: Male.</p>' : '<p>Gender: Female.</p>');
					$day = substr($row['submission'], 8, 2);
					$month = substr($row['submission'], 5, 2);

					$monthDay = convertMonth($month); //function call

					echo '<small>Posted: '.$day.' '.$monthDay.'</small>';
					echo '<p>Angry about:</p>';
					echo '<p>'.$row['why'].'</p>';
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