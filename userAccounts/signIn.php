<?php
$feedback = '';
require_once('variables.php');
$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');

if(isset($_GET['submit'])){
		
		$username = mysqli_real_escape_string($dbconnection, trim($_GET['username']));
		$password = mysqli_real_escape_string($dbconnection, trim($_GET['password']));
		// check against user already there and password
		$query = "SELECT * FROM user WHERE username = '$username' AND password = SHA('$password')";
		// send to database
		$result = mysqli_query($dbconnection, $query) or die ('query failed');
		if (mysqli_num_rows($result) == 1){
			$row = mysqli_fetch_array($result);
			setcookie('username', $row['username'], time()+3600);
			setcookie('first', $row['first'], time()+3600);
			setcookie('last', $row['last'], time()+3600);
			// close colection
			mysqli_close($dbconnection);

			$feedback = 'Access your <a class="btn btn-primary" href="account.php">account</a>';
		} else {
			$feedback = 'Incorrect username or password. Please try again';
		}		
		

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
					<?php echo $feedback; ?>
            		<form name="" action="signIn.php" method="GET">	
        				<h5 style="color:#000" class="modal-title" id="exampleModalLongTitle">Sign In</h5>
          				<div class="row">
            				<div class="col-lg-12 pt-2">
              					<p style="color:#000">Username: <input type="text" name="username" id="signUpUsername" placeholder="Username" required></p>
              					<p style="color:#000">Password: <input type="password" id="signUpPassword" placeholder="Password" name="password" required></p>
            				</div>
          				</div>
        				<div class="modal-footer">
          					<button type="submit" value="submit" name="submit" class="btn btn-primary">Sign In</button>
        				</div>
      				</form>
            	</div>
            	<div class="col-md-2"></div>
        	</div>
			<div class="row">
            	<div class="col-md-2"></div>
				<div class="col-md-8">
					<p>Dont have an account yet? <a class="btn btn-primary" href="signUp.php">Sign Up</a></p>
				</div>
				<div class="col-md-2"></div>
			</div>
    	</div>
	</body>
</html>