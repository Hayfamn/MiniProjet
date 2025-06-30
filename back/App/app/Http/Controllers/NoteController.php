<?php

namespace App\Http\Controllers;
use App\Models\Note;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        return Note::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nom_etudiant' => 'required|string',
            'note' => 'required|numeric|between:0,20',
        ]);

        return Note::create($request->all());
    }

    public function destroy($id)
    {
        return Note::destroy($id);
    }
}
