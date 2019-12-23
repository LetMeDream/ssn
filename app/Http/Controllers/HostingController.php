<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostingController extends Controller
{
    //
    public function hosting(){
        return view('servicios.hosting');
    }
    public function hostingestudiante(){

        $plan = '1$/mensual';

        return view('servicios.hosting.estudiante', compact('plan'));
    }
    public function hostingbasico(){
        return view('servicios.hosting.basico');
    }
    public function hostingemprendedor(){
        return view('servicios.hosting.emprendedor');
    }
    public function base_de_datos(){
        return view('servicios.hosting.base_de_datos');
    }
    public function vpsbasico(){
        return view('servicios.vps.basico');
    }
    public function vpsavanzado(){
        return view('servicios.vps.avanzado');
    }
    public function dominioregional(){
        return view('servicios.dominios.regional');
    }
    public function dominioglobal(){
        return view('servicios.dominios.global');
    }

}
