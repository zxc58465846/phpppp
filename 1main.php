<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>表單練習</title>
</head>

<body>

<form action="1.php" method="post" name="form1" id="form1">
<p>
  <input type="submit" name="submit" id="submit" value="送出">
</p>
</form>
<?php
session_start();
$rnum=$_SESSION["rnum"];
print_r($rnum);
?>
</body>
</html>
