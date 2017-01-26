<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>تجمع المبرمجين و المطورين العرب</title>
</head>

<body>

<h1>الصفحة الرئيسية</h1>

<p><a href="php.php">PHP Videos</a> || <a href="vb_net.php">VB.net Video</a></p>

<p>
<form action="adif_video.php" method="POST">
	<input type="text" name="name" placeholder="Video Name..." /><br />
    <select name="type">
    	<option>PHP</option>
        <option>VB_net</option>
    </select><br />
    <input type="text" name="link" placeholder="Share Link"><br />
    <input type="submit" value="Share!">
</form>
<?php if($_GET['added']){$added=$_GET['added'];echo "Added $added to the video list";} ?>
</p>

</body>
</html>