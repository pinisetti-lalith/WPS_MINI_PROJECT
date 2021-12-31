<html>
<?php
	$User_name = $_POST['User_name'];
	$Email = $_POST['Email'];
	$Time = $_POST['Time'];
	
        $conn = new mysqli('127.0.0.1','root',  '','test11');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into user_data1(User_name, Email, Time) values(?, ?, ?)");
		$stmt->bind_param("ssi", $User_name, $Email, $Time);
		$execval = $stmt->execute();
		echo $execval;
		echo "Want to play another game";
		
                echo '<a href="index.html">Link</a>';
		$stmt->close();
		$conn->close();
	}
?>

