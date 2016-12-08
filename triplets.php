<?php
	class Triplets{
		public function findNumbers($data,$number){
			for ($i=0; $i < sizeof($data) - 2 ; $i++) { 
				for ($j=$i + 1; $j < sizeof($data) - 1 ; $j++) { 
					for ($k= $j + 1; $k < sizeof($data); $k++) { 
						$sum = $data[$i] + $data[$j] + $data[$k];
						if ($sum == $number) {
							echo "Triplet is (".$data[$i].",".$data[$j].",".$data[$k].")";
							return true;
						}
					}
				}
			}

			return false;
		}
	}

	$data = array(1,4,45,6,10,8);
	$number = 22;

	$triplets = new Triplets();
	$triplets->findNumbers($data,$number);
?>