@extends('layouts.default')
@section('title','Editar - Safra')
@section('content')

  <div class="container mt-5">
    <h1>EDITAR SAFRA</h1>
    <hr>
    <form action="{{route('safras-update', ['id'=>$safras->id] )}}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" name="nome" value="{{$safras->nome}}" placeholder="Digite o Nome do Safra">
        </div>
        <div class="form-group">
          <label for="nome">Data Inicio:</label>
          <input type="text" class="form-control" name="data_inicio" value="{{$safras->data_inicio}}" placeholder="Digite a variedade do Safra">
        </div>
        <div class="form-group">
          <label for="nome">Data Fim:</label>
          <input type="text" class="form-control" name="data_fim" value="{{$safras->data_fim}}" placeholder="Digite a variedade do Safra">
        </div>
        <br>
        <div class="form-group">
          <input type="submit" class="btn btn-success" name="submit" value="Atualizar">
        </div>
      </div>

    </form>
 
@endsection