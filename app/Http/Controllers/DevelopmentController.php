<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Development;

use App\Mail\DevelopmentMail;
use Illuminate\Support\Facades\Mail;

class DevelopmentController extends Controller
{
    //
    public function development(){
        return view('servicios.development');
    }

    public function wordpressregional(){
        $tipo = 'Desarrollo en Wordpress';
        $plan = 'Regional';

        return view ('servicios.development.wordpressregional', compact('tipo', 'plan'));
    }

    public function store(){

        /* dd(request()->all()); */

        $data = request()->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required|digits_between:11,15',
            'correo' => 'required',
            'whatsapp' => 'required',
            'tipo' => 'required',
            'plan' => 'required',
            'mensaje' => ''
        ]);

        $dev = new Development;
        $dev->create($data);

        /** Sending an email */
        Mail::to('sistemasyserviciosnunez@gmail.com')->send(new DevelopmentMail($data) );
        Mail::to('raulalfonzo66@gmail.com')->send(new DevelopmentMail($data) );

        return back()->with('mensaje', 'Solicitud enviada. En breve nos contactaremos con usted.');



    }

    public function wordpressglobal(){
        $tipo = 'Desarrollo en Wordpress';
        $plan = 'Global';

        return view ('servicios.development.wordpressglobal', compact('tipo', 'plan'));
    }

    public function remotoregional(){
        $tipo = 'Desarrollo Remoto';
        $plan = 'Regional';

        return view ('servicios.development.remotoregional', compact('tipo', 'plan'));
    }

    public function remotoglobal(){
        $tipo = 'Desarrollo Remoto';
        $plan = 'Global';

        return view ('servicios.development.remotoglobal', compact('tipo', 'plan'));
    }

}
