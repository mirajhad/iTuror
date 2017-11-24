<?php require("header.php"); 
?>
<?php 
$uid=$_POST["uid"];
$pwd=$_POST["pwd"];

	if ( isset($uid) && isset($pwd))
	{
		$sql="select * from user where username='$uid' and password='$pwd'"	;
		$result = ExecuteQuery($sql);
		
		if (mysql_num_rows($result)==1)
		{
			$row = mysql_fetch_array($result);
			
			session_start();
			$_SESSION["uid"]= $row["user_id"];
			$_SESSION["fn"] = $row["fullname"];
			
			ExecuteNonQuery ("UPDATE User SET isuser=true WHERE username='$uid'");
			
			if($row["user_type"]=="admin")
			{
				header("location: admin/home.php");
			}
			else
			{
				header("location: uhome.php");
			}
		}
		else
			header("location: index.php?act=invalid");
	}
?>
<?php require("footer.php");?>