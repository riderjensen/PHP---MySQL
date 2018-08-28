<?php
unset($_COOKIE['username']);
unset($_COOKIE['first']);
unset($_COOKIE['last']);
setcookie('username', '', -1);
setcookie('first', '', -1);
setcookie('last', '', -1);

echo 'You have been logged out. <a class="btn btn-primary" href="index.php">Home</a>';
?>