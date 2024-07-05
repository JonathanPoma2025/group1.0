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
            'email' => 'required|email|unique:users,email',
            'birthday'=>'required|date',
            'cellphone_number'=> 'required|max:9',
            'password'=> 'min:8|max:12',
        ]);

        $user = User::create($data);

        if($user) {
            Auth::login($user);
            return redirect('/users/type')->with('success', 'Registro exitoso');
        }

        return back()->withErrors([
            'name' => 'Tu nombre es inválido. Intente una vez más',
            'birthday' => 'Tu fecha de nacimineto es invalida. Intente una vez más',
            'email' => 'Tu correo electronico es inválido. Intente una vez más',
            'password' => 'Tu contraseña es invalida. Intente una vez más',
        ]);
    }

    public function editType(Request $request) {
        $user = Auth::user();
        $user->is_mechanic = $request->is_mechanic;
        $user->save();

        if ( $user->is_mechanic ) {
            return redirect('/users/home');
        }
        return redirect('/');//RUTA DE TALLERES HOME 
    }

    public function login(Request $request) {
        $data = $request->validate([
            'email' => 'required|email|exist:users,email',
            'password' => 'required|min:8|max:12',
        ]);

        if(Auth::attempt($data)) {
            return redirect('/home')->with('success');
        }
        return back()->withErrors(['email'=>'wrong credentials', 'password' => 'Wrong password']);
    }

    public function update(User $user) {

        $data = $request -> validate([
            'name' => 'required',
            'birthday' => 'required',
            'email' => 'requied|email',
            'number'=> 'required|max:8',
            'password' => 'required|min:8|max:12',
        ]);

        $data->update($validate);
        return redirect('/home')->with('success');
        $data->save;
    }
}
