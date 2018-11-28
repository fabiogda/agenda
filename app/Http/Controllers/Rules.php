<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;

class Rules extends Controller
{
    
    public function listar()
    {
        $list_pessoas = Pessoa::all();
        return view ('screens.home', [
            'pessoas' => $list_pessoas
        ]);
    }

}
