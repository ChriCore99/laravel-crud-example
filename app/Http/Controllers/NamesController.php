<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;

class NamesController extends Controller
{
    // funzione di index
    public function index(){

        $names = Name::all();

        return view('names.index', compact('names'));
    }

    // funzione di show in cui dico di recuperare dal model name il tot dato (solitamente l'id) della tabella
    public function show(Name $name) {
        return view('names.show', compact('name'));
    }

    // funzione create
    public function create() {
        return view('names.create');
    }

    // funzione store
    public function store(Request $request) {

        // recupero i dati dalla richiesta
        $form_data = $request->all();

        // dico di creare nel db un nuovo record prendendi i dati per la creazione da $form_data
        $new_name = Name::create($form_data);

        // dico una volta creato il record di ridirigerlo alla show
        return to_route('names.show', $new_name);
    }

    // funzione edit
    public function edit(Name $name) {
        // resources/views/names/edit.blade.php
        return view('names.edit', compact('name'));
    }

    // funzione update
    public function update(Request $request, Name $name) {

        // recupero i dati dalla richiesta
        $form_data = $request->all();

        // faccio un update dei dati modificati
        $name->update($form_data);

        // dico una volta creato il record di ridirigerlo alla show
        return to_route('names.show', $name);

    }

    // funzione destroi
    public function destroy(Name $name) {

        // 
        $name->delete();

        // dico di ridirigermi alla index
        return to_route('name.index');
    }
}
