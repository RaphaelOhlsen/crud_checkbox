@extends('layouts.layout')
@section('content')
    <h3>Novo Cliente</h3>
    @include('form._form_errors')
    <form method="post" action="{{ route('clients.store') }}">
        @include('admin.clients._form')
        <button type="submit" class="btn btn-default">Criar</button>
    </form>
@endsection