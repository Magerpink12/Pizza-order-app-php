<?php
$conn = mysqli_connect('localhost','root','','ninja_pizza');
	if (!$conn) {
		echo 'connection error: ' . mysqli_connect_error();
	}
?>