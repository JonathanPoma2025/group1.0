<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class VehicleCotroller extends Controller
{

    public function store(Request $request)
    {

        $validateddata = $request -> validate ([
            'marca' => 'required',
            'modelo' => 'required',
            'año'   => 'required',
            'tipo'  => 'required',
            'placa' => 'required',
            'color' => 'required',

        ]);

       # if (Vehicle::create($validatedData = '')){
           # return redirect('');
        #}

        return redirect()->route('');

        return back()->withErrors([]);

    }
    


}
