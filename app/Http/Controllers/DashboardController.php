<?php

namespace App\Http\Controllers;

use App\Propietario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Sistema Integrado de Administración en Petroliferos';       
        return view('dashboard.index',compact('title'));
    }

}
