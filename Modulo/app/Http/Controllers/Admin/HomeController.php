<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //se crea el metodo index
    public function index(){
        //retorna vista
        return view('home');
    }
}
