@extends('layouts.main')

@section('title','Item')

@section('content')
    @if($id != null)
    <p>Exibindo produto id: {{$id}}</p>
    @endif
@endsection