<?php

namespace App\Http\Controllers;

use App\Models\ClientRepairshop;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\ClientRepairshop;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function create()
    {
        return view('repairshops.addcostumer');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:client_repairshops',
            'vehicle' => 'required|string|max:255',
            'last_maintenance' => 'required|date',
        ]);

        ClientRepairshop::create($validated);

        return redirect()->route('clients.index');
    }

    public function index()
    {
        $customers = ClientRepairshop::all();
        return view('repairshops.clients', compact('customers'));
    }
}

