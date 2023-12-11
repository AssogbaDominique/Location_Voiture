<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Voitures;
use App\Models\Marque;
use App\Models\Modele;
use App\Models\Statut;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voitures = Voitures::all();
        $marques = Marque::all();
        $modeles = Modele::all();
        $statuts = Statut::all();
        //dd($statuts);

        return view('voitures.liste', compact('voitures', 'marques', 'modeles', 'statuts'));
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
        //dd($request->all());
        $validatedData = $request->validate([
            'marque_id' => 'required|max:255',
            'modele_id' => 'required',
        ]);

        $voiture = Voitures::create($request->all());
        $filename = $request->file('image')->getClientOriginalName(); //avoir le nom de l'image
        $file = $request->file('image');
        $path = $file->storeAs('public/image', str_replace(' ', '_', $filename)); //enregister l'image dans le dossier public etde storage
        $path = str_replace('public/', 'storage/', $path); //permet de remplacer les espaces dans le fichei
        $url = url($path); //
        $voiture->update(['image' => $url]);
        //dd($voiture);

        return redirect()
            ->route('admin.voitures.liste')
            ->with('success', 'Voitures créer avec succèss');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $v = Voitures::find($id);
        return view('voitures.details', compact('v'));
    }
    public function list()
    {
        $v = Voitures::with('marque', 'modele', 'statut')->get();
        return response()->json([
            'staut' => 1,
            ' data' => $v,
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voitures $voiture)
    {
        //dd($voiture);
        return view('voitures.modifier', compact('voiture'));
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

        Voitures::whereId($id)->update($validatedData);

        return redirect('/voitures')->with('success', 'Voitures mise à jour avec succèss');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voitures $voiture)
    {
        $voiture->delete();

        return back()->with('success', 'Voitures supprimer avec succèss');
    }
}
