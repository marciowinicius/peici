<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoUsuario = Auth::user()->tipo;
        if ($tipoUsuario = 'Aluno'){
            return view('aluno/home');
        } elseif ($tipoUsuario = 'Professor'){
            return view('professor/home');
        } elseif ($tipoUsuario = 'Empresa') {
            return view('empresa/home');
        } elseif ($tipoUsuario = 'Administracao') {
            return view('administracao/home');
        } else {
            return redirect('/');
        }
    }
}
