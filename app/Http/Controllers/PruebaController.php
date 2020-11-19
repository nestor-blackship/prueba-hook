<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class PruebaController extends Controller
{
    //

    public function prueba(Request $request){
        Log::info($request->all());
        return "Hola";
    }
}
