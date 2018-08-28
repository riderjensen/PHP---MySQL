<?php

// connection
$dbconnection = mysqli_connect('localhost','riderjen_3760usr','Ilikecheese3!','riderjen_3760test') or die ('connection failed');

if (isset($_GET['submit'])){
    $id = $_GET['id'];
    $empPhoto = $_GET['photo'];
    @unlink($_GET['photo']);
    $query = "DELETE FROM employee_simple WHERE id = '$id'";
    $result = mysqli_query($dbconnection, $query) or die ('query failed');

    echo 'That employee has been deleted. Please return <a class="btn btn-primary" href="index.php">home</a>';
    // close collection
    mysqli_close($dbconnection);
}


?>