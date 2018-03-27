<?php 
	
	function sumarEnteros(){

		$contador = 0;

		for ($i=1; $i<=1000 ; $i++) { 
			echo "Numero sumado: $i<br>";
			$contador ++;
		}

		echo "<br>Total de numeros sumados: $contador";
	}

 ?>