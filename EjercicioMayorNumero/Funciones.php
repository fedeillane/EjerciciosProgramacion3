<?php 
	
	function valorMayor($numero1, $numero2, $numero3){

		$valorMaximo = 0;

		if ($numero1 > $numero2){
			if($numero1 > $numero3)
				$valorMaximo = $numero1;
			else
				$valorMaximo = $numero3;
		}else{
			if ($numero2 > $numero3)
				$valorMaximo = $numero2;
			else if($numero3 > $numero2)
				$valorMaximo = $numero3;
			else
				$valorMaximo = $numero1;
		}

		return $valorMaximo;
	}
 ?>