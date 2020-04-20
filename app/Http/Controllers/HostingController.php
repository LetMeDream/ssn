<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hostings;

use App\Mail\HostingsMail;
use Illuminate\Support\Facades\Mail;

class HostingController extends Controller
{
    //
    public function hosting(){
        return view('servicios.hosting');
    }

    public function store(Request $request){

        $data = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'whatsapp' => 'required',
            'tipo' => 'required',
            'plan' => 'required',
            'mensaje' => ''
        ]);

        /* dd($request->all()); */

        $hostings = New Hostings;
        $hostings->create($data);

        /** Sending an email */
        Mail::to('sistemasyserviciosnunez@gmail.com')->send(new HostingsMail($data) );
        Mail::to('raulalfonzo66@gmail.com')->send(new HostingsMail($data) );

        return back()->with('mensaje', 'Solicitud enviada. En breve nos contactaremos con usted.');

    }

    public function hostingestudiante(){

        $tipo = 'Hosting';
        $plan = 'Estudiante';

        return view('servicios.hosting.estudiante', compact('tipo','plan'));
    }

    public function hostingbasico(){

        $tipo = 'Hosting';
        $plan = 'Básico';

        return view('servicios.hosting.basico', compact('tipo', 'plan'));
    }

    public function hostingemprendedor(){

        $tipo = 'Hosting';
        $plan = 'Emprendedor';

        return view('servicios.hosting.emprendedor', compact('tipo', 'plan' ));
    }

    public function base_de_datos(){
        $tipo = 'Bdd';
        $plan = 'Mysql_profesional';

        return view('servicios.hosting.base_de_datos', compact('tipo', 'plan'));
    }

    public function vpsbasico(){
        $tipo = 'Vps';
        $plan = 'Básico';

        return view('servicios.vps.basico', compact('tipo', 'plan'));
    }
    public function vpsavanzado(){
        $tipo = 'Vps';
        $plan = 'Avanzado';

        return view('servicios.vps.avanzado', compact('tipo', 'plan'));
    }
    public function dominioregional(){
        $tipo = 'Dominio';
        $plan = 'Regional';

        return view('servicios.dominios.regional', compact('tipo', 'plan'));
    }
    public function dominioglobal(){
        $tipo = 'Dominio';
        $plan = 'Global';

        return view('servicios.dominios.global', compact('tipo', 'plan'));
    }

}
