 <h1>Novo Produto</h1>
<form method="POST" action="{{ route('produtos.store') }}">
    @csrf
    Nome: <input name="nome"> <br>
    Preço: <input name="preco" type="number" step="0.01"> <br>
    Estoque: <input name="estoque" type="number"> <br>
    <button type="submit">Salvar</button>
</form>
