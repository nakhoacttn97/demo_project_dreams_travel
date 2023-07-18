<?php  
// isset
$connect = new mysqli('localhost', 'root', '', 'dreamstravel');
if (isset($_POST['search'])) {
 // gán biến
    $search = $_POST['loca'];
    $city = $_POST['city'];
    $chi = $_POST['chi'];
    $cho = $_POST['cho'];
//
    $sql = "SELECT * FROM listtravel WHERE Country LIKE '%$search%' AND City LIKE '%$city%' AND Start_day LIKE '%$chi%' AND End_day LIKE '%$cho%'";
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        $resultArr = [];
        while ($row = $result->fetch_assoc()) {
            $resultArr[] = $row;
        }
        // Chuyển kết qảu truy vấn sang reult_search.php
        session_start();
        $_SESSION['resultArr'] = $resultArr;
            header("location:./reult_search.php");
        exit();
        } else {
            echo "No result found";
        }
}
// close the database connection
$connect->close();
?>