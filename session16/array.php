<?php 
	//khai bao 1 mang
	$arr = [];
	//$arr = array();
	$arr = ['Y', 'Suong'];
	$arr1 = [0 => 'Y', 1 => 'Suong'];
	$arr2 = ['y' => 'Y', 'suong' => 'Suong'];
	var_dump($arr);
	echo "<br>";
	var_dump($arr1);
	echo "<br>";
	var_dump($arr2);
	echo "<br>";
	foreach ($arr as $key => $value) {
		echo $key.', '.$value;
		echo "<br>";
	}
	foreach ($arr1 as $key => $value) {
		echo $value;
		echo "<br>";
	}
	foreach ($arr2 as $key => $value) {
		echo $key.', '.$value;
		echo "<br>";
	}
	//console.log();
	array_push($arr, 'Thien');
	var_dump($arr);
	echo "<br>";
	array_pop($arr1);
	var_dump($arr1);
	echo "<br>";
	unset($arr2['suong']);
	var_dump($arr2);
	echo "<br>";
	$arr3 = array_merge($arr1, $arr2);
	var_dump($arr3);
	//////////////
	echo "<br>";
	$a=array("red","green","blue");
	array_pop($a);
	print_r($a);
	echo "<br>";
	/////////////
	$arrMyClass = array(
		'nhuy' => array(
			'name' => 'Nhu Y',
			'age' => 20,
			'gender' => 'female',
			'phone' => '09876442..'
		),

		'tai' => array(
			'name' => 'Tai',
			'age' => 21,
			'gender' => 'male',
			'phone' => '09876442..'
		)
	);
	var_dump($arrMyClass);
	echo "<br>";
	//////////
	function changeGenderVi($gender){
		return $gender == 'male' ? "nam":"nu";
	}
	function listClass($arrMyClass){
		$i = 1;
		foreach ($arrMyClass as $key => $value) {
			//var_dump($key);
			//var_dump($value);
			echo $i.' - '.$value['name'].' - '.$value['age'] .'tuoi'.' - '.changeGenderVi($value['gender']).' - '.$value['phone'];
			$i++;
			echo "<br>";
		}
	}
	listClass($arrMyClass);
	///////////
	$arrNewMember = array(
		'vuong' => array(
			'name' => 'Vuong',
			'age' => 25,
			'gender' => 'male',
			'phone' => '0942..'
		)
	);
	$arrNewMember = array_merge($arrMyClass,$arrNewMember);
	//////////////////
	echo "<br>--------------------------<br>";
	listClass($arrMyClass);
?>