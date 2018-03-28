<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
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
        $clientes = \App\Cliente::all();
        return view('cliente.index',compact('clientes'));
    }

    public function adicionar()
    {
        return view('cliente.adicionar',compact('clientes.adicionar'));
    }


    public function detalhe($id)
    {
        $cliente = \App\Cliente::find($id);
        return view('cliente.detalhe',compact('cliente'));
    }

    public function salvar(\App\Http\Requests\ClienteRequest $request){
        \App\Cliente::create($request->all());

        \Session::flash('flash_message',[
            'msg'=>"Cliente adicionado com Sucesso!",
            'class'=>"alert-success"
        ]);

        return redirect()->route('cliente.adicionar');
    }

    public function editar($id)
    {
        $cliente = \App\Cliente::find($id);
        if(!$cliente){
            \Session::flash('flash_message',[
                'msg'=>"Não existe esse cliente cadastrado! Deseja cadastrar um novo cliente?",
                'class'=>"alert-danger"
            ]);
            return redirect()->route('cliente.adicionar');
        }

        return view('cliente.editar',compact('cliente'));
    }

    public function atualizar(\App\Http\Requests\ClienteRequest $request,$id)
    {
        \App\Cliente::find($id)->update($request->all());

        \Session::flash('flash_message',[
            'msg'=>"Cliente atualizado com Sucesso!",
            'class'=>"alert-success"
        ]);

        return redirect()->route('cliente');

    }

    public function deletar($id)
    {
        $cliente = \App\Cliente::find($id);

        if(!$cliente->deletarTelefones()){
            \Session::flash('flash_message',[
                'msg'=>"Registro não pode ser deletado!",
                'class'=>"alert-danger"
            ]);
            return redirect()->route('cliente');
        }

        $cliente->delete();

        \Session::flash('flash_message',[
            'msg'=>"Cliente deletado com Sucesso!",
            'class'=>"alert-success"
        ]);

        return redirect()->route('cliente');
    }

}

