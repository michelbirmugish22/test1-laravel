<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\Support\Facades\Validator;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            // Récupérer les produits depuis la base de données et les retourner au format JSON en ordre décroissant
            $produits = Produit::orderBy('created_at', 'desc')->get();
            return response()->json($produits);
        }
        return view('produits.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        // Logique pour enregistrer le produit en base de données
        // Par exemple :
        $produit = Produit::create([
            'name' => $request->input('nom'),
            'price' => $request->input('prix'),
            'description' => $request->input('description'),
            'stock' => 0, // Valeur par défaut pour le stock
        ]);
        return response()->json(['message' => 'Produit ' . $produit->name . ' ajouté avec succès!', 'produit' => $produit], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $produit = Produit::findOrFail($id);
        return response()->json($produit);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'description' => 'nullable|string',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $produit = Produit::findOrFail($id);
        $produit->update([
            'name' => $request->input('nom'),
            'price' => $request->input('prix'),
            'description' => $request->input('description'),
        ]);
        return response()->json(['message' => 'Produit ' . $produit->name . ' mis à jour avec succès!', 'produit' => $produit]);    
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $produit = Produit::findOrFail($id);
        $produit->delete();
        return response()->json(['message' => 'Produit supprimé avec succès!']);
    }
}