<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marque;

class MarqueController extends Controller
{
    public function index(Request $request)
    {
        $marques = Marque::all();
        return view('marques.list', compact('marques'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|max:255',
        ]);

        $marque = Marque::create($request->all());
        echo "Voici la marque en question : $marque";
        return redirect()->route('admin.marques.liste')->with('success', 'Marque créer avec succèss');
    }

    public function show(string $id)
    {
        $marque = Marque::find($id);
        return view('marques.details', compact('marque'));
    }

    public function edit(Marque $voiture)
    {
        //dd($voiture);
        return view('marques.modifier', compact('voiture'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'marque' => 'required|max:255',
            'modele' => 'required',
        ]);

        Marque::whereId($id)->update($validatedData);

        return redirect('/marques')->with('success', 'Voitures mise à jour avec succèss');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marque $marque)
    {
        $marque->delete();

        return back()->with('success', 'Voitures supprimer avec succèss');
    }
}