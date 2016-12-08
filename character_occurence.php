<?php

class CharacterCount{
	public function count($string){

		$cnt = array();
		for($i = 0; $i < strlen($string) ; $i++){
			if(isset($cnt[$string[$i]])){
				$cnt[$string[$i]] += 1;
			} else {
				$cnt[$string[$i]] = 1;
			}
		}

		// sorted array in descending order of occurence.
		arsort($cnt);
		
		$output = '';
		$prevkey = 0;
		$equal = '';
		$prevchar = '';
		foreach($cnt as $k => $v){

			// 3 is because , we are taking those values whose occurence is mosre than 3 in a string.
			if($v > 3){

				if($v == $prevkey){
					if(strlen($equal) == 0){
						$equal .= $prevchar.$k;
						$output = substr($output,0 ,-1);
					}else
					$equal .= $k;

				} else {
					if(strlen($equal) > 0){

						$kk = $this->sortByAscii($equal);
						$equal = '';
						$output .= $kk;	
					} 
					$output.=$k;	
				}

				$prevkey = $v;
				$prevchar=$k;

			} else {
				if(strlen($equal) > 0){
					$kk = $this->sortByAscii($equal);
					$equal = '';
					$output .= $kk;	
				}
				break;
			}
		}		

			return $output;	
	}

	///this function gets the same occurence values as string and sorts them as per ASCII values
	public function sortByAscii($string){
		$resp = '';
		$asc = array();
		for($i = 0; $i < strlen($string) ; $i++){
			$asc[$string[$i]] = ord($string[$i]);
		}
		asort($asc);
		foreach($asc as $k => $v){
			$resp .= $k;
		}
		return $resp;
	}
}

$search_string = "abbababbabkeleeklkel";
$characterCount = new CharacterCount();
$response = $characterCount->count($search_string);

echo "Sorted String is: '" . $response ."'";

?>