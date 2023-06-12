@extends('layouts.default')
@section('title','Cadastrar - Safra')
@section('content')

  <div class="container mt-5">
    <h1>LISTAGEM DE SAFRAS</h1>
    <hr>
    <form action="{{route('safras-store')}}" method="POST">
      @csrf
      <div class="form-group">
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" name="nome" placeholder="Digite o Nome da Safra">
        </div>
        <div class="form-group">
          <label for="nome">Data Inicio:</label>
          <input type="text" class="form-control" name="data_inicio"  placeholder="Digite a variedade do Safra">
        </div>
        <div class="form-group">
          <label for="nome">Data Fim:</label>
          <input type="text" class="form-control" name="data_fim"  placeholder="Digite a variedade do Safra">
        </div>
        <br>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" name="submit" value="Enviar">
        </div>
      </div>

    </form>
 
@endsection