@extends('layouts.main')

@section('title', 'Wiltslon Silva')

@section('content')
<h1>Hello World</h1>
<ul>
    <li><a href="/contact">Contatos</a></li>
    <li><a href="/gallery">Galeria</a></li>
</ul>
Dados trasidos do router, Nome: {{$nome}} , Idade: {{$idade}}, Profissão: {{$profissao}}
@for($i = 0; $i < count($arr); $i++)
<p>{{ $arr[$i] }}</p>
@endfor

@endsection