<!-- Aplicación Nº 7 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando
las estructuras while y foreach -->

<?php 
	
	function cargarArray()
	{
		$arrayNumeroImpares = array(1,3,5,7,9,11,13,15,17,19);

		return $arrayNumeroImpares;
	}

	function iteracionFor($array)
	{
		if (!empty($array)) {
			echo "<h4>Estructura For.</h4><br>";

			for ($i=0; $i < count($array); $i++) { 
				echo ($i+1)."° Numero: $array[$i].<br>";
			}
		} else
			echo "Array vacio. <br>";		
		
	}

	function iteracionForEach($array)
	{

		if (!empty($array)) {
			echo "<h4>Estructura For each.</h4><br>";

			foreach ($array as $value) {
				echo "Numero: $value.<br>";
			}
		}
		else
			echo "Array vacio. <br>";

	}

	// Funcion que itera el array que se le pasa por parametro con una esctructura While
	function iteracionWhile($array)
	{

		if(!empty($array)){

			echo "<h4>Estructura While.</h4><br>";
			$contador = 0;
			$cuenta = count($array);
			//echo "$cuenta<br>";

			while ($contador < $cuenta) {
				echo ($contador+1)."° Numero: $array[$contador].<br>";
				$contador ++;
			}
		}
		else
			echo "Array vacio.<br>";
	}


 ?>