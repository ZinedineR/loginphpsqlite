<?php
	require_once 'conn.php';
	session_start();
	$userid = $_POST['userid'];
	$password = $_POST['password'];
	if(isset($_SESSION["userid"])) {
    header("Location:welcome.php");
    }
	if(ISSET($_POST['login'])){
		$query=$PDO->query("SELECT userid,password FROM login_info WHERE userid='$userid' AND password='$password'");
		foreach ($query as $row) {
			if ($row['userid'] == $userid) {
				    if ($row['password'] == $password) {
				        $count = 1;
				        $_SESSION['userid'] = $row['userid'];
				        break;
				    }
				    else {
				        $count = 0;
				        break;
				    }
				}
				else {
				    $count = 0;
				}
			$count = 0;
			}	
		if($count > 0){
			// echo "<div class='alert alert-success'>Login successful, dirrecting you into main page in seconds...</div>";
			$count = 0;
			$_SESSION['userid'] = $userid;
			header('location:welcome.php');
			
		}else {
			echo "<div class='alert alert-danger'>Invalid userid or password</div>";
		}
	}
?>