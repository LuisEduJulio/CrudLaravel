<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller{
    public function index(){
        return view('contato');
    }
}

/*
<?php
    $contato = new App\Contato;
    dd($contato->lista());
    return view('contato', compact('contatos'));
?>
*/