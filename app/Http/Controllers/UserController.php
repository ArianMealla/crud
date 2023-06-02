<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UserController extends Controller
{
    public function index(){


        $users = Usuario::all();


        return view('usuario.index', compact('users'));
    }
    public function create(){
        return view('users.create');
    }

    public function store(Request $request){

        $users = new Usuario();

        $users->name = $request->name;
        $users->country = $request->country;
        $users->email_verified_at = $request->email_verified_at;
        $users->password = $request->password;

        $users->save();

        return redirect()->route('usuario.index');

    }
    public function edit($id){

        $users = Usuario::find($id);
        return view('usuario.edit', compact('users'));
    }

    public function update(Request $request, $id){
        $users = Usuario::find($id);
        $users->update($request->all());
        return redirect(->route('usuario.index'));s

    }


    public function destroy($id){
        $users = Usuario::find($id);

        $users->delete();

        return redirect(->route('usuario.index'));
    }

}
