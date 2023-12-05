<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cotacao;

class CotacaoController extends Controller
{
    public function showall(){
        $produto = Cotacao::all();
        return view('cotacao.index', ['produtos' => $produto]);
    }
    
    public function create()
    {
        return view('cotacao.create');
    }

    public function store(Request $request)
    {
        Cotacao::create([
            'material' => $request->material,
            'precoDeposito' => $request->precoDeposito,
            'precoRetirar' => $request->precoRetirar
        ]);

        return 'Cotacao criado!<br/><a href="."><button>Voltar</button></a>';
    }

    public function show($id){
        $produto = Cotacao::findOrFail($id);
        return view('cotacao.show', ['produto' => $produto]);
    }

    public function update(Request $request, $id){
        $produto = Cotacao::findOrFail($id);
        $produto->update([
            'material' => $request->material,
            'precoDeposito' => $request->precoDeposito,
            'precoRetirar' => $request->precoRetirar
        ]);

        return 'Cotacao atualizado!<br/><a href=".."><button>Voltar</button></a>';
    }

    public function delete($id){
        $produto = Cotacao::findOrFail($id);
        $produto->delete();
        
        return 'Cotacao excluido!<br/><a href=".."><button>Voltar</button></a>';
    }

}