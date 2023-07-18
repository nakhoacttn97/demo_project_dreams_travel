<?php  
require_once("./getSearch.php");
$loca = $city = $chi = $cho = "";
$employee_details = array();
// Kiểm tra xem biến $_POST có tồn tại và không rỗng
if (isset($_POST['search'])) {
    $loca = $_POST['loca'];
    $city = $_POST['city'];
    $chi = $_POST['chi'];
    $checkInDate = date('Y/m/d', strtotime($chi));
    $cho = $_POST['cho'];
    $checkOutDate = date('Y/m/d', strtotime($cho));

    // Tạo mảng $employee_details để truyền vào phương thức resultSearch()
    $employee_details = [
        ':loca' => $loca
    ];
    // Gọi phương thức resultSearch() với biến $employee_details đã khởi tạo
    $reSearch = new Search();
    $ret = $reSearch->resultSearch($employee_details);
}

	/*
	$getSearch = new Search();
	$ret = $getSearch->addInfo([
		':loca' => $loca,
		':whi' => $city,
		':chi' => $chi,
		':cho' => $cho
	]);
	
	if ($ret > 0) {
		header("location:./ret.php");
	}
	*/

?>