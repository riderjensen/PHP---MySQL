<<<<<<< Updated upstream
<?php

if(isset($_GET['submit'])){

		require_once('variables.php');
		$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');

		$first = mysqli_real_escape_string($dbconnection, trim($_GET['firstName']));
		$last = mysqli_real_escape_string($dbconnection, trim($_GET['lastName']));
		$username = mysqli_real_escape_string($dbconnection, trim($_GET['username']));
		$password = mysqli_real_escape_string($dbconnection, trim($_GET['password']));

	// need to confirm that the password matches when sent in -- untested
	if($_GET['password'] == $_GET['passConf'] && !empty($password) && !empty($username)){
		// insert new user into the DB
		$newQuery = "SELECT * FROM user WHERE username = '$username'";

		// send to database
		$newResult = mysqli_query($dbconnection, $newQuery) or die ('query failed');

		if (mysqli_num_rows($newResult) == 0){
			$query = "INSERT INTO user (first, last, username, password) VALUES ('$first','$last','$username', SHA('$password'))";

			// send to database
			$result = mysqli_query($dbconnection, $query) or die ('query failed');

			// close collection
			mysqli_close($dbconnection);

			echo 'Thank you for signing up, your new account is created. Please sign in <a class="btn btn-primary" href="signIn.php">here</a>';
			setcookie('username', $username, time()+(60*60*24*30));
			setcookie('first', $first, time()+(60*60*24*30));
			setcookie('last', $last, time()+(60*60*24*30));
			exit();
		} else {
			echo 'User in existence. Pick a different username';
			exit();
		}		
	} else {
		echo 'passwords dont match, please try again';
		exit();
	}
};
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
                <form name="signUpForm" action="signUp.php" method="GET">
					<h5 style="color:#000" class="modal-title" id="exampleModalLongTitle">Sign Up</h5>               
                    <div class="row">
                        <div class="col-lg-12 pt-2">
							<p style="color:#000">First Name:* <input type="text" name="firstName" placeholder="First Name" value="<?php if (!empty($first)) echo $first; ?>" required></p>
							<p style="color:#000">Last Name:* <input type="text" name="lastName" placeholder="Last Name" value="<?php if (!empty($last)) echo $last; ?>" required></p>
                            <p style="color:#000">Username:* <input type="text" name="username" placeholder="Username" value="<?php if (!empty($username)) echo $username; ?>" required></p>
                            <p style="color:#000">Password:* <input type="password" placeholder="Password" name="password" required></p>
							<p style="color:#000">Retype Password:* <input type="password" placeholder="Retype Password" name="passConf" required></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" value="submit" name="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                </form>
            </div>
                <div class="col-md-2"></div>
            </div>
			<div class="row">
            	<div class="col-md-2"></div>
				<div class="col-md-8">
					<p>Dont want to log in? <a class="btn btn-primary" href="index.php">Home</a></p>
				</div>
				<div class="col-md-2"></div>
			</div>
        </div>
    </body>
=======
<?php

if(isset($_GET['submit'])){

		require_once('variables.php');
		$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');

		$first = mysqli_real_escape_string($dbconnection, trim($_GET['firstName']));
		$last = mysqli_real_escape_string($dbconnection, trim($_GET['lastName']));
		$username = mysqli_real_escape_string($dbconnection, trim($_GET['username']));
		$password = mysqli_real_escape_string($dbconnection, trim($_GET['password']));

	// need to confirm that the password matches when sent in -- untested
	if($_GET['password'] == $_GET['passConf'] && !empty($password) && !empty($username)){
		// insert new user into the DB
		$newQuery = "SELECT * FROM user WHERE username = '$username'";

		// send to database
		$newResult = mysqli_query($dbconnection, $newQuery) or die ('query failed');

		if (mysqli_num_rows($newResult) == 0){
			$query = "INSERT INTO user (first, last, username, password) VALUES ('$first','$last','$username', SHA('$password'))";

			// send to database
			$result = mysqli_query($dbconnection, $query) or die ('query failed');

			// close collection
			mysqli_close($dbconnection);

			echo 'Thank you for signing up, your new account is created. Please sign in <a class="btn btn-primary" href="signIn.php">here</a>';
			setcookie('username', $username, time()+(60*60*24*30));
			setcookie('first', $first, time()+(60*60*24*30));
			setcookie('last', $last, time()+(60*60*24*30));
			exit();
		} else {
			echo 'User in existence. Pick a different username';
			exit();
		}		
	} else {
		echo 'passwords dont match, please try again';
		exit();
	}
};
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
                <form name="signUpForm" action="signUp.php" method="GET">
					<h5 style="color:#000" class="modal-title" id="exampleModalLongTitle">Sign Up</h5>               
                    <div class="row">
                        <div class="col-lg-12 pt-2">
							<p style="color:#000">First Name:* <input type="text" name="firstName" placeholder="First Name" value="<?php if (!empty($first)) echo $first; ?>" required></p>
							<p style="color:#000">Last Name:* <input type="text" name="lastName" placeholder="Last Name" value="<?php if (!empty($last)) echo $last; ?>" required></p>
                            <p style="color:#000">Username:* <input type="text" name="username" placeholder="Username" value="<?php if (!empty($username)) echo $username; ?>" required></p>
                            <p style="color:#000">Password:* <input type="password" placeholder="Password" name="password" required></p>
							<p style="color:#000">Retype Password:* <input type="password" placeholder="Retype Password" name="passConf" required></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" value="submit" name="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                </form>
            </div>
                <div class="col-md-2"></div>
            </div>
			<div class="row">
            	<div class="col-md-2"></div>
				<div class="col-md-8">
					<p>Dont want to log in? <a class="btn btn-primary" href="index.php">Home</a></p>
				</div>
				<div class="col-md-2"></div>
			</div>
        </div>
    </body>
>>>>>>> Stashed changes
</html>