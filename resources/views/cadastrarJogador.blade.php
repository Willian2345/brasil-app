@extends('padrao')
@section('content')
<section class="footerJ">
    <div class="container cadastro">
      <H3>Cadastrar Jogadores</H3>
      <form class="row g-3" method="post" action="{{route('salvar-banco')}}">
        @csrf
        <div class="col-md-12">
          <label for="inputNome" class="form-label">Nome</label>
          <input type="text" name="nome" class="form-control" id="inputNome" placeholder="João">
          @error('Nome')
          <div class="text-danger">
            *Preencher o campo <b>Nome</b>!!
          </div>
          @enderror
        </div>

        <div class="col-12">
          <label for="inputdtNasc" class="form-label">Data De Nascimento</label>
          <input type="text" name="dtNasc" class="form-control" id="inputdtNasc" placeholder="01/01/2000">
          @error('dtNasc')
          <div class="text-danger">
            *Preencher o campo <b>Data De Nascimento</b>!!
          </div>
          @enderror
        </div>


        <div class="col-12">
          <label for="inputPosicao" class="form-label">Posição</label>
          <input type="text" name="posicao" class="form-control" id="inputPosicao" placeholder="Atacante">
          @error('posicao')
          <div class="text-danger">
            *Preencher o campo <b>Posição</b>!!
          </div>
          @enderror
        </div>

        <div class="col-md-12">
          <label for="inputPe" class="form-label">Pé</label>
          <input type="text" name="pe" class="form-control" id="inputPe" placeholder="Direito">
          @error('pe')
          <div class="text-danger">
            *Preencher o campo <b>Pé</b>!!
          </div>
          @enderror
        </div>

        <div class="col-md-12">
          <label for="inputAltura" class="form-label">Altura</label>
          <input type="text" name="altura" class="form-control" id="inputAltura" placeholder="1,80">
          @error('altura')
          <div class="text-danger">
            *Preencher o campo <b>Altura</b>!!
          </div>
          @enderror
        </div>


        
        <div class="col-md-12">
          <label for="inputPeso" class="form-label">Peso</label>
          <input type="text" name="peso" class="form-control" id="inputPeso" placeholder="180kg">
          @error('peso')
          <div class="text-danger">
            *Preencher o campo <b>Peso</b>!!
          </div>
          @enderror
        </div>

        <div class="col-12 botaoCadastro">
          <button type="submit" class="btn btn-light">Cadastrar</button>
        </div>
      </form>
    </div>
</section>
@endsection