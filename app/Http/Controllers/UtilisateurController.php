<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
class UtilisateurController extends Controller
{

   public function __construct()
    {
     // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();

        return view('admin.user.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        if($request->hasFile('image_user')){
            $path = $request->file('image_user')->store('users');
            $user->file= $path;
        }
        $user->name= $request['user'];
        $user->email= $request['email'];
        $user->nom= $request['nom'];
        $user->prenom= $request['prenom'];
        $user->password= Hash::make($request['password']);
        $user->daten= $request['daten'];
        $user->cin= $request['cin'];
        $user->tel= $request['tel'];
        $user->role= $request['role'];

        $user->visible= 1;

        $user->save();

        return redirect('/user');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = User::find($id);
        return view('admin.user.profile',['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
        return view('admin.user.edit',['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = User::find($id);
        if($request->hasFile('image_user')){
            $path = $request->file('image_user')->store('users');
            $user->file= $path;
        }
        $user->name= $request['user'];
        $user->email= $request['email'];
        $user->nom= $request['nom'];
        $user->prenom= $request['prenom'];
         if($request->password){
        $user->password=Hash::make($request['password']);
        }
        $user->cin= $request['cin'];
        $user->tel= $request['tel'];
        $user->role= $request['role'];
        $user->daten= $request['daten'];
        $user->save();

        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }
}
