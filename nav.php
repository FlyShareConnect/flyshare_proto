<nav class="<?php if(isset($_SESSION['logged_user'])): ?>loggedin-nav<?php endif; ?>">
	<div class="corner-title-static">
		<a href="index.php" class="logo">flyshare</a>
	</div>
	<div class="btn-wrapper">
		<?php 	if(isset($_SESSION['logged_user'])): ?>
			<a class="nav-btn" href="logout.php">Logout</a>
		<?php endif; ?>
	</div>
</nav>