@extends('layouts.app')

@section('content')

<section>
    <!-- dico di puntare alla rotta per salvare i dati (store) e il metodo -->
    <form action="{{route('names.store')}}" method="POST">

        <!-- aggiungo un tooken di sicurezza per l'invio dei dati -->
        @csrf
        <input name="nome" type="text"> inserisci nome
        <input name="cognome" type="text"> inserisci cognome

        <button>
            invia dati
        </button>
    </form>
</section>

@endsection