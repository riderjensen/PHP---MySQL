<?php
require_once('protect.php');
// load vars
$subject = $_GET['subject'];
$message = $_GET['message'];
$to = 'riderjensen@gmail.com';
$email = 'test@gmail.com';

mail($to, $subject, $message, 'FROM:'.$email);

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
                   <?php
						echo '<p>Email has been sent to our admin. We will get back to your shortly</p>';
						echo '<p><a class="btn btn-primary" href="account.php">Home</a></p>';
                   ?>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
    
</body>
</html>