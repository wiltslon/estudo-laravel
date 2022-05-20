@extends('layouts.main')

@section('title', 'Gallery')

@section('content')

<h1>Pagina da galeria</h1>
<a href="/">voltar home</a>
@if($busca != '')
<p>O usuário está buscando por: {{$busca}}</p>
@endif
@endsection