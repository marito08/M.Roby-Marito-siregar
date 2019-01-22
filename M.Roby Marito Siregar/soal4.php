<?php  

function print_abc ($kolom, $baris){

	$abjad = "A";
	for ($a = 0; $a < $baris; $a++){

		for ($b = 0 ; $b < $kolom; $b++){

			echo $abjad++." ";
		}

			echo "<br>";
	}
}


print_abc(3,4);
