<?php

namespace App\Http\Controllers;

use App\categorie_produit;
use Illuminate\Http\Request;

class CategorieProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorie_produits = Categorie_produit::all();
        return view('admin.categorie.produit.index',['categorie_produits' => $categorie_produits]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/categorie/produit/create');
        
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

        $categorie_produit = new Categorie_produit();
        $categorie_produit->nom_categorie_produit = $parameters['nom_categorie_produit'];
        $categorie_produit->save();

        return redirect('/categorie/produit')->with('success', 'Ajouter avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categorie_produit  $categorie_produit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie_produit  $categorie_produit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categorie_produit = Categorie_produit::find($id);

        return view('admin.categorie.produit.edit',['categorie_produit' => $categorie_produit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorie_produit  $categorie_produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $categorie_produit = Categorie_produit::find($id);

        $categorie_produit->nom_categorie_produit = $request['nom_categorie_produit'];
        $categorie_produit->save();
        return redirect('/categorie/produit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorie_produit  $categorie_produit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $categorie_produit = Categorie_produit::find($id);

       $categorie_produit->delete();

       return redirect('/categorie/produit');
    }
}
