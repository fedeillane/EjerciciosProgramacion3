<!-- Aplicación Nº 5 (Números en letras)
Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres” -->

<?php 

	function mostrarValorEnPalabras($numero)
	{
		if (is_int($numero)) {
			if ($numero >= 20 && $numero <= 60) {
				$f = new NumberFormatter("es", NumberFormatter::SPELLOUT);
				echo $f->format($numero)."<br>";
			} else 
				echo "Error! El valor del numero no es correcto. Debe estar entre el 20 y el 60.<br>";
		} else
			echo "Error! Solo se permiten numeros.<br>";
	}
	
	

 ?>