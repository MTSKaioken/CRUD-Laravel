@extends('vendedor.templates.base')
@section('titulo', 'Detalhes Produto')
@section('conteudo')  
<div class="nav-fornecedores">
    <ul>
        <li><a href="{{route('produto.create')}}">Novo</a></li>
        <li><a href="{{route('produto.index')}}">Voltar</a></li>
    </ul>
</div>

        <div class="container-fornecedores">
                <table>
                  <tr>
                    <td>ID</td>
                    <td>{{ $produto->id }}</td>
                  </tr> 
                  <tr>
                    <td>Produto</td>
                    <td>{{ $produto->titulo_produto }}</td>
                  </tr>
                  <tr>
                    <td>Descrição</td>
                    <td>{{ $produto->descricao }}</td>
                  </tr>  
                  <tr>
                    <td>Categoria</td>
                    <td>{{ $produto->categoria }}</td>
                  </tr> 
                  <tr>
                    <td>Preço</td>
                    <td>{{ $produto->preco }}</td>
                  </tr> 
                  <tr>
                    <td>Foto Produto</td>
                    <td><img src="{{ $produto->url_img_produto }}" width='150px'></td>
                  </tr>
                </table>
            </div>
    </center>
@endsection