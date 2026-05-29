@extends('layout.site')
@section('titulo', 'Gestão de Alunos')
@section('conteudo')
<div class='container'>
  <h3 class='center'>Lista de Alunos</h3>
  <div class='row'>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Celular</th>
          <th>Curso</th>
          <th>Imagem</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
        @foreach($rows as $row)
        <tr>
          <td>{{ $row->id }}</td>
          <td>{{ $row->nome }}</td>
          <td>{{ $row->celular }}</td>
          <td>{{ $row->curso->titulo ?? 'Nenhum' }}</td>
          <td><img width="60" style="border-radius:50%;" src="{{ asset($row->imagem) }}" alt="{{ $row->nome }}"></td>
          <td>
            <a class='btn deep-orange btn-small' href="{{ route('admin.alunos.editar', $row->id) }}">Alterar</a>
            <a class='btn red btn-small' href="{{ route('admin.alunos.excluir', $row->id) }}">Excluir</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class='row'>
    <a class='btn blue' href="{{ route('admin.alunos.adicionar') }}">Adicionar Aluno</a>
  </div>
</div>
@endsection
