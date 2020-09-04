<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie_boutique;
use App\Boutique;
use App\Ville;
use App\Produit;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categorieBoutiques = Categorie_boutique::all();
        $villes = Ville::all();
        $boutiques = Boutique::paginate(2);
        $produits = Produit::paginate(4);
        return view('accueilPrincipal',['categories'=>$categorieBoutiques,'villes'=>$villes,'boutiques'=>$boutiques,'produits'=>$produits]);
    }

    public function hom()
    {
        $categorieBoutiques = Categorie_boutique::all();
        $villes = Ville::all();
        $boutiques = Boutique::all();
        $produits = Produit::all();
        return view('home',['categories'=>$categorieBoutiques,'villes'=>$villes,'boutiques'=>$boutiques,'produits'=>$produits]);
    }




    public function search(Request $request){
        //search with villes or cartegories
        $categorieBoutiques = Categorie_boutique::all();
        $villes = Ville::all();
        $boutiques = Boutique::all();
        $produits = Produit::all();
        if($request->villes ){
            $boutiques = Boutique::where('id_ville',$request->villes)->get();
        }
        if($request->categorieBoutique ){
            $boutiques = Boutique::where('id_categorie_boutique',$request->categorieBoutique)->get();
        }
        if($request->categorieBoutique && $request->villes ){
            $boutiques = Boutique::where('id_categorie_boutique',$request->categorieBoutique)->where('id_ville',$request->villes)->get();
        }
        return view('accueilPrincipal',['categories'=>$categorieBoutiques,'villes'=>$villes,'boutiques'=>$boutiques,'produits'=>$produits]);
    }
    public function voirplus($id){
        $boutique = Boutique::find($id);
        $produit = Produit::where('id_boutique',$id)->get();
        //return $boutique;
        return view('voirplus',['boutique'=>$boutique],['produit'=>$produit]);
    }
}
