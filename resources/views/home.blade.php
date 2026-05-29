@extends('layout.site')
@section('titulo', 'Home - Sistema de Gestão')

@section('conteudo')
<div class="container">
  <h3 class="center">Painel de Controle</h3>
  <div class="row">

    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Gestão de Cursos</span>
          <p>Cadastre, edite e gerencie os cursos oferecidos pela instituição.</p>
        </div>
        <div class="card-action">
          <a href="{{ route('admin.cursos') }}">Acessar Cursos</a>
        </div>
      </div>
    </div>

    <div class="col s12 m6">
      <div class="card deep-orange">
        <div class="card-content white-text">
          <span class="card-title">Gestão de Alunos</span>
          <p>Gerencie a matrícula, dados e vínculo dos alunos com os cursos.</p>
        </div>
        <div class="card-action">
          <a href="{{ route('admin.alunos') }}">Acessar Alunos</a>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
