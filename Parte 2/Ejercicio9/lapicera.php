<?php
	Class Lapicera{

		public $color;
		public $marca;
		public $traza;
		public $precio;

		public Lapicera(){
			this.$color = "";
			this.$marca = "";
			this.$traza = "";
			this.$precio = "";
		}

		public Lapicera($color, $marca, $traza, $precio){
			this.$color = $color;
			this.$marca = $marca;
			this.$traza = $traza;
			this.$precio = $precio;
		}

	}
?>