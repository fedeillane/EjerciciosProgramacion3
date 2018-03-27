<!-- Aplicación Nº 8 (Carga aleatoria)
Imprima los valores del vector asociativo siguiente usando la estructura de control foreach:
$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo'; -->

<?php 

	function cargarArrayAsociativo()
	{
		$array = array('1' => 90, '30' => 7, 'e' => 99, 'hola' => 'mundo',);

		return $array;
	}

	function imprimirArrayAsociativo($array)
	{
		if (!empty($array)) {
			foreach ($array as $key => $value) {
				echo "Key: $key. Valor: $value.<br>";
			}
		} else {
			echo "El array esta vacio.<br>";
		}
		
	}


 ?>