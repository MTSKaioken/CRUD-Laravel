<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendedorController extends Controller
{
    //
    public function callView(){
        return view('vendedor.index');
    }
}
