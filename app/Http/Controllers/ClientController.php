<?php

namespace App\Http\Controllers;

use App\Models\ClientRepairshop;
use Illuminate\Http\Request;

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
        ]);

        $data['user_id'] = User::where('email', $validated['email'])->first()->id;
        $data['repairshop_id'] = Auth::user()->repairshop->id;

        if(ClientRepairshop::create($data)) {
            return redirect()->route('clients.index');
        }
        
        return back()->withErrors([]);
    }

    public function index()
    {
        $customers = ClientRepairshop::all();
        return view('repairshops.clients', compact('customers'));
    }
}

