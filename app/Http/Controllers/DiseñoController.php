<?php

namespace App\Http\Controllers;

use App\Design;
use Illuminate\Http\Request;

use App\Mail\DesignMail;
use Illuminate\Support\Facades\Mail;

class DiseñoController extends Controller
{
    //
    public function design(){
        return view('servicios.diseño');
    }

    public function store(){

        /* dd(request()->all()); */

        $data = request()->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required|digits_between:11,15',
            'correo' => 'required',
            'whatsapp' => 'required'
        ]);

        $design = new Design;
        $design->create($data);

        /** Sending an email */
        Mail::to('sistemasyserviciosnunez@gmail.com')->send(new DesignMail($data) );
        Mail::to('raulalfonzo66@gmail.com')->send(new DesignMail($data) );

        return back()->with('mensaje', 'Solicitud enviada. En breve nos contactaremos con usted.');

    }
}
