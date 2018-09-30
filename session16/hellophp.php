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
	$a = 91;
	$b = 7;
	function tinhTong($a,$b){
		$c = $a + $b;
		return $c;
	}
	$Tong = tinhTong($a,$b);
	echo  "<br>Ket qua cua ". $a ." + ". $b . " la ".tinhTong($a,$b);
	if ( $Tong % 2 == 0)
		echo "<br>Tong hai so la so chan";
	else {
		echo "<br>Tong hai so la so le";
		if ( $Tong % 3 == 0)
			echo " va chia het cho 3";
		else
			echo " va khong chia het cho 3";
	}
	$so = 12;
	echo "<br>";
	switch ($so) {
		case '1':
		case '3':
		case '5':
		case '7':
		case '8':
		case '10':
		case '12':
			echo "So ban nhap la thang $so co 31 ngay";
			break;
		case '2':
			echo "So ban nhap la thang $so nam nhuan co 29 ngay, nam k nhuan co 28 ngay";
			break;
		case '4':
		case '6':
		case '9':
		case '11':
			echo "So ban nhap la thang $so co 30 ngay";
			break;
		default:
			echo "So ban nhap khong phai la thang trong nam";
			break;
	}
// 	Với kết quả tổng của bài 1, lấy giá trị hàng đơn vị
// của tổng đó (chỉ lấy khi tổng đó nhỏ hơn 1000) , nếu tổng
// lớn hơn 1000 thì không thực hiện gì cả
// Kiểm tra giá trị hàng đơn vị là chẵn hay lẻ, nếu lẻ thì xem
// chia hết cho 3 không?
	echo "<br>";
	if( $Tong <= 1000 ) 
		if( ( $Tong % 10 ) % 2 == 0 )
			echo "hang don vi la so chan"; 
		else{
			echo "hang don vi la so le";
			if ( ( $Tong % 10 )  % 3 == 0)
				echo " va chia het cho 3";
			else
				echo " va k chia het cho 3";
		}
	// <form action="hellophp.php" method="post">
	// 	Name : <input type="text" name="name"><br>
	// 	E-mail : <input type="text" name="email"><br>
	// <input type="submit">
	// </form>
?>
</body>
</html>