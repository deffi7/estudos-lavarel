<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index() {
        $produtos = Produto::all();
        return view('crud', compact('produtos'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $request->validate([
            'nome' => 'required',
            'preco' => 'required|numeric',
            'estoque' => 'required|integer',
        ]);

        Produto::create($request->all());
        return redirect()->route('produtos.index');
    }

    public function edit(Produto $produto) {
        return view('edit', compact('produto'));
    }

    public function update(Request $request, Produto $produto) {
        $request->validate([
            'nome' => 'required',
            'preco' => 'required|numeric',
            'estoque' => 'required|integer',
        ]);

        $produto->update($request->all());
        return redirect()->route('produtos.index');
    }

    public function destroy(Produto $produto) {
        $produto->delete();
        return redirect()->route('produtos.index');
    }
}
