@extends('vendedor.templates.base')
@section('titulo', 'Consultar Fornecedores')
@section('conteudo')  
    <ul>
        <li style="display: inline;"><a href="{{ route('vendedor.fornecedor.listar') }}" style="text-decoration: none;float: right; margin-left: 10px">Consulta</a></li>
        <li style="display: inline;"><a href="{{ route('vendedor.fornecedor.adicionar') }}" style="text-decoration: none;float: right;">Novo</a></li>
    </ul>
    <center>
        <fieldset style="width: 30%;margin-bottom: 50px">
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
                <button type="submit" style="width: 211px">Consultar</button>
            </form>
        </fieldset>

        <div style="width: 90%; margin-left: auto; margin-right: auto;">
                <table width="100%">
                    <thead>
                        <tr>
                            <th style="border-bottom: 1px solid black;">Nome</th>
                            <th style="border-bottom: 1px solid black;">Site</th>
                            <th style="border-bottom: 1px solid black;">UF</th>
                            <th style="border-bottom: 1px solid black;">Email</th>
                            <th style="border-bottom: 1px solid black;"></th>
                            <th style="border-bottom: 1px solid black;"></th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($fornecedores as $fornecedor )
                            <tr>
                                <td style="border-bottom: 1px solid gray;">{{$fornecedor->nome}}</td>
                                <td style="border-bottom: 1px solid gray;">{{$fornecedor->site}}</td>
                                <td style="border-bottom: 1px solid gray;">{{$fornecedor->uf}}</td>
                                <td style="border-bottom: 1px solid gray;">{{$fornecedor->email}}</td>
                                <td style="border-bottom: 1px solid gray;">Excluir</td>
                                <td style="border-bottom: 1px solid gray;"><a href="{{ route('vendedor.fornecedor.editar', $fornecedor->id) }}">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </center>
@endsection