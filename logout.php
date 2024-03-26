<?php
	session_start();

	unset($_SESSION['user']);
	echo "<script>window.location='login.php'</script>";
?>