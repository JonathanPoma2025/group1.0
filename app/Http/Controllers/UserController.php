<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create(Request $request) {
        $data = $request->validate([
            '//datoverificado' => '//reglas',
        ]);

        if(User::create($data)) {
            return redirect('');
        }

        return back()->withErrors([]);
    }

    public function login() {

    }

    public function update() {

    }
}
