@extends('templates.base')
@section('titulo', 'Fale conosco')
@section('conteudo')
<center>
    <h1>Fale Conosco</h1>
    <form>
            @csrf
            <input type="email" placeholder="email@example.com" style="width: 211px;"> <br> <br>
            
            <select name="motivo_contato" style="width: 219px;" id="cars">
                <option value="0">Motivo do contato:</option>
                <option value="1">Reclamação</option>
                <option value="2">Sugestão</option>
            </select> <br> <br>

            <textarea placeholder="informe a mensagem..." style="width: 211px; resize: none;"></textarea> <br> <br>
            <input type="button" style="width: 211px;" value="Enviar"> <br> <br>

    </form>
</center>
@endsection