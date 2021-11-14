<?php 
	function example($text){
		echo "$text";
	}

	function filingArr($n, $l) {
		$mass = array();
		for ($i=0; $i < $n; $i++) { 
			for ($k=0; $k < $l ; $k++) { 
				$mass[$i][$k] = rand(-20, 20);
			}
		}
		return $mass;
	}

	function outMass($mass) {
		foreach ($mass as  $massive) {
			echo "<br>";
			foreach ($massive as $key => $mvalue) {
				echo "$mvalue ";
			}
		}
	}

	function way($mass) {
		for ($i=0; $i < count($mass) ; $i++) { 
			for ($l=0; $l < count($mass) ; $l++) { 
				if ([$i] == [$l]) {
					$stroka = 0;
					$stolbec = 0;
					for ($d=0; $d < count($mass) ; $d++) { 
						if ($d == $k) {
							# code...
						} else {
							$stroka += $mass[$d][$k];
						}
					}

					for ($d=0; $d < count($mass) ; $d++) { 
						if ($d == $i) {
							# code...
						} else {
							$stroka += $mass[$i][$d];
						}
					}

					$mass[$i][$l] = $stroka - $stolbec;
				}
			}
		}

		return $mass;
	}

	function summa($mass) {
		$sum;
		for ($i=0; $i < count($mass) ; $i++) { 
			for ($j=0; $j < count($mass[1]) ; $j++) { 
				if ($i - $j == 6) {
					$sum += $mass[$i][$j];
				}
			}
		}
		return $sum;
	}
 ?>