@extends('layout')
@section('conteudo')
<h2>Welcome to the Home Page</h2>
<p>This is the main content of the home page.</p>
<form action="{{ route('adicionar') }}" method="post">
    @csrf
    <div class="input-group">
        <input type="text" name="tarefa" class="form-control">
        <button type="submit" class="btn btn-warning fa-regular fa-plus">adicionar</button>
    </div>
</form>
<ul class="list-group mt-4">
    @foreach ($tarefas as $tr)

    <li class="list-group-item d-flex justify-content-between align-items-center">
        <div class="d-flex">
            <input type="checkbox" name="status" class="form-check-input me-2" {{ $tr->status ? 'checked' : '' }}>
            <span>{{ $tr->tarefa }}</span>
        </div>

        <div class="btn-group">
            <a href="{{ route('editar',$tr->id) }}" class="btn btn-ligh btn-sm"><i class="fa fa-edit"></i></a>
            <form action="{{ route('deletar', $tr->id) }}" method="post" class="btn-group">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja deletar esta tarefa?')">
                    <i class="fa fa-trash"></i>
                </button>
            </form>
        </div>
    </li>
    @endforeach
</ul>
@endsection