<?php

namespace App\Http\Controllers;

use App\Models\Repairshops;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RepairshopController extends Controller
    {
        public function store(Request $request) {
            $request->merge(['user_id' => Auth::user()->id]);
            $data = $request->validate([
                //'datoverificados' => 'reglas',
                'name' => 'required',
                'address' => 'required',
                'email' => 'required|email',
                'cellphone_number' => 'required',
                'user_id' => 'required',
            ]);

            if(Repairshops::create($data)) {
                return redirect('/repairshops/home');
            }

            return back()->withErrors([
                'name' => 'Este usuario ya existe. Intente una vez más',
                'address' => 'La dirección ya existe. Intente una vez más',
                'email' => 'El correo electronico ya existe. Intente una vez más',
                'phone' => 'El número teléfonico ya existe. Intente una vez más',
                'mechanics shop' => 'El nombre del taller ya existe. Intente una vez más',
            ]);

        }

        public function update(Repairshops $request) {
            $data = $request->validate(['name','email','password','mechanic shop','address','phone']);

            $data->update($request)([
                'name' => 'required',
                'address' => 'required',
                'email' => 'required|email|unique:users,email',
                'password'=> 'min:8|max:12',
                'phone' => 'required|unique:users,phone|phone-number',
                'mechanics shop' => 'required|unique:users,workshop',

            ]);

                return redirect('account')->with('success');
            $data->save();

        }

        public function delete(Repairshops $user) {

            $data = $user -> validate(['name','email','password','mechanic shop','address','phone']);

            $data->update($user)([
                'name' => 'required',
                'address' => 'required',
                'email' => 'required|email|unique:users,email',
                'password'=> 'min:8|max:12',
                'phone' => 'required|unique:users,phone|phone-number',
                'mechanics shop' => 'required|unique:users,workshop',

            ]);

                return redirect('welcome')->with('success');
            $data->save;

        }
    }
