@extends('template.telas')

@section('content')
@foreach ($pessoas as $pessoa)
    nome: {{$pessoa->nome}}<br>
    ddd: @foreach ($pessoa->telefone as $telefone)
        {{$telefone->ddd}}<br>
    telefone: {{$telefone->fones}}
    @endforeach
@endforeach
    
@endsection
