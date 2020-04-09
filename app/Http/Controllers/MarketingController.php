<?php

namespace App\Http\Controllers;

use App\Marketing;

use App\Mail\MarketingMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class MarketingController extends Controller
{
    //
    public function marketing(){

        return view('servicios.marketing');

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

        $marketing = new Marketing;
        $marketing->create($data);

        /** Sending an email */
        Mail::to('sistemasyserviciosnunez@gmail.com')->send(new MArketingMail($data) );
        Mail::to('raulalfonzo66@gmail.com')->send(new MArketingMail($data) );

        return back()->with('mensaje', 'Solicitud enviada. En breve nos contactaremos con usted.');

    }

}
