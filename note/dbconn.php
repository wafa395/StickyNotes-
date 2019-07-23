
<?php
	
	require 'config.php';

	$conn = mysqli_connect($servername,$username,$password,$dbname);

	if(!$conn){
		die("Error connecting to mysql " . mysqli_error($conn));
	}

	echo "connection success <br>";
?>