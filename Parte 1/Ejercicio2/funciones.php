<!-- Aplicación Nº 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple. -->

<?php 

	function mostrarFechaConDistintosFormatos()
	{
		echo "Formato 1: ".date(DATE_COOKIE)."<br>";
		echo "Formato 2: ".date(DATE_ATOM)."<br>";
		echo "Formato 3: ".date(DATE_ISO8601)."<br>";
		echo "Formato 4: ".date(DATE_RFC822 )."<br>";
		echo "Formato 5: ".date(DATE_RFC850 )."<br><br>";
	}

	function mostrarEstacion()
	{
		$estacion = "";
		$mes = (int)date("m");
		$dia = (int)date("j");
		//echo "$dia";
		
		switch ($mes) {
			case 12:
			case 1:
			case 2:
				if($mes == 12 && $dia < 21){
					$estacion = "Primavera";
					break;
				}
				else{
					$estacion = "Verano";
					break;
				}

			case 3:
			case 4:
			case 5:
				if($mes == 3 && $dia < 21){
					$estacion = "Verano";
					break;
				}
				else{
					$estacion = "Otoño";
					break;
				}

			case 6:
			case 7:
			case 8:
				if($mes == 6 && $dia < 21){
					$estacion = "Otoño";
					break;
				}
				else{
					$estacion = "Invierno";
					break;
				}

			case 9:
			case 10:
			case 11:
				if($mes == 9 && $dia < 21){
					$estacion = "Invierno";
					break;
				}
				else{
					$estacion = "Primavera";
					break;
				}
			
		}

		echo "La estacion del año es $estacion.";
	}

	function mostrarFechaYEstacion()
	{
		mostrarFechaConDistintosFormatos();

		mostrarEstacion();
	}

 ?>