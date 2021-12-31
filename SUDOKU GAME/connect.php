<html>
<body>	

<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
        $conn = new mysqli('127.0.0.1','root',  '','test11');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into signin(name, email, password) values(?, ?, ?)");
		$stmt->bind_param("ssi", $name, $email, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		echo '<a href="index.html">Link</a>';

		$stmt->close();
		$conn->close();
	}
?>



<body>

</html>