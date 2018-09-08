<!DOCTYPE html>
<html>
<body>
<?php
	echo "<div style='color:blue;weight:50%;text-align:center;font-size:20px;font-weight:bold'> hello php </div>";
	$userName = "Y";
	$dob = "20/10/98";
	echo " $userName sinh ngay $dob" ;
	// 
	function myFunction(){
		echo "y";
	}
	//
	$a = 4;
	$b = 7;
	function tinhTong($a,$b){
		$c = $a + $b;
		return $c;
	}
	echo  "<br>Ket qua cua ". $a ." + ". $b . " la ".tinhTong($a,$b);
	if ( tinhTong($a,$b) % 2 == 0)
		echo "<br>Tong hai so la so chan";
	else {
		echo "<br>Tong hai so la so le";
		if ( tinhTong($a,$b) % 3 == 0)
			echo " va chia het cho 3";
		else
			echo " va khong chia het cho 3";
	}

?>
</body>
</html>