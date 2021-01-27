<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Composicao;
use App\Http\Requests\ComposicaoRequest;
use Illuminate\Http\Request;

class ComposicaoController extends Controller
{
   
    public function index()
    {
        $composicoes = Composicao::with('usuario')->get();
        return view('usuarios.index',compact('composicoes'));
    }

    
    public function create()
    {
        return view('usuarios.novacomposicao');
    }

  
    public function store(ComposicaoRequest $request)
    {
        try{
            $composicao = new Composicao;

            $composicao->titulo = $request->titulo;
            $composicao->categoria = $request->categoria;
            $composicao->texto = $request->texto;
            $composicao->participacao = $request->participacao;
            $composicao->produzido = $request->produzido;
            $composicao->escrito = $request->escrito;
            $composicao->soundcloud = $request->soundcloud;
            $composicao->youtube = $request->youtube;
            $composicao->usuario_id =  auth()->user()->id;

            $composicao->save();

          }catch(\Exception $e){
              return redirect()->route('dashboard.index');
          }
          return redirect()->route('dashboard.index')->with('msg_success','Composição Cadastrada com sucesso !');
    }   

   
    public function show(Composicao $composicao)
    {
        
    }

    
    public function edit($id)
    {
        $composicoes = Composicao::find($id);
       return view('usuarios.editcomposicao',compact('composicoes'));
    }

    
    public function update(Request $request, $id)
    {
        $composicao = Composicao::find($id);
       
        $composicao->titulo = $request->titulo;
        $composicao->categoria = $request->categoria;
        $composicao->texto = $request->texto;
        $composicao->participacao = $request->participacao;
        $composicao->produzido = $request->produzido;
        $composicao->escrito = $request->escrito;
        $composicao->soundcloud = $request->soundcloud;
        $composicao->youtube = $request->youtube;

        $composicao->save();

        return redirect()->route('dashboard.index')->with('msg_success','Atualizado com sucesso. !');

    
    }

   
    public function destroy($id)
    {
        $composicao = Composicao::findOrFail($id);
        $composicao->delete();

        return redirect()->route('composicoes.index');
    }
}






