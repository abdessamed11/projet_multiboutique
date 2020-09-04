<?php

namespace App\Http\Controllers;

use App\Boutique;
use App\User;
use App\Ville;
use App\Categorie_boutique;
use App\Produit;
use Illuminate\Http\Request;

class BoutiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $boutiques = Boutique::all();
        return view('admin.boutique.index',['boutiques' => $boutiques]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $villes = Ville::all();
        $categorie_boutiques = Categorie_boutique::all();

        return view('admin.boutique.create',['users' => $users , 'villes' => $villes , 'categorie_boutiques' => $categorie_boutiques]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $boutique = new Boutique();

        if($request->hasFile('image_boutique')){
            $path = $request->file('image_boutique')->store('boutiques');
        }
        $boutique->nom_boutique = $request['nom_boutique'];
        $boutique->telephone = $request['telephone'];
        $boutique->image_boutique = $path;
        $boutique->lien_map1 = $request['lien_map1'];
        $boutique->lien_map2 = $request['lien_map2'];
        $boutique->site_web = $request['site_web'];
        $boutique->user_id = $request['user_id'];
        $boutique->id_ville = $request['id_ville'];
        $boutique->desc_boutique = $request['description_boutique'];
        $boutique->id_categorie_boutique = $request['id_categorie_boutique'];

        $boutique->save();

        return redirect('/boutique');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function show(Boutique $boutique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $boutique = Boutique::find($id);
        $users = User::all();
        $villes = Ville::all();
        $categorie_boutiques = Categorie_boutique::all();

       return view('admin.boutique.edit',['boutique'=>$boutique,'users' => $users , 'villes' => $villes , 'categorie_boutiques' => $categorie_boutiques]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $boutique =  Boutique::find($id);

        if($request->hasFile('image_boutique')){

            $path = $request->file('image_boutique')->store('boutiques');
            $boutique->image_boutique = $path;
        }
        $boutique->nom_boutique = $request['nom_boutique'];
        $boutique->telephone = $request['telephone'];

         $boutique->lien_map1 = $request['lien_map1'];
        $boutique->lien_map2 = $request['lien_map2'];
        $boutique->site_web = $request['site_web'];
        $boutique->user_id = $request['user_id'];
        $boutique->id_ville = $request['id_ville'];
        $boutique->desc_boutique = $request['description_boutique'];
        $boutique->id_categorie_boutique = $request['id_categorie_boutique'];

        $boutique->save();

        return redirect('/boutique');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $boutique = Boutique::find($id);
        $boutique->delete();
        return redirect('/boutique');
    }
}
