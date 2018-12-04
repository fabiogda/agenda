<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;
use App\Telefone;

class RulesController extends Controller
{
 
    private $tefones_controller;

    public function __construct(TelefonesController $telefones_controller)
    {
        $this->tefones_controller = $telefones_controller;
    }
    public function cadastrar()
    {
        return view ('screens.cadastro');
    }

    public function listar()
    {
        $list_pessoas = Pessoa::all();
        return view ('screens.home', [
            'pessoas' => $list_pessoas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pessoa = Pessoa::create($request->all());

        if ($request->ddd && $request->telefone)
        {
            $telefone = new Telefone();
            $telefone->ddd = $request->ddd;
            $telefone->fones = $request->telefone;
            $telefone->pessoas_id = $pessoa->id;
            $this->tefones_controller->store2($telefone);
        }
        return redirect('screens/listar')->with('message', 'Cadastro efetuado com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
