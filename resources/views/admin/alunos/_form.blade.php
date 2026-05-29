<div class="input-field">
  <input type="text" name="nome" value="{{ isset($linha->nome) ? $linha->nome : '' }}" required>
  <label>Nome do Aluno</label>
</div>

<div class="input-field">
  <input type="text" name="celular" value="{{ isset($linha->celular) ? $linha->celular : '' }}" required>
  <label>Celular</label>
</div>

<div class="input-field">
  <select name="id_curso" required style="display: block;">
    <option value="" disabled {{ !isset($linha) ? 'selected' : '' }}>Selecione o Curso</option>
    @foreach($cursos as $curso)
    <option value="{{ $curso->id }}" {{ isset($linha) && $linha->id_curso == $curso->id ? 'selected' : '' }}>
      {{ $curso->titulo }}
    </option>
    @endforeach
  </select>
  <label style="position: relative;">Curso Matriculado</label>
</div>

<div class="file-field input-field">
  <div class="btn blue">
    <span>Imagem</span>
    <input type="file" name="arquivo">
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" type="text">
  </div>
</div>

@if(isset($linha->imagem))
<div class="input-field">
  <img width="100" src="{{ asset($linha->imagem) }}" />
</div>
@endif
