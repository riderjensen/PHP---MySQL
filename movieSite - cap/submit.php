<?php

require_once('auth.php');
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
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="subject">Title</label>
                        <input type="text" name="title" class="form-control" id="subject" placeholder="Title">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="movierating" id="rating1" value="G" checked>
                        <label class="form-check-label" for="rating1">G</label>
                    </div>
					<div class="form-check">
                        <input class="form-check-input" type="radio" name="movierating" id="rating2" value="PG">
                        <label class="form-check-label" for="rating2">PG</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="movierating" id="rating3" value="PG-13">
                        <label class="form-check-label" for="rating3">PG-13</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="movierating" id="rating4" value="R">
                        <label class="form-check-label" for="rating4">R</label>
                    </div>
                    <div class="form-group">
                            <label for="textfieldInput">Description</label>
                            <input type="text" name="decription" class="form-control" id="textfieldInput" placeholder="Description">
                        </div>
                        <div class="form-group">
                                <label for="textfieldInput">Photo</label>
                                <input type="file" name="photo" class="form-control" id="textfieldInput">
                        </div>
                                
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

</body>
</html>