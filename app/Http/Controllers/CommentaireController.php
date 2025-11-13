<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Méthode pour afficher tous les commentaires
        $commentaires = Commentaire::all();
        return view('commentaires.index', compact('commentaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Méthode Create pour afficher le formulaire de création de commentaire
        return view('commentaires.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Methode Store pour enregistrer un nouveau commentaire
        $validatedData = $request->validate([
            'message' => 'required|string|max:500',
            'id_user' => 'required|integer',
            'id_post' => 'required|integer',
        ]);             
        Commentaire::create($validatedData);
        return redirect()->route('commentaire.index')->with('success', 'Commentaire created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
