

<?php 
	if(!isset($_SESSION["fn"]))
		header("location:login.php");
?>

<span style="float:right">
welcome <?php echo $_SESSION["fn"];?>, [ <a href="logout.php">log-out</a> ] 
</span>