<?php

namespace App\Http\Controllers;

use App\ville;
use Illuminate\Http\Request;

class VilleController extends Controller
{
   public function __construct()
    {
      $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $villes = Ville::all();
        return view('admin.ville.index',['villes' => $villes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/ville/create');
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

        $ville = new Ville();
        $ville->nom_ville = $parameters['nom_ville'];
        $ville->save();

        return redirect('/ville')->with('success', 'Ajouter avec succes');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ville  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ville  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ville = ville::find($id);

        return view('admin.ville.edit',['ville' => $ville]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ville  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $ville = Ville::find($id);
        $ville->nom_ville = $request['nom_ville'];
        $ville->save();
        return redirect('/ville');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ville  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $ville = Ville::find($id);

       $ville->delete();
       return redirect('/ville');
    }
}
