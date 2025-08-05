<h1>Editar Produto</h1>
<form method="POST" action="{{ route('produtos.update', $produto->id) }}">
    @csrf
    @method('PUT')
    Nome: <input name="nome" value="{{ $produto->nome }}"> <br>
    Preço: <input name="preco" value="{{ $produto->preco }}" step="0.01"> <br>
    Estoque: <input name="estoque" value="{{ $produto->estoque }}"> <br>
    <button type="submit">Atualizar</button>
</form>
