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
				<h1>Search</h1>
				<form action="search.php" method="GET" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="anger">Search for movie</label>
                        <input type="text" name="anger" class="form-control" id="anger" placeholder="Find a movie...">
					</div>
 
                    <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>


<?php

if(isset($_GET['submit'])){

	require_once('variables.php');
	$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');


	//lowercase
	$anger = strtolower($_GET['anger']);
	//remove commas
	$angerClean = str_replace(',',' ', $anger);
	//explode
	$angerArray = explode(' ', $angerClean);

	//delete empty array positions
	foreach($angerArray as $temp) {
		if(!empty($temp)) {
			$searchArray[] = $temp;
		}
	}

	// adding extra syntax to search
	$whereList = array();
	foreach($searchArray as $temp) {
		$whereList[] = "title LIKE '%$temp%'";
	}
	$whereClause = implode(' OR ', $whereList);

	$query = "SELECT * FROM movies";
	if(!empty($whereClause)){
		$query .= " WHERE $whereClause";
	}
	$result = mysqli_query($dbconnection, $query) or die ('query failed');


	// check for no results
	if(mysqli_num_rows($result) == 0) {
		echo '<p>No results were found.</p>';
	}

	while($row = mysqli_fetch_array($result)) {
		echo '<h4><a href="getInfo.php?id='.$row['id'].'">'.$row['title'].'</a> --- '.$row['rating'].'</h4>';
		echo '<img src="posters/'.$row['photo'].'"/>';
	}
	// close collection
	mysqli_close($dbconnection);
}

?>


			</div>
			<div class="col-md-2"></div>
		</div>
	</div>

</body>
</html>