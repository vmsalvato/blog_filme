@extends('layouts.main')
@section('title', 'Lista')

@section('content')
    @if($busca != '')
     <p>Filme: {{ $busca}} </p>        
    @endif
@endsection