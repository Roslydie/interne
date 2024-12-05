<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    public function create()
    {
        return view('documents.create'); // Vue pour créer un document
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'content' => 'nullable|string',
        ]);

        Document::create($validated); // Enregistre dans la base de données

        return redirect()->route('documents.index')->with('success', 'Document créé avec succès.');
    }

    public function edit(Document $document)
    {
        return view('documents.create', compact('document')); // Réutilise la même vue pour modifier
    }

    public function update(Request $request, Document $document)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'content' => 'nullable|string',
        ]);

        $document->update($validated); // Met à jour les données existantes

        return redirect()->route('documents.index')->with('success', 'Document mis à jour avec succès.');
    }
}
