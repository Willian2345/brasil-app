@extends('padrao')
@section('content')
<section>
    <div class="container cadastro">
      <H3>Atualizar Jogador</H3>
      <form class="row g-3" method="post" action="{{route('alterar-banco',$registrosJogadores->id)}}">
        @csrf
        @method('put')
        <div class="col-md-12">
          <label for="inputNome" class="form-label">Nome</label>
          <input type="text" name="nome" value="{{old('nome',$registrosJogadores->nome)}}" class="form-control" id="inputNome" placeholder="Jão">
          @error('nome')
          <div class="text-danger">
            *Preencher o campo <b>Nome</b>!!
          </div>
          @enderror
        </div>

        <div class="col-12">
          <label for="inputdtNasc" class="form-label">Data de Nascimento</label>
          <input type="text" name="dtNasc" value="{{old('dtNasc',$registrosJogadores->dtNasc)}}" class="form-control" id="inputdtNasc" placeholder="Zezin">
          @error('dtNasc')
          <div class="text-danger">
            *Preencher o campo <b>Data de Nascimento</b>!!
          </div>
          @enderror
        </div>


        <div class="col-12">
          <label for="inputPosição" class="form-label">Posição</label>
          <input type="text" name="posicao"  value="{{old('posicao',$registrosJogadores->posicao)}}" class="form-control" id="inputPosicao" placeholder="tonho">
          @error('posicao')
          <div class="text-danger">
            *Preencher o campo <b>posicao</b>!!
          </div>
          @enderror
        </div>

        <div class="col-md-12">
          <label for="inputPe" class="form-label">Pé</label>
          <input type="text" name="pe" value="{{old('pe',$registrosJogadores->pe)}}" class="form-control" id="inputPe" placeholder="visao">
          @error('pe')
          <div class="text-danger">
            *Preencher o campo <b>Pé</b>!!
          </div>
          @enderror
        </div>

        <div class="col-md-12">
          <label for="inputAltura" class="form-label">Altura</label>
          <input type="text" name="altura" value="{{old('altura',$registrosJogadores->altura)}}" class="form-control" id="inputAltura" placeholder="13">
          @error('altura')
          <div class="text-danger">
            *Preencher o campo <b>Altura</b>!!
          </div>
          @enderror
        </div>
        
        <div class="col-md-12">
          <label for="inputPeso" class="form-label">Peso</label>
          <input type="text" name="peso" value="{{old('peso',$registrosJogadores->peso)}}" class="form-control" id="inputPeso" placeholder="13">
          @error('peso')
          <div class="text-danger">
            *Preencher o campo <b>Peso</b>!!
          </div>
          @enderror
        </div>

        <div class="col-12 botaoCadastro">
          <button type="submit" class="btn btn-light">Atualizar</button>
        </div>
      </form>
    </div>
</section>
@endsection






