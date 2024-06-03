@extends('layouts.main')
@section('title', 'Lista Escolha')

@section('content')

    @if($id != null)
    <p>Id filme: {{ $id }}</p>
    @endif

@endsection