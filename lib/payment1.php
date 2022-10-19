<?php
	session_start();
	require_once("connection.php");
	if (isset($_POST["btn_submit"])) {
		$price = 0;
		$date = date("d-m-Y h:i:s");
		$noidung = "Kích hoạt tài khoản";
		
		$username = $_SESSION['username'];
		$password = $_POST["password"];
		
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		
		$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM main WHERE name = '$username'"));
		
		if ($username == "" || $password =="") {
			echo "<script>alert('Mật khẩu không được bỏ trống!');</script>";
			header("refresh:0.1; url=../#active");
		}else{
			$password = md5($password);
			$sql = "select * from main where name = '$username' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "<script>alert('Mật khẩu không đúng ! ".$password."')</script>";
				header("refresh:0.1; url=../#active");
			}else{
				mysqli_query($conn, "UPDATE main SET active = 'true' WHERE name ='$username'");
				$giaodich = "INSERT INTO giaodich(
					user,
					noidung,
					price,
					date
					) VALUES (
					'$username',
					'$noidung',
					'$price',
					'$date'
					)";
				mysqli_query($conn, $giaodich);
				echo "<script>alert('Thanh toán thành công');</script>";
				echo "<script>alert('Tài khoản của bạn đã được kích hoạt!');</script>";
				echo "<script>alert('Bạn có thể tham gia chơi máy chủ với IP: lorencia.com');</script>";
				
				header("refresh:0.1; url=../#thongtin");
			}
		}
	}
	
?>