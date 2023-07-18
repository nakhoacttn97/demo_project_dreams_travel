<?php  
// Gửi Email lên database bằng phương thức mySqli
// Kết nối với database
$connect = new mysqli("localhost", "root", "", "dreamstravel");

//Khai bao variables
$email = "";

//Validate Email


//Lấy giá trị từ form
if (isset($_POST['send'])) {
	$email = $_POST['eml'];
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    	$sql = "INSERT INTO emailclient(Email) VALUES ('$email')";
		if ($connect->query($sql) === TRUE) {
			header("location:./ret.php");
		}else{
			header("location:./error.php");
		}
	} else {
    	header("location:./error.php");
	}
}
// Close database
$connect->close();
?>