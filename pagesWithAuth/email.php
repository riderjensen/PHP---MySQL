<?php

$email = $_GET['email'];

?>

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
<?php
include_once('navBar.php');
?>
        <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                    <form action="processEmail.php" method="GET" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="subject">To</label>
                        <input type="text" name="to" class="form-control" placeholder="" value="<?php echo $email; ?>">
                    </div>
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
                    <div class="col-md-4"></div>
                </div>
            </div>
    
</body>
</html>