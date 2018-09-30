<?php 
	$arrSanPham = array(
		'ipx' => array(
				'name' => 'Iphone X',
				'gia'  => 30,
				'image' => 'ipx.jpg',
				'description' => 'dong dt moi cua apple'
			),
		'j7pr' => array(
				'name' => 'j7 prime',
				'gia'  => 6 ,
				'image' => 'j7pr.jpg',
				'description' => 'dong dt moi cua samsung'
			)
	);
	function showimage($image) {
		return "<img src = '$image' alt =''>";
	}
	function priceDiscount($gia,$discount) {
		return $gia * (100 - $discount);
	}
	function listSp($arrSanPham) {
		$i = 1;
		foreach ($arrSanPham as $key => $value) {
			if(isset($value['discount'])){
				echo $i.' . '.$value['name'].' - '.$value['gia'].' trieu'.' - '.showimage($value['image']).' - '.$value['description'].'-'.priceDiscount($value['gia'],$value['discount'])."<br>";
			}else{
				echo $i.' . '.$value['name'].' - '.$value['gia'].' trieu'.' - '.showimage($value['image']).' - '.$value['description']."<br>";
			}
			echo "<br>";
			$i++;
		}
	}
	listSp($arrSanPham);
	echo "<br/>----------------<br/>";
	$arrSanPham['ipx']['gia'] = 33;
	$arrSanPham['j7pr']['gia'] = 6.9;
	$arrSanPham['ipx']['image'] = 'ipxplus';
	listSp($arrSanPham);
?>