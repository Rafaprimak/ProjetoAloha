@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Locais em {{ $pais->nome }}</h1>
    <ul>
        @foreach($locais as $local)
            <li>{{ $local->nome }} - {{ $local->descricao }}</li>
        @endforeach
    </ul>
    <a href="{{ route('locais') }}">Voltar para a lista de países</a>
</div>
@endsection