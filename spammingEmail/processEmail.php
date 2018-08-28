<?php

// need to create db called newsletter with 4 columns, number, first, last, email


// load vars
$subject = $_POST['subject'];
$text = $_POST['textfield'];
$email = 'riderjensen@gmail.com';

$dbconnection = mysqli_connect('localhost','riderjen_3760usr','****','riderjen_3760test') or die ('connection failed');
// query and select all information from newsletter db
$query = "SELECT * FROM newsletter";
// send to database
$result = mysqli_query($dbconnection, $query) or die ('query failed');

// do something with the data
while ($row = mysqli_fetch_array($result)) {
    $first_name = $row['first'];
    $last_name = $row['last'];
    $to = $row['email'];
    $msg = "Dear $first_name $last_name, $text";

    mail($to, $subject, $msg, 'FROM:'.$email);
}


// end connection
mysqli_close($dbconnection);

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
        <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p>This is the PHP Page, the emails should have been sent</p>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
    
</body>
</html>