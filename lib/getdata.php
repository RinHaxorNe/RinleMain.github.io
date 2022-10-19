<?php
require_once("connection.php");
if(isset($_SESSION['username'])){
	$name = $_SESSION['username'];
	$query = mysqli_query($conn, "SELECT * FROM main WHERE name = '$name'");
	$data = mysqli_fetch_assoc($query);
}