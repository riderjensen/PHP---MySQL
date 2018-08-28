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
                        <label for="subject">Name</label>
                        <input type="text" name="name" class="form-control" id="subject" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="textfieldInput">Expertise</label>
                        <input type="text" name="expertise" class="form-control" id="textfieldInput" placeholder="Expertise">
                    </div>
                    <div class="form-group">
                            <label for="textfieldInput">Phone</label>
                            <input type="text" name="phone" class="form-control" id="textfieldInput" placeholder="Phone">
                        </div>
                        <div class="form-group">
                                <label for="textfieldInput">Email</label>
                                <input type="text" name="email" class="form-control" id="textfieldInput" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="textfieldInput">Bio</label>
                                <input type="text" name="bio" class="form-control" id="textfieldInput" placeholder="Bio">
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