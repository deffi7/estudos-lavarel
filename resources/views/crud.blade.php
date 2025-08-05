<x-layout>
    <x-slot:heading>
        Produtos
    </x-slot:heading>

<a href="{{ route('produtos.create') }}">Novo Produto</a>
<ul>
@foreach ($produtos as $p)
    <li>
        {{ $p->nome }} - R$ {{ $p->preco }} - Estoque: {{ $p->estoque }}
        <a href="{{ route('produtos.edit', $p->id) }}">Editar</a>
        <form method="POST" action="{{ route('produtos.destroy', $p->id) }}" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button>
        </form>
    </li>
@endforeach
</ul>
</x-layout>
