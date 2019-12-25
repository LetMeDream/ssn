<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServicioTecnico;

class SoporteController extends Controller
{
    //
    public function soporte(){
        return view('servicios.soporte');
    }

    public function store(Request $request){

        $data=$request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'equipo' => 'required',
            'whatsapp' => 'required'
        ]);

        /* dd($request->all()); */

        $servicio = new ServicioTecnico;

        $servicio->create($data);

        return back()->with('mensaje', 'Solicitud enviada. En breve nos contactaremos con usted.');

    }

}
