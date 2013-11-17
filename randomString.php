<?php
	function randStr($length) {
		$allCharacters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		
		$allCharacters = str_shuffle($allCharacters); //shuffles the string
		$randomKey = substr($allCharacters,0,$length);
		//gives only the first part of the shuffled string equal to specified
		// length
		
		return $randomKey;
	}	
	//testing
	echo randStr(10);
	
  //Limitation - randomString can be equal to or less than the size of $allCharacters lengthwise..
  //if randomKey of higher length is needed.. here is the second solution..
	
	function randStr2($length) {
		$allCharacters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		
		$charArray = str_split($allCharacters); //splits string into array
		$result = ""; //initialise $result..
		for($i=0;$i<$length;$i++) {
			$randIndex = array_rand($charArray); // gives random array index
			$result = $result.$charArray[$randIndex];
		}
		return $result;
	}
	//testing
	echo "<br />".randStr2(100);
?>
