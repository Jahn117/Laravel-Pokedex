<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;
use Blog\Trainer;
use Blog\Pokemon;

class PokemonController extends Controller
{
    public function index(Trainer $trainer, Request $request){
    	if ($request->ajax()) {
    		return response()->json($trainer->pokemons, 200);
    	}
    	return view('pokemons.index');
    }

    public function store(Trainer $trainer, Request $request){
        if ($request->ajax()) {
            $pokemon = new Pokemon();
            $pokemon-> name = $request->input('name');
            $pokemon-> picture = $request->input('picture');
            $pokemon->trainer()->associate($trainer)->save();
            //$pokemon->save();

            return response()->json([
                //"trainer"=>$trainer,
                "message" => "Pokemon creado correctamente",
                "pokemon" => $pokemon
            ], 200);
        }
    }
}
