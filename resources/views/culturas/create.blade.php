@extends('layouts.default')
@section('title','Cadastrar - Cultura')
@section('content')

  <div class="container mt-5">
    <h1>LISTAGEM DE CULTURAS</h1>
    <hr>
    <form action="{{route('culturas-store')}}" method="POST">
      @csrf
      <div class="form-group">
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" name="nome" placeholder="Digite o Nome da Cultura">
        </div>
        <div class="form-group">
          <label for="nome">Variedade:</label>
          <input type="text" class="form-control" name="variedade" placeholder="Digite a variedade da Cultura">
        </div>
        
        <br>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" name="submit" value="Enviar">
        </div>
      </div>

    </form>
 
@endsection