<?php

namespace App\Http\Controllers;

use App\Categorie_boutique;
use Illuminate\Http\Request;

class CategorieBoutiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorie_boutiques = Categorie_boutique::all();
        return view('admin.categorie.boutique.index',['categorie_boutiques' => $categorie_boutiques]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/categorie/boutique/create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $parameters = $request->except(['_token']);

        $categorie_boutique = new Categorie_boutique();
        $categorie_boutique->nom_categorie_boutique = $parameters['nom_categorie_boutique'];
        $categorie_boutique->save();

        return redirect('/categorie/boutique')->with('success', 'Ajouter avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categorie_boutique  $categorie_boutique
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie_boutique  $categorie_boutique
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categorie_boutique = Categorie_boutique::find($id);

        return view('admin.categorie.boutique.edit',['categorie_boutique' => $categorie_boutique]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorie_boutique  $categorie_boutique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $categorie_boutique = Categorie_boutique::find($id);

        $categorie_boutique->nom_categorie_boutique = $request['nom_categorie_boutique'];
        $categorie_boutique->save();
        return redirect('/categorie/boutique');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorie_boutique  $categorie_boutique
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $categorie_boutique = Categorie_boutique::find($id);

       $categorie_boutique->delete();

       return redirect('/categorie/boutique');
    }
}
