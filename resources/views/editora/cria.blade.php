@extends('Layouts.master')
@section('title', 'Nova Editora')
@section('page-header-content','Cadastro da editora')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3>
            <div class="panel-body"><a href="/editoras"><span class="glyphicon glyphicon-th-list">Editoras</span></a></div>

        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <form action="/editoras" method="POST">
        {{csrf_field()}}
        <div class="form-group">
          <label for="nome">Nome</label>
          <input name="nome" id="nome" type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input name="email" id="email" type="text" class="form-control">
        </div>
        <button class="btn btn-primary">Salvar</button>
      </form>
  </div>

@endsection
