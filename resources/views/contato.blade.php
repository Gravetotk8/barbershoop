@extends('layout')

@section('conteudo')

<div class="row">
    <h2 class="col-12 text-center">AGENDA</h2>

    <P class="text-muted text-center">Para agendar informe o seu nome e telefone</P>

    <form action="" method="post" class="offset-3 col-6">

        <div class="mb-2 mx-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>

        <div class="mb-2 mx-3">
            <label class="form-label">Telefone</label>
            <input type="text" name="telefone" class="form-control">
        </div>

        <div>
            <button type="submit" class="btn btn-success mt-3">Agendar</button>
        </div>

    </form>
</div>
@endsection
