<?php
	session_start();
	require_once("connection.php");
	if (isset($_POST["btn_submit"])) {
		$price = 200000;
		
		$username = $_SESSION['username'];
		$password = $_POST["password"];
		
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		
		$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM main WHERE name = '$username'"));
		
		if ($username == "" || $password =="") {
			echo "<script>alert('Mật khẩu không được bỏ trống!');</script>";
			header("refresh:0.1; url=../#package1");
		}else if ($data["webCoins"] < $price) {
			echo "<script>alert('Số dư không đủ!');</script>";
			header("refresh:0.1; url=../#package1");
		}else{
			$password = md5($password);
			$sql = "select * from main where name = '$username' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng ! ".$password."')</script>";
				header("refresh:0.1; url=../#package1");
			}else{
				$query = mysqli_query($conn, "UPDATE main SET webCoins = webCoins - $price WHERE name ='$username'");
				$query = mysqli_query($conn, "UPDATE main SET active = 'true' WHERE name ='$username'");
				echo "<script>alert('Thanh toán thành công');</script>";
				echo "<script>alert('Tài khoản của bạn đã được kích hoạt!');</script>";
				echo "<script>alert('Bạn có thể tham gia chơi máy chủ với IP: mc.wikigames.vn');</script>";
				header("refresh:0.1; url=../#thongtin");
			}
		}
	}
	
?>