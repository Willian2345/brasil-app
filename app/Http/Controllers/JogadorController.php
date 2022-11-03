<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Jogador;

class JogadorController extends Controller
{
    public function FormularioCadastro(){
        return view('cadastrarJogador');
    }

    public function MostrarEditarJogador(Request $request){
        $dadosJogadores = Jogador::query();
        $dadosJogadores->when($request->nome,function($query, $vl){
         $query->where('nome','like','%' .$vl);
 
        });
 
        $dadosJogadores = $dadosJogadores->get();
         return view('editarJogador',['registrosJogador' => $dadosJogadores]);
     }

 
    public function SalvarBanco(Request $request){

    $dadosJogadores = $request->validate([
    'nome' => 'string|required',
    'dtNasc' => 'string|required',
    'posicao' => 'string|required',
    'pe' => 'string|required',
    'altura' => 'string|required',
    'peso' => 'string|required'

    ]);

   Jogador::create($dadosJogadores);

    return Redirect::route('home');
}

public function ApagaBanco(Jogador $registrosJogadores){
    //dd($registrosCaminhoes);
    $registrosJogadores->delete();
 
    return Redirect::route('editar-jogador');
}

public function MostrarAlterarJogador(Jogador $registrosJogadores){
    return view('alterarJogador',['registrosJogadores' => $registrosJogadores]);

}

public function AlterarBancoJogador(Jogador $registrosJogadores, Request  $request){
  $banco = $request->validate([
    'nome' => 'string|required',
    'dtNasc' => 'string|required',
    'posicao' => 'string|required',
    'pe' => 'string|required',
    'altura' => 'string|required',
    'peso' => 'string|required'

    ]);


    $registrosJogadores->fill($banco);
    $registrosJogadores->save();

    return Redirect::route('editar-jogador');

    
}


}
