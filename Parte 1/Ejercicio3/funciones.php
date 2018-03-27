<!-- Aplicación Nº 3 (Obtener el valor del medio)
Dadas tres variables numéricas de tipo entero $a, $b y $c realizar una aplicación que muestre
el contenido de aquella variable que contenga el valor que se encuentre en el medio de las tres
variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido.
Ejemplo 1: $a = 6; $b = 9; $c = 8; => se muestra 8.
Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje “No hay valor del medio” -->

<?php 

	function mostrarValorDelMedio($a, $b, $c)
	{
		$variableDelMedio = 0;

		if ($a == $b || $b == $c || $a == $c)
			echo "No hay valor del medio.<br>";
		else {
			if ($a > $b) {
				if ($b > $c)
					$variableDelMedio = $b;
				else{
					if ($a > $c) {
						$variableDelMedio = $c;
					} else {
						$variableDelMedio = $a;
					}
				}
			} else {
				if ($a > $c)
					$variableDelMedio = $a;
				else{
					if ($b > $c) {
						$variableDelMedio = $c;
					} else {
						$variableDelMedio = $b;
					}
					
					
				}
			}
			echo "El valor del medio es: $variableDelMedio.<br>";
		}	
	}

 ?>
