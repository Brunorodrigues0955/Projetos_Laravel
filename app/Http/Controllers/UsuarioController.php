<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UsuarioModel;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensagem = UsuarioModel::all();
        foreach($mensagem as $m){
            echo $m->id . " ";
            echo $m->nome . "<br />";
        }
    }

    public function exibirUsuarios(){
        $mensagem = UsuarioModel::where('id','>=',1)->orderBy('nome','asc')->get();
        return view('usuariosView',compact('mensagem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mensagem = new UsuarioModel();

        $mensagem->nome = $request->txNome;
        $mensagem->email = $request->txEmail;
        $mensagem->telefone = $request->txTel;
        $mensagem->assunto = $request->txAssunto;
        $mensagem->mensagem = $request->txMsg;
        $mensagem->save();
        return redirect()->action('App\Http\Controllers\UsuarioController@exibirUsuarios');
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
        $mensagem = UsuarioModel::find($id);
        $title = "Editar Usuário . {$mensagem->nome}";
        $title = "Editar Usuário . {$mensagem->email}";
        $title = "Editar Usuário . {$mensagem->telefone}";
        $title = "Editar Usuário . {$mensagem->assunto}";
        $title = "Editar Usuário . {$mensagem->mensagem}";
        return view ('UsuariosEditar',compact('title','mensagem'));
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
        $mensagem = UsuarioModel::find($id);
        $mensagem->update(['nome'=>$request->txNome]);
        $mensagem->update(['email'=>$request->txEmail]);
        $mensagem->update(['telefone'=>$request->txTel]);
        $mensagem->update(['assunto'=>$request->txAssunto]);
        $mensagem->update(['mensagem'=>$request->txMsg]);
        return redirect()->action('App\Http\Controllers\UsuarioController@exibirUsuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mensagem = UsuarioModel::where('id',$id)->delete();
        return redirect()->action('App\Http\Controllers\UsuarioController@exibirUsuarios');
    }
}