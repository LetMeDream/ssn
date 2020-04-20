<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServicioTecnico;

use App\Mail\SoporteTecnicoMail;
use Illuminate\Support\Facades\Mail;

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

        /** Sending an email */
        Mail::to('sistemasyserviciosnunez@gmail.com')->send(new SoporteTecnicoMail($data) );
        Mail::to('raulalfonzo66@gmail.com')->send(new SoporteTecnicoMail($data) );



        return back()->with('mensaje', 'Solicitud enviada. En breve nos contactaremos con usted.');

    }

}
