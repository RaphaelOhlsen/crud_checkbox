@extends('layouts.layout')
@section('content')
    <h3>Listagem de clientes</h3>
    <a class="btn btn-primary" href="{{ route('clients.create') }}">Novo Cliente</a>
    <br/><br/>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            {{--<th>Idiomas</th>--}}
        </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->name }}</td>
                <td>
                    <a href="{{ route('clients.edit',['client' => $client->id]) }}">Editar</a> |
                    <a href="{{ route('clients.show',['client' => $client->id]) }}">Ver</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection