<?php
	session_start();
	//Gọi file connection.php ở bài trước
	require_once("connection.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			echo "<script>alert('Tài khoản hoặc mật khẩu bạn không được để trống!');</script>";
			header("refresh:0.1; url=../#dangnhap");
		}else{
			$password = md5($password);
			$sql = "select * from main where name = '$username' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng !')</script>";
				header("refresh:0.1; url=../#dangnhap");
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
				header("refresh:0.1; url=../#thongtin");
			}
		}
	}
?>