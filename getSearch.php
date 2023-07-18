<?php  
/**
 * *
 */
class Search{
	private $pdo;
	// khởi tạo
	function __construct()
	{
		$opt = [
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		];
		$this->pdo = new PDO('mysql:host=localhost;dbname=dreamstravel', 'root', '', $opt);
	}

	//biuld func add
	function addInfo($arr){
		$count = 0;
		$stmt = $this->pdo->prepare('INSERT INTO search(Location, Which, ChecKIn, CheckOut) VALUES (:loca, :whi, :chi, :cho)');
		if ($stmt) {
			$ret = $stmt->execute($arr);
			if ($ret) {
				$count = $stmt->rowCount();
			}
			$stmt->closeCursor();
			return $count;
		}
	}

	//biuld func search and display result (chưa xong)
	function resultSearch($employee_details) {
    $count = 0;
    $stmt = $this->pdo->prepare('SELECT * FROM listtravel WHERE Country LIKE :loca');
    if ($stmt) {
        //
        $ret = $stmt->execute($employee_details);
        if ($ret) {
        	$resultArr = [];
        	$resultArr[] = $ret; 
        	if ($stmt->rowCount() > 0) {
        		header("location:./ret.php");
        		return $resultArr;
        	}else{
        		header("location:./error.php");
        	}
        }        
        $stmt->closeCursor();
    }
}
	// phương thức hủy
	function __destruct(){
		unset($this->pdo);
	}
}

?>