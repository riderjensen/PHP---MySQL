<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
	<li class="nav-item">
	Hello,
	<?php
	if(isset($_COOKIE['first'])) {
		echo $_COOKIE['first'];
		echo ' | <a class="" href="logout.php">Logout</a>';
	} else {
		echo '<a class="" href="signIn.php">Sign In</a> | <a class="" href="signUp.php">Sign Up</a>';
	}
	?>
	
	</li>
    </ul>
  </div>
</nav>