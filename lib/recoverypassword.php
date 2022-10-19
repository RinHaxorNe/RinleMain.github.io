<?php
session_start();
require_once("connection.php");

if(isset($_GET['token'])){
	$hash = $_GET['token'];
	$sql="select * from recoveryurl where token='$hash'";
	$kt=mysqli_query($conn, $sql);
	if(mysqli_num_rows($kt) <= 0){
		echo 'error!';
		header("refresh:0.1; url=../#quenmatkhau");
	}else{
		echo '
			<form action="recoverypassword.php" method="post">
				<table>
					<tr>
						<td>Mật khẩu mới: </td>
						<td><input type="password" id="password" name="password"></td>
					</tr>
					<tr>
						<td>Nhap lai mật khẩu: </td>
						<td><input type="password" id="passwordrp" name="passwordrp"></td>
					</tr>
					<tr>
						<td>Hash: </td>
						<td><input type="hash" id="hash" name="hash" value="'.$hash.'"></td>
					</tr>
					<tr>
						<td align="center"><input type="submit" name="btn_submit" value="Xac nhan"></td>
					</tr>
				</table>
			</form>
		';
	}
}
if(isset($_POST["password"])){
	$hash = $_POST['hash'];
	$pass = md5($_POST["password"]);
	$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM recoveryurl where token = '$hash'"));
	$email = $data['email'];
	$sql1 = "UPDATE main SET password = '$pass' where email = '$email'";
	mysqli_query($conn,$sql1);

	$sql = "DELETE FROM recoveryurl where token = '$hash'";
	mysqli_query($conn,$sql);
	echo "Đã thay đổi mật khẩu thành công!";
	header("refresh:0.5; url=../#dangnhap");
	return;
}

if(isset($_POST["email"]) && isset($_POST["maxacnhan"])){
$email = $_POST["email"];
$maxacnhan = $_POST["maxacnhan"];

if($maxacnhan != $_SESSION['captcha']){
		echo "Mã xác nhận không chính xác!";
		header("refresh:0.1; url=../#quenmatkhau");
		return;
}

$sql1="select * from recoveryurl where email='$email'";
$kt1=mysqli_query($conn, $sql1);
if(mysqli_num_rows($kt1) > 0){
	echo "Bạn đã gửi 1 mail khôi phục mật khẩu rồi! Vui lòng kiểm tra lại hòm thư/spam.";
	//header("refresh:0.1; url=../#dangnhap");
	return;
}

$sql="select * from main where email='$email'";
$kt=mysqli_query($conn, $sql);
$token = md5(rand()*rand());
$timemili = round(microtime(true) * 1000);

if(mysqli_num_rows($kt) <= 0){
	echo "Email không tồn tại!";
	header("refresh:0.1; url=../#quenmatkhau");
	return;
}else{
	$sql = "INSERT INTO recoveryurl(
		email,
		token,
		timemili
		) VALUES (
		'$email',
		'$token',
		'$timemili'
		)";
	mysqli_query($conn,$sql);
}

$url = "http://athena-mc.net/lib/recoverypassword.php?token=".$token."";

ini_set( "SMTP", "smtp.gmail.com" );
ini_set( "smtp_port", "587" );
$to      = $email;
$subject = 'Khoi phuc mat khau athena-mc.net';
$message = 'Xin chào, mình là admin của athena. Bạn vừa gửi yêu cầu khôi phục mật khẩu. Hãy nhấp vào url bên dưới: '.$url.' ';
$headers = 'From: admin@athena-mc.net' . "\r\n" .
    'Reply-To:'.$email.' ' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$retval = mail($to, $subject, $message, $headers);
if( $retval == true ) {
	echo "Vui lòng kiểm tra hòm thư";         
}else { 
	echo "Lỗi";
}
}
?>