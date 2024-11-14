@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Países</h1>
    <ul>
        @foreach($paises as $pais)
            <li>
                <a href="{{ route('locais.show', $pais->id) }}">{{ $pais->nome }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection