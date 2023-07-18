<?php
session_start();
$resultArr = $_SESSION['resultArr'];
echo "<table border='1'>";
foreach ($resultArr as $row) {
	echo "<tr>";
    echo "<td>" . $row['Country'] . "</td>";
    echo "<td>" . $row['City'] . "</td>";
    echo "<td>" . $row['Travel'] . "</td>";
    echo "<td>" . $row['Start_day'] . "</td>";
    echo "<td>" . $row['End_day'] . "</td>";
    echo "<td>" . $row['Price_dolar'] . "</td>";
    echo "</tr>";
echo "</table>";
}
echo "<a href='./index.php'>Back</a>";
// Đóng kết nối
unset($_SESSION['resultArr']);
?>
