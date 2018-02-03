@extends('Layouts.master')
@section('title', 'Editoras')
@section('page-header-content','Editoras')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3><a href="/editoras/cria"><span class="glyphicon glyphicon-plus" aria-hiden="true">Editora</span></a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($editoras as $editora)
        <tr>
          <td>{{$editora->id}}</td>
          <td>{{$editora->nome}}</td>
          <td>{{$editora->email}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection
