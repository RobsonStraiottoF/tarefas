@extends('layout')
@section('conteudo')

<h2>Editar Tarefa</h2>

<form action="#" method="post">

    <div class="form-group">
        <input type="text" nome="tarefa" class="form-control">
    </div>

    <div class="mt-4">
        <label type="radio" name="status" value="0" class="form-check-input">pendente</label>
        <label type="radio" name="status" value="1" class="form-check-input">concluida</label>
    </div>

    <button type="submit" class="btn btn-warning mt-3">Salvar </button>
</form>

@endsection