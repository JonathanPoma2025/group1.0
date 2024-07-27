<?php

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

        return redirect()->route('customers.index');
    }

    public function index()
    {
        $customers = ClientRepairshop::all();
        return view('repairshops.clients', compact('customers'));
    }

    public function show($email)
    {
        $customer = ClientRepairshop::where('email', $email)->firstOrFail();
        return view('repairshops.customer_detail', compact('customer'));
    }
}
