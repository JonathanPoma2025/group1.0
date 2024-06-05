<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create(Request $request) {
        $data = $request->validate([
            //'datoverificados' => 'reglas',
            'name' => 'required',
            'birthday'=>'required|date',
            'email' => 'required|email|unique:users,email',
            'password'=> 'min:8|max:12',
        ]);

        if(User::create($data)) {
            return redirect('');
        }

        return back()->withErrors([
            'name' => 'Tu nombre es invalido. Intente una vez más',
            'birthday' => 'Tu fecha de nacimineto es invalida. Intente una vez más',
            'email' => 'Tu correo electronico es invalido. Intente una vez más',
            'password' => 'Tu contraseña es invalida. Intente una vez más',
        ]);

    }

    public function login(Request $request) {
        $data = $request->validate([
            'email' => 'required|email|exist:users,email',
            'password' => 'required|min:8|max:12',
        ]);

        if(Auth::attempt($data)) {
            return redirect('')->with('success');
        }
        return back()->withErrors(['email'=>'wrong credentials', 'password' => 'Wrong password']);
    }

    public function update(User $user) {

        $data = $request -> validate([
            'name' => 'required',
            'birthday' => 'required',
            'email' => 'requied|email',
            'password' => 'required|min:8|max:12',
        ]);

        $data->update($validate);
        return redirect('')->with('success');
        $data->save;
    }
}