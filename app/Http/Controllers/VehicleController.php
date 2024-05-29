<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Vehicle;


class VehicleCotroller extends Controller
{

    public function store(Request $request)
    {
        $validateddata = $request->validate([
            'car_type_id'  => 'required|exists:car_types',
            'Brand_id' => 'required|exists:brands',
            'model' => 'required',
            'year'   => 'required',
            'placa' => 'required',
            
        ]);

        if(Vehicle::create($validateddata)){
            return redirect('/');
        }

        return back()->withErrors([]);
    }

    public function update(Vehicle $vehicle) {
        //validate
        //
    }

    public function delete() {

    }
}


