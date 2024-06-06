@extends('layouts.app')

@section('content')

<section>
    <!-- dico di puntare alla rotta per salvare i dati (update) e il metodo -->
    <form action="{{route('names.update', $name)}}" method="POST">

        <!-- aggiungo un tooken di sicurezza per l'invio dei dati -->
        @csrf
        <!-- dico che in realtà il metodo deve essere put -->
        @method('PUT')

        <input name="nome" type="text" value="{{$name->nome}}"> inserisci nome
        <input name="cognome" type="text" value="{{$name->cognome}}"> inserisci cognome

        <button>
            invia dati
        </button>
    </form>
</section>

@endsection