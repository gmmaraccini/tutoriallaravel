@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Editar Tasks
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('tasks.update', $task->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Nome:</label>
          <input type="text" class="form-control" name="nome" value={{ $task->nome }} />
        </div>
        <div class="form-group">
          <label for="price">Endereco :</label>
          <input type="text" class="form-control" name="endereco" value={{ $task->endereco }} />
        </div>
        <div class="form-group">
          <label for="quantity">Numero:</label>
          <input type="text" class="form-control" name="numero" value={{ $task->numero }} />
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
      </form>
  </div>
</div>
@endsection