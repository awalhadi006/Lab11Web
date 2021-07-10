<?php
ob_start();
require_once('config.php');

$username = $_POST['useremail'];
$pass = $_POST['userpassword'];

// To protect MySQL injection
$myusername = mysql_real_escape_string($username);
$mypass = mysql_real_escape_string($pass);

if(empty($username) || empty($pass)){
	echo "<script>alert('Your account isn't register. Please, contact Admin.'); window.location = 'login.php'</script>";
}
else{
	$query = mysql_query("SELECT * FROM login WHERE BINARY username = '$myusername' AND BINARY pass = '$mypass'");
	$cek = mysql_num_rows($query);
	$ambil = mysql_fetch_array($query);
	if($cek == 1){
		session_start();
		$_SESSION['username'] = $myusername;
		$_SESSION['pass'] = $mypass;
		if($ambil['position'] == "penjual"){
			echo "<script>alert('You log in to online shop, ".$ambil['username'].".'); window.location = 'penjual/index.php'</script>";
		}else if($ambil['position'] == "pembeli"){
			echo "<script>alert('You log in to online shop, ".$ambil['username'].".'); window.location = 'pembeli/index.php'</script>";
		}
	}
	else{
		echo "<script>alert('Username dan Password not valid, please Login again.'); window.location = 'index.php'</script>";
	}
}
ob_end_flush();
?>