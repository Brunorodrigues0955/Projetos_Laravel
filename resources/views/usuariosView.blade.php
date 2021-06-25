@extends('templates.template')
@section('content')
<div>
    <table>
        <caption>Usuários</caption>
        <th>Nome</th>
        <th>Email</th>
        <th>Tell</th>
        <th>Assunto</th>
        <th>Mensagem</th>
        <th>Excluir</th>
        <th>Editar</th>
        @foreach($mensagem as $men)
        <tr>
            <td>
                {{$men->nome}}
            </td>

            <td>
                {{$men->email}}
            </td>

            <td>
                {{$men->telefone}}
            </td>

            <td>
                {{$men->assunto}}
            </td>

            <td>
                {{$men->mensagem}}
            </td>

            <td>
                <a href="/usuarios-view/{{$men->id}}">
                    Excluir
            </td>

            <td>
                <a href="/usuarios-editar/{{$men->id}}/editar">
                    Editar
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection