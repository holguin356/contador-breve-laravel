<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContadorController extends Controller
{
    public function index(){
        $contador = Session::get('contador',0);
        return view('contador',['contador' => $contador]);
    }

    public function incrementar(){
        $contador = Session::get('contador',0);
        $contador++;
        Session::put('contador', $contador);
        return redirect('/');
        
    }

    public function decrementar(){
        $contador = Session::get('contador',0);
        $contador = max(0, $contador -1);
        Session::put('contador', $contador);
        return redirect('/');

    }

    
}
