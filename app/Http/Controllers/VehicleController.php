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

        if (Auth::check()) {
            $request->merge([
                'user_id' => Auth::user()->id
            ]);

        $validateddata = $request->validate([
            'car_type_id'  => 'required|exists:car_types,id',
            'brand_id' => 'required|exists:brands,id',
            'model' => 'required|string',
            'year'   => 'required|integer',
            'user_id'=> 'required|exists:users,id',
            'placa' => 'required',
            'color'=>'required|string',
            'motor' => 'required|string'

        ]);

        if(Vehicle::create($validateddata)){
            return redirect()->route('users.profile');
        }

        return back('')->withErrors([
            'error'=>'Error al registrar el vehículo',

        ]);
    }

    return redirect()->route('login')->withErrors([
        'error' => 'Debes iniciar sesión para añadir un vehículo'
    ]);
}
    public function update(Request $request, Vehicle $vehicle)

    {

            $vehicle->car_type_id = $request->input('car_type_id');
            $vehicle->brand_id = $request->input('brand_id');
            $vehicle->model = $request->input('model');
            $vehicle->year = $request->input('year');
            $vehicle->placa = $request->input('placa');
            $vehicle->color = $request->input('color');
            $vehicle->motor = $request->input('motor');


            if (Auth::check()) {
                $vehicle->user_id = Auth::user()->id;
            } else {
                return back()->withErrors([
                    'error' => 'Debe iniciar sesión para actualizar el vehículo'
                ]);
            }

        if($vehicle->save()){

        return redirect()->route('users.profile')->with('success', 'Los datos del vehículo se actualizaron correctamente');
        }

        return back()->withErrors([
           'error'=>'Error al actualizar el vehículo'
        ]);
    }

    public function delete(Vehicle $vehicle) {
        $vehicle->delete();

        return redirect()->route('users.profile')->with('Success, Se ha eliminado el vehículo');
    }


public function edit(Vehicle $vehicle)
{
    $vehicle->load(['brand', 'carType']);
    $brands = Brand::all();
    $car_types = CarType::all();



    return view('cars.caredit', compact('vehicle', 'brands', 'car_types'));
}


}

