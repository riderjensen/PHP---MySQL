<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $first = $_GET['firstName'];
    $last = $_GET['lastName'];
    $department = $_GET['department'];
    $phone = $_GET['phone'];

    $dbconnection = mysqli_connect('localhost','riderjen_3760usr','Ilikecheese3!','riderjen_3760test') or die ('connection failed');
    $query = "UPDATE employee_simple SET first='$first', last='$last', dept='$department', phone='$phone' WHERE id='$id'";

    // send to database
    $result = mysqli_query($dbconnection, $query) or die ('query failed');

    echo 'That employee has been updated. Please return <a class="btn btn-primary" href="index.php">home</a>';
    // close collection
    mysqli_close($dbconnection);
}




?>