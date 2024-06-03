<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Vehicle;


class VehicleController extends Controller
{

    public function store(Request $request)
    {
        $validateddata = $request->validate([
            'car_type_id'  => 'required|exists:car_types',
            'brand_id' => 'required|exists:brands',
            'model' => 'required|string',
            'year'   => 'required|interger',
            'user_id'=> 'required|exists:user_id',
            'placa' => 'required|string',
            
        ]);

        if(Vehicle::create($validateddata)){
            return redirect('/');
        }

        return back()->withErrors([
            'Error al registrar el vehículo'
        ]);
    }

    public function update(Request $request,Vehicle $vehicle) 
    {
        //validate
        $validateddata = $request->validate([
            'car_type_id'  => 'required|exists:car_types',
            'brand_id' => 'required|exists:brands',
            'model' => 'required|string',
            'year'   => 'required|interger',
            'user_id'=> 'required|exists:user_id',
            'placa' => 'required|string',

        ]);

        if ($vehicle->update($validateddata)){
            return redirect('/')->with([
                'Los datos del vehículo se actualizó correctamente'
            ]);
        }

        
        return back()->withErrors([
            'Error al actualizar el vehículo'
        ]);
        
    }
    public function delete(Vehicle $vehicle) {

        $vehicle->features()->detach();

        $vehicle->delete();

        return redirect('/')->with([

        'Se ha eliminado el vehículo'
    ]);
    }

    

    
}


