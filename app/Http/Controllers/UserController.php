<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function create(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'birthday'=>'required|date',
            'cellphone_number'=> 'required',
            'password'=> 'required|',
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
        $user->update(['is_mechanic' => $request->is_mechanic ]);


        if ( $user->is_mechanic ) {
            return redirect('/repairshops/create');
        }
        return redirect('/cars/create');
    }

    public function gohome(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'owner'=> 'required',
            'adress'=>'required',
            'email'=> 'required|email',
            'phone'=> 'required|min:8',
        ]);

        $user = User::gohome($data);

        if($user) {
            Auth::gohome($user);
            return redirect('/users/home');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function login(Request $request) {
        $data = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8|max:20',
        ]);

        if(Auth::attempt($data)) {
            return redirect('users/home')->with('success');
        }
        return back()->withErrors(['email'=>'wrong credentials', 'password' => 'Wrong password']);
    }

    public function update(User $user) {

        $data = request()->validate([
            'name' => 'required',
            'birthday' => 'required',
            'email' => 'requied|email',
            'number'=> 'required|max:8',
            'password' => 'required|min:8|max:12',
        ]);

        $user->update($data);
        $user->save();
        return redirect('/home')->with('success');
    }

    public function showProfile() {
        return view('users.profile', [
            'user' => Auth::user()
        ]);
    }
}
