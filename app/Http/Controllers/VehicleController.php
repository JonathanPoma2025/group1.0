<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{

    public function store(Request $request)
    {
        $request->merge([
            'user_id' => Auth::user()->id
        ]);

        $validateddata = $request->validate([
            'car_type_id'  => 'required|exists:car_types',
            'brand_id' => 'required|exists:brands,id',
            'model' => 'required|string',
            'year'   => 'required|integer',
            'user_id'=> 'required|exists:users,id',
            'placa' => 'required',

        ]);

        if(Vehicle::create($validateddata)){
            return redirect('/');
        }

        return back('/')->withErrors([
            'error'=>'Error al registrar el vehículo'
        ]);
    }

    public function update(Request $request, Vehicle $vehicle)
    {
        //validate
        $validateddata = $request->validate([
            'car_type_id'  => 'required|exists:car_types',
            'brand_id' => 'required|exists:brands',
            'model' => 'required|string',
            'year'   => 'required|integer',
            'user_id'=> 'required|exists:user_id',
            'placa' => 'required',
        ]);

        if ($vehicle->update($validateddata)){
            return redirect('/')->with([
                'Los datos del vehículo se actualizó correctamente'
            ]);
        }

        $vehicle->save();

        return back()->withErrors([
            'error'=>'Error al actualizar el vehículo'
        ]);
    }

    public function delete(Vehicle $vehicle) {
        $vehicle->delete();

        return redirect('/')->with('Success, Se ha eliminado el vehículo');
    }
}





