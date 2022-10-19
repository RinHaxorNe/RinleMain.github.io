<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {margin:0;}

.header {
  overflow: hidden;
  background-color: rgba(51, 51, 51, .6);
  position: fixed;
  top: 0;
  width: 100%;
  height: 39px;
  z-index: 100;
}

.header a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 3px 16px;
  text-decoration: none;
  font-size: 20px;
  font-family: Monospace;
}

.header a:hover {
  background: #ddd;
  color: black;
}

.right {
  float: right;
}
.right p{
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 5px 16px;
  text-decoration: none;
  font-size: 20px;
  font-family: Monospace;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}

.logout:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<div class="header">
	<div align = "center">
	  <a href="/index.php">TRANG CHỦ</a>
	  <a href="/index.php">DIỄN ĐÀN</a>
	  <a href="/index.php">HỖ TRỢ</a>
	  <?php
	  require_once("getdata.php");
	  if(!isset($_SESSION['username'])){
			echo '
			<div class="right">
				<a href="../#dangnhap">ĐĂNG NHẬP</a>
				<a href="../#dangky">ĐĂNG KÝ</a>
			</div>
			';
	  }else{
			if($data["active"] == "false"){
				echo '<a href="#active">KÍCH HOẠT</a>';
			}
			echo '
			<div class="right">
				<a href="../#napthe">Pearls</a>
				<a href="../#thongtin">'.$data["name"].'</a>
				<a href="lib/logout.php">ĐĂNG XUẤT</a>
			</div>
				';
	  }
		?>
	</div>
</div>

</body>
</html>