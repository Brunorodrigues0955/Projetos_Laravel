@extends('templates.template')
@section('content')
<section>
    <form action="{{url('/usuario/inserir')}}" method="post">
        @csrf
        <div>
            <h3> Entre em contato conosco! </h3>
        </div>

        <div>
            <input type="text" placeholder="Nome" name="txNome" />
        </div>

        <div>
            <input type="text" placeholder="Email" name="txEmail" />
        </div>

        <div>
            <input type="text" placeholder="Telefone" name="txTel" />
        </div>

        <div>
            <input type="text" placeholder="Assunto" name="txAssunto" />
        </div>

        <div>
            <input type="text" placeholder="Mensagem" name="txMsg" />
        </div>

        <div>
            <input type="submit" value="Enviar"/>
        </div>
    </form>
</section>
@endsection