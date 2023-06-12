@extends('layouts.default')
@section('title','Editar - Cultura')
@section('content')

  <div class="container mt-5">
    <h1>EDITAR CULTURA</h1>
    <hr>
    <form action="{{route('culturas-update', ['id'=>$culturas->id] )}}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" name="nome" value="{{$culturas->nome}}" placeholder="Digite o Nome do Cultura">
        </div>
        <div class="form-group">
          <label for="nome">Variedade:</label>
          <input type="text" class="form-control" name="variedade" value="{{$culturas->variedade}}" placeholder="Digite a variedade do Cultura">
        </div>
       
        <br>
        <div class="form-group">
          <input type="submit" class="btn btn-success" name="submit" value="Atualizar">
        </div>
      </div>

    </form>
 
@endsection