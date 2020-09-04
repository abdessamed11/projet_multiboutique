<?php

namespace App\Http\Controllers;

use App\Produit;
use App\Boutique;
use App\Categorie_produit;
use App\Categorie_boutique;
use App\Ville;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produits = Produit::all();
        return view('admin.produit.index',['Produits' => $produits]);

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Ajouter nouveau produit
        $produits = Produit::all();
        $boutiques = Boutique::all();
        $categorie_produits = Categorie_produit::all();
        return view('admin.produit.create',['Produits'=>$produits,'boutiques'=>$boutiques,'categorie_produits'=>$categorie_produits]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produit = new Produit();

        if($request->hasFile('image_produit')){
            $path = $request->file('image_produit')->store('boutiques');

        }
        $produit->nom_produit = $request['nom_produit'];
        $produit->image_produit = $path;
        $produit->description = $request['description_produit'];
        $produit->id_boutique = $request['id_boutique'];
        $produit->id_categorie_produit = $request['id_produit'];

        $produit->save();

        return redirect('/produit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produits = Produit::find($id);
        $boutiques = Boutique::all();
        $categorie_produits = Categorie_produit::all();
        return view('admin.produit.edit',['produits'=>$produits,'boutiques'=>$boutiques,'categorie_produits'=>$categorie_produits]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $produit =  Produit::find($id);

        if($request->hasFile('image_produit')){
            // @unlink($request->file('image_produit')->store(''));
            $path = $request->file('image_produit')->store('boutiques');
            $produit->image_produit = $path;
        }
        $produit->nom_produit = $request['nom_produit'];

        $produit->description = $request['description_produit'];
        $produit->id_boutique = $request['id_boutique'];
        $produit->id_categorie_produit = $request['id_produit'];

        $produit->save();

        return redirect('/produit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        //delete produit
        $produit->delete();
        return redirect()->back();
    }
}
