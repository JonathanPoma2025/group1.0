<?php

namespace App\Http\Controllers;

use App\Models\CarType;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;
use App\Models\Brand;


class VehicleController extends Controller
{
    #public function __construct()
    #{
       # $this->middleware('auth');
    #}


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
            'color'=>'required|string'

        ]);

        if(Vehicle::create($validateddata)){
            return redirect()->route('user.profile');
        }

        return back('')->withErrors([
            'error'=>'Error al registrar el vehículo'
        ]);
    }

    return redirect()->route('login')->withErrors([
        'error' => 'Debes iniciar sesión para añadir un vehículo'
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
            'placa' => 'required|string',
            'color' => 'required|string',
        ]);

        if ($vehicle->update($validateddata)){
            return redirect()->route('user.profile')->with([
                'Los datos del vehículo se actualizaron correctamente'
            ]);
        }



        return back()->withErrors([
            'error'=>'Error al actualizar el vehículo'
        ]);
    }

    public function delete(Vehicle $vehicle) {
        $vehicle->delete();

        return redirect()->route('user.profile')->with('Success, Se ha eliminado el vehículo');
    }
}





