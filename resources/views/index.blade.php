@extends('layout')
@section('conteudo')
<h2>Welcome to the Home Page</h2>
<p>This is the main content of the home page.</p>
<form action="" method="">
    <div class="input-group">
        <input type="text" name="tarefa" class="form-control">
        <button type="submit" class="btn btn-warning fa-regular fa-plus">adicionar</button>
    </div>
</form>
<ul class="list-group mt-4">
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <div>
            <input type="checkbox" name="status" class="form-check-input">
            <span>Nome da tarefa</span>
        </div>

        <div class="btn-group">
            <a href="#" class="btn btn-ligh btn-sm"><i class="fa fa-edit"></i></a>
            <form action="#" method="post" class="btn-group">
                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
            </form>
        </div>
    </li>
</ul>
@endsection