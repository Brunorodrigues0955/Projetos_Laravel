@extends('templates.template')
@section('content')
<section>
    <form action="{{url('/usuarios-alterar/'.$mensagem->id)}}" method="post">
        {{@csrf_field()}}

        <div>
            <h3> Edite seus dados </h3>
        </div>

        <div>
            <input type="text" placeholder="Nome" name="txNome" value={{$mensagem->nome}} />
        </div>

        <div>
            <input type="text" placeholder="Email" name="txEmail" value={{$mensagem->email}} />
        </div>

        <div>
            <input type="text" placeholder="Telefone" name="txTel" value={{$mensagem->telefone}} />
        </div>

        <div>
            <input type="text" placeholder="Assunto" name="txAssunto" value={{$mensagem->assunto}} />
        </div>

        <div>
            <input type="text" placeholder="Mensagem" name="txMsg" value={{$mensagem->mensagem}} />
        </div>

        <div>
            <input type="submit" value="Enviar"/>
        </div>

    </form>
</section>
@endsection