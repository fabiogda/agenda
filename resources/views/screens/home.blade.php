@extends('template.telas')

@section('content')

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">DDD</th>
        <th scope="col">Telefone</th>
      </tr>
    </thead>    
    <tbody>
        @foreach ($pessoas as $pessoa)
        @foreach ($pessoa->telefone as $telefone)
      <tr>
        <th scope="row">{{$pessoa->id}}</th>
        <td>{{$pessoa->nome}}</td>        
        <td>{{$telefone->ddd}}</td>
        <td>{{$telefone->fones}}</td>
      </tr>
    </tbody>
    @endforeach
    @endforeach
</table>

@endsection
