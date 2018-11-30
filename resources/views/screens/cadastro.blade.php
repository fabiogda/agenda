@extends('template.telas')

@section('content')


<div class="col-md-12">
    <h3>Novo contato</h3>
</div>

<div class="form-row border rounded border-primary">

    <form class="col-md-12" action="{{ url ('screens/salvar') }}" method="POST">
        {{ csrf_field() }}

        <div class="form-row">

            <div class="form-group col-md-12">                
                <label><strong>Nome:</strong></label>
                <input class="form-control" name="nome" placeholder="Nome Completo">
            </div>

            <!-- 
               <div class="form-group col-md-2">
                    <label><strong>DDD:</strong></label>
                    <input type="text" class="form-control" id="ddd" placeholder="DDD">
                </div>

            <div class="form-group col-md-4">
                <label><strong>Telefone:</strong></label>
                <input type="text" class="form-control" id="telefone" placeholder="33337777">
            </div>
            -->
        </div>

        <button style="float: right;" type="submit" class="btn btn-outline-primary">Enviar</button>
   
    </form>

</div>


@endsection