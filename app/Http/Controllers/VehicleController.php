<?php

namespace App\Http\Controllers;

use App\Models\CarType;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;
use App\Models\Brand;


class VehicleController extends Controller
{

   public function create()
    {
        $brands = Brand::all();
        $car_types = CarType::all();

        return view('cars.create', compact('brands', 'car_types'));
    }


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
            'color'=>'required|string'

        ]);

        if(Vehicle::create($validateddata)){
            return redirect('/edit');
        }

        return back('cars/create')->withErrors([
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
            return redirect('/edit')->with([
                'Los datos del vehículo se actualizó correctamente'
            ]);
        }

        $vehicle->save();

        return back('/cars/create')->withErrors([
            'error'=>'Error al actualizar el vehículo'
        ]);
    }

    public function delete(Vehicle $vehicle) {
        $vehicle->delete();

        return redirect('/')->with('Success, Se ha eliminado el vehículo');
    }
}





