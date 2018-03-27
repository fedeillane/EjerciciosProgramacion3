<!-- Aplicación Nº 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado. -->

<?php 

	function cargarArray($valorMinimo, $valorMaximo)
	{
		return $arrayNumerosRandom = array(rand($valorMinimo,$valorMaximo), rand($valorMinimo,$valorMaximo), rand($valorMinimo,$valorMaximo), rand($valorMinimo,$valorMaximo), rand($valorMinimo,$valorMaximo));
	}

	function mostrarPromedio()
	{
		$arrayNumerosRandom = cargarArray(1,10);

		for ($i=0; $i < count($arrayNumerosRandom); $i++) { 
			echo "El ".($i+1)." ° numero es : $arrayNumerosRandom[$i].<br>";
		}

		$promedio = array_sum($arrayNumerosRandom)/count($arrayNumerosRandom);

		echo "El promedio es: $promedio.<br>";

		if ($promedio > 6)
			echo "El promedio es mayor a seis.<br>";
		else if($promedio < 6)
			echo "El promedio es menor a seis.<br>";
		else if($promedio == 6)
			echo "El promedio es igual a seis.<br>";
		else
			echo "Error!<br>";
	
	}

 ?>