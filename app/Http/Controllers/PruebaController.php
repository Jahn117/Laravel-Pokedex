<?php

namespace Blog\Http\Controllers;

use Blog\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PruebaController extends Controller{
	public function prueba($param){
		return 'Estoy dentro de pruebaController y recibi este parametro: '. $param;
	}

	public function hello(){
		return 'Hello';
	}

	public function suma($var1,$var2){

        return view('Ejercicios.test')->with('var1', $var1+$var2);
    }

    public function resta($var1,$var2){

        return $var1-$var2;
    }

    public function div($var1,$var2){

        return $var1/$var2;
    }

    public function mult($var1,$var2){

        return $var1*$var2;
    }

    public function create()
    {
        return view('Ejercicios.test');
    }
}