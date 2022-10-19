<?php
session_start();
require_once("connection.php");
if (isset($_POST["btn_submit"])) {
	$username = $_POST["username"];
	$password = $_POST["pass"];
	$password1 = $_POST["pass1"];
	$email = $_POST["email"];
	$maxacnhan = $_POST["maxacnhan"];
	
	function uuidFromString($string) {
		$val = md5($string, true);
		$byte = array_values(unpack('C16', $val));

		$tLo = ($byte[0] << 24) | ($byte[1] << 16) | ($byte[2] << 8) | $byte[3];
		$tMi = ($byte[4] << 8) | $byte[5];
		$tHi = ($byte[6] << 8) | $byte[7];
		$csLo = $byte[9];
		$csHi = $byte[8] & 0x3f | (1 << 7);

		if (pack('L', 0x6162797A) == pack('N', 0x6162797A)) {
			$tLo = (($tLo & 0x000000ff) << 24) | (($tLo & 0x0000ff00) << 8) | (($tLo & 0x00ff0000) >> 8) | (($tLo & 0xff000000) >> 24);
			$tMi = (($tMi & 0x00ff) << 8) | (($tMi & 0xff00) >> 8);
			$tHi = (($tHi & 0x00ff) << 8) | (($tHi & 0xff00) >> 8);
		}

		$tHi &= 0x0fff;
		$tHi |= (3 << 12);
	   
		$uuid = sprintf(
			'%08x-%04x-%04x-%02x%02x-%02x%02x%02x%02x%02x%02x',
			$tLo, $tMi, $tHi, $csHi, $csLo,
			$byte[10], $byte[11], $byte[12], $byte[13], $byte[14], $byte[15]
		);
		return $uuid;
	}

	function uuidConvert($string)
	{
		$string = uuidFromString("OfflinePlayer:".$string);
		return $string;
	}
	
	$full_uuid = uuidConvert($username);
	
	if ($username == "" || $password == "" || $password1 == "" || $email == "") {
		echo "<script>alert('Vui lòng nhập đầy đủ thông tin');</script>";
		header("refresh:0.1; url=../#dangky");
	}else if($password != $password1){
		echo "<script>alert('Mật khẩu không giống nhau');</script>";
		header("refresh:0.1; url=../#dangky");
	}else if($maxacnhan != $_SESSION['captcha']){
		echo "<script>alert('Mã xác nhận không chính xác!');</script>";
		header("refresh:0.1; url=../#dangky");
	}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "<script>alert('Email không đúng định dạng!');</script>";
		header("refresh:0.1; url=../#dangky");
	}else{
			$password = md5($password);
			$sql="select * from main where name='$username'";
			$kt=mysqli_query($conn, $sql);

			if(mysqli_num_rows($kt) > 0){
				echo "<script>alert('Tài khoản đã tồn tại!');</script>";
				header("refresh:0.1; url=../#dangky");
			}else if(mysqli_num_rows(mysqli_query($conn, "select * from main where email='$email'"))){
				echo "<script>alert('Địa chỉ email đã được sử dụng');</script>";
				header("refresh:0.1; url=../#dangky");
			}else{
				$sql = "INSERT INTO main(
					name,
					password,
					email,
					uuid
					) VALUES (
					'$username',
					'$password',
					'$email',
					'$full_uuid'
					)";
				mysqli_query($conn,$sql);
				echo "<script>alert('Chúc mừng bạn đã đăng ký thành công');</script>";
				echo "<script>alert('Vui lòng đăng nhập với tài khoản đã đăng ký!');</script>";
				header("refresh:0.1; url=../#dangnhap");
			}
	  }
}
?>