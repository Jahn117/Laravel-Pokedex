<?php

namespace Blog\Http\Controllers;

use Blog\Http\Controllers\Controller;

class PruebaControllerVideo9 extends Controller{
	public function prueba($param){
		return 'Estoy dentro de pruebaController y recibí este parametro: '. $param;
	}
}