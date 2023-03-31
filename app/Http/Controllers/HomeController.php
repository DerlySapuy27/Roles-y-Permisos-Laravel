<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function prueba()
    {
        return view('prueba');
    }

    public function nosotros()
    {
        return view('nosotros');
    }
    public function contacto()
    {
        return view('contacto');
    }

    public function adminlite()
    {
        return view('layouts.adminlite');
    }

} 

    
    
