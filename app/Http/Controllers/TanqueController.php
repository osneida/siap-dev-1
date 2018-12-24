<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TanqueController extends Controller
{
    public function index()
    {

        $tanques = Tanque::all()->sortBy('id');
        //$title = 'Listado de Estaciones';       
        //return view('estaciones.index',compact('title','estacions'));
    }
}
