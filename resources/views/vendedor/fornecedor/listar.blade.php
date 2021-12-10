@extends('vendedor.templates.base')
@section('titulo', 'Consultar Fornecedores')
@section('conteudo')  
<div class="nav-fornecedores">
    <ul>
        <li><a href="{{ route('vendedor.fornecedor.listar') }}">Consulta</a></li>
        <li><a href="{{ route('vendedor.fornecedor.adicionar') }}">Novo</a></li>
    </ul>
</div>

    <center>
        <fieldset class="fieldsets">
            <legend align="center">Pesquisar Fornecedor</legend>
            <form action="{{ route('vendedor.fornecedor.listar') }}" method="post">
                @csrf
                <input type="text" value="{{ old('nome') }}" placeholder="Nome Fornecedor" name="nome" autofocus> 
                <br> {{ $errors->has('nome') ? $errors->first('nome') : '' }} <br>
                <input type="text" value="{{ old('site') }}" placeholder="URL do site" name="site"> 
                <br> {{ $errors->has('site') ? $errors->first('site') : '' }} <br> 
                <input type="text" value="{{ old('uf') }}" placeholder="UF" name="uf"> 
                <br> {{ $errors->has('uf') ? $errors->first('uf') : '' }} <br> 
                <input type="text" value="{{ old('email') }}" placeholder="Email Contato" name="email">
                <br> {{ $errors->has('email') ? $errors->first('email') : '' }} <br>
                <button type="submit">Consultar</button>
            </form>
        </fieldset>

        <div class="container-fornecedores">
                <table>
                    <thead>
                        <tr>
                            <th >Nome</th>
                            <th>Site</th>
                            <th>UF</th>
                            <th>Email</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($fornecedores as $fornecedor )
                            <tr>
                                <td>{{$fornecedor->nome}}</td>
                                <td>{{$fornecedor->site}}</td>
                                <td>{{$fornecedor->uf}}</td>
                                <td>{{$fornecedor->email}}</td>
                                <td><a href="{{ route('vendedor.fornecedor.excluir', $fornecedor->id) }}">Excluir</a></td>
                                <td><a href="{{ route('vendedor.fornecedor.editar', $fornecedor->id) }}">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
                {{ $fornecedores->appends($request)->links() }}
    </center>
@endsection