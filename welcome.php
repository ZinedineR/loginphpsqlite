<?php
session_start();
?>
<html>
<head>
<title>welcome lol</title>
</head>
<body>

<?php
if($_SESSION['userid']) {
?>
Welcome <?php echo $_SESSION['userid']; ?>
<p>Test cookies by going to index.php, if gets directed to this page again, then the cookies work :)</p>
<a href="index.php">Index.php</a>
<p>Click here to <a href="logout.php" tite="Logout">Logout.</a></p>
<?php
}else echo "<h1>Please login first .</h1>";
?>
</body>
</html>