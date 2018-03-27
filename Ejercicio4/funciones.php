<!-- Aplicación Nº 4 (Calculadora)
Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla. -->

<?php 

	function calculadora($op1, $op2, $operador)
	{
		$resultado = 0;

		if(is_int($op1) && is_int($op2)){
			if($operador == '+'){
				$resultado = $op1 + $op2;
				echo "El resultado es: $resultado.";
			}
			else if($operador == '-'){
				$resultado = $op1 - $op2;
				echo "El resultado es: $resultado.";
			}
			else if($operador == '/'){
				if ($op2 != 0){
					$resultado = $op1 / $op2;
					echo "El resultado es: $resultado.";
				}
				else
					echo "<b>Error!</b> El valor del operando 2 deben ser distinto de cero.<br>";
			}
			else if($operador == '*'){
				$resultado = $op1 * $op2;
				echo "El resultado es: $resultado.";
			}
			else
				echo "<b>Error!</b> El valor del operador no es correcto.</h1><br>";
		}
		else
			echo "<b>Error!</b> Los operandos deben ser enteros.<br>";
	}

 ?>