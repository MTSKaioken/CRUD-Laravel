@extends('vendedor.templates.base')
@section('titulo', 'Produtos')
@section('conteudo')
<div class="nav-fornecedores">
    <ul>
        <li><a href="">Consulta</a></li>
        <li><a href="{{ route('produto.create') }}">Novo</a></li>
    </ul>
</div>
<h1 align="center">Produtos</h1>    
        <div class="container-fornecedores">
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Categoria</th>
                            <th>Preço</th>
                            <th>Produto</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($produtos as $produto )
                            <tr>
                                <td>{{$produto->titulo_produto}}</td>
                                <td>{{$produto->descricao}}</td>
                                <td>{{$produto->categoria}}</td>
                                <td>{{$produto->preco}}</td>
                                <td><img src="{{ $produto->url_img_produto }}" width="100px"></td>
                                <td><a href="{{ route('produto.show', ['produto' => $produto->id]) }}">Visualizar</a></td>
                                <td>
                                    <form id="form_{{$produto->id}}" method="post" action="{{route('produto.destroy',['produto'=>$produto->id])}}">
                                        @method('DELETE')
                                        @csrf
                                        <a href="#" onclick="document.getElementById('form_{{$produto->id}}').submit()">Excluir</a></td>
                                    </form>
                                <td><a href="{{ route('produto.edit', $produto->id) }}">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    <center>
                {{ $produtos->links() }}
    </center>
@endsection