@extends('layouts.layout')

@section('content')
    <h3>Ver cliente</h3>
    <a class="btn btn-primary" href="{{ route('clients.edit',['client' => $client->id]) }}">Editar</a>
    <a class="btn btn-danger"
       onclick="event.preventDefault();
        if(confirm('Deseja excluir este ítem?'))
        document.getElementById('form-delete').submit();"
    >Excluir</a>
    <form id="form-delete" style="display: none" action="{{ route('clients.destroy',['client' => $client->id]) }}" method="post">
        {{csrf_field()}}
        {{method_field('DELETE')}}

    </form>
    <br/><br/>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <th scope="row">ID</th>
            <td>{{$client->id}}</td>
        </tr>
        <tr>
            <th scope="row">Nome</th>
            <td>{{$client->name}}</td>
        </tr>


        </tbody>
    </table>
@endsection