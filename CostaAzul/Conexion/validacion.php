<?php
if ($_COOKIE['login'] != "ok"){
		header("location:index.php?error=2");
	}
?>