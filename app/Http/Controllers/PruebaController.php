<?php

namespace Blog\Http\Controllers;

use Blog\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PruebaController extends Controller{

	public function prueba($param){
		return 'Estoy dentro de pruebaController y recibi este parametro: '. $param;
	}

}	