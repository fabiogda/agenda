@extends('template.telas')

@section('content')


<div class="col-md-12">
    <h3>Novo contato</h3>
</div>

<div class="form-row border rounded border-primary">

    <form class="col-md-12" action="{{ url ('screens/salvar') }}" method="POST">
        {{ csrf_field() }}

        <div class="form-row">

            <div class="col-md-6">                
                <label><strong>Nome:</strong></label>
                <input class="form-control" name="nome" placeholder="Nome Completo">
            </div>

               <div class="col-md-2">
                    <label><strong>DDD:</strong></label>
                    <input type="text" class="form-control" name="ddd" placeholder="DDD">
                </div>

            <div class="col-md-4">
                <label><strong>Telefone:</strong></label>
                <input type="text" class="form-control" name="telefone" placeholder="11111111">
            </div>
        </div> 

        
            <button style="float: right; margin-top: 5px;" type="submit" class="btn btn-outline-primary">Enviar</button>

    </form>

</div>


@endsection