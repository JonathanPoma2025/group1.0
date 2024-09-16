<?php

namespace App\Http\Controllers;

use App\Models\ClientRepairshop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function create()
    {
        return view('repairshops.addcostumer');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255|exists:users',
            'pin' => 'required|max:4',
        ]);

        $user = User::where('email', $validated['email'])->first();

        $data['user_id'] = $user->id;
        $data['repairshops_id'] = Auth::user()->repairshop->id;

        if ($validated['pin'] == $user->pin) {
            if(ClientRepairshop::create($data)) {
                return redirect()->route('clients.index');
            }
        }

        return back()->withErrors([]);
    }

    public function index()
    {
        $customers = Auth::user()->load('repairshop.clients', 'repairshop.clients.cars');
        return view('repairshops.clients', compact('customers'));
    }
}

