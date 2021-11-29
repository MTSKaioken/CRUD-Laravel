@extends('templates.base')
@section('titulo', 'Fale conosco')
@section('conteudo')
<center>
    <h1>Fale Conosco</h1>
    <form method="post" action={{ route('site.contato') }}>
            @csrf
            <input type="text" placeholder="Seu nome" name="nome" style="width: 211px;"> <br> <br>

            <input type="email" placeholder="email@example.com"  name="email_contato" style="width: 211px;"> <br> <br>
            
            <select name="motivo_contato" style="width: 219px;">
                <option value="0" disabled selected>Motivo do contato:</option>
                <option value="1">Reclamação</option>
                <option value="2">Sugestão</option>
            </select> <br> <br>

            <textarea placeholder="informe a mensagem..." style="width: 211px; resize: none;" name="mensagem_contato"></textarea> <br> <br>
            <button type="submit" style="width: 211px;">Enviar</button> <br> <br>

    </form>
</center>
@endsection