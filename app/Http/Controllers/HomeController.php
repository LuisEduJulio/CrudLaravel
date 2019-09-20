<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class HomeController extends Controller{
    public function index(){
        $cursos = Curso::all(); 
        return view('home',compact('cursos'));
    }
}
