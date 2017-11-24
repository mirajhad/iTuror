<?php session_start();
 require("header.php");
 
 if ($_SESSION["fn"] == null){
 	header("location:unreg.php");
	exit();
 }
 
 require("checkUser.php");
 ?>
 
 <script type="text/javascript">
	document.getElementById("aforum").className="active";
</script>

<?php
	$topic = ExecuteQuery ("SELECT * FROM topic");
	
	while ($r1 = mysql_fetch_array($topic))
	{
			echo "<div class='heading'>$r1[topic_name]</div>";
		
			$stopic = ExecuteQuery ("SELECT * FROM subtopic WHERE topic_id=$r1[topic_id]");	
			
			
	}
	
	
?>

<?php require("footer.php"); ?>