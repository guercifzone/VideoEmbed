<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>تجمع المبرمجين و المطورين العرب</title>
</head>

<body>

<h1>Visual Basic</h1>

<p>
	<?php
		require("db.php");
		
		$find_videos = mysql_query("SELECT * FROM `videos` WHERE `type`='VB_net'");
		while($row = mysql_fetch_assoc($find_videos))
		{
			$id = $row['id'];
			$name = $row['name'];
			
			echo "<a href='watch.php?id=$id'>$name</a>";
		}
	?>
</p>

</body>
</html>