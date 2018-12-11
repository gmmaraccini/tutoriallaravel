@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Adicionar registro
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
      <form method="post" action="{{ route('tasks.store') }}">
          <div class="form-group">
              @csrf
              <label for="nome">Nome:</label>
              <input type="text" class="form-control" name="nome"/>
          </div>
          <div class="form-group">
              <label for="endereco">Endereco :</label>
              <input type="text" class="form-control" name="endereco"/>
          </div>
          <div class="form-group">
              <label for="numero">Numero:</label>
              <input type="text" class="form-control" name="numero"/>
          </div>
          <button type="submit" class="btn btn-primary">Adicionar</button>
      </form>
  </div>
</div>
@endsection