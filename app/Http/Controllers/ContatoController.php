<?php

namespace App\Http\Controllers;

use App\Models\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    //
    public function callView(){
        return view('site.contato');
    }

    public function callResponse(Request $request){
        $contato = new SiteContato();
        $contato->create($request->all());
        return view('site.contato');
    }
}
