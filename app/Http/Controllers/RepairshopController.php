<?php

namespace App\Http\Controllers;

use App\Models\Repairshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RepairshopController extends Controller

    {
        public function create(Request $request) {
            $data = $request->validate([
                //'datoverificados' => 'reglas',
                'name' => 'required',
                'address' => 'required',
                'email' => 'required|email|unique:users,email',
                'password'=> 'required|min:8|max:12',
                'phone' => 'required|unique:users,phone|phone-number',
                'mechanics shop' => 'required|unique:users,workshop',
            ]);

            if(Repairshop::create($data)) {
                return redirect('');
            }

            return back()->withErrors([
                'name' => 'Este usuario ya existe. Intente una vez más',
                'address' => 'La dirección ya existe. Intente una vez más',
                'email' => 'El correo electronico ya existe. Intente una vez más',
                'password'=> 'La contraseña ya existe. Intente una vez más',
                'phone' => 'El número teléfonico ya existe. Intente una vez más',
                'mechanics shop' => 'El nombre del taller ya existe. Intente una vez más',
            ]);

        }

        public function login(Request $request) {
            $data = $request->validate([
                'mechanics shop' => 'required|unique:users,workshop',
                'email' => 'required|email|exist:users,email',
                'password' => 'required|unique:users,password|min:8|max:12',
            ]);

            $credentials = $request->only('email', 'password');

            if(Auth::attempt($credentials)) {
                return redirect('')->with('success');
            }
            return back()->withErrors(['mechanics shop'=>'wrong credentials', 'email'=>'wrong credentials', 'password' => 'Wrong password']);
        }

        public function update(Repairshop $user) {
            //verificar $user->validate()
            //actualizar
            //cambio datos
        }
    }

