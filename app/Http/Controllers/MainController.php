<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view("site.index");
    }
    public function cardapio(){
        return view("site.cardapio");
    }
    public function cliente(){
        return view('cliente.index');
    }
}
