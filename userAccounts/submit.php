<<<<<<< Updated upstream
<?php
require_once('protect.php');

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
                    <form action="submitComment.php" method="GET" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="textfieldInput">Subject</label>
                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                            <label for="textfieldInput">Message</label>
                            <input type="text" name="message" class="form-control" placeholder="Message">
                        </div>
                                
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>

</body>
=======
<?php
require_once('protect.php');

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
                    <form action="submitComment.php" method="GET" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="textfieldInput">Subject</label>
                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                            <label for="textfieldInput">Message</label>
                            <input type="text" name="message" class="form-control" placeholder="Message">
                        </div>
                                
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>

</body>
>>>>>>> Stashed changes
</html>