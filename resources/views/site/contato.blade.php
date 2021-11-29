@extends('templates.base')
@section('titulo', 'Fale conosco')
@section('conteudo')
<center>
    <h1>Fale Conosco</h1>
    <form method="post" action={{ route('site.contato') }}>
            @csrf
            <input type="text" value="{{ old('nome') }}" placeholder="Seu nome" name="nome" style="width: 211px;"> 
            <br>{{ $errors->has('nome') ? $errors->first('nome') : ''}}<br>
            <input type="email" value="{{ old('email') }}" placeholder="email@example.com" name="email" style="width: 211px;">
            <br>{{ $errors->has('email') ? $errors->first('email') : ''}}<br>
            
            <select name="motivo_contato" style="width: 219px;margin-bottom: 10px">
                <option value="0" disabled selected>Motivo do contato:</option>
                @foreach ($motivo_contatos as $key => $motivo_contato )
                    <option value="{{$key}}">{{$motivo_contato}}</option>    
                @endforeach
            </select>
            <br>{{ $errors->has('motivo_contato') ? $errors->first('motivo_contato') : ''}}<br>

            <textarea placeholder="informe a mensagem..." style="width: 211px; resize: none;" name="mensagem">{{(old('mensagem') != '') ? old('mensagem') : ''}}</textarea>
            <br>{{ $errors->has('mensagem') ? $errors->first('mensagem') : ''}}<br>
            <button type="submit" style="width: 211px;margin-bottom: 10px">Enviar</button> <br>

    </form>
</center>
@endsection