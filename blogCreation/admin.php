<?php

require_once('auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Blog</title>

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
                <h1>Approve Comments</h1>
<?php

require_once('variables.php');
$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die ('connection failed');

// build query
$query = "SELECT * FROM blog WHERE approved=0";

// send to database
$result = mysqli_query($dbconnection, $query) or die ('query failed');

while($found = mysqli_fetch_array($result)) {
    
    echo'<h3>'.$found['name'].'</h3>';
    echo '<p>';
    echo $found['topic'];
    echo '</p>';
    echo '<p>';
    echo $found['comment'].'<br>'.$found['date'];
    echo '</p>';
    echo '<form action="approve.php" method="GET" enctype="multipart/form-data"><input type="hidden" name="id" value="'.$found['id'].'"><button type="submit" class="btn btn-primary">Approve</button></form>';
    echo '<form action="delete.php" method="GET" enctype="multipart/form-data"><input type="hidden" name="id" value="'.$found['id'].'"><button type="submit" class="btn btn-primary">Deny</button></form>';
}
// close collection
mysqli_close($dbconnection);

?>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

</body>
</html>