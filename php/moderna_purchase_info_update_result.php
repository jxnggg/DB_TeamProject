<?php
	$con=mysqli_connect("localhost", "root", "1234", "systemdb") or die("MySQL 접속실패 !!");

	$purchasing_pharmaceuticalCom = $_POST["purchasing_pharmaceuticalCom"];
	$purchaseVolume = $_POST["purchaseVolume"];
	$purchasingDate = $_POST["purchasingDate"];
	$hospitalName = $_POST["hospitalName"];
	$orderNumber = $_POST["orderNumber"];

	$vaccineHoldings = $_POST["vaccineHoldings"];
	$salesVolume = $_POST["salesVolume"];

	$sql = "UPDATE `systemdb`.`purchasing tbl` SET `purchasing_pharmaceuticalCom`='".$purchasing_pharmaceuticalCom."', `purchaseVolume`=".$purchaseVolume.", `purchasingDate` = '".$purchasingDate."', `hospitalName`='".$hospitalName."' WHERE `orderNumber`=".$orderNumber."";
	
	/*수정된 구매내역 만큼 보유량에서 빼고, 총판매량에서 더해서 백신현황 테이블 값도 갱신시켜줌*/
	$sub_sql = "UPDATE `systemdb`.`vaccine tbl` SET `vaccineHoldings`=".$vaccineHoldings." - ".$purchaseVolume.", `salesVolume`=".$salesVolume."+".$purchaseVolume." WHERE `pharmaceuticalCom`='".$purchasing_pharmaceuticalCom."'";

	$ret = mysqli_query($con, $sql);
	$ret2 = mysqli_query($con, $sub_sql);

	echo "<h1> 백신 구매정보 수정 결과 </h1>";
	if($ret and $ret2) {
		echo "백신 구매내역이 성공적으로 수정됨.";
	}
	else {
		echo "백신 구매내역 수정 실패."."<br>";
		echo "실패 원인 :".mysqli_error($con);
	}
	mysqli_close($con);
	echo "<br> <a href='moderna_main.html'> <--초기화면</a> ";
?>